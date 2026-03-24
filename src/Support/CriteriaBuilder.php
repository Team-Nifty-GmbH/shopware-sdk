<?php

namespace TeamNiftyGmbH\Shopware\Support;

class CriteriaBuilder
{
    protected int $page = 1;

    protected int $limit = 25;

    protected array $filters = [];

    protected array $postFilters = [];

    protected array $sorting = [];

    protected array $associations = [];

    protected array $aggregations = [];

    protected array $grouping = [];

    protected array $fields = [];

    protected array $ids = [];

    protected ?string $totalCountMode = null;

    protected ?string $term = null;

    protected ?array $includes = null;

    public static function make(): static
    {
        return new static();
    }

    public function page(int $page): static
    {
        $this->page = $page;

        return $this;
    }

    public function limit(int $limit): static
    {
        $this->limit = $limit;

        return $this;
    }

    public function ids(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }

    public function term(string $term): static
    {
        $this->term = $term;

        return $this;
    }

    // Filter methods
    public function filter(string $type, string $field, mixed $value = null): static
    {
        $filter = ['type' => $type, 'field' => $field];
        if ($value !== null) {
            $filter['value'] = $value;
        }
        $this->filters[] = $filter;

        return $this;
    }

    public function equals(string $field, mixed $value): static
    {
        return $this->filter('equals', $field, $value);
    }

    public function equalsAny(string $field, array $values): static
    {
        return $this->filter('equalsAny', $field, $values);
    }

    public function contains(string $field, string $value): static
    {
        return $this->filter('contains', $field, $value);
    }

    public function prefix(string $field, string $value): static
    {
        return $this->filter('prefix', $field, $value);
    }

    public function suffix(string $field, string $value): static
    {
        return $this->filter('suffix', $field, $value);
    }

    public function range(string $field, array $parameters): static
    {
        $filter = ['type' => 'range', 'field' => $field, 'parameters' => $parameters];
        $this->filters[] = $filter;

        return $this;
    }

    public function not(string $operator, array $queries): static
    {
        $this->filters[] = ['type' => 'not', 'operator' => $operator, 'queries' => $queries];

        return $this;
    }

    public function multi(string $operator, array $queries): static
    {
        $this->filters[] = ['type' => 'multi', 'operator' => $operator, 'queries' => $queries];

        return $this;
    }

    // Post-filter (applied after aggregations)
    public function postFilter(string $type, string $field, mixed $value = null): static
    {
        $filter = ['type' => $type, 'field' => $field];
        if ($value !== null) {
            $filter['value'] = $value;
        }
        $this->postFilters[] = $filter;

        return $this;
    }

    // Sorting
    public function sort(string $field, string $order = 'ASC', bool $naturalSorting = false): static
    {
        $this->sorting[] = [
            'field' => $field,
            'order' => $order,
            'naturalSorting' => $naturalSorting,
        ];

        return $this;
    }

    public function sortDesc(string $field, bool $naturalSorting = false): static
    {
        return $this->sort($field, 'DESC', $naturalSorting);
    }

    // Associations (eager loading)
    public function association(string $name, ?CriteriaBuilder $criteria = null): static
    {
        $this->associations[$name] = $criteria?->toArray() ?? [];

        return $this;
    }

    // Aggregations
    public function aggregation(string $name, string $type, string $field, array $extra = []): static
    {
        $this->aggregations[] = array_merge([
            'name' => $name,
            'type' => $type,
            'field' => $field,
        ], $extra);

        return $this;
    }

    public function statsAggregation(string $name, string $field): static
    {
        return $this->aggregation($name, 'stats', $field);
    }

    public function termsAggregation(string $name, string $field, ?int $limit = null, ?string $sort = null): static
    {
        $extra = [];
        if ($limit !== null) {
            $extra['limit'] = $limit;
        }
        if ($sort !== null) {
            $extra['sort'] = $sort;
        }

        return $this->aggregation($name, 'terms', $field, $extra);
    }

    public function countAggregation(string $name, string $field): static
    {
        return $this->aggregation($name, 'count', $field);
    }

    public function sumAggregation(string $name, string $field): static
    {
        return $this->aggregation($name, 'sum', $field);
    }

    public function avgAggregation(string $name, string $field): static
    {
        return $this->aggregation($name, 'avg', $field);
    }

    public function maxAggregation(string $name, string $field): static
    {
        return $this->aggregation($name, 'max', $field);
    }

    public function minAggregation(string $name, string $field): static
    {
        return $this->aggregation($name, 'min', $field);
    }

    // Grouping
    public function groupBy(string $field): static
    {
        $this->grouping[] = $field;

        return $this;
    }

    // Field selection (partial responses)
    public function fields(array $fields): static
    {
        $this->fields = $fields;

        return $this;
    }

    // Includes (API response field filtering)
    public function includes(array $includes): static
    {
        $this->includes = $includes;

        return $this;
    }

    // Total count mode
    public function totalCountMode(string $mode): static
    {
        $this->totalCountMode = $mode;

        return $this;
    }

    // Build the criteria array
    public function toArray(): array
    {
        return array_filter([
            'page' => $this->page,
            'limit' => $this->limit,
            'filter' => $this->filters ?: null,
            'post-filter' => $this->postFilters ?: null,
            'sort' => $this->sorting ?: null,
            'associations' => $this->associations ?: null,
            'aggregations' => $this->aggregations ?: null,
            'grouping' => $this->grouping ?: null,
            'fields' => $this->fields ?: null,
            'ids' => $this->ids ?: null,
            'total-count-mode' => $this->totalCountMode,
            'term' => $this->term,
            'includes' => $this->includes,
        ], fn ($value) => $value !== null);
    }
}
