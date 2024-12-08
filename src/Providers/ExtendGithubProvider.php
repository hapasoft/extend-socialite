<?php

namespace Hapasoft\ExtendSocialite\Providers;

use Hapasoft\ExtendSocialite\Traits\SocialProviderTrait;
use Laravel\Socialite\Two\GithubProvider;

class ExtendGithubProvider extends GithubProvider
{
    use SocialProviderTrait;

    protected $provider = 'github';
}
