<?php

namespace Hapasoft\ExtendSocialite\Providers;

use Hapasoft\ExtendSocialite\Traits\SocialProviderTrait;
use Laravel\Socialite\Two\FacebookProvider;

class ExtendFacebookProvider extends FacebookProvider
{
    use SocialProviderTrait;

    protected $provider = 'facebook';
}
