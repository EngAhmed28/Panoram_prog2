	<section class="our_team text-center" >
			<div class="team" >
			<div class="container">
			<h1>تعرف على الأطباء العاملين لدينا</h1>
			<div class="row">

			<?php
            if($records){
            foreach($records as $record):
            
            
                echo '<div class="col-lg-3 col-sm-6 col-xs-12">
			<div class="person">
			<img alt="" src="'.base_url().'uploads/images/' .$record->img.'">    
			<p>دكتور/ '.$record->name.'</p>
			<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal'.$record->id.'">تفاصيل</a>
			<a href="'.base_url().'web/ask_doctor/'.$record->id.''.'" class="btn btn-warning" >إسأل الطبيب</a>

			</div>
			</div>';
            
            endforeach;
            }
            else
            {
                echo '
                       <div class="alert alert-danger" >  
                         <h4>لا يوجد نتائج للبحث</h4>
                                  </div>
                      ';
            }
            
            ?>



			</div>

			</div>
			</div>
			<!-- End section Our Team -->

						<!-- Modal -->
                        
                        
      <?php
      
      if($records)
      foreach($records as $record):
      
        echo '<div class="modal fade" id="myModal'.$record->id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h2 class="modal-title" id="myModalLabel">تفاصيل طبيبك</h2>
			      </div>
			      <div class="modal-body">
						<div class="person">
						<p><h1>دكتور/ '.$record->name.'</h1></p>
						<img alt="" style="heught:400px;width:400px;" src="'.base_url().'uploads/images/'.$record->img.'">
                        
                        
                        
                            
						<div class="row">
        <div class="col-sm-3 text-left" style="font-size: 16px;"><b>التخصص:</b></div>
          <div class="col-sm-8 text-left">
            '.$record->major.'
          </div>
        </div>
        
        	<div class="row">
        <div class="col-sm-3 text-left" style="font-size: 16px;"><b>الجوال:</b></div>
          <div class="col-sm-8 text-left">
            '.$record->phone.'
          </div>
        </div>
        
        <div class="row">
        <div class="col-sm-3 text-left" style="font-size: 16px;"><b>البريد الألكتروني:</b></div>
          <div class="col-sm-8 text-left">
            '.$record->email.'
          </div>
        </div>
        
         <div class="row">
        <div class="col-sm-3 text-left" style="font-size: 16px;"><b>تفاصيل أخرى:</b></div>
          <div class="col-sm-8 text-left">
           '.$record->details.'
          </div>
        </div>
        
        
        
						</div>

			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>';
      
      endforeach;
      
      
      ?>
			

		<!-- end section results of searching the doctor -->
        
        	</section>