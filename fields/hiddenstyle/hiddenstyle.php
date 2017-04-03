<?php
class HiddenstyleField extends BaseField {
	static public $assets = array(
		'css' => array(
			'style.css',
		)
	);

	public function input() {
		$html = tpl::load( __DIR__ . DS . 'template.php', $data = array(
			'page' => $this->page()
		));
		return $html;
	}
}