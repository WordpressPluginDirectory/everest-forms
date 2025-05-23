<?php
/**
 * Coupon field.
 *
 * @package EverestForms\Fields
 * @since   1.8.9
 */

defined( 'ABSPATH' ) || exit;

/**
 * EVF_Field_Payment_Coupon Class.
 */
class EVF_Field_Payment_Coupon extends EVF_Form_Fields {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->name   = esc_html__( 'Coupons', 'everest-forms' );
		$this->type   = 'payment-coupon';
		$this->icon   = 'evf-icon evf-icon-coupon';
		$this->order  = 16;
		$this->group  = 'payment';
		$this->is_pro = true;
		$this->plan   = 'personal agency themegrill-agency';
		$this->addon  = 'everest-forms-coupons';
		$this->links  = array(
			'image_id' => '',
			'vedio_id' => 'GSYQIiyntW0',
		);

		parent::__construct();
	}
}
