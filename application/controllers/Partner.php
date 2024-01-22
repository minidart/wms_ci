<?php

class Partner extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('partner_model');
	}

	public function index()
	{
		$data['title'] = 'Rekanan';
		$data['active_menu'] = 'partner';
		$data['partners'] = $this->partner_model->get();
		$this->load->view('partner/index', $data);
	}

	public function add()
	{
		$data['title'] = 'Tambah Rekanan';
		$data['active_menu'] = 'partner';
		$this->load->view('partner/add.php', $data);
	}

	public function insert()
	{
		if ($this->input->method() == 'post') {
			$partner = [
				'type' => $this->input->post('type'),
				'code' => $this->input->post('code'),
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'phone_number' => $this->input->post('phone_number'),
				'fax' => $this->input->post('fax'),
				'email' => $this->input->post('email'),
			];

			$company_saved = $this->partner_model->insert($partner);

			if ($company_saved) {
				redirect('/partner');
			}
		} else {
			redirect('/partner');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Rekanan';
		$data['active_menu'] = 'partner';
		$data['partner'] = $this->partner_model->get_by_id($id);
		$this->load->view('partner/edit.php', $data);
	}

	public function update()
	{
		if ($this->input->method() == 'post') {
			$partner = [
				'type' => $this->input->post('type'),
				'code' => $this->input->post('code'),
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'phone_number' => $this->input->post('phone_number'),
				'fax' => $this->input->post('fax'),
				'email' => $this->input->post('email'),
			];

			$partner_saved = $this->partner_model->update($this->input->post('id'), $partner);
			if ($partner_saved) {
				redirect('/partner');
			}
		} else {
			redirect('/partner');
		}
	}

	public function delete($id)
	{
		$this->partner_model->delete($id);
		redirect('/partner');
	}
}
