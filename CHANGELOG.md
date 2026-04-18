# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.1.1] - 2026-04-18

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

## [0.1.0] - 2026-03-15

### Added

- Initial project setup

[0.1.1]: https://github.com/apermo/bingo-helper/compare/v0.1.0...v0.1.1
[0.1.0]: https://github.com/apermo/bingo-helper/releases/tag/v0.1.0
