<?php

/**
 * Index View
 * 
 * @author Matt Conk <mattconk@gmail.com>
 * @version Sep 2, 2013
 * @package Jiggs App
 */

echo heading($title, 2, 'class="text-center"');

$form_array = array(
    'class' => 'form-horizontal span6',
);

echo form_open('updatedb/update', $form_array);

$fields = array (
    array ('page', $photos[0]['page']),
    array ('page_title', $photos[0]['page_title']),    
    array ('chapter', $photos[0]['chapter']),    
    array ('filename_adjusted', $photos[0]['filename_adjusted'])
);

$count = count($fields);
for ($i=0; $i<$count; $i++)
{
    $label_array = array(
        'class'     => 'control-label',
        'for'       => $fields[$i][0],
    );

    $input_array = array(
        'type'          => 'text',
        'name'          => $fields[$i][0],
        'id'            => $fields[$i][0],
        'value'         => ucwords($fields[$i][1]),
    );
    
    echo '<div class="control-group">';
    echo form_label(ucwords($fields[$i][0]), $fields[$i][0], $label_array );
    echo '<div class="controls">';
    echo form_input($input_array);
    echo '</div></div>';
};

$button = array(
    'name'      => 'submit',
    'class'     => 'btn offset1',
);
echo form_submit($button, 'Submit');


echo form_close();

echo '<div class="span6">';

$image_array = array(
    'src'       => 'img/book_pages/scan'.$photos[0]['page'].'.jpg', 
);
echo img($image_array);

echo '</div>';








