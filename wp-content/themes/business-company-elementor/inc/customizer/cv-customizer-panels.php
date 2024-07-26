<?php
/**
 * Business Company Elementor manage the Customizer panels.
 *
 * @subpackage business-company-elementor
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'business_company_elementor_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'business-company-elementor' ),
) );

/**
 * Business Company Elementor Options
 */
Kirki::add_panel( 'business_company_elementor_options_panel', array(
	'priority' => 20,
	'title'    => __( 'Business Company Elementor Theme Options', 'business-company-elementor' ),
) );