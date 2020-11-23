<?php 

class StockController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		{

			$this->load->model('Stockmodel');
		}

	}

	public function stock()
	{
		$data = array(
			'title' => 'Stock Barang',
			'breadcrumb' => 'form stock',
			'data_barang' => $this->Stockmodel->get_barang()
		);

		//$data['barang'] = $this->Stockmodel->getbarang();

		$this->load->view('stock_barang', $data);
	}

	
	public function store()
	{
		$data = array(

			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'reference' => $this->input->post('reference'),
			'supplier' => $this->input->post('supplier'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'packaging' => $this->input->post('packaging'),
			'quantity' => $this->input->post('quantity'),
			'lot_number' => $this->input->post('lot_number'),
			'location' => $this->input->post('location'),
			'keterangan' => $this->input->post('keterangan'),
			'process' => $this->input->post('process')
		);

		$this->Stockmodel->save_barang($data);

		$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                               </div>');
		//}
        
        redirect('StockController/stock');
	}


	public function delete_barang($id)
	{

		$this->Stockmodel->delete_barang($id);

		$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible"> Success! data berhasil dihapus didatabase.
                                               </div>');
		//}
        
        redirect('StockController/stock');

		

	}


	public function instock_barang()
	{
		$data = array(

			'title' => 'Instock Barang',
			'breadcrumb' => 'Instock',
			'data_instock' => $this->Stockmodel->get_instock()
		);

		$data['label'] = $this->Stockmodel->get_barang();


		$this->load->view('instock', $data);
	}

	public function instock_store()
	{

		$data = array(

			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'reference' => $this->input->post('reference'),
			'supplier' => $this->input->post('supplier'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'packaging' => $this->input->post('packaging'),
			'quantity' => $this->input->post('quantity'),
			'lot_number' => $this->input->post('lot_number'),
			'location' => $this->input->post('location'),
			'keterangan' => $this->input->post('keterangan'),
			'process' => $this->input->post('process')
		);

		$this->Stockmodel->save_instock($data);

		$this->Stockmodel->save_instock_history($data);

		$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                               </div>');
		//}
        
        redirect('StockController/instock_barang');	
	}

	public function delete_instock($id)
	{
		
		$this->Stockmodel->delete_instock($id);

		$this->Stockmodel->delete_instock_history($id);

		$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible"> Success! data berhasil dihapus didatabase.
                                               </div>');
		//}
        
        redirect('StockController/instock_barang');


	}

}

?>