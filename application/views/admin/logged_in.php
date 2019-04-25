<?php 
    if(isset($this->session->userdata['logged_in'])) {
        header("location: ".base_url()."admin/menu");
    }
    else{
    	header("location: ".base_url()."login/login");
    }
?>