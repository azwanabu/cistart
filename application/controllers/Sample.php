<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {

	public function index()
	{
		$this->template->load('sample/template','sample/list');
	}

	public function add()
	{
		$this->template->load('sample/template','sample/list');
	}
}
