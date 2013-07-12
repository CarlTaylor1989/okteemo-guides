<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Champ_guide extends MY_Controller {

	public function index()
	{
		$champ = Champion::find('all', array('select' => 'id, name', 'conditions' => array('name = ?', $this->uri->segment(2))));

		foreach ($champ as $champ_key) {
			$champ_info = $champ_key;
		}

		$guides = Guide::find('all', array('select' => 'id, title, sub_title, author', 'conditions' => array('champ_id = ?', $champ_info->id)));

		$this->data = array(
			'guides_info' 	=> $guides,
			'champ_name'	=> $champ_info
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */