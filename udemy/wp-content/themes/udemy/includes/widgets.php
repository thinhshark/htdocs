<?php

function tn_widgets(){
    register_sidebar([
        'id'            => 'tn_sidebar',
        'name'          => __('My First Theme sidebar', 'udemy'),
        'description'   => __('Sidebar for the theme Udemy', 'udemy'),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s"',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_widget'  => '</h4>'
    ]);
}
