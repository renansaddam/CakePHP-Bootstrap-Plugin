<?php

App::uses('HtmlHelper', 'View/Helper');

class TwitterBootstrapHelper extends AppHelper {

/**
 * Helpers
 * 
 * @var array
 */
	public $helpers = array('Html');

/**
 * Twitter Bootstrap Label
 * 
 * @param  string $text   Text
 * @param  string $type   Type
 * @param  array  $params Extra params
 * 
 * @see    http://twitter.github.com/bootstrap/components.html#labels
 * 
 * @return string
 */
	public function label($text, $type = 'default', $params = array()) {
		$params = Hash::merge(array(
			'class' => 'label'
		), $params);

		if (!empty($type) && $type != 'default') {
			$params['class'] .= ' label-' . $type;
		}

		return $this->Html->tag('span', $text, $params);
	}


/**
 * Twitter Bootstrap badge
 * 
 * @param  string $text   Text
 * @param  string $type   Type
 * @param  array  $params Extra params
 * 
 * @see    http://twitter.github.com/bootstrap/components.html#badges
 * 
 * @return string
 */
	public function badge($text, $type = 'default', $params = array()) {
		$params = Hash::merge(array(
			'class' => 'badge'
		), $params);

		if (!empty($type) && $type != 'default') {
			$params['class'] .= ' badge-' . $type;
		}

		return $this->Html->tag('span', $text, $params);
	}
}
