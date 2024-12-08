<?php

namespace Hapasoft\ExtendSocialite\Traits;

trait SocialProviderTrait
{
    public function getUserFromToken($token)
    {
        $user = $this->getUserByToken($token);
        $user = $this->mapUserToObject($user)->setToken($token);
        $user->attributes['token'] = $token;
        $user->attributes['provider'] = $this->provider ?? '';
        return $user;
    }
}
