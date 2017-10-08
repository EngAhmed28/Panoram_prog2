

		<section class="latest-news" style="margin-bottom: 50px;margin-top: 0px;">
        <div class="container">



			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-12">
            
            
<div class="">
            <div class="testmonial_title ">
<h1><?php echo $title ?></h1>
  </div>

            <div class="panel-body">

                <div class="deal-box">

                    

                    <p>

               يعنى هذا الجزء من الموقع بعرض أخبار بانوراما وكل ما يتعلق بالقسم الإعلامي حيث يتم جمعها في مكان واحد ليسهل على القارئ الكريم الاطلاع عليها بسهولة.

                    </p>

                    

                </div>

            </div> 
            </div>
            
            

			<div id="read-more"  class=" m-cont " >	

            <div class="row cont-new-m">
            
            <?php
            if($records)
            foreach($records as $record):
            if($record->type == 1)
            $src = '<i> المصدر: <image class="img-circle" style="width:30px;height:30px;" src="'.base_url('uploads/images').'/'.$record->logo.'" /> '.$record->newspaper_name.' </i>';
            else
                $src = '';
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
                            '.$src.'
        					<p>
        					'.word_limiter($record->content,10).'
        					</p>
        				</div> 
        				</a>';
            
            endforeach;
            
            ?>
				
				
						</div>
            
		</div>

			</div>
            
            <div class="text-center">


            <?php
                    echo $links;

            ?>

            </div>

		</div>	
        </section>

	

	

