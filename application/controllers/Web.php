<?php
class Web extends CI_Controller
{
    public $footer ;
    public $report;
    public $advert;
    public $voot;
    public $departments;
    public $neew;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','text','permission','form','cookie'));
        $this->load->library('pagination');
        
        $this->load->model('Main_data');
        $this->footer = $this->Main_data->select(1,0);
        
        $this->load->model('Reports');
        $this->report = $this->Reports->select_report();
        
        $this->load->model('Advertising');
        $this->advert = $this->Advertising->select_adver();
        
        $this->load->model('Vote');
        $this->voot = $this->Vote->select_vote();
        
        $this->load->model('Departs');
        //$this->departments = $this->Departs->select_web('',1);
        
        $this->load->model('News');
        $this->neew = $this->News->select_web(6,0,'','');
        
    }
    private function test($data = array())
    {

        echo "<pre>";

        print_r($data);

        echo "</pre>";

        die;

    }

    private function message($type, $text)
    {

        if ($type == 'success') {

            return $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible shadow" data-sr="wait 0s, then enter bottom and hustle 100%"><button type="button" class="close pull-left" data-dismiss="alert">×</button><h4 class="text-lg"><i class="fa fa-check icn-xs"></i> تم بنجاح ...</h4><p>' . $text . '!</p></div>');

        } elseif ($type == 'wiring') {

            return $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" data-sr="wait 0.6s, then enter bottom and hustle 100%"><button type="button" class="close pull-left" data-dismiss="alert">×</button><h4 class="text-lg"><i class="fa fa-exclamation-triangle icn-xs"></i> تحذير هام ...</h4><p>' . $text . '</p></div>');

        } elseif ($type == 'error') {

            return $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" data-sr="wait 0.3s, then enter bottom and hustle 100%"><button type="button" class="close pull-left" data-dismiss="alert">×</button><h4 class="text-lg"><i class="fa fa-exclamation-circle icn-xs"></i> خطآ ...</h4><p>' . $text . '</p></div>');

        }

    }
    private function thumb($data)

    {

        $config['image_library'] = 'gd2';

        $config['source_image'] =$data['full_path'];

        $config['new_image'] = 'uploads/thumbs/'.$data['file_name'];

        $config['create_thumb'] = TRUE;

        $config['maintain_ratio'] = TRUE;

        $config['thumb_marker']='';

        $config['width'] = 275;

        $config['height'] = 250;

        $this->load->library('image_lib', $config);

        $this->image_lib->resize();

    }
    private  function upload_image($file_name){

        $config['upload_path'] = 'uploads/images';

        $config['allowed_types'] = 'gif|Gif|ico|ICO|jpg|JPG|jpeg|JPEG|BNG|png|PNG|bmp|BMP|WMV|wmv|MP3|mp3|FLV|flv|SWF|swf';

        $config['max_size']    = '1024*8';

        $config['encrypt_name']=true;

        $this->load->library('upload',$config);

        if(! $this->upload->do_upload($file_name)){

            return  false;

        }else{

            $datafile = $this->upload->data();

            $this->thumb($datafile);

            return  $datafile['file_name'];



        }


    }
    //////////////////////////////////
    private  function upload_file($file_name){

        $config['upload_path'] = 'uploads/files';

        $config['allowed_types'] = 'gif|Gif|ico|ICO|jpg|JPG|jpeg|JPEG|BNG|png|PNG|bmp|BMP|WMV|wmv|MP3|mp3|FLV|flv|SWF|swf|pdf|PDF|xls|xlsx|mp4|doc|docx|txt|rar|tar.gz|zip';

        $config['max_size']    = '1024*8';

        $config['overwrite'] = true;
        $this->load->library('upload',$config);

        if(! $this->upload->do_upload($file_name)){

            return  false;

        }else {

            $datafile = $this->upload->data();

            return $datafile['file_name'];

        }

    }
    
     private function pagnate($method,$recordcount,$per_page,$segment){
        $config = array();
        $config["base_url"] = base_url() . "Web/".$method;
        $config["total_rows"] = $recordcount;
        $config["per_page"] = $per_page;
        $config["uri_segment"] = $segment;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination" >';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '<li class="disabled"><a href="#">«</a></li>';
        $config['last_link'] = '<li><a href="#">»</a></li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        return $config;
    }
   
    ////////////////////end of excel library option
    
        public function index(){
            $this->load->model('News');
            $this->load->model('Clients');
            $this->load->model('Video');
            $this->load->model('Album');
            
            $data['records']=$this->News->select_web(4,0,'','');
            $data['records2']=$this->News->select_web(6,0,'',4);
            $data['records3']=$this->Clients->select_web(1);
            $data['records4']=$this->Clients->select_web(2);
            $data['records5']=$this->Video->select_web(4,'');
            $data['records6']=$this->Video->select_web(3,1);
            $data['records7']=$this->News->select_web(12,2,'','');
            $data['records8']=$this->Album->select_web(3);
            
            $this->load->model('Slider');
            $data['imgs']=$this->Slider->get_all_img();
            
            $data['title'] ='مجمع عيادات بانوراما';
    
            $data['subview'] = 'web/home';
    
            $this->load->view('index1', $data);
            
    }
    
    public function single_news($id,$type)
        {
            $this->load->model('News');
            $this->load->model('Users');
            
            $data['records']=$this->News->select_web(1,$type,$id,'');
            $data['records2']=$this->News->select_web(4,$type,'','');
            $data['records3']=$this->News->select_except(8,$type,$id,'');
            
            for($r = 0 ; $r < count($data['records']) ; $r++)
                $data['user'][$r]=$this->Users->display($data['records'][$r]->publisher);
            
            $data['title'] ='مجمع عيادات بانوراما';
    
            $data['subview'] = 'web/single_news';
    
            $this->load->view('index1', $data);
        }



   
    
    public function news($type){
            $this->load->model('News');
            
            $config=$this->pagnate('news/'.$type.'',$this->News->record_count($type),10,4);
            $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
            $page = (($page*10)-10);
            if($page<0)
                $page = 0;
            $data['records']=$this->News->select_web($config["per_page"],$type,'',$page);
            $data["links"] = $this->pagination->create_links();
            
            if($type == 0)
                $data['title'] ='أخبار بانوراما';
            
            if($type == 1)
                $data['title'] ='بانوراما في الصحافة';
    
            $data['subview'] = 'web/news';
    
            $this->load->view('index1', $data);
            
    }
    
  
    
    public function about($type){
            
            $this->load->model('About');
            
            $data['records']=$this->About->select_web($type);

            $data['title'] ='نبذة عن مجمع عيادات بانوراما';
    
            $data['subview'] = 'web/about';
    
            $this->load->view('index1', $data);
            
    }
    
    public function manager_word(){
            
            $this->load->model('Manager_word');
            $data['records']=$this->Manager_word->select('',1);

            $data['title'] ='كلمة رئيس مجلس الإدارة';
    
            $data['subview'] = 'web/manager_word';
    
            $this->load->view('index1', $data);
            
    }
    
    public function contact()
    {
        
       if($this->input->post('send'))
       {
            $this->load->model('Contact');
            
            $this->Contact->insert($this->input->post('email'));
            
            $this->message('success',' إرسال الرسالة');
            
            redirect('web/contact');
       }
        
        $data['title'] ='إتصل بنا';
        
        $data['subview'] = 'web/contact';
        
        $this->load->view('index1', $data);
        
    }

   public function offer($id)
    {
        $this->load->model('News');
        $this->load->model('Users');
        
        $data['records7']=$this->News->select_except(12,2,$id,'');
        $data['records']=$this->News->select_web(1,2,$id,'');
        $data['records2']=$this->News->select_except(4,2,$id,12);
        
        $data['user']=$this->Users->display($data['records'][0]->publisher);
              
        $data['title'] ='عروض بانوراما';
        
        $data['subview'] = 'web/single_offer';
        
        $this->load->view('index1', $data);
        
    }
    
     public function videos()
    {
        $this->load->model('Video');
        
        $data['records']=$this->Video->select();
              
        $data['title'] ='فيديوهات بانوراما';
        
        $data['subview'] = 'web/videos';
        
        $this->load->view('index1', $data);
        
    }
    
     public function album()
    {
        $this->load->model('Album');
        
        $data['records']=$this->Album->select();
              
        $data['title'] ='صور بانوراما';
        
        $data['subview'] = 'web/album';
        
        $this->load->view('index1', $data);
        
    }



