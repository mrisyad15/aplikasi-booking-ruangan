<?php
class M_admin extends CI_Model {

	 function users(){
        $query = $this->db->query('SELECT * FROM tb_user');
        return $query->result();
    }
    function ruangs(){
        $query = $this->db->query('SELECT * FROM tb_ruang_rapat');
        return $query->result();
    }
    function bookings(){
    	$query = $this->db->query('SELECT * FROM tb_booking b join tb_user t on b.id_user= t.id_user join tb_ruang_rapat r on b.id_ruang = r.id_ruang');
        return $query->result();
        /*$this->db->join('tb_user', 'id_user');
        $this->db->join('tb_ruang_rapat', 'id_ruang');
        return $this->db->get('tb_booking')->result();*/
    }
    function edit_booking($id){
    	$query = "SELECT * FROM tb_booking b join tb_user t on b.id_user= t.id_user join tb_ruang_rapat r on b.id_ruang = r.id_ruang where b.id_booking = '$id'";
        return $this->db->query($query)->row();
        /*$this->db->join('tb_user', 'id_user');
        $this->db->join('tb_ruang_rapat', 'id_ruang');
        return $this->db->get('tb_booking')->result();*/
    }

	public function get($table)
	{
		return $this->db->get($table);
	}

	public function delete($table,$primary,$id){
		$this->db->where($primary,$id);
		return $this->db->delete($table);
	}

	public function save($table,$data){
			$this->db->insert($table,$data);
			return $this->db->insert_id();
	}

	public function get_id($table,$primary, $where)
	{
		$this->db->where($primary,$where);
		return $this->db->get($table);
	}

	public function	edit($table,$where,$data){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}


