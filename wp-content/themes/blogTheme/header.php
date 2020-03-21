<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Theme</title>
    <link rel="stylesheet" href="style.css">
    <?php wp_head() ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>
<body>

<?php
wp_nav_menu(array('theme_location' => 'main_menu'));
?>

<div class="container mb-5 mt-5">