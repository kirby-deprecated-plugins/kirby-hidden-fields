<?php
field::$methods['quote'] = function($field) {
	return '“' . $field->value . '”';
};