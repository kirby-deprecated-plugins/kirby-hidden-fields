<?php
// Include extensions
#include __DIR__ . DS . 'extensions' . DS . 'field-methods.php';

// Register fields
$kirby->set('field', 'hiddenfields', __DIR__ . DS . 'fields' . DS . 'hiddenfields');
$kirby->set('field', 'hiddenstyle', __DIR__ . DS . 'fields' . DS . 'hiddenstyle');

$kirby->set('blueprint', 'fields/hiddenfields', __DIR__ . DS . 'definitions' . DS . 'hiddenfields.yml');
$kirby->set('blueprint', 'fields/hiddenstyle', __DIR__ . DS . 'definitions' . DS . 'hiddenstyle.yml');