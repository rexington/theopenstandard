<?php
	$gallery = simple_fields_fieldgroup('gallery', $gallery_id);
?>

<?php
foreach ($gallery as $gallery_item) { ?>
	<img src="<?php echo $gallery_item['image']['url']; ?>" />
<?php
} ?>