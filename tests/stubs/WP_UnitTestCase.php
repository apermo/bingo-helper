<?php
/**
 * Stub for WP_UnitTestCase used when the WordPress integration test
 * environment is unavailable. Tests extending it are skipped so the
 * unit suite can run without wp-phpunit installed.
 *
 * @package Plugin_Name
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

abstract class WP_UnitTestCase extends TestCase {

	public static function setUpBeforeClass(): void {
		self::markTestSkipped( 'WordPress integration test environment not available.' );
	}
}
