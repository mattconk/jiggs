<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include('includes/head.php');
include('includes/nav.php');

if (isset($breadcrumb) and $breadcrumb == TRUE)
{
    echo set_breadcrumb(); // See jiggs_application_notes.php for explanation
}


include('pages/'.$view.'.php');

include('includes/footer.php');
