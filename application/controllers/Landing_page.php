<?php 

class Landing_page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['jasa'] = $this->model_jasa->tampil_data()->result();
        $this->load->view("user/_partials/header");
        $this->load->view("user/landing_page");
        $this->load->view("user/_partials/footer");

    }
    public function detail($product_id)
    {   
        $data['jasa']=$this->model_jasa->detail_jasa($product_id);
        $this->load->view("user/_partials/header");
        $this->load->view('user/detail_jasa',$data);
        $this->load->view("user/_partials/footer");

    }
    public function tambah_ke_pesanan($id)
  {
    $wifi = $this->model_wifi->find($id);
    $data = array(
        'id'      => $jasa->product_id,
        'qty'     => 1,
        'price'   => $jasa->price,
        'name'    => $jasa->name,

        );
    $this->cart->insert($data);
    redirect('Landing_page');
  }
  public function detail_pesanan()
  {
    $this->load->view('user/_partials/header');
    $this->load->view('pesanan');
    $this->load->view('user/_partials/footer');
  }
  public function hapus_pesanan()
  {
    $this->cart->destroy();
    redirect('Landing_page');
  }
  public function pembayaran()
  {
    $this->load->view('user/_partials/header');
    $this->load->view('pembayaran');
    $this->load->view('user/_partials/footer');
  }

  public function proses_pesanan()
  {
    $is_processed = $this->model_invoice->index();
    if($is_processed){
    $this->cart->destroy();
    $this->load->view('user/_partials/header');
    $this->load->view('proses_pesanan');
    $this->load->view('user/_partials/footer');
  } else {
    echo "Order failed! ";
  }
}
}