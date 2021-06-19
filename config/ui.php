<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Components
    |--------------------------------------------------------------------------
    |
    | Below you reference all components that should be loaded for your app.
    | By default all components from UI are loaded in. You can
    | disable or overwrite any component class or alias that you want.
    |
    */

    'components' => [
        'html' => \Lemaur\Ui\Components\Layout\Html::class,
        'body' => \Lemaur\Ui\Components\Layout\Body::class,

        'search-input' => \Lemaur\Ui\Components\Search\Input::class,
        'search-filter' => \Lemaur\Ui\Components\Search\Filter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Components Prefix
    |--------------------------------------------------------------------------
    |
    | This value will set a prefix for all UI components.
    | By default it's empty. This is useful if you want to avoid
    | collision with components from other libraries.
    |
    | If set with "ui", for example, you can reference components like:
    |
    | <x-ui-html />
    |
    */

    'prefix' => 'ui',

];
