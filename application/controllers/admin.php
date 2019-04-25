<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#session_start();

class Admin extends CI_Controller{

    public function __construct()
    {
            parent::__construct();
            $article = $this->load->model('article_model');
            $login = $this->load->model('login_model');
            $this->load->helper(array('form', 'url'));
    }

    public function portal()
    {
    	$this->load->view('admin/portal_admin');
    }

	public function menu()
	{
		
		$data['article'] = $this->article_model->get_article();
		$this->load->view('templates/navbar_admin', $data);
		$this->load->view('admin/menu_admin', $data);
	}
	
	public function update_artikel()
	{
		$this->load->view('templates/navbar_admin', $data);
		$this->load->view('admin/update_artikel', $data);
	}

	public function create()
	{
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a article item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/navbar_admin');
            $this->load->view('admin/buat_artikel', $data);

        }
        else
        {
        	$config['upload_path']	= './assets/images/';
        	$config['allowed_types'] = 'gif|jpg|jpeg|png';
        	$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$this->article_model->set_article($this->upload->data('file_name'),$this->input->post());
				$this->load->view('admin/success', $data);
			}            
            #$this->load->view('article/success');
        }
	}

	public function update($id=NULL)
	{
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data = $this->article_model->get_by_id($id);

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/navbar_admin');
            $this->load->view('admin/update_artikel', $data);

        }
        else
        {
        	$config['upload_path']	= './assets/images/';
        	$config['allowed_types'] = 'gif|jpg|jpeg|png';
        	$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$post = $this->input->post();
				$file_to_delete = 'assets/images/'.$post['oldimage'];
				$a = $this->article_model->update_article($this->upload->data('file_name'),$post,$id);
				unlink($file_to_delete);
				#var_dump($a);
				$this->load->view('admin/success', $data);
			}            
            #$this->load->view('article/success');
        }
	}

	public function delete($id)
	{
		$res =  $this->article_model->delete_article($id);
		var_dump($res);
		$file_to_delete = 'assets/images/'.$res;
		unlink($file_to_delete);
		$this->load->view('admin/delete', $data);
	}

}
?>