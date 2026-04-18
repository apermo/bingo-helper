# Bingo Helper

[![PHP CI](https://github.com/apermo/bingo-helper/actions/workflows/ci.yml/badge.svg)](https://github.com/apermo/bingo-helper/actions/workflows/ci.yml)
[![License: GPL v2+](https://img.shields.io/badge/License-GPLv2+-blue.svg)](LICENSE)

A WordPress plugin that helps organize and run bingo games.

## Requirements

- PHP 8.1+
- WordPress 6.2+
- Composer

## Installation

```bash
composer install
```

## Development

```bash
composer cs               # Run PHPCS
composer cs:fix           # Fix PHPCS violations
composer analyse          # Run PHPStan
composer test             # Run all tests
composer test:unit        # Run unit tests only
composer test:integration # Run integration tests only
npm run test:e2e          # Run Playwright E2E tests
npm run test:e2e:ui       # Run E2E tests with UI
```

### Local WordPress Environment

Requires [DDEV](https://ddev.readthedocs.io/):

```bash
ddev start && ddev orchestrate
```

### Git Hooks

Enable the pre-commit hook (PHPCS + PHPStan on staged files):

```bash
git config core.hooksPath .githooks
```

## License

[GPL-2.0-or-later](LICENSE)