public function departs($id)
    {
        $this->load->model('Departs');
        
        $data['records']=$this->Departs->select_web($id,1);
        
        $data['records2'] = $this->Departs->select_web_except($id,1);
              
        $data['title'] ='أقسام بانوراما';
        
        $data['subview'] = 'web/departs';
        
        $this->load->view('index1', $data);
        
    }
    
    public function complains()
    {
        $this->load->model('Complains');
        
         if($this->input->post('send'))
           {
                $this->Complains->insert($this->input->post('email'));
                
                $this->message('success',' إرسال الرسالة');
                
                redirect('web/complains');
           }
              
        $data['title'] ='المقترحات والشكاوى';
        
        $data['subview'] = 'web/complains';
        
        $this->load->view('index1', $data);
        
    }
    
    public function search_doctor()
    {
        $this->load->model('Doctors');
        
        $this->load->model('Departs');
        
        $data['departs'] = $this->Departs->select_web('',1);
        
        if($this->input->post('num'))
        {
            if($this->input->post('num') != '')
            {
                $data['records'] = $this->Doctors->select_web($this->input->post('num'));
                
                $this->load->view('web/doctor_result', $data);
            }
        }
        
        
        else{
              
        $data['title'] ='البحث عن طبيبك';
        
        $data['subview'] = 'web/search_doctor';
        
        $this->load->view('index1', $data);}
        
    }
    
    
    public function ask_doctor($id)
    {
        $this->load->model('Question');
        
         if($this->input->post('send'))
           {
                $this->Question->insert($this->input->post('email'),$id);
                
                $this->message('success',' إرسال الرسالة');
                
                redirect('web/ask_doctor/'.$id.'');
           }
              
        $data['title'] ='إسأل طبيبك';
        
        $data['subview'] = 'web/ask_doctor';
        
        $this->load->view('index1', $data);
        
    }
        
  
    
    public function career(){

        $this->load->model('Career');

        if($this->input->post('send'))
        {

            $file= $this->upload_file('file');
            $this->Career->insert($file);

         //   $this->test($_POST);
            $this->message('success',' إرسال طلبك');
            redirect('web/career','refresh');
        }
        $data['title'] ='طلب توظيف';
        $data['subview'] = 'web/career';
        $this->load->view('index1', $data);
    }
    
  /*  public function booking()
    {
              
        $data['title'] ='إحجز موعدك';
        
        $data['subview'] = 'web/booking';
        
        $this->load->view('index1', $data);
        
    }*/
              
