<?php

$config = array(
    'antiphon' => array(
        array(
            'field' => 'season',
            'label' => 'Season',
            'rules' => 'required'
        ),
        array(
            'field' => 'week',
            'label' => 'Week',
            'rules' => 'required|numeric|greater_than[0]|less_than[29]'
        ),
        array(
            'field' => 'song_text[]',
            'label' => 'Song Text',
            'rules' => 'required'
        )
    ),
    'external' => array(
        array(
            'field' => 'url[]',
            'label' => 'URL',
            'rules' => 'required'
        )
    ),
    'prayer' => array(
        array(
            'field' => 'weekly_text[]',
            'label' => 'Text',
            'rules' => 'required'
        )/*,
        array(
            'field' => 'upload_image[]',
            'label' => 'Image',
            'rules' => 'callback_validate_image'
        ),
        array(
            'field' => 'upload_music[]',
            'field' => 'Music',
            'rules' => 'callback_validate_music'
        )*/
    ),
    'preces' => array(
        array(
            'field' => 'season',
            'label' => 'Season',
            'rules' => 'required'
        ),        
        array(
            'field' => 'text[]',
            'label' => 'Text',
            'rules' => 'required'
        )/*,
        array(
            'field' => 'upload_image[]',
            'label' => 'Image',
            'rules' => 'callback_validate_image'
        ),
        array(
            'field' => 'upload_music[]',
            'field' => 'Music',
            'rules' => 'callback_validate_music'
        )*/
    ),
    'psalm' => array(
        array(
            'field' => 'psalm_address[]',
            'label' => 'Psalm Address',
            'rules' => 'required'
        )/*,
        array(
            'field' => 'upload_image[]',
            'label' => 'Image',
            'rules' => 'callback_validate_image'
        ),
        array(
            'field' => 'upload_music[]',
            'field' => 'Music',
            'rules' => 'callback_validate_music'
        )*/            
    ),
    'song' => array(
        array(
            'field' => 'song_text[]',
            'label' => 'Song Text',
            'rules' => 'required'
        )/*,
        array(
            'field' => 'upload_image[]',
            'label' => 'Image',
            'rules' => 'callback_validate_image'
        ),
        array(
            'field' => 'upload_music[]',
            'field' => 'Music',
            'rules' => 'callback_validate_music'
        )*/
    ),
    'weekly' => array(
        array(
            'field' => 'season',
            'label' => 'Season',
            'rules' => 'required'
        ),
        array(
            'field' => 'weekly_text[]',
            'label' => 'Text',
            'rules' => 'required'
        ),  
        array(
            'field' => 'week',
            'label' => 'Week',
            'rules' => 'required|numeric|greater_than[0]|less_than[29]'
        )    
    )
);