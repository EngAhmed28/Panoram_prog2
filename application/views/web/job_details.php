<section class="requirments">
			<div class="container">
			<div class="row">
            
            
            <?php
            
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
            
            if($recordes){
            
                $time = $recordes['date_s'];
            echo '<div class="col-md-8 col-xs-12">
					<div class="requirments-div col-xs-12" >
					<div class="col-xs-12">
						<div class="requirments-jop">
							<h3>الوظيفة: '.$recordes['job_name'].'</h3>

							<ul class="list-unstyled">
							<li><i class="fa fa-university" aria-hidden="true"></i><strong> اسم الشركة :</strong><a href="">مستشفى بانوراما</a>  </li> </li>
								<li><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>مقر العمل :</strong>'.$recordes['job_place'].'</li>

								<li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>تاريخ الإعلان :</strong>  منذ '.humanTiming($time).'</li>

								<li><i class="fa fa-briefcase" aria-hidden="true"></i><strong>  العمالة المطلوبة : <strong>'.$recordes['workers'].'</li>


							</ul>
							<a href="'.base_url().'web/career'.'"><button class="btn btn-primary btn-lg"> تقدم للوظيفة </button></a>
						</div>
					</div>

					<!--div class="col-xs-3">
						<img src="img/small.png" width="120" height="120" >
					</div-->

						
					</div>

					<div class="col-xs-12 requirments-details-div" >
						<div class="requirments-details">
							<h3>متطلبات الوظيفة</h3>';
                            
       $requires=unserialize($recordes['job_requires']);
            $mode = current($requires);
            $y = 0;
                    for($x = 1 ; $x <= count($requires) ; $x++){
                        
                        if( $y == 0 || $y % 3 == 0){
					echo	'	<div class="col-xs-6">
							<ul class="list-unstyled">';
                            }
						echo '	<li><!--i class="fa fa-university" aria-hidden="true"></i--><strong>'.key($requires).':</strong>  '.$requires[key($requires)].' </li>
								';
					if($x % 3 == 0 || $x == count($requires)){		
						echo '	</ul>
							</div>';
                            }
                            next($requires);
                            $y++;
                            }
							
					echo	'</div>
					</div>
				</div>';
                }
            
            ?>
				

			<div class="jops-sidebar col-md-4 col-xs-12">
				<h3 class="text-center">وظائف شبيهة</h3>
                <?php
                if($recordes2)
                {
                foreach($recordes2 as $record){
                    
                    $time = $record->date_s;
                echo '<div class="col-xs-12">
				<div class="jops-line"></div>			
					<div class="col-xs-12">
                    <a href="'.base_url().'web/job_details/'.$record->id.'">
						<h5>'.$record->job_name.'</h5>
						<h6> '.$record->job_place.'</h6>
						<p>منذ '.humanTiming($time).'</p>
                        </a>
					</div>
					<!--div class="col-xs-3">
						<img src="img/small.png" width="70" height="70">
					</div-->
				</div>

	
				<hr>';
                }
                }
                else
                    echo '<br /><div class="alert alert-danger">لا توجد وظائف مشابهة</div>';
                
                ?>
				
				

				<div class="col-xs-12 text-center ">
					<a href="<?php echo base_url().'web/jobs' ?>"><button class="btn btn-success"> شاهد كل الوظائف</button></a>
				</div>
				<hr>
					
					
				</div>
			</div><!-- end row -->					
			</div><!-- end container -->	
		</section>