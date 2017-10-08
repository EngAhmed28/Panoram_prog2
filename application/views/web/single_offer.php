


	<!-- start section offers-->


<section class="offers text-center" style="margin-top: 0px;">
<h1 class="animated infinite flash">اخر العروض المتاحة</h1>
			<div class="container">
				<div id="owl-demo2" class="owl-carousel owl-theme">
				<?php
                if($records7)
                foreach($records7 as $record){
                    $photo2=unserialize($record->image);
                echo '<a href="'.base_url('web/offer').'/'.$record->id.'" title="إضغط للتفاصيل"><div class="item">
                          <div class="flip-container">
                            <div class="front">
                             <img src="'. base_url('uploads/images').'/'.$photo2[0].'" class="img-responsive " style="width:300px;height:300px;" />
                            </div>
                            <div class="back">
                                <h1>'.$record->title.'</h1> 
                                <p>'.word_limiter($record->content,50).' إضغط للمزيد </p>          
                            </div>
                          </div>				
                          	</div></a>';
                
                }
                ?>
			

				</div>
			</div>

</section>
		<!-- End section offers-->


        <!-- Start section main news -->
		<section class="main-offer">
		<div class="container">
				<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-12">
					<h1><?php echo $records[0]->title ?></h1>
					<hr>
					<p><i class="fa fa-bookmark"></i>  <?php echo $records[0]->date ?> <i class="fa fa-user"></i> <?php echo $user['user_name'] ?>  </p>
                    
                    
                    
                    
                    
                    
                    
               
               <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">

			<!-- Indicators -->

			

				<?php

                $k = 0;

                foreach($records as $record):

                $photo1=unserialize($record->image);

                endforeach ;

                for($k1=0;$k1<count($photo1);$k1++){

                    if($k1==0)

                        {$activety='active';}

                    else

                        {$activety='';}

                    echo '

                    <li data-target="#carousel-example-generic1" data-slide-to="'.$k1.'" class="'.$activety.'"></li>';

                    

                } 

                ?>

			</ol>



			<!-- Wrapper for slides -->

			<div class="carousel-inner" role="listbox">

			<?php

                $k = 0;

                foreach($records as $record):

                    $photo=unserialize($record->image);

                endforeach ;

                for($k=0;$k<count($photo);$k++){

                    if($k==0)

                        {$activety='active';}

                    else

                        {$activety='';}

                    echo '<div class="item '.$activety.'">

					      <img src="'.base_url('uploads/images/'.$photo[$k].'').'"  style="width:1920px;height:300px"  alt="...">

				          </div>';

                    }

                

                ?>

			</div>



			<!-- Controls -->

			<a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">

                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

                                <span class="sr-only">Previous</span>

                            </a>

                            <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">

                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

                                <span class="sr-only">Next</span>

                            </a>

                            </div>

					<p></p>
					<h3>تفاصيل العرض </h3>
					 <hr> 

                <p class="lead">
                <?php echo $records[0]->content ?>
                </p>
                
                
                <br />


                
                <div class="col-sm-12 col-xs-12" style="padding-right: 150px;padding-left: 150px;">

                 <div class=" offer-div1 col-sm-6 col-xs-12">
					<div class="top">
						<p class="animated infinite flash">عروضنا جديدة</p>								
					</div>
                 <h3 class=""><i class="fa fa-quote-right" aria-hidden="true"></i> مميزات العروض لدينا   <i class="fa fa-quote-left" aria-hidden="true"></i> </h3>
                 <hr>
                 <ul class="list-unstyled">
                 	<li><i class="fa fa-hand-o-left" aria-hidden="true"></i>  ميزة رقم 1</li><br>
                 	<li><i class="fa fa-hand-o-left" aria-hidden="true"></i> ميزة رقم 2</li><br>
                 	<li><i class="fa fa-hand-o-left" aria-hidden="true"></i>  ميزة رقم 3</li><br>
                 	<li><i class="fa fa-hand-o-left" aria-hidden="true"></i> ميزة رقم 4</li><br>
                 	<li><i class="fa fa-hand-o-left" aria-hidden="true"></i> ميزة رقم 5</li><br>
                 	<li><i class="fa fa-hand-o-left" aria-hidden="true"></i>  ميزة رقم 6</li><br>
                 </ul>
                 </div>				
                 <div class=" offer-div2 col-sm-6 col-xs-12">
					<div class="top">
						<p class="animated infinite flash">عروضنا جديدة</p>								
					</div>
                 <h3 class=""><i class="fa fa-quote-right" aria-hidden="true"></i> كيف تطلب العرض  <i class="fa fa-quote-left" aria-hidden="true"></i></h3>
                 <hr>
                 <ul class="list-unstyled">
                 	<li><i class="fa fa-check-square-o" aria-hidden="true"></i> خطوة رقم 1</li><br>
                 	<li><i class="fa fa-check-square-o" aria-hidden="true"></i> خطوة رقم 2</li><br>
                 	<li><i class="fa fa-check-square-o" aria-hidden="true"></i> خطوة رقم 3</li><br>
                 	<li><i class="fa fa-check-square-o" aria-hidden="true"></i> خطوة رقم 4</li><br>
                 	<li><i class="fa fa-check-square-o" aria-hidden="true"></i> خطوة رقم 5</li><br>
                 	<li><i class="fa fa-check-square-o" aria-hidden="true"></i> خطوة رقم 6</li>
                 </ul>
                 </div>	
                 
                 </div>
                 
                
              <div class="col-sm-12 col-xs-12"><br /></div>
                <hr>
              
              
              
              
              
               <div class="col-sm-12 col-xs-12">
              
              
              
              
              

                  <div class="related-posts text-center">
                  
                  <h2 class="text-left">موضوعات متعلقة بهذا العرض</h2>


                    <?php
                    if($records2){
                    foreach($records2 as $record){
                        $photo3=unserialize($record->image);
                        echo '<div class="col-lg-3">
                               <div class="posts-div">
                               	<img src="'. base_url('uploads/images').'/'.$photo3[0].'" width="100" height="100" alt="">
                               	<h3>'.$record->title.'</h3>
                               	<p>
                                  '.word_limiter($record->content).' 
                                </p>
                               	</div>
                               </div>';
                    }
                    }
                    ?>
                  	
                  </div>
                  
                  
                  
                  
                  
                  
                  </div>
                  
                  
                  
                  

				</div>



				</div>
			</div>
		</section>
		<!-- End section main news -->


