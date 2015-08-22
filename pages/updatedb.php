<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * updatedb View
 * 
 * @author Matt Conk <mattconk@gmail.com>
 * @version Sep 2, 2013
 * @package 'Name of App'
 */
?>
<div class="container-fluid">

<?php
echo heading('Update Database', 2, 'class="text-center"');
?>
<table class="table table-hover">
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Chapter</th>
        <th>Image Name</th>
        <th>Thumbnail</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach ($photos as $photos):
        echo '<tr>';
        echo '<td>'.$photos['page'].'</td>';
        echo '<td>'.$photos['page_title'].'</td>';
        echo '<td>'.$photos['chapter'].'</td>';
        echo '<td>'.$photos['filename_adjusted'].'</td>';
        
        $images = array(
            'class'     => 'img-polaroid thumbnails span2',
            'src'       => 'img/book_pages/scan'.$photos['page'].'_thumb.jpg',
            'alt'       => 'Image '.$photos['page'].' Thumbnail',
            'target'    => '_blank',
        );
        $link = array(
            'target'    => '_blank',
            'title'     => 'Link to Large Image(Opens In New Window)',
        );
        echo '<td>'.anchor('book_pages/high_rez_view/'.$photos['page'], img($images), $link).'</td>';
        
        $edit_buttons = array(
            'class'     => 'btn btn-large',
            'title'     => 'Edit Page '.$photos['auto'],
        );
        echo '<td>'.anchor('updatedb/edit/'.$photos['auto'], 'Edit Page '.$photos['page'], $edit_buttons).'</td>';
        
        $delete_buttons = array(
            'class'     => 'btn btn-large',
            'title'     => 'Delete Page '.$photos['auto'],
        );        
        echo '<td>'.anchor('updatedb/delete/'.$photos['auto'], 'Delete Page '.$photos['page'], $delete_buttons).'</td>';
        echo '</tr>';
    endforeach;
    
    ?>







</table>
    
    
    
    
    
</div>  <!-- Close .container-fluid -->    


