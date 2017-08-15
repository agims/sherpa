<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_testimonial-information',
		'title' => 'Testimonial Information',
		'fields' => array (
			array (
				'key' => 'field_5993133e3a61e',
				'label' => 'Instructions',
				'name' => '',
				'type' => 'message',
				'message' => '<h3>Instructions</h3>
	Put the author\'s name in the Title box above, usually with their first name and last initial.
	
	Also, if you have a picture of the person or a logo from their company, that would go into the "Featured Image" spot.',
			),
			array (
				'key' => 'field_599313df3a620',
				'label' => 'Testimonial Rating',
				'name' => 'testimonial_rating',
				'type' => 'select',
				'instructions' => 'What did the customer rate us?',
				'required' => 1,
				'choices' => array (
					5 => 5,
					4 => 4,
					3 => 3,
					2 => 2,
					1 => 1,
				),
				'default_value' => 5,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_599314363a621',
				'label' => 'Testimonial Company',
				'name' => 'testimonial_company',
				'type' => 'text',
				'instructions' => 'Is this testimonial coming from another company?	This is where you would put the company name',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_599313903a61f',
				'label' => 'Testimonial Text',
				'name' => 'testimonial_text',
				'type' => 'wysiwyg',
				'instructions' => 'This is the text of the testimonial itself, AKA what the customer said.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'testimonial',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
}
