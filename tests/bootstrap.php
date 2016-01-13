<?php

$_tests_dir = getenv( 'WP_TESTS_DIR' );
if ( ! $_tests_dir ) {
	$_tests_dir = '/tmp/wordpress-tests-lib';
}

require_once $_tests_dir . '/includes/functions.php';

function _manually_load_plugin() {
	require dirname( dirname( __FILE__ ) ) . '/rebuild-pages-from-majestic.php';
	$custom_permalinks_dir = dirname(dirname(dirname(__FILE__))) . '/custom-permalinks/custom-permalinks.php';
	require $custom_permalinks_dir;
}
tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );

require $_tests_dir . '/includes/bootstrap.php';
