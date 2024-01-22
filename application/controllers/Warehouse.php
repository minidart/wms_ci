<?php

class Warehouse extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('warehouse_model');
	}

	public function index()
	{
		$data['title'] = 'Gudang';
		$data['active_menu'] = 'warehouse';
		$data['warehouses'] = $this->warehouse_model->get();
		$this->load->view('warehouse/index.php', $data);
	}

	public function add()
	{
		$data['title'] = 'Tambah Gudang';
		$data['active_menu'] = 'warehouse';
		$this->load->view('warehouse/add.php', $data);
	}

	public function insert()
	{
		if ($this->input->method() == 'post') {
			$warehouse = [
				'code' => $this->input->post('code'),
				'name' => $this->input->post('name'),
				'info' => $this->input->post('info'),
			];
			$warehouse_saved = $this->warehouse_model->insert($warehouse);
			if ($warehouse_saved) {
				redirect('/warehouse');
			}
		} else {
			redirect('/warehouse');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Gudang';
		$data['active_menu'] = 'warehouse';
		$data['warehouse'] = $this->warehouse_model->get_by_id($id);
		$this->load->view('warehouse/edit.php', $data);
	}

	public function update()
	{
		if ($this->input->method() == 'post') {
			$warehouse = [
				'code' => $this->input->post('code'),
				'name' => $this->input->post('name'),
				'info' => $this->input->post('info'),
			];
			$warehouse_saved = $this->warehouse_model->update($this->input->post('id'), $warehouse);
			if ($warehouse_saved) {
				redirect('/warehouse');
			}
		} else {
			redirect('/warehouse');
		}
	}

	public function delete($id)
	{
		$this->warehouse_model->delete($id);
		redirect('/warehouse');
	}
}
