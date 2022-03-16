<?php

require_once './Strings/Strings.php';
require_once './html/html.php';
//Blog Layout
page(
    //head content (array || string || null)
    [
        tag(
            'meta',
            [
                'keyval' => ['charset' => 'UTF-8'],
                'inline' => []
            ]
        )
    ],
    //body content (array || string || null)
    [
        tag(
            'header', //tag name
            [               //array of attributes
                'keyval' => [
                    'class' => 'header'
                ],
                'inline' => []
            ],              //end array of attributes
            'Blog Name'  //tag content
        )
    ],
    //body attributes (array)
    [
        'id'=>'wrap'
    ]
    #, 'language of the document'
);

/**
 * Remove the # to active the attribute
 * and put the language code. 
 * Examples of language codes :
 * 
 * en = english,
 * es = spanish,
 * etc., etc.
 * 
 * here you can find your code
 * 
 * https://www.w3schools.com/tags/ref_language_codes.asp
 */