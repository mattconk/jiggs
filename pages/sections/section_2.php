<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="section_2">

<section class="section_content">
    <div class="row-fluid">

<ul class="section_2_boxes">
    <li class="span4 boxes" style="margin:0px;padding: 5px;">
        <a  href="book_pages#5">
            <div class="thumbnail">
                <div class="box_link">
                    <img src="./img/thumbs/birth.png" alt="ALT NAME" class="thumb_images">
                    <div class="caption">
                        <h3>Birth</h3>
                        <section>
                            <p>January 22, 1926</p>
                            <p>Pulltight, TX</p>
                        </section>
                    </div>
                </div>
            </div>
        </a>
    </li>

    <li class="span4 boxes" style="margin:0px;padding: 5px;">
        <a  href="book_pages#16">
            <div class="thumbnail">
                <div class="box_link">
                    <img src="./img/thumbs/child.png" alt="ALT NAME" class="thumb_images">
                    <div class="caption">
                        <h3>Growing Up In Mound</h3>
                        <section>
                            <p>Moved to Mound, TX as a small child</p>
                        </section>
                    </div>
                </div>
            </div>
        </a>
    </li>

    <li class="span4 boxes" style="margin:0px;padding: 5px;">
        <a  href="book_pages#32">
            <div class="thumbnail">
                <div class="box_link">
                    <img src="./img/thumbs/drafted.png" alt="ALT NAME" class="thumb_images">
                    <div class="caption">
                        <h3>Drafted in 1944</h3>
                        <section>
                            <p>Served with the 404th Bn 86th Div Field Artillery</p>
                            <p>In both the European & Asian Theater</p>
                        </section>
                    </div>
                </div>
            </div>
        </a>
    </li> 
    <?php
        for ($i=0; $i<3; $i++)
        {
    ?>
            <li class="span4 boxes" style="margin:0px;padding: 5px;">
                <a  href="#">
                    <div class="thumbnail">
                        <div class="box_link">
                    <img src="http://placehold.it/320x200" alt="ALT NAME" class="thumb_images">
                    <div class="caption">
                        <h3>Header Name</h3>
                        <p>Description</p>
                    </div>
                        </div>
                </div></a>
            </li>
    <?php
        }
    ?>

</ul>
</div>
</section> <!-- Closes .section_2 -->
</div>