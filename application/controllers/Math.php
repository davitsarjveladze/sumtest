<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Math extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->database();


	}

	public function index()
	{
		$this->load->view('math/index');
	}

	public function summing()
	{
		$this->form_validation->set_rules('num1', 'პირველი რიცხვი', 'required|numeric');
		$this->form_validation->set_rules('num2', 'მეორე რიცხვი', 'required|numeric');
		if ($this->form_validation->run())
		{
			$sum = $this->input->post('num2') + $this->input->post('num1');
			$data = array(
				'number_one' => $this->input->post('num1'),
				'number_two' => $this->input->post('num2'),
				'sum' => $sum,
			);
			$this->load->model('sum_model');
			$check = $this->sum_model->insert_sum($data);
			if (true) {
				$this->session->set_flashdata('sum' ,  $this->input->post('num1') . '+' .$this->input->post('num2') . "=" . $sum);

			}
		}
		$this->load->view('math/index');
	}
}
