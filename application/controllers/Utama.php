<?php

Class Utama extends CI_Controller
{

	public function index()
	{
		$data = array(
			'title' => 'Halaman Utama',
			'breadcrumb' => 'halaman utama'

		);

		$this->load->view('halaman_utama', $data);

	}

	

}