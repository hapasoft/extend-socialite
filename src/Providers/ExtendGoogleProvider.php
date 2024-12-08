<?php

namespace Hapasoft\ExtendSocialite\Providers;

use Hapasoft\ExtendSocialite\Traits\SocialProviderTrait;
use Laravel\Socialite\Two\GoogleProvider;

class ExtendGoogleProvider extends GoogleProvider
{
    use SocialProviderTrait;

    protected $provider = 'google';
}
