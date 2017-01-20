<?php
/**
 * Class TestCpt
 *
 * @package Ojoura
 */

/**
 * Sample test case.
 */
class TestCpt extends WP_UnitTestCase 
{

	/**
	 * Test si le cpt exist.
	 */
	function test_cpt_exist() 
	{
		//
		$post_type = 'plante';
		$this->assertTrue( post_type_exists( $post_type ) );
	}
}
