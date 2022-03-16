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
        ),
        tag(
            'div',
            [
                'keyval' => [
                    'class' => 'row'
                ],
                'inline' => []
            ],
            #row content
            [
                tag(
                    'section',
                    [
                        'keyval' => [
                            'class' => 'leftcolumn'
                        ],
                        'inline' => []
                    ],
                    #leftcolumn content
                    tag(
                        'div',
                        [
                            'keyval' => [
                                'class' => 'card'
                            ],
                            'inline' => []
                        ],
                        #card content
                        [
                            tag(
                                'h2',
                                null,
                                'TITLE HEADING'
                            ),
                            tag(
                                'h5',
                                null,
                                'Title decription, Mar 16, 2022'
                            ),
                            tag(
                                'div',
                                [
                                    'keyval' => [
                                        'class' => 'fakeimg',
                                        'style' => 'height:200px;'
                                    ],
                                    'inline' => []
                                ],
                                'Image'
                            ),
                            tag(
                                'p',
                                null,
                                'Some Text ...'
                            )
                        ]
                    )
                ),
                tag(
                    'section',
                    [
                        'keyval' => [
                            'class' => 'rightcolumn',
                        ],
                        'inline' => []
                    ],
                    #rightcolumn content
                    [
                        tag(
                            'div',
                            [
                                'keyval' => [
                                    'class' => 'card'
                                ],
                                'inline' => []
                            ],
                            #card content
                            [
                                tag(
                                    'h2',
                                    null,
                                    'About Me'
                                ),
                                tag(
                                    'div',
                                    [
                                        'keyval' => [
                                            'class' => 'fakeimg',
                                            'style' => 'height:100px;'
                                        ],
                                        'inline' => []
                                    ],
                                    'Image'
                                ),
                                tag(
                                    'p',
                                    null,
                                    'Some Text About me...'
                                )
                            ]
                        ),
                        tag(
                            'div',
                            [
                                'keyval' => [
                                    'class' => 'card'
                                ],
                                'inline' => []
                            ],
                            #card content
                            [
                                tag(
                                    'h3',
                                    null,
                                    'Popular Post'
                                ),
                                tag(
                                    'div',
                                    [
                                        'keyval' => [
                                            'class' => 'fakeimg'
                                        ],
                                        'inline' => []
                                    ],
                                    'Image'
                                ),
                                tag('br'),
                                tag(
                                    'div',
                                    [
                                        'keyval' => [
                                            'class' => 'fakeimg'
                                        ],
                                        'inline' => []
                                    ],
                                    'Image'
                                ),
                                tag('br'),
                                tag(
                                    'div',
                                    [
                                        'keyval' => [
                                            'class' => 'fakeimg'
                                        ],
                                        'inline' => []
                                    ],
                                    'Image'
                                )
                            ]
                        ),
                        tag(
                            'div',
                            [
                                'keyval' => [
                                    'class' => 'card'
                                ],
                                'inline' => []
                            ],
                            #card content
                            [
                                tag(
                                    'h3',
                                    null,
                                    'Follow Me'
                                ),
                                tag(
                                    'p',
                                    null,
                                    'Some Text ...'
                                )
                            ]
                        )
                    ]
                )
            ]
        ),
        tag(
            'footer',
            [
                'keyval' => [
                    'class' => 'footer'
                ],
                'inline' => []
            ],
            //footer content
            tag(
                'h2',
                [
                    'keyval' => [],
                    'inline' => []
                ],
                //h2 content
                '&copy; www.ramigglez.com'
            )
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