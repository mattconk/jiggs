<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * high_rez_view
 * 
 * @author Matt Conk <mattconk@gmail.com>
 * @version Sep 2, 2013
 * @package 'Name of App'
 */
?>

    <div class="container-fluid">

<?php

echo heading($photos[0]['page_title'], 2, 'class="text-center"');

if (($id - 1) < 1)
{
    $previous = '<li class="previous">'.anchor('book_pages', '&larr; Pages Index').'</li>';
}
else
{
    $previous = '<li class="previous"><a href="'.($id-1).'">&larr; Previous</a></li>';
}

$current_page = '<li class="current_page">'.$title.'</li>';

if (($id + 1) > 88)
{
    $next = '<li class="next">'.anchor('book_pages', 'Pages Index &rarr;').'</li>';
}
else
{
    $next = '<li class="next"><a href="'.($id+1).'">Next &rarr;</a></li>';
}

$list = array(
    $previous,
    $current_page,
    $next,
);
        
$attributes = array(
    'class'     => 'pager',    
);

echo ul($list, $attributes);

if (defined('ENVIRONMENT'))
{
    switch (ENVIRONMENT)
    {
        case 'development':            
            echo anchor('updatedb/edit/'.$id, 'Edit', 'class="btn offset1"');
            break;
    }
}

echo br(2);

$images = array(
    'class'     => 'img-polaroid high_rez',
    'src'       => $image,
    'alt'       => 'High Resolution Image '.$id,
);

echo img($images);

?>
    </div>