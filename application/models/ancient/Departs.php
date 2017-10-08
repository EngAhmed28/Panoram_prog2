<?php

class Departs extends CI_Model
 {
    public function __construct()
    {
        parent:: __construct();
    }
    public  function record_count(){
        return $this->db->count_all("departments");

    }

    public  function  insert($file,$type){
        $data['name']=$this->input->post('name');
        $data['content']=$this->input->post('content');
        $data['img']= $file;
        $data['type'] = $type;
        $data['date'] = strtotime(date("Y/m/d"));
        $data['date_s'] = time();
        
        $this->db->insert('departments',$data);
    }
    //////////////////////////
///////////selecting data//////////////////


    public function select($type){
        $this->db->select('*');
        $this->db->from('departments');
        $this->db->where('type',$type);
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    
        public function select_depart(){
               $DB1 = $this->load->database('kingdom', TRUE);
        
        $DB1->select('*');
       
        $array = array('hospital_id'=>1);
         $DB1->where($array);
        $query = $DB1->get('all_dep');
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    
    
    
    public function select_web($id,$type){
        $this->db->select('*');
        $this->db->from('departments');
        if($id)
            $array = array('id' => $id,'type' => $type, 'suspend' => 1);
        else
            $array = array('type' => $type, 'suspend' => 1);
        $this->db->where($array);
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    public function select_web_except($id,$type){
        $this->db->select('*');
        $this->db->from('departments');
        
            $array = array('id !=' => $id,'type' => $type, 'suspend' => 1);
        
        $this->db->where($array);
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    /////////////////
    /////delete/////
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('departments');

    }
///////update/////////
    public function getById($id){
        $h = $this->db->get_where('departments', array('id'=>$id));
        return $h->row_array();
    }
    
    public function update($id,$file){
        $update = array(
            'name'=>$this->input->post('name') ,
            'content'=>$this->input->post('content') ,
            'date' => strtotime(date("Y-m-d")),
            'date_s' => time()
        );
        if($file != ''){
            $update['img']=$file ;
        }
        $this->db->where('id', $id);
        if($this->db->update('departments',$update)) {
            return true;
        }else{
            return false;
        }
    }
    
    /////////////////////// Suspend
    
    public function suspend($id,$clas)
    {
        if($clas == 'danger')
        {
            $update = array(
                'suspend' => 1
            );
        }
        else
        {
            $update = array(
                'suspend' => 0
            );
        }
        
        $this->db->where('id', $id);
        if($this->db->update('departments',$update)) {
            return true;
        }else{
            return false;
        }
    }
    
    ///////////////////
    
   

 }