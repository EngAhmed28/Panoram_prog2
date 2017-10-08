 <section class="jops" style="margin-bottom: 310px;">
 <h3 class="text-center">أحدث الوظائف الموجودة</h3>
 <div class="container">
 <div class="row">
 
<?php

if($recordes)
foreach($recordes as $record){
    
    $time = $record->date_s;

function humanTiming ($time)
{

    $time = time() - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'سنة',
        2592000 => 'شهر',
        604800 => 'أسبوع',
        86400 => 'يوم',
        3600 => 'ساعة',
        60 => 'دقيقة',
        1 => 'ثانية'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'':'');
    }

}


    echo '<a href="'.base_url().'web/job_details/'.$record->id.'">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs12">
  	<div class="jops-div ">
  	<h4>  '.$record->job_name.'</h4>
  	<h5>مستشفى بانوراما</h5>
    <p>منذ '.humanTiming($time).'</p>
  	</div>
  </div>
  </a>';
  
  }


?>
  

   

  
  
   
 </div><!-- end row -->	
 </div>	<!-- end container -->	
 </section>