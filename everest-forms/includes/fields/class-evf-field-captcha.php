<?php
/**
 * Captcha field
 *
 * @package EverestForms\Fields
 * @since   1.6.5
 */

defined( 'ABSPATH' ) || exit;

/**
 * EVF_Field_Captcha Class.
 */
class EVF_Field_Captcha extends EVF_Form_Fields {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->name   = esc_html__( 'Captcha', 'everest-forms' );
		$this->type   = 'captcha';
		$this->icon   = 'evf-icon evf-icon-captcha';
		$this->order  = 160;
		$this->group  = 'advanced';
		$this->is_pro = true;
		$this->plan   = 'personal plus professional agency themegrill-agency';
		$this->addon  = 'everest-forms-captcha';
		$this->links  = array(
			'image_id' => '',
			'vedio_id' => 'obScswjZ24Q',
		);

		parent::__construct();
	}
}
