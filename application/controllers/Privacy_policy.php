<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class Privacy_policy extends UI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->model('common_model');

	}
	public function index(){
	$this->get_include();
        $this->load->view($this->viewDir.'privacy-policy/index',$this->data);
  }

}