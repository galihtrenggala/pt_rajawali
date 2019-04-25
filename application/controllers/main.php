<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

    public function __construct()
    {
            parent::__construct();
            $this->load->model('article_model');
            $this->load->helper('url');
    }

	public function view($page = 'index')
	{
		$data['title'] = ucfirst($page);
		$data['article'] = $this->article_model->get_article();

		$this->load->view('templates/navbar', $data);
		$this->load->view($page, $data);
		$this->load->view('templates/footer', $data);
	}
	
}
?>