<?php
/**
 * Score Rating field
 *
 * @package EverestForms\Fields
 * @since   1.4.3
 */

defined( 'ABSPATH' ) || exit;

/**
 * EVF_Field_Scale_Rating Class.
 */
class EVF_Field_Scale_Rating extends EVF_Form_Fields {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->name   = esc_html__( 'Scale Rating', 'everest-forms' );
		$this->type   = 'scale-rating';
		$this->icon   = 'evf-icon evf-icon-scale-rating';
		$this->order  = 30;
		$this->group  = 'survey';
		$this->is_pro = true;
		$this->plan   = 'plus professional agency themegrill-agency';
		$this->addon  = 'everest-forms-survey-polls-quiz';
		$this->links  = array(
			'image_id' => '',
			'vedio_id' => 'aHzFjk_ZNTU',
		);

		parent::__construct();
	}
}
