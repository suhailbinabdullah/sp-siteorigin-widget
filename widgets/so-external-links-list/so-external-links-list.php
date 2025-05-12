<?php
/*
Widget Name: Sputznik External Links
Description: Adds a custom SiteOrigin widget to show external links in a list.
Author: Suhail Bin Abdullah
Author URI: https://sputznik.com/
Widget URI:
Video URI:
*/

class External_Links_List_Widget extends SiteOrigin_Widget {
  function __construct() {
        parent::__construct(
            'so-external-links-list',
            __('External Links List', 'external-links-list'),
            [
                'description' => __('Displays a list of external links using a repeater field.', 'external-links-list')
            ],
            [],
            [
                'links' => [
                    'type' => 'repeater',
                    'label' => __('External Links', 'external-links-list'),
                    'item_name' => __('Link', 'external-links-list'),
                    'fields' => [
                        'link_text' => [
                            'type' => 'text',
                            'label' => __('Link Text', 'external-links-list'),
                        ],
                        'link_url' => [
                            'type' => 'link',
                            'label' => __('Link URL', 'external-links-list'),
                        ]
                    ]
                ],
                'link_color' => [
                    'type' => 'color',
                    'label' => __('Link Color', 'external-links-list'),
                    'default' => '#0073aa'
                ],
                'hover_color' => [
                    'type' => 'color',
                    'label' => __('Hover Color', 'external-links-list'),
                    'default' => '#005177'
                ],
                'list_type' => [
                    'type' => 'select',
                    'label' => __('List Type', 'external-links-list'),
                    'default' => 'ul',
                    'options' => [
                        'ul' => __('Unordered List (bullets)', 'external-links-list'),
                        'ol' => __('Ordered List (numbers)', 'external-links-list')
                    ]
                ],
                'list_style_image' => [
                    'type' => 'media',
                    'label' => __('List Style Image', 'external-links-list'),
                    'choose' => __('Choose Image', 'external-links-list'),
                    'update' => __('Set Image', 'external-links-list'),
                    'library' => 'image',
                    // 'fallback' => true
                ],
                'list_padding' => [
                    'type' => 'text',
                    'label' => __('List Padding (e.g., 10px 20px)', 'external-links-list'),
                    'default' => '0'
                ]
            ],
            plugin_dir_path(__FILE__)
        );
    }


    function get_template_name($instance) {
        return 'template';
    }

    function get_template_dir($instance) {
        return 'templates';
    }
}

siteorigin_widget_register('so-external-links-list',__FILE__,'External_Links_List_Widget');

  ?>
