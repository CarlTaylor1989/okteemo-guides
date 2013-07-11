<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		$champion = Champion::find('all', array('select' => 'id, name, title', 'order' => 'name ASC'));

		$this->data = array(
			'champion_name' 	=> $champion
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */