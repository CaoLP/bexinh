<?php
App::uses('ProductPromote', 'Model');

/**
 * ProductPromote Test Case
 *
 */
class ProductPromoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product_promote',
		'app.product',
		'app.provider',
		'app.category',
		'app.user',
		'app.store',
		'app.customer_promote',
		'app.customer',
		'app.order',
		'app.promote',
		'app.order_detail',
		'app.inout_warehouse',
		'app.inout_warehouse_detail',
		'app.reex',
		'app.warehouse',
		'app.product_category',
		'app.product_option',
		'app.option',
		'app.option_group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductPromote = ClassRegistry::init('ProductPromote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductPromote);

		parent::tearDown();
	}

}
