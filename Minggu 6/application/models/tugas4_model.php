<?php 
class tugas4_model extends CI_Model {
    public function get_data()
	{
        $data_mahasiswa = [
			["nama"=>"M. Tahajudin Arrofi","nim"=>"E31192043"],
			["nama"=>"Aji Sampurno","nim"=>"E31190279"],
			["nama"=>"Ahmad Aji Naufal","nim"=>"E31191401"] 
        ];
        return $data_mahasiswa;
	}
}
?>