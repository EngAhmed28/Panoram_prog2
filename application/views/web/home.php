

		<!-- slider -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top: -20px;">
			<div class="slidershadow">
				&nbsp;
			</div>
			<!-- Indicators -->
			<ol class="carousel-indicators">

<?php   $item=0; ?>

        <?php  foreach ($imgs as $img)



        {

        if($item==0){

        $active="active";

        }else{

        $active="";

        }





      echo'  <li data-target="#carousel-example-generic" data-slide-to="'.$item.'" class="'.$active.'"></li>';

        $item++;

        } ?>



    </ol>



    <!-- Wrapper for slides -->

    <div class="carousel-inner" role="listbox">





        <?php

        if(is_array($imgs)) {

            $item=0;



            foreach ($imgs as $img)

            {



                if($item==0){

                    $active="active";

                }else{

                    $active="";

                }



                echo ' 

 

           

            <div class="item  '.$active.' " >

 

        <img style="height:300px; width:100%;" src = "'. base_url()  .'/uploads/images/'.$img->img.'" >

    </div >';

              $item++;

            }



        }

        ?>



    </div>



			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
		</div>
		<!-- slider -->
		<!-- News -->
		
		<!-- News -->


<section class="latest-news">
	<div class="container">
		<div class="row">
        
        <?php
        
        if($records)
            foreach($records as $record):
            
                $photo=unserialize($record->image);
            
                echo '<a href="'.base_url('web').'/single_news/'.$record->id.'/'.$record->type.'">
        				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div id="myCarousel'.$record->id.'" class="carousel slide" data-ride="carousel">
                                
                                <ol class="carousel-indicators">';
            
                  $item=0; 
            
                     for($x=0;$x<count($photo);$x++)
            
                    {
            
                    if($item==0){
            
                    $active="active";
            
                    }else{
            
                    $active="";
            
                    }
                    
                  echo'  <li data-target="#myCarousel'.$record->id.'" data-slide-to="'.$item.'" class="'.$active.'"></li>';
            
                    $item++;

        }         
                echo '</ol>
                      <div class="carousel-inner" role="listbox">';

    for($x=0;$x<count($photo);$x++){

        if($x==0){

            $active='active';

        }else{

            $active='';

        }

        $img = base_url('uploads/images').'/'.$photo[$x];

    echo '<div class="item '.$active.'">
          <img class="img-responsive img-thumbnail" src="'.$img.'" title="" style="height:300px;width:300px" />
          </div>';
          
      }
    echo '
        </div>
        <!--a class="left carousel-control" href="#myCarousel'.$record->id.'" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>

    <a class="right carousel-control" href="#myCarousel'.$record->id.'" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a-->


        </div>';
        		echo '<h4>'.$record->title.'</h4>
        					<span class="history"> '.$record->date.' </span>
        					<p>
        					'.word_limiter($record->content,50).'
        					</p>
        				</div>
        
        			</a>';
            
            endforeach ;
        
        ?>

		</div>
		<div class="row text-center">
		<button id="button-read" onclick="document.getElementById('button-read').style.display='none'" 
onclick="document.getElementById('button-less').style.display='block'" type="button" class="btn btn-info btn-lg" data-toggle="collapse" data-target="#read-more">إقرأ المزيد</button>
		</div>

	</div>
</section>


		<!-- content div -->
		<div id="read-more"  class="container m-cont collapse" >
			<!-- news-content -->
			<div class="row cont-new-m">
            
            <?php
            if($records2)
            foreach($records2 as $record):
            
                echo '<a href="'.base_url('web').'/single_news/'.$record->id.'/'.$record->type.'" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 news-n">
        				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <div id="myCarousell'.$record->id.'" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">';
                
                $photo=unserialize($record->image);

                for($x=0;$x<count($photo);$x++){
            
                    if($x==0){
            
                        $active='active';
            
                    }else{
            
                        $active='';
            
                    }
            
                    $img = base_url('uploads/images').'/'.$photo[$x];
            
                echo '
            
                  <div class="item '.$active.'">
            
                    <img class="img-responsive img-thumbnail" src="'.$img.'" title="" />
            
                  </div>';
            
                }
                echo '</div>
                    </div>';
                        
                            
        		echo '</div>
        				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
        					<h4>'.$record->title.'</h4>
        					<span class="history"> '.$record->date.' </span>
        					<p>
        					'.word_limiter($record->content,10).'
        					</p>
        				</div> 
        				</a>';
            
            endforeach;
            
            ?>
				
				
						</div>
                        <div class="row text-center cont-new-m">
			<button id="button-less" onclick="document.getElementById('button-read').style.display='inline-block'" type="button" class="btn btn-info btn-lg" data-toggle="collapse" data-target="#read-more"> أقرأ أقل </button>
			</div>

					</div>









		<!-- start section offers-->


<section class="offers text-center">
<h1>اخر العروض المتاحة</h1>
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



		<!-- start section image collection -->
     <section class="gallery content-section">
    <div class="gallery_title ">
    <h1>مكتبة صور</h1>
  </div>
  

  <div class="container">
    <div class="row text-center">
  

      <div class="container">
        <div class="row">
        
        <?php
        $id = '';
        if($records8)
        foreach($records8 as $record){
            
            $photo8=unserialize($record->img);
            $arr = '';
            for($x = 1 ; $x < count($photo8) ; $x++)
            {
                $arr .= '<a  href="'. base_url('uploads/images').'/'.$photo8[$x].'" ></a>';
            }
            $id .= $record->id.'/';
            
            echo '<div class="col-md-4">
                    <div class="gallery-div">
                      <figure>
                        <img src="'. base_url('uploads/images').'/'.$photo8[0].'" alt="" class="img-responsive">
                        <figcaption>
                          <p><br/><br/><br/><br/></p>
                          <ul>
                            <li><a href="http://facebook.com" class="inline" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
                            <li><a href="http://twitter.com" class="inline" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
                            <li><a href="http://linkedin.com" class="inline" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
        
                          </ul>
                          <div class="thumbnails'.$record->id.'">
                          <button>
                          <a  href="'. base_url('uploads/images').'/'.$photo8[0].'" >show</a> 
                          '.$arr.' 
                          </button>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                  </div>';
        }
        echo '<input type="hidden" name="record" id="record" value="'.$id.'" />';
        ?>

          

        </div>
      </div>

    </div>
  </div>


</section>


		<!-- End section image collection -->



<!-- Start section video and tabs designs -->

<section id="video-fact">
  <div class="video_title">
    <h1>مكتبة فيديوهات</h1>
  </div>
    <div class="container">
         <div class="row">
                 <div class="col-md-6 ">
                    <div class="landing-video">
                        <div class="video-embed wow fadeIn" data-wow-duration="1s">
                                <!-- Change the url -->
                            <iframe src="https://www.youtube.com/embed/<?php echo $records5[0]->link ?>" width="350" height="281" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 ">
    
    <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">

        <?php
        $con = 0;
        if($records5)
        foreach($records5 as $record){
            if($con == 0){
                $t = 'true';
                $in = 'in';
            }
            else{
                $t = 'false';
                $in = '';
            }
            echo '<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading'.$record->id.'">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne'.$record->id.'" aria-expanded="'.$t.'" aria-controls="collapseOne'.$record->id.'">
                         '.$record->name.'
                        </a>
                      </h4>
                    </div>
                
                    <div id="collapseOne'.$record->id.'" class="panel-collapse collapse '.$in.'" role="tabpanel" aria-labelledby="heading'.$record->id.'">
                      <div class="panel-body">
                     '.$record->details.'
                      </div>
                    </div>
                  </div>';
            $con++;
        }
        ?>


</div>
     </div> 

        </div><!-- row End -->

        <div class="row">
        <div class="videos-collection">
        
        <?php
        $con = 0;
        if($records6)
        foreach($records6 as $record){
           
            echo '<div class="col-md-4 ">
                    <div class="landing-video">
                        <div class="video-embed wow fadeIn" data-wow-duration="1s">
                                <!-- Change the url -->
                            <iframe src="https://www.youtube.com/embed/'.$record->link .'" width="350" height="281" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>';
            
        }
        ?>
        	    
                  
                 

             </div>

        </div>
        
        <div class="row text-center">
        <a href="<?php echo base_url('web/videos');?>"><button class="text-center btn-default btn-lg">حمل أكثر</button></a>
        	                             

        </div>



    </div>
</section>
<!-- End section video and tabs designs -->





<!-- Start Section companies-->


