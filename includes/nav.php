<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Nav View
 * 
 * @author Matt Conk <mattconk@gmail.com>
 * @version Sep 2, 2013
 * @package Jiggs App
 */
?>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <?php
            $data = array(
                'class' => 'brand',
                'title' => 'Home Page'
            );
            
            echo anchor('', '"Jiggs" Marshall', $data)
        ?>
        <div class="nav-collapse collapse">
            <ul class="nav">
                <li><?php echo anchor('book_pages', 'Pages') ; ?></li>
<!--                <li><?php echo anchor('#', 'About') ; ?></li>
                <li><?php echo anchor('contact', 'Contact') ; ?></li>-->
                <?php
                
                if (defined('ENVIRONMENT'))
                    {
                        switch (ENVIRONMENT)
                        {
                            case 'development':
                                echo '<li>'.anchor('updatedb', 'Update').'</li>';
                                break;
                        }
                    }
                ?>
            </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
