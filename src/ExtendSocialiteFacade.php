<?php

namespace Hapasoft\ExtendSocialite;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hapasoft\ExtendSocialite\Skeleton\SkeletonClass
 */
class ExtendSocialiteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'extend-socialite';
    }
}
