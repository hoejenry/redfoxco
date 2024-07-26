<?php
/**
 * Business Company Elementor manage the Customizer options of general panel.
 *
 * @subpackage business-company-elementor
 * @since 1.0 
 */
Kirki::add_field(
	'business_company_elementor_config', array(
		'type'        => 'checkbox',
		'settings'    => 'business_company_elementor_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'business-company-elementor' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);
