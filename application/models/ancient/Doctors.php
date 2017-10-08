<?php

class Doctors extends CI_Model
 {
    public function __construct()
    {
        parent:: __construct();
    }
    public  function record_count(){
        return $this->db->count_all("doctors");

    }

    public  function  insert($file){
        $data['name']=$this->input->post('name');
        $data['details']=$this->input->post('details');
        $data['departments']=$this->input->post('departments');
        $data['phone']=$this->input->post('phone');
        $data['major']=$this->input->post('major');
        $data['email']=$this->input->post('email');
        $data['img']= $file;
        $data['date'] = strtotime(date("Y/m/d"));
        $data['date_s'] = time();
        
        $this->db->insert('doctors',$data);
        
        $doc = $this->select(); 
        
        for($x = 0 ; $x < 6 ; $x++)
        {
            if($this->input->post('day'.$x.''))
            {
                $dd['doctor_id'] = $doc[0]->id;
                $dd['day'] = $x;
                $dd['time'] = $this->input->post('day'.$x.'');
                $dd['date'] = strtotime(date("Y/m/d"));
                $dd['date_s'] = time();
                $this->db->insert('booking',$dd);
            }
        }
        
    }
    //////////////////////////
///////////selecting data//////////////////
    public function select(){
        $this->db->select('*');
        $this->db->from('doctors');
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
    
    public function select_2(){
        $this->db->select('*');
        $this->db->from('doctors');
        $this->db->where('suspend',1);
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
    
    public function select_web($dep){
        $this->db->select('*');
        $this->db->from('doctors');
        $array = array('departments'=>$dep,'suspend' => 1);
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
        $this->db->delete('doctors');

    }
///////update/////////
    public function getById($id){
        $h = $this->db->get_where('doctors', array('id'=>$id));
        return $h->row_array();
    }
    
    public function get_booking($id,$a){
         $this->db->select('*');
        $this->db->from('booking');
        $array = array('doctor_id'=>$id,'day' => $a);
        $this->db->where($array);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    
    public function get_booking1($id){
         $this->db->select('*');
        $this->db->from('booking');
        $array = array('doctor_id'=>$id);
        $this->db->where($array);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    public function update($id,$file){
        
        for($a = 0 ; $a < 6 ; $a++)
        {
            if($this->input->post('day'.$a.''))
            {
                $book = $this->get_booking($id,$a);
                
                if($book)
                {
                    $time['time'] = $this->input->post('day'.$a.'');
                    $array = array('doctor_id'=>$id,'day' => $a);
                    $this->db->where($array);
                    $this->db->update('booking',$time);
                }
                else
                {
                    $dd['doctor_id'] = $id;
                    $dd['day'] = $a;
                    $dd['time'] = $this->input->post('day'.$a.'');
                    $dd['date'] = strtotime(date("Y/m/d"));
                    $dd['date_s'] = time();
                    $this->db->insert('booking',$dd);
                }
            }
        }
        
        
        
        
        $update = array(
            'name'=>$this->input->post('name'),
        'details'=>$this->input->post('details'),
        'departments'=>$this->input->post('departments'),
        'phone'=>$this->input->post('phone'),
        'major'=>$this->input->post('major'),
        'email'=>$this->input->post('email'),
            'date' => strtotime(date("Y-m-d")),
            'date_s' => time()
        );
        if($file != ''){
            $update['img']=$file ;
        }
        $this->db->where('id', $id);
        
        if($this->db->update('doctors',$update)) {
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
        if($this->db->update('doctors',$update)) {
            return true;
        }else{
            return false;
        }
    }
    
    ///////////////////
    
    public  function records_select_user(){

        $query =  $this->db->query( 'SELECT doctors.*

                    FROM doctors

                    LEFT JOIN users ON users.doctor_id = doctors.id

                    WHERE users.doctor_id IS NULL');

                    

        if ($query->num_rows() > 0) {



            foreach ($query->result() as $row) {



                $data[] = $row;



            }



            return $data;



        }



        return false;

        

        

    }
    
    
     public  function records_select_user2($volunteer_id){

        

        $this->db->select('*');



        $this->db->from('doctors');



        $this->db->where('id',$volunteer_id); 

        

        $query = $this->db->get();

                    

        if ($query->num_rows() > 0) {



            foreach ($query->result() as $row) {



                $data[] = $row;



            }



            return $data;



        }



        return false;

        

        

    }

 }