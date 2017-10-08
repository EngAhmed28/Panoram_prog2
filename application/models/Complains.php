<?php

class Complains extends CI_Model
 {
    public function __construct()
    {
        parent:: __construct();
    }
    public  function record_count(){

        return $this->db->count_all("complains");

    }

    public  function  insert($email){
        $data['title']=$this->input->post('title');
        $data['details']=$this->input->post('details');
        $data['type']=$this->input->post('type');
        $data['email'] = $email;
        $data['date'] = strtotime(date("Y/m/d"));
        $data['date_s'] = time();
        $data['phone'] = $this->input->post('phone');
        $data['active'] = 0;
        
        $this->db->insert('complains',$data);
    }
    //////////////////////////
///////////selecting data//////////////////
    public function select($limit,$start,$active){
        $this->db->select('*');
        $this->db->from('complains');
        $this->db->where("active",$active);
        $this->db->order_by('id','DESC');
        $this->db->limit($limit,$start);
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
        $this->db->delete('complains');

    }
    
    /////////////////////////
    
    public  function getallinbox(){
        $this->db->select("*");
        $this->db->from("complains");
        $this->db->where("active",0);
        $query=$this->db->get();
        return $query->result_array();

    }
    
    public function getmessagebyid($id){
     $this->db->select("*");
        $this->db->from("complains");
        $this->db->where("id",$id);
        $query=$this->db->get();
        return $query->row_array();
    }
public function readmessagebyid($id){
      $data['active']=1;
        $this->db->where("id",$id);
        
        if($this->db->update("complains",$data)){
            return true;
        }else{
            return false;
        }

 }

 }