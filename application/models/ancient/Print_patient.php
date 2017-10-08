<?php

class Print_patient extends CI_Model
{




    public function select(){
        $DB1 = $this->load->database('kingdom', TRUE);

        $DB1->select('operation.*,patient.a_name,all_dep.dep_name');

        $DB1->from('operation');

        $DB1->join('patient','patient.id=operation.petient_id');
        $DB1->join('all_dep','all_dep.id=operation.dep_id');

        $DB1->limit(1);
        $DB1->order_by('id','DESC');

        $query = $DB1->get();

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;

            }

            return $data;

        }

        return false;


    }
    
    /***************************************************************************************
     * sherif
     * *************************************************************************************
     */

    public function select_payment($hospital_id){
        $DB1 = $this->load->database('kingdom', TRUE);
        $array = array('hospital_id'=>$hospital_id);
       

        
        
         $DB1->select('*');
          $DB1->from('payment a');
         $DB1->join('patient b','b.id=a.patient_id', 'left');
          $DB1->join('operation c','c.petient_id=b.id', 'left');
        
      /*  $DB1->select('payment.*,patient.a_name');
        $DB1->from('payment');
        $DB1->join('patient','patient.id=payment.patient_id');
        //$DB1->join('operation','operation.petient_id=payment.patient_id',);*/
    $DB1->where('c.hospital_id',$hospital_id);
     $DB1->order_by('b.id','desc');
        $query = $DB1->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[$row->a_name][$row->fatora_num] = $row;
            }
            return $data;
        }
        return false;
    }
}