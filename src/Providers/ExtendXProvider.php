<?php

namespace Hapasoft\ExtendSocialite\Providers;

use Hapasoft\ExtendSocialite\Traits\SocialProviderTrait;
use Laravel\Socialite\Two\GoogleProvider;
use Laravel\Socialite\Two\XProvider;

class ExtendXProvider extends XProvider
{
    use SocialProviderTrait;

    protected $provider = 'x';
}
