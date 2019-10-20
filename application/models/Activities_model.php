<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities_model extends CI_Model {

private $table_name = 'tbl_activities';


    public function get_all(){
        // $this->db->select('');
        // $this->db->from('');
        // $this->db->where('', '');

        $result = $this->db->get($this->table_name);
        return $result->result();   // if have where change result() -> row()
    }

    public function insert($data){
        $result = $this->db->insert($this->table_name, $data);
        return $result;
    }

    public function update($data){
        
        $this->db->where('activity_id', $data['activity_id']);
        $result = $this->db->update($this->table_name, $data);
        return $result;
    }

    public function get($activity_id){
        
        $this->db->where('activity_id', $activity_id);
        $result = $this->db->get($this->table_name);
        return $result->row();
    }

    public function delete($activity_id){
        $result = $this->db->delete($this->table_name, array('activity_id' => $activity_id));
        return $result;
    }

}