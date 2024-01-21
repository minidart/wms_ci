<?php

class Company extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('company_model');
	}


	public function index()
	{
		$data['title'] = 'Perusahaan';
		$data['active_menu'] = 'company';
		$data['companies'] = $this->company_model->get();
		$this->load->view('company/index.php', $data);
	}

	public function add()
	{
		$data['title'] = 'Tambah Perusahaan';
		$data['active_menu'] = 'company';
		$this->load->view('company/add.php', $data);
	}

	public function insert()
	{
		if ($this->input->method() == 'post') {
			$company = [
				'code' => $this->input->post('code'),
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'info' => $this->input->post('info'),
			];
			$company_saved = $this->company_model->insert($company);

			if ($company_saved) {
				redirect('/company');
			}
		} else {
			redirect('/company');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Perusahaan';
		$data['active_menu'] = 'company';
		$data['company'] = $this->company_model->get_by_id($id);
		$this->load->view('company/edit.php', $data);
	}

	public function update()
	{
		if ($this->input->method() == 'post') {
			$company = [
				'code' => $this->input->post('code'),
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'info' => $this->input->post('info'),
			];
			$company_saved = $this->company_model->update($this->input->post('id'), $company);

			if ($company_saved) {
				redirect('/company');
			}
		} else {
			redirect('/company');
		}
	}

	public function delete($id)
	{
		$this->company_model->delete($id);
		redirect('/company');
	}
}
