<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="container">
    
    
    <ul>
        <?php

        for ($i=0; $i < count($files); $i++)
        {
        ?>
        <li><?php echo $files[$i]; ?></li>
        <?php
        }

        ?>
    </ul>
    
</div> <!-- /container -->