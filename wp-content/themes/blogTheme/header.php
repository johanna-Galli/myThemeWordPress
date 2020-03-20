<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Theme</title>
    <?php wp_head() ?>
</head>
<body>

<?php
wp_nav_menu(array('theme_location' => 'main_menu'));
?>

<div class="container">