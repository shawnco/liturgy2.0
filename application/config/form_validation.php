<?php

$config = array(
    'antiphon' => array(
        array(
            'field' => 'series_name',
            'label' => 'Series Name',
            'rules' => 'required'
        ),
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
            'field' => 'series_name',
            'label' => 'Series Name',
            'rules' => 'required'
        ),        
        array(
            'field' => 'url[]',
            'label' => 'URL',
            'rules' => 'required'
        )
    ),
    'prayer' => array(
        array(
            'field' => 'series_name',
            'label' => 'Series Name',
            'rules' => 'required'
        ),        
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
            'field' => 'series_name',
            'label' => 'Series Name',
            'rules' => 'required'
        ),        
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
            'field' => 'series_name',
            'label' => 'Series Name',
            'rules' => 'required'
        ),        
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
            'field' => 'series_name',
            'label' => 'Series Name',
            'rules' => 'required'
        ),        
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
            'field' => 'series_name',
            'label' => 'Series Name',
            'rules' => 'required'
        ),        
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
    ),
    'scheme' => array(
        array(
            'field' => 'series_name',
            'label' => 'Series Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'scheme[][name]',
            'label' => 'Office Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'scheme[][types][]',
            'label' => 'Element Type',
            'rules' => 'required|numeric'
        ),
        array(
            'field' => 'scheme[][series][]',
            'label' => 'Element Series',
            'rules' => 'required|numeric'
        ),
        array(
            'field' => 'scheme[][number][]',
            'label' => 'Element Quantity',
            'rules' => 'required|numeric'
        )
    )
);