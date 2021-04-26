<?php

namespace Lemaur\CmsUi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lemaur\CmsUi\CmsUi
 */
class CmsUiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cms-ui';
    }
}
