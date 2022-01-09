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

        'logout' => \Lemaur\Ui\Components\Logout::class,
        'dropdown' => \Lemaur\Ui\Components\Dropdown::class,

        'form' => \Lemaur\Ui\Components\Forms\Form::class,
        'error' => \Lemaur\Ui\Components\Forms\Error::class,
        'label' => \Lemaur\Ui\Components\Forms\Label::class,
        'input' => \Lemaur\Ui\Components\Forms\Inputs\Input::class,
        'checkbox' => \Lemaur\Ui\Components\Forms\Inputs\Checkbox::class,
        'radio' => \Lemaur\Ui\Components\Forms\Inputs\Radio::class,
        'email' => \Lemaur\Ui\Components\Forms\Inputs\Email::class,
        'password' => \Lemaur\Ui\Components\Forms\Inputs\Password::class,
        'textarea' => \Lemaur\Ui\Components\Forms\Inputs\Textarea::class,

        'navigation' => \Lemaur\Ui\Components\Navigation\Nav::class,
        'navigation-trigger' => \Lemaur\Ui\Components\Navigation\NavTrigger::class,
        'navigation-list' => \Lemaur\Ui\Components\Navigation\NavList::class,
        'navigation-list-item' => \Lemaur\Ui\Components\Navigation\NavItem::class,

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
