<?php if (!isset($title)) $title = "Sample System"; ?>
<h1><?php echo $title; ?></h1>
<p>
    <a href="<?php echo site_url('sample'); ?>">List</a> | <a href="<?php echo site_url('sample/add'); ?>">Add</a>
</p>
<?php echo $contents; ?>
