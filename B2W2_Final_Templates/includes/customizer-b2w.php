<?php


if (!class_exists('kirki')) {
    return;
};

/* PANELS */

new \Kirki\Panel(
    'b2w_theme_option_panel',
    [
        'priority'    => 10,
        'title'       => esc_html__('B2W Theme Options', 'bootstrap2wordpress'),
        'description' => esc_html__('Use this to customise the B2W theme', 'bootstrap2wordpress'),
    ]
);

/* SECTIONS */

// Section -- Subscribe Bar


new \Kirki\Section(
    'b2w_subscribe_bar',
    [
        'title'       => esc_html__('Subscribe Bar', 'bootstrap2wordpress'),
        'description' => esc_html__('This is the subscribe bar', 'bootstrap2wordpress'),
        'panel'       => 'b2w_theme_option_panel',
        'priority'    => 160,
    ]
);

// Section -- Subscribe Bar -- Fields 

new \Kirki\Field\Textarea(
    [
        'settings'    => 'subscribe_text',
        'label'       => esc_html__('Subscribe Bar Text', 'bootstrap2wordpress'),
        'section'     => 'b2w_subscribe_bar',
        'default'     => esc_html__('This is a default value', 'bootstrap2wordpress'),
    ]
);

new \Kirki\Field\Code(
    [
        'settings'    => 'subscribe_form',
        'label'       => esc_html__('Subscribe Form HTML', 'bootstrap2wordpress'),
        'description' => esc_html__('Please enter HTML code here for your opt-in form.', 'bootstrap2wordpress'),
        'section'     => 'b2w_subscribe_bar',
        'default'     => '',
        'choices'     => [
            'language' => 'html',
        ],
    ]
);


// Section -- Pre Footer CTA
new \Kirki\Section(
    'footer_calltoaction_section',
    [
        'title'       => esc_html__('Call to Action', 'bootstrap2wordpress'),
        'description' => esc_html__('This is the call to action card, in the Pre-Footer Section', 'bootstrap2wordpress'),
        'panel'       => 'b2w_theme_option_panel',
        'priority'    => 160,
    ]
);

// Section -- Pre Footer CTA -- Fields
new \Kirki\Field\Checkbox_Switch(
    [
        'settings' => 'footer_calltoaction_visibility',
        'label' => esc_html__('call to Action Section', 'bootstrap2wordpress'),
        'description' => esc_html__('Toggle this section on or off.', 'bootstrap2wordpress'),
        'section' => 'footer_calltoaction_section',
        'default' => 'on',
        'choices' => [
            'on' => esc_html__('Enable', 'bootstrap2wordpress'),
            'off' => esc_html__('Disable', 'bootstrap2wordpress'),
        ]

    ]
);



new \Kirki\Field\Text(
    [
        'settings' => 'footer_calltoaction_heading',
        'label' => esc_html__('Heading', 'bootstrap2wordpress'),
        'tooltip' => esc_html__('Call to Action Sub Heading Text', 'bootstrap2wordpress'),
        'section' => 'footer_calltoaction_section',
        'default' => esc_html__('Bootstrap to Wordpress', 'bootstrap2wordpress'),
        'partial_refresh' => array(
            'footer_calltoaction_heading' => array(
                'selector' => ' .footer-calltoaction h2',
                'render_callback' => function () {
                    return get_theme_mod('footer_calltoaction_heading');
                }
            ),
        ),
    ]
);




new \Kirki\Field\Text(
    [
        'settings' => 'footer_sub_heading',
        'label' => esc_html__('Sub Heading', 'bootstrap2wordpress'),
        'tooltip' => esc_html__('Call to Action Section Sub Heading Text', 'bootstrap2wordpress'),
        'section' => 'footer_calltoaction_section',
        'default' => esc_html__('Join the course', 'bootstrap2wordpress'),
        'partial_refresh' => array(
            'footer_sub_heading' => array(
                'selector' => '.footer-calltoaction p.sub-title',
                'render_callback' => function () {
                    return get_theme_mod('footer_sub_heading');
                }
            ),
        ),
    ]
);




// Section -- Footer
new \Kirki\Section(
    'b2w_footer_section',
    [
        'title'       => esc_html__('Footer', 'bootstrap2wordpress'),
        'description' => esc_html__('This is the footer section', 'bootstrap2wordpress'),
        'panel'       => 'b2w_theme_option_panel',
        'priority'    => 160,
    ]
);

// Section -- Footer -- Fields 
new \Kirki\Field\Textarea(
    [
        'settings'    => 'footer_copyright',
        'label'       => esc_html__('Footer Copyright Text', 'bootstrap2wordpress'),
        'section'     => 'b2w_footer_section',
        'default'     => esc_html__('copyright jkmagnussen', 'bootstrap2wordpress'),
        'partial_refresh' => array(
            'footer_copyright' => array(
                'selector' => 'footer .copyright p',
                'render_callback' => function () {
                    return get_theme_mod('footer_copyright');
                }
            ),
        ),
    ]
);