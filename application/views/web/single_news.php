


		



        <!-- Start section main news -->
		<section class="main-content">
			<div class="container">
				<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-12">
                <?php
                
                $k = 0;

                        foreach($records as $record):
                        
                        if($record->type == 1)
                            $src ='<i > <image class="img-circle" style="width:30px;height:30px;" src="'.base_url('uploads/images').'/'.$record->logo.'" /> '.$record->newspaper_name.' </i>';
                        else
                            $src = '';
                        
                        $photo=unserialize($record->image);
                        
                            echo '<h2>'.$record->title.'</h2>
					<p><i class="fa fa-bookmark"></i>  '.$record->date.'  <i class="fa fa-user"></i> '.$user[$k]['user_name'].'
                    '.$src.'
                       </p>
                <hr> 
			  <img src="'.base_url('uploads/images').'/'.$photo[0].'" align="" width="100%" height="400">

                <p class="lead"> 
                
                '.$record->content.'
                </p>';
                $k++;

                        endforeach ;

                        ?>
					
                   <br>
                <hr>
                <h2>صور ذات صلة بالموضوع  </h2>
                <br>
                <?php
                for($x=1;$x<count($photo);$x++){
                echo '<div class="col-sm-6 col-xs-12">
               <img src="'.base_url('uploads/images').'/'.$photo[$x].'" align="" width="100%" height="300">
               </div>';
               }
                
                ?>

				</div>


							


				</div>
			</div>
		</section>
	



<section class="main-content">
			<div class="container">
				<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-12">
						
                  <?php
                  if($records3){
                  foreach($records3 as $record):
                  $photo=unserialize($record->image);
                  echo '<a href="'.base_url('web').'/single_news/'.$record->id.'/'.$record->type.'">
                  <div class="col-lg-3 col-xs-4 col-sm-6 col-xs-12">
                  
                  
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
          <img src="'.$img.'" width="250" height="150" alt="" >
          </div>';
          
      }
    echo '
        </div>
        </div>';
    echo '
                    
                  
                   	<h3>'.$record->title.'</h3>
                   	<p> '.$record->date.'</p>
                    
                   	<hr>
                   	</div>
                       </a>';
                  endforeach;
                  }
                  ?>  
             
                     
                  
				</div>
				</div></div>
	
