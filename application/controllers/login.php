<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#session_start();

class Login extends CI_Controller{

	public function __construct()
    {
            parent::__construct();
            $login = $this->load->model('login_model');
            $this->load->helper(array('form', 'url'));
    }
    public function form()
    {
    	$this->load->view('admin/login_admin');
    }
    public function login_process(){

    	$this->load->library('form_validation');
    	$this->form_validation->set_rules('username', 'Username', 'required');
    	$this->form_validation->set_rules('password', 'Password', 'required');

    	if ($this->form_validation->run() == FALSE)
    	{
    		if(isset($this->session->userdata['logged_in']))
    		{
    			$this->load->view('admin/logged_in');
    		}
    		else
    		{
    			$this->load->view('admin/login_admin');
    		}
    	}
    	else
    	{
    		$data = array(
    			'username' => $this->input->post('username'),
    			'password' => $this->input->post('password')
    		);
    		$result = $this->login_model->login($data);
    		if ($result == TRUE)
    		{
    			$username = $this->input->post('username');
    			$result = $this->login_model->read_user_information($username);
    			if ($result != FALSE)
    			{
    				$session_data = array(
    					'username' => $result[0]->username
    				);
    				$this->session->set_userdata('logged_in', $session_data);
    				$this->load->view('admin/logged_in');
    			}
    		}
    		else
    		{
    			$data = array(
    				'error_message' => 'Invalid username or password'
    			);
    			$this->load->view('admin/login_admin',$data);
    		}
    	}
    }

    public function logout()
    {
    	$sess_array = array(
    		'username' => ''
    	);
    	$this->session->unset_userdata('logged_in', $sess_array);
    	$this->load->view('admin/logout', $data);
    }
}