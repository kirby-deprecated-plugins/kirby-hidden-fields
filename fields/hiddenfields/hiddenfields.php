<?php
class HiddenfieldsField extends CheckboxesField {
	public function options() {
		$fields = $this->page()->blueprint()->fields($this)->toArray();
		foreach($fields as $key => $field) {
			if(!empty($field['label'])) {
				$categories[$key] = $field['label'];
			} else {
				$categories[$key] = $key;
			}
		}
		unset($categories['hiddenstyle'], $categories['hiddenfields']);
		return $categories;
	}
}