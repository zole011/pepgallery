<?php
return [
    'ctrl' => [
        'title' => 'Gallery',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'title,description',
        'iconfile' => 'EXT:pepgallery/Resources/Public/Icons/gallery.svg',
    ],
    'columns' => [
        'title' => [
            'label' => 'Title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'description' => [
            'label' => 'Description',
            'config' => [
                'type' => 'text',
                'rows' => 3,
                'eval' => 'trim',
            ],
        ],
                'crdate' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'main_asset' => [
            'label' => 'Thumbnail',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'main_asset',
                ],
                'maxitems' => 1,
                'appearance' => [
                    'createNewRelationLinkTitle' => 'Add Thumbnail',
                ],
            ],
        ],
        'folder' => [
            'label' => 'Gallery Folder',
            'config' => [
                'type' => 'group',
                'internal_type' => 'folder',
                'allowed' => '',
                'size' => 1,
                'maxitems' => 1,
                'minitems' => 0,
                'show_thumbs' => 1,
            ],
        ],
        'hidden' => [
            'label' => 'Hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
    ],
    'types' => [
        '1' => [
            'showitem' => 'title, description, main_asset, folder, hidden',
        ],
    ],
];