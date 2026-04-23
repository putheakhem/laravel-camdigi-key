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
        return $this->runNode('verify-account-token.js', [$accountToken]);
    }

    private function runNode(string $script, array $args = []): array
    {
        $cmd = array_merge(['node', $this->scriptPath($script)], $args);
        $process = new Process($cmd, base_path(), $this->nodeEnvironment());
        $process->run();

        if (! $process->isSuccessful()) {
            throw new RuntimeException($process->getErrorOutput());
        }

        return json_decode($process->getOutput(), true);
    }

    private function scriptPath(string $script): string
    {
        return $this->packagePath("scripts/{$script}");
    }

    private function packagePath(string $path = ''): string
    {
        $packageRootPath = dirname(__DIR__);

        if ($path === '') {
            return $packageRootPath;
        }

        return $packageRootPath.DIRECTORY_SEPARATOR.$path;
    }

    private function nodeEnvironment(): array
    {
        return [
            'CAMDIGIKEY_CLIENT_KEYSTORE_FILE' => $this->resolvePathFromBasePath(env('CAMDIGIKEY_CLIENT_KEYSTORE_FILE')),
            'CAMDIGIKEY_CLIENT_TRUST_STORE_FILE' => $this->resolvePathFromBasePath(env('CAMDIGIKEY_CLIENT_TRUST_STORE_FILE')),
        ];
    }

    private function resolvePathFromBasePath(?string $path): ?string
    {
        if ($path === null || $path === '') {
            return $path;
        }

        if ($this->isAbsolutePath($path)) {
            return $path;
        }

        return base_path($path);
    }

    private function isAbsolutePath(string $path): bool
    {
        if (str_starts_with($path, DIRECTORY_SEPARATOR)) {
            return true;
        }

        return (bool) preg_match('/^[A-Za-z]:[\\\\\\/]/', $path);
    }
}
