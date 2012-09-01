<?php

// Custom post types

$llibres = new JW_Post_Type("llibre");
$llibres->add_taxonomy('Categoria');
$llibres->add_meta_box('Llibre Info', array(
 'resum' => 'textarea',
 'enllac' => 'text',
 'autor' => 'text',
 'publicacio' => 'text',
 'editorial' => 'text',
 'pagines' => 'text',
 'tamany' => 'text',
 'idioma' => 'text',
 'tipus_arxiu' => 'text',
 'calitat' => 'text',
 'img' => 'file'
));