# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.5.1] - 2026-04-18

### Fixed

- DDEV: move docroot to `.ddev/wordpress/` so WordPress core files no longer pollute the project root
- DDEV: install `apermo/ddev-orchestrate` addon via pre-start hook so `ddev orchestrate` works on fresh clones and in CI
- PHPCS: exclude `.ddev/` directory from coding-standards scan
- Integration tests: skip gracefully when WP test environment is unavailable
- Track `composer.lock` in repository for reproducible builds

### Changed

- CI: ignore PHPUnit advisories that block integration install
- CI: track `package-lock.json` for npm cache in E2E workflow
- CI: add `.wp-env.json` for E2E WordPress environment

## [0.4.0] - 2026-03-15

### Added

- `Requires at least` header in `plugin.php` and `style.css`
- Integration test matrix auto-detects minimum WP version from plugin/theme header

### Changed

- Upgrade `apermo/apermo-coding-standards` to 2.6.1
- Configure `text_domain`, `prefixes`, and `minimum_wp_version` in `phpcs.xml.dist`

## [0.3.0] - 2026-03-15

### Changed

- Upgrade `apermo/apermo-coding-standards` to 2.6.0
- Fully qualify global functions and constants in namespaced code

## [0.2.0] - 2026-03-15

### Added

- Plugin lifecycle methods: `activate()`, `deactivate()`, `boot()`
- GitHub issue templates (bug report, feature request)
- GitHub pull request template
- Repository marked as GitHub template

### Changed

- Standardize plugin entry file to `plugin.php`
- Replace global constants with class members in Plugin class

## [0.1.0] - 2026-03-15

### Added

- Initial project setup
- Optional WordPress.org SVN deploy workflow
- WordPress integration test infrastructure with multisite matrix
- `wp-tests-config.php.dist` for CI test suite configuration
- WP beta/RC nightly compatibility workflow
- Playwright E2E test infrastructure with auth setup and example spec
- E2E caller workflow (`e2e.yml`)
- `WP_DB_IMPORT` support in `.ddev/.env` for database dump import

### Changed

- Integration test bootstrap auto-detects `vendor/wp-phpunit/wp-phpunit`

### Fixed

- Workflow callers missing permissions (caused startup_failure)

[0.5.1]: https://github.com/apermo/bingo-helper/compare/v0.5.0...v0.5.1
[0.4.0]: https://github.com/apermo/template-wordpress/compare/v0.3.0...v0.4.0
[0.3.0]: https://github.com/apermo/template-wordpress/compare/v0.2.0...v0.3.0
[0.2.0]: https://github.com/apermo/template-wordpress/compare/v0.1.0...v0.2.0
[0.1.0]: https://github.com/apermo/template-wordpress/releases/tag/v0.1.0
