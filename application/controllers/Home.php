<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        
        $this->template->load('Template','v_home_secretaria');
        //$this->load->view('welcome_message');
    }

}
