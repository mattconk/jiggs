<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Jiggs <?php echo isset($title) ? '| '.$title : ''  ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps|Seaweed+Script' rel='stylesheet' type='text/css'>
    <?php
        echo link_tag('css/bootstrap.css');
        echo link_tag('css/styles.css');
        echo link_tag('css/bootstrap-responsive.css');
        echo link_tag('css/tablet.css');
        echo link_tag('css/phone_large.css');
        echo link_tag('css/phone_small.css');
    ?>

    <!-- Fav and touch icons -->
    <?php
        echo link_tag('img/glyphicons_071_book.png', 'shortcut icon', 'image/ico');        
    ?>

</head>
<body>