<section id="pr_sec" >
<div class="companies_title ">
    <h1>شركات التأمين</h1>
  </div>
  <div class="container">
    <div class="row">
    <?php
    $color = 1;
    if($records4)
    foreach($records4 as $record){
                
                
               
                echo '<div class="col-lg-3" style="width:22%" data-toggle="modal" data-target="#myModal'.$record->id.'">
                        <div class="service" style="padding:0px 0;">           
                          <i id="icolor'.$color.'" >
                          <img class="img-rounded" alt="" src="'. base_url().'uploads/images/'.$record->img.'" style="height:225px;width:225px;"></i>
                          <h1>'.$record->name.'</h1>
                          <div style=" border :1px solid #fcb435;" class="service_hoverly">
                            <i id="icolor'.$color.'">
                            <img class="img-circle" alt="" src="'. base_url().'uploads/images/'.$record->img.'" style="height:120px;width:120px;"></i>
                            <h1>'.$record->name.'</h1>
                            <p>'.word_limiter($record->content,3).'</p>
                            <p>إضغط لمزيد من التفاصيل</p>
                          </div>
                        </div>
                      </div>      ';
                      
                echo '<div class="modal fade" id="myModal'.$record->id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                         <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">'.$record->name.'</h4>
                              </div>
                          <div class="modal-body">
                               <br/>
                                <div class="row">
                                  
                                  <div class="col-sm-12">
                                  <img class="img-rounded" alt="" src="'. base_url().'uploads/images/'.$record->img.'" style="height:300px;width:500px;">
                                  </div>
                                </div><br/>
                                <div class="row">
                                  
                                  <div class="col-sm-12"><p class="lead">'.$record->content.'</p></div>
                                </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
                          </div>
                        </div>
                      </div>
                    </div>';
                        
               $color++;
                
            }
            ?>
       

    </div>
  </div>
</section>

<!-- End Section companies-->




<!-- Start testmonial Slider (carousel)-->


<section  class="testmonial text-center ">
<div class="testmonial_title ">
<h1>اراء بعض عملاء شركتنا </h1>
  </div>


<div class="container">
<div class="row">

<div id="testmo" class="carousel slide" data-ride="carousel">
 

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
  <?php
        $a = 0;
        if($records3)
            foreach($records3 as $record){
                
                if($a == 0)
                    $active = 'active';
                else
                    $active = '';
                
                echo '<div class="item '.$active.'">
                         <div class="says">
                    <p class="lead">'.$record->content.'</p>
                          <span>'.$record->name.'</span>
                          </div>
                        </div>';
                        
                    $a++;
                
            }
            
            ?>
  
    
    
    
   
    
    
   
    
  </div>
   <!-- Indicators -->
  <ol class="carousel-indicators hidden-xs " >
   <?php
        $aa = 0;
        if($records3)
            foreach($records3 as $record){
                
                if($aa == 0)
                    $active = 'active';
                else
                    $active = '';
                
                echo '<li data-target="#testmo" data-slide-to="'.$aa.'" class="'.$active.'">
                        <img alt="" src="'. base_url().'uploads/images/'.$record->img.'" style="height:80px;">
                        </li>';
                        
                    $aa++;
                
            }
            
            ?>
  
    
   
    
     
     
  </ol>

</div>

</div>
</div>
</section>

	<!-- 
<section  class="testmonial text-center ">
	
		<div class="container-fluid logo-container">
			<div class="container">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>
					<div class="item"><img src="<?php echo base_url().'asisst/web_asset/img/'  ?>small.png" class="img-responsive " title="" />
					</div>

				</div>
			</div>
		</div>
		
</section>
-->

<section class="show-map text-center">
<a id="change-btn"  data-toggle="collapse" data-target="#show_map" > اضغط هنا لعرض الخريطة  <i class="
animatable2 fadeInDown animated infinite fa fa-chevron-down" aria-hidden="true"></i>
</a>
  
</section>
<div id="show_map" class="collapse">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3435.156918443588!2d31.012730585134413!3d30.573115381693082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7d6bf7fe428e7%3A0x40056051f2e24c6c!2z2YbYp9iv2Yog2LrYstmEINi02KjZitmGINin2YTZg9mI2YU!5e0!3m2!1sar!2seg!4v1485939994408" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>  
</div>


<style>

          .carousel-inner > .item > img,

          .carousel-inner > .item > a > img {

              width: 70%;

              margin: auto;

          }

</style>











