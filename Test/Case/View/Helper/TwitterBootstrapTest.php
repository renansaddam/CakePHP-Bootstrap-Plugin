<?php

App::uses('View', 'View');
App::uses('TwitterBootstrapHelper', 'TwitterBootstrap.View/Helper');

/**
 * TwitterBootstrap Test Case
 *
 */
class TwitterBootstrapHelperTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$View = new View();
		$this->TwitterBootstrap = new TwitterBootstrapHelper($View);
	}

/**
 * Test label
 * 
 * @return string
 */
	public function testLabel() {
		$expected = array('tag' => 'span', 'class' => 'label', 'content' => 'Hello World');
		$this->assertTag($expected, $this->TwitterBootstrap->label('Hello World'));

		$expected = array('tag' => 'span', 'class' => 'label label-important', 'content' => 'Error! :(');
		$this->assertTag($expected, $this->TwitterBootstrap->label('Error! :(', 'important'));

		$expected = array('tag' => 'span', 'class' => 'label label-success', 'content' => 'Confirmed');
		$this->assertTag($expected, $this->TwitterBootstrap->label('Confirmed', 'success'));
	}

/**
 * Test label
 * 
 * @return string
 */
	public function testBadge() {
		$expected = array('tag' => 'span', 'class' => 'badge', 'content' => '1');
		$this->assertTag($expected, $this->TwitterBootstrap->badge(1));

		$expected = array('tag' => 'span', 'class' => 'badge badge-important', 'content' => '2');
		$this->assertTag($expected, $this->TwitterBootstrap->badge(2, 'important'));
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TwitterBootstrap);

		parent::tearDown();
	}

}
