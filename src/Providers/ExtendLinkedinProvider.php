<?php

namespace Hapasoft\ExtendSocialite\Providers;

use Hapasoft\ExtendSocialite\Traits\SocialProviderTrait;
use Laravel\Socialite\Two\LinkedInProvider;

class ExtendLinkedinProvider extends LinkedInProvider
{
    use SocialProviderTrait;

    protected $provider = 'linkedin';
}
