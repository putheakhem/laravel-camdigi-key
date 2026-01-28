# Changelog

All notable changes to `laravel-camdigi-key` will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.0] - 2024-01-28

### Added
- Initial release
- OAuth2 authentication flow integration
- User authentication methods (`getLoginToken`, `getUserAccessToken`)
- Token management (`refreshAccessToken`, `logoutAccessToken`, `validateJwt`)
- User profile lookup functionality
- Biometric data access (`getUserFace`)
- Organization account support (`getOrganizationAccessToken`)
- Account verification (`verifyAccountToken`)
- Artisan setup command (`camdigikey:setup`)
- Configuration file publishing
- Comprehensive documentation website
- HMAC and AES encryption support
- Digital certificate integration

### Security
- Secure keystore file handling
- Environment-based credential management
- JWT token validation
- HTTPS requirement for production

## [0.1.0] - 2024-01-15

### Added
- Initial development version
- Basic authentication flow
- Facade implementation
- Service provider setup

[Unreleased]: https://github.com/PutheaKhem/LaravelCamdigiKey/compare/v1.0.0...HEAD
[1.0.0]: https://github.com/PutheaKhem/LaravelCamdigiKey/releases/tag/v1.0.0
[0.1.0]: https://github.com/PutheaKhem/LaravelCamdigiKey/releases/tag/v0.1.0
