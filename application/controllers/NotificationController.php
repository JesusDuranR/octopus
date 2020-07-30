<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotificationController extends CI_Controller {

	public function index() {
		$data["name"] = $this->input->post("nombre");
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("NotificationView", $data);		
		$this->load->view("components/FooterComponent");

		
	}
}