public function booking()
    {
        $this->load->model('Doctors');
        $this->load->model('Appointment');
        $this->load->model('Departs');
        
        $data['departs'] = $this->Departs->select_web('',1);
        
        if($this->input->post('send'))
           {
                $this->Appointment->insert();
                
                $this->message('success',' إرسال الرسالة .. من فضلك إنتظر قليلا حتى يتم التأكيد');
                
                redirect('web/booking');
           }
        
        if($this->input->post('num'))
        {
            if($this->input->post('num') != '')
            {
                $data['records'] = $this->Doctors->select_web($this->input->post('num'));
                
                $this->load->view('web/load', $data);
            }
        }
        elseif($this->input->post('id'))
        {
            if($this->input->post('id') != '')
            {
                $data['records2'] = $this->Doctors->get_booking1($this->input->post('id'));
                
                $this->load->view('web/load2', $data);
            }
        }
        else
        {     
            $data['title'] ='إحجز موعدك';
            
            $data['subview'] = 'web/booking';
            
            $this->load->view('index1', $data);
        }
        
    }



public function jobs(){

        $this->load->model('Jobs_advert');
        
        $data['recordes'] = $this->Jobs_advert->select_web('','');

        $data['title'] ='الوظائف';
        $data['subview'] = 'web/jobs';
        $this->load->view('index1', $data);
    }
    
     public function job_details($id){

        $this->load->model('Jobs_advert');
        
        $data['recordes'] = $this->Jobs_advert->getById($id);
        
        $data['recordes2'] = $this->Jobs_advert->select_web(3,$id);

        $data['title'] ='الوظائف';
        $data['subview'] = 'web/job_details';
        $this->load->view('index1', $data);
    }

}

