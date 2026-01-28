# Laravel CamDigiKey Package Tests

Comprehensive Pest test suite for the Laravel CamDigiKey package.

## Test Structure

```
tests/
├── Pest.php                              # Pest configuration
├── TestCase.php                          # Base test case
├── Unit/
│   └── CamDigiKeyTest.php               # Unit tests for CamDigiKey class (11 tests)
└── Feature/
    ├── ServiceProviderTest.php          # Service provider tests (7 tests)
    └── SetupCommandTest.php             # Artisan command tests (4 tests)
```

## Running Tests

### Run all tests
```bash
cd packages/PutheaKhem/LaravelCamdigiKey
composer test
```

### Run specific test file
```bash
vendor/bin/pest tests/Unit/CamDigiKeyTest.php
```

### Run with coverage
```bash
composer test-coverage
```

### Run from project root using Sail
```bash
vendor/bin/sail composer test --working-dir=packages/PutheaKhem/LaravelCamdigiKey
```

## Test Coverage

### Unit Tests (CamDigiKeyTest.php)
- ✅ `getLoginToken()` - Tests login token retrieval
- ✅ `getUserAccessToken()` - Tests user access token exchange
- ✅ `validateJwt()` - Tests JWT validation
- ✅ `refreshAccessToken()` - Tests token refresh
- ✅ `logoutAccessToken()` - Tests token invalidation
- ✅ `getOrganizationAccessToken()` - Tests org token retrieval
- ✅ `lookupUserProfile()` - Tests user profile lookup
- ✅ `getUserFace()` - Tests facial biometric retrieval
- ✅ `verifyAccountToken()` - Tests account token verification
- ✅ Error handling - Tests RuntimeException on process failure
- ✅ JSON decode errors - Tests handling of invalid JSON responses

### Feature Tests (ServiceProviderTest.php)
- ✅ Service provider registration
- ✅ Container binding resolution
- ✅ Singleton instance verification
- ✅ Facade resolution
- ✅ Configuration merging
- ✅ Console command registration
- ✅ Config file publishing

### Feature Tests (SetupCommandTest.php)
- ✅ Success message when node-lib exists
- ✅ Repository cloning when node-lib missing
- ✅ Error handling for failed clones
- ✅ Command signature verification

## Dependencies

- **orchestra/testbench**: Laravel package testing framework
- **pestphp/pest**: Testing framework
- **pestphp/pest-plugin-laravel**: Laravel-specific Pest plugin
- **mockery/mockery**: Mocking framework

## Writing New Tests

### Example Unit Test
```php
it('can perform some action', function () {
    // Mock Process
    Process::shouldReceive('__construct')
        ->once()
        ->andReturnSelf();
    
    Process::shouldReceive('run')->once()->andReturnSelf();
    Process::shouldReceive('isSuccessful')->once()->andReturn(true);
    Process::shouldReceive('getOutput')->once()->andReturn('{"success": true}');
    
    $result = $this->camDigiKey->someMethod();
    
    expect($result)->toBeArray()->toHaveKey('success');
});
```

### Example Feature Test
```php
it('does something in Laravel context', function () {
    $this->artisan('some:command')
        ->expectsOutput('Success!')
        ->assertExitCode(0);
});
```

## Continuous Integration

Tests should be run automatically in CI/CD pipelines:

```yaml
# GitHub Actions example
- name: Run Package Tests
  run: |
    cd packages/PutheaKhem/LaravelCamdigiKey
    composer install
    composer test
```

## Notes

- All tests use mocking to avoid actual API calls
- Process execution is mocked using Mockery
- Tests follow Laravel and Pest best practices
- Coverage includes happy paths and error scenarios
