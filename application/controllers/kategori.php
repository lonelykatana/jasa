<?php

class kategori extends CI_Controller {
  public function wordpress()
  {
      $data['wordpress'] = $this->model_kategori->data_wordpress()->result();
      $this->load->view('user/_partials/header');
      $this->load->view('user/wordpress', $data);
      $this->load->view('user/_partials/footer');
  }
  public function website()
  {
      $data['website'] = $this->model_kategori->data_website()->result();
      $this->load->view('user/_partials/header');
      $this->load->view('user/website', $data);
      $this->load->view('user/_partials/footer');
  }

  public function game()
  {
      $data['game'] = $this->model_kategori->data_game()->result();
      $this->load->view('user/_partials/header');
      $this->load->view('user/game', $data);
      $this->load->view('user/_partials/footer');
  }
  public function web()
  {
      $data['web'] = $this->model_kategori->data_web()->result();
      $this->load->view('user/_partials/header');
      $this->load->view('user/web', $data);
      $this->load->view('user/_partials/footer');
  }
  public function mobile()
  {
      $data['mobile'] = $this->model_kategori->data_mobile()->result();
      $this->load->view('user/_partials/header');
      $this->load->view('user/mobile', $data);
      $this->load->view('user/_partials/footer');
  }
  public function desktop()
  {
      $data['desktop'] = $this->model_kategori->data_desktop()->result();
      $this->load->view('user/_partials/header');
      $this->load->view('user/desktop', $data);
      $this->load->view('user/_partials/footer');
  }

}
