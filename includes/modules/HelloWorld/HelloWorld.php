<?php

class LEARNDIVI_HelloWorld extends ET_Builder_Module {

	public $slug       = 'learndivi_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://vanpariyar.github.io/divi-modules',
		'author'     => 'RonakVanpariya',
		'author_uri' => 'https://github.com/vanpariyar',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'learndivi-my-extension' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'learndivi-my-extension' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'learndivi-my-extension' ),
				'toggle_slug'     => 'main_content',
			),
			'content_demo' => array(
				'label'           => esc_html__( 'Content', 'learndivi-my-extension' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'learndivi-my-extension' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new LEARNDIVI_HelloWorld;
