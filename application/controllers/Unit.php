<?php

class Unit extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('unit_model');
	}

	public function index()
	{
		$data['title'] = 'Satuan';
		$data['active_menu'] = 'unit';
		$data['units'] = $this->unit_model->get();
		$this->load->view('unit/index.php', $data);
	}

	public function add()
	{
		$data['title'] = 'Tambah Satuan';
		$data['active_menu'] = 'unit';
		$this->load->view('unit/add.php', $data);
	}

	public function insert()
	{
		if ($this->input->method() == 'post') {
			$unit = [
				'code' => $this->input->post('code'),
				'name' => $this->input->post('name'),
				'info' => $this->input->post('info'),
			];
			$unit_saved = $this->unit_model->insert($unit);
			if ($unit_saved) {
				redirect('/unit');
			}
		} else {
			redirect('/unit');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Tambah Satuan';
		$data['active_menu'] = 'unit';
		$data['unit'] = $this->unit_model->get_by_id($id);
		$this->load->view('unit/edit.php', $data);
	}

	public function update()
	{
		if ($this->input->method() == 'post') {
			$unit = [
				'code' => $this->input->post('code'),
				'name' => $this->input->post('name'),
				'info' => $this->input->post('info'),
			];
			$unit_saved = $this->unit_model->update($this->input->post('id'), $unit);
			if ($unit_saved) {
				redirect('/unit');
			}
		} else {
			redirect('/unit');
		}
	}

	public function delete($id)
	{
		$this->unit_model->delete($id);
		redirect('/unit');
	}
}
