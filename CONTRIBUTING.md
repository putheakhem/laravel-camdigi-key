# Contributing to Laravel CamDigiKey

First off, thank you for considering contributing to Laravel CamDigiKey! It's people like you that make Laravel CamDigiKey such a great tool.

## Code of Conduct

This project and everyone participating in it is governed by a Code of Conduct. By participating, you are expected to uphold this code.

## How Can I Contribute?

### Reporting Bugs

Before creating bug reports, please check the existing issues list as you might find out that you don't need to create one. When you are creating a bug report, please include as many details as possible:

* **Use a clear and descriptive title** for the issue to identify the problem.
* **Describe the exact steps which reproduce the problem** in as many details as possible.
* **Provide specific examples to demonstrate the steps**.
* **Describe the behavior you observed after following the steps** and point out what exactly is the problem with that behavior.
* **Explain which behavior you expected to see instead and why.**
* **Include screenshots and animated GIFs** if possible.
* **Include your Laravel version, PHP version, and package version.**

### Suggesting Enhancements

Enhancement suggestions are tracked as GitHub issues. When creating an enhancement suggestion, please include:

* **Use a clear and descriptive title** for the issue to identify the suggestion.
* **Provide a step-by-step description of the suggested enhancement** in as many details as possible.
* **Provide specific examples to demonstrate the steps**.
* **Describe the current behavior** and **explain which behavior you expected to see instead** and why.
* **Explain why this enhancement would be useful** to most Laravel CamDigiKey users.

### Pull Requests

* Fill in the required template
* Do not include issue numbers in the PR title
* Include screenshots and animated GIFs in your pull request whenever possible.
* Follow the PHP coding style (PSR-12).
* Include thoughtfully-worded, well-structured tests.
* Document new code based on the Documentation Styleguide
* End all files with a newline

## Development Process

1. Fork the repo and create your branch from `main`.
2. If you've added code that should be tested, add tests.
3. If you've changed APIs, update the documentation.
4. Ensure the test suite passes.
5. Make sure your code follows PSR-12 coding standards.
6. Issue that pull request!

## Setting Up Your Development Environment

```bash
# Clone your fork
git clone https://github.com/your-username/LaravelCamdigiKey.git

# Navigate to the package directory
cd LaravelCamdigiKey

# Install dependencies
composer install

# Run tests
composer test

# Check code style
composer check-style

# Fix code style
composer fix-style
```

## Coding Standards

This project follows PSR-12 coding standards. Before submitting your pull request:

```bash
# Check your code
composer check-style

# Automatically fix style issues
composer fix-style
```

## Testing

We use PHPUnit for testing. Please write tests for new features:

```bash
# Run all tests
composer test

# Run tests with coverage
composer test-coverage
```

## Documentation

* Use clear and concise language
* Provide code examples where appropriate
* Update the README.md if you change functionality
* Update the documentation website if you add new features

## Git Commit Messages

* Use the present tense ("Add feature" not "Added feature")
* Use the imperative mood ("Move cursor to..." not "Moves cursor to...")
* Limit the first line to 72 characters or less
* Reference issues and pull requests liberally after the first line

### Commit Message Format

```
<type>: <subject>

<body>

<footer>
```

**Types:**
* **feat**: A new feature
* **fix**: A bug fix
* **docs**: Documentation only changes
* **style**: Changes that do not affect the meaning of the code
* **refactor**: A code change that neither fixes a bug nor adds a feature
* **perf**: A code change that improves performance
* **test**: Adding missing tests or correcting existing tests
* **chore**: Changes to the build process or auxiliary tools

**Example:**
```
feat: add organization access token support

Added getOrganizationAccessToken() method to support
organizational authentication flows.

Closes #123
```

## Security Vulnerabilities

If you discover a security vulnerability within Laravel CamDigiKey, please send an email to Puthea Khem at puthea.khem@gmail.com. All security vulnerabilities will be promptly addressed.

## License

By contributing to Laravel CamDigiKey, you agree that your contributions will be licensed under its MIT License.

## Questions?

Don't hesitate to ask questions by creating an issue with the "question" label.

## Recognition

Contributors will be recognized in our README.md file and in release notes.

---

Thank you for contributing to Laravel CamDigiKey! 🎉
