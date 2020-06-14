<?php

class model_jasa extends CI_Model{
  public function tampil_data(){
    return $this->db->get('products');
  }

  public function detail_jasa($id)
{
  $result = $this->db->where('product_id',$id)->get('products');
  if($result->num_rows() >0){
    return $result->result();
  } else {
    return false;
  }
}
}
