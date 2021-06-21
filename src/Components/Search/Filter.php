<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Search;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\View;

class Filter extends Component
{
    public function __construct(
        public array $filters,
        public string $id,
        public string $action,
//        public string $title,
//        public string $button,
        public ?string $mainTriggerId = null,
        public ?string $filterTriggerId = null,
        public string $method = 'POST',
        public ?string $titleClass = null,
        public ?string $triggerClass = null,
        public ?string $submitClass = null,
        public ?string $filterWrapperClass = null,
        public ?string $filterClass = null,
        public ?string $itemWrapperClass = null,
        public ?string $itemClass = null,
        public ?string $labelClass = null,
        public ?string $triggerDusk = null,
        public ?string $submitDusk = null,
        public ?string $filterDusk = null,
        public ?string $itemDusk = null,
        public ?string $labelDusk = null,
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.search.filter');
    }

    public function triggerDusk($value = null): string
    {
        return $this->join(collect([
            $this->triggerDusk ?? 'search-filter-trigger',
        ])->merge(Arr::wrap($value))->toArray());
    }

    public function submitDusk($value = null): string
    {
        return $this->join(collect([
            $this->submitDusk ?? 'search-filter-submit-button',
        ])->merge(Arr::wrap($value))->toArray());
    }

    public function filterDusk($value = null): string
    {
        return $this->join(collect([
            $this->filterDusk ?? 'search-filter-button',
        ])->merge(Arr::wrap($value))->toArray());
    }

    public function itemDusk($value = null): string
    {
        return $this->join(collect([
            $this->itemDusk ?? 'search-filter-input',
        ])->merge(Arr::wrap($value))->toArray());
    }

    public function labelDusk($value): string
    {
        return $this->join(collect([
            $this->labelDusk ?? 'search-filter-label',
        ])->merge(Arr::wrap($value))->toArray());
    }

    public function mainTriggerId($value = null): string
    {
        return $this->join(collect([
            $this->id,
            $this->mainTriggerId ?? 'trigger-main',
        ])->merge(Arr::wrap($value))->toArray());
    }

    public function filterTriggerId($value = null): string
    {
        return $this->join(collect([
            $this->id,
            $this->filterTriggerId ?? 'trigger-filter',
        ])->merge(Arr::wrap($value))->toArray());
    }

    protected function join(array $values): string
    {
        return collect($values)
            ->filter()
            ->map(fn ($item) => Str::slug($item))
            ->join('-');
    }
}
