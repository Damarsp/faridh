<?php

class Model_keterangan extends CI_Model{
	
	function tampilkan_data()
	{
		return $this->db->get('keterangan');
	}

	function post(){
		$data=array(
					'nama_keterangan'=> $this->input->post('keterangan')
					);
		$this->db->insert('keterangan',$data);
	}

	function edit()
    {
        $data=array(
           'nama_keterangan'=>  $this->input->post('keterangan') );
        $this->db->where('id_keterangan',$this->input->post('id'));
        $this->db->update('keterangan',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('id_keterangan'=>$id);
        return $this->db->get_where('keterangan',$param);
    }

    function delete($id)
    {
        $this->db->where('id_keterangan',$id);
        $this->db->delete('keterangan');
    }
}