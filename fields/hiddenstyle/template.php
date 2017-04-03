<?php
$selector = '';

$structure = $page->hiddenfields()->toStructure();
$data = $structure->{0}->street->split(',');

if($data) :
	foreach($data as $index => $key) {
		$selector .= '.field-name-' . $key . ', ';
	}
	$selector = substr($selector, 0, -2);
	?>

	<style>
	<?php echo $selector; ?> {
		opacity: .5;
	}
	.field-name-hiddenstyle {
		display: none;
	}
	</style>
<?php endif;