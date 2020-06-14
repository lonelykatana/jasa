<?php

class model_kategori extends CI_Model{
  public function data_wordpress()
  {
    return $this->db->get_where("products",array('kategori' => 'wordpress'));
  }
  public function data_website()
  {
    return $this->db->get_where("products",array('kategori' => 'website'));
  }
  public function data_game()
  {
    return $this->db->get_where("products",array('kategori' => 'game'));
  }
  public function data_web()
  {
    return $this->db->get_where("products",array('kategori' => 'web'));
  }
  public function data_mobile()
  {
    return $this->db->get_where("products",array('kategori' => 'mobile'));
  }
  public function desktop()
  {
    return $this->db->get_where("products",array('kategori' => 'desktop'));
  }
}
