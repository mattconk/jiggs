<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="container">

    <?php
    
    echo heading('"Jiggs" In His Own Words', 2, 'class="text-center"');
    $full_book = array(
        'class'     => 'btn btn-large btn-primary link_space',
        'title'     => '50mb (Opens In New Windows',
        'target'    => '_blank',
    );
    echo anchor('img/book_pages/jiggs_marshall_full.pdf', '<i class="icon-file-text"></i> Get the Full Book', $full_book);
    foreach ($photos as $photo_item):        
    ?>
    <div class="accordion" id="accordion2">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle btn" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $photo_item['page']; ?>">
                    <p id="<?php echo $photo_item['page']+1 ;?>" class="text-left"><strong>Page #<?php echo $photo_item['page'].' - '.ucwords($photo_item['page_title']); ?></strong></p>
                </a>
            </div>
            <div id="collapse<?php echo $photo_item['page']; ?>" class="accordion-body collapse">
                <div class="accordion-inner">
                    <?php
                        $file = 'scan'.$photo_item['page'].'_'.$photo_item['filename_adjusted'];
                   
                        $images = array(
                            'class'     => 'img-polaroid center_image',
                            'src'       => 'img/book_pages/'.$file.'.jpg',
                            'alt'       => 'Link to Higher Rez Version',
                        );
                        $link = array(
                            'title'     => 'Link to Large Image',
                        );
                        echo anchor('book_pages/high_rez_view/'.$photo_item['auto'], img($images), $link);
                    ?>
                </div>
            </div>
      </div>
    <?php
    endforeach;
    ?>

    </div>
    
</div> <!-- /container -->