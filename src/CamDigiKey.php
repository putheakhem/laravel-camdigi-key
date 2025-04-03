<?php

declare(strict_types=1);

namespace PutheaKhem\LaravelCamdigiKey;

use RuntimeException;
use Symfony\Component\Process\Process;

final class CamDigiKey
{
    public function getLoginToken(): array
    {
        return $this->runNode('get-login-token.js');
    }

    public function validateJwt(string $token): array
    {
        return $this->runNode('validate-jwt.js', [$token]);
    }

    public function getUserFace(string $token): array
    {
        return $this->runNode('get-user-face.js', [$token]);
    }

    public function getUserAccessToken(string $authToken): array
    {
        return $this->runNode('get-user-access-token.js', [$authToken]);
    }

    public function refreshAccessToken(string $accessToken): array
    {
        return $this->runNode('refresh-access-token.js', [$accessToken]);
    }

    public function logoutAccessToken(string $accessToken): array
    {
        return $this->runNode('logout-access-token.js', [$accessToken]);
    }

    public function getOrganizationAccessToken(): array
    {
        return $this->runNode('get-organization-access-token.js');
    }

    public function lookupUserProfile(string $accessToken, string $personalCode): array
    {
        return $this->runNode('lookup-user-profile.js', [$accessToken, $personalCode]);
    }

    public function verifyAccountToken(string $accountToken): array
    {
        return $this->runNode('verify-account-token', [$accountToken]);
    }

    private function runNode(string $script, array $args = []): array
    {
        $cmd = array_merge(['node', base_path("vendor/putheakhem/laravel-camdigi-key/scripts/{$script}")], $args);
        $process = new Process($cmd);
        $process->run();

        if (! $process->isSuccessful()) {
            throw new RuntimeException($process->getErrorOutput());
        }

        return json_decode($process->getOutput(), true);
    }
}
