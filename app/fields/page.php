<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('page');

$page
    ->setLocation('post_type', '==', 'post')
    ->or('post_type', '==', 'page');

$page
    ->addTrueFalse('hide_title', [
        'label' => 'Hide Title',
    ]);

$page
    ->addTrueFalse('hide_footer', [
         'label' => 'Hide Footer',
    ]);

$page
    ->addTrueFalse('hide_breadcrumbs', [
        'label' => 'Hide Breadcrumbs',
    ]);

$page
    ->addTextarea('custom_javascript', [
        'label' => 'Custom Javascript',
    ]);

$page
    ->addTextarea('custom_css', [
        'label' => 'Custom CSS',
    ]);

$page
    ->addImage('fullwidth_banner', [
        'label' => 'Banner Image',
        'return_format' => 'array',
    ]);

$page
    ->addTextarea('administrator_notes', [
        'label' => 'Admin Notes',
    ]);

return $page;