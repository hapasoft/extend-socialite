<?php

namespace Hapasoft\ExtendSocialite\Providers;

use Hapasoft\ExtendSocialite\Traits\SocialProviderTrait;
use Laravel\Socialite\Two\TwitterProvider;

class ExtendTwitterProvider extends TwitterProvider
{
    use SocialProviderTrait;

    protected $provider = 'twitter';
}
