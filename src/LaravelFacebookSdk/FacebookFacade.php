<?php namespace Etahamer\LaravelFacebookSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Etahamer\LaravelFacebookSdk\LaravelFacebookSdk
 */
class FacebookFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * Don't use this. Just... don't.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return LaravelFacebookSdk::class;
    }
}
