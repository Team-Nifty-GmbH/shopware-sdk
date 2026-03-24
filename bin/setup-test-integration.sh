#!/usr/bin/env bash
set -e

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_DIR="$(dirname "$SCRIPT_DIR")"

echo "Waiting for Shopware to be ready..."

# Wait for the health check to pass
timeout=300
elapsed=0
while ! curl -sf http://localhost:8080/api/_info/config > /dev/null 2>&1; do
    if [ $elapsed -ge $timeout ]; then
        echo "ERROR: Shopware did not become ready within ${timeout}s"
        exit 1
    fi
    echo "  Waiting... (${elapsed}s)"
    sleep 5
    elapsed=$((elapsed + 5))
done

echo "Shopware is ready!"

# Create integration via admin API
# First, get an auth token using admin credentials
echo "Authenticating with admin API..."
TOKEN_RESPONSE=$(curl -sf http://localhost:8080/api/oauth/token \
    -H "Content-Type: application/json" \
    -d '{
        "grant_type": "password",
        "client_id": "administration",
        "username": "admin",
        "password": "shopware",
        "scopes": "write"
    }')

ACCESS_TOKEN=$(echo "$TOKEN_RESPONSE" | php -r "echo json_decode(file_get_contents('php://stdin'))->access_token;")

if [ -z "$ACCESS_TOKEN" ]; then
    echo "ERROR: Failed to get access token"
    echo "$TOKEN_RESPONSE"
    exit 1
fi

echo "Got access token"

# Create API integration
echo "Creating API integration..."
INTEGRATION_RESPONSE=$(curl -sf -w "\n%{http_code}" http://localhost:8080/api/integration \
    -H "Authorization: Bearer $ACCESS_TOKEN" \
    -H "Content-Type: application/json" \
    -d '{
        "label": "SDK Test Integration",
        "accessKey": "SWIATESTACCESSKEY000001",
        "secretAccessKey": "U0RLVEVTVFNFQ1JFVEtFWTAwMDAwMQ==dGVzdA==",
        "admin": true
    }')

HTTP_CODE=$(echo "$INTEGRATION_RESPONSE" | tail -n1)

if [ "$HTTP_CODE" -ge 200 ] && [ "$HTTP_CODE" -lt 300 ]; then
    echo "Integration created!"
elif [ "$HTTP_CODE" -eq 409 ]; then
    echo "Integration already exists, continuing..."
else
    echo "WARNING: Integration creation returned HTTP $HTTP_CODE"
    echo "$INTEGRATION_RESPONSE"
fi

# Write .env.testing
cat > "$PROJECT_DIR/.env.testing" <<EOF
SHOPWARE_BASE_URL=http://localhost:8080/api
SHOPWARE_CLIENT_ID=SWIATESTACCESSKEY000001
SHOPWARE_CLIENT_SECRET=U0RLVEVTVFNFQ1JFVEtFWTAwMDAwMQ==dGVzdA==
EOF

echo "Credentials written to .env.testing"
echo ""
echo "You can now run: vendor/bin/pest --group=integration"
