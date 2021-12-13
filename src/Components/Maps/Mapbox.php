<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Maps;

use Illuminate\View\Component;
use Illuminate\View\View;

class Mapbox extends Component
{
    public function __construct(
        public string $id = 'map',
        public string $theme = 'streets-v11',
        public array $options = [],
        public array $markers = []
    ) {}

    public function render(): View
    {
        return view('ui::components.maps.mapbox');
    }

    public function options(): array
    {
        return array_merge([
            'container' => $this->id,
            'style' => "mapbox://styles/mapbox/{$this->theme}",
        ], $this->options);
    }
}
