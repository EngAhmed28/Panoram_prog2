

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

               يعنى هذا الجزء من الموقع بعرض ألبوم صور بانوراما حيث يتم جمعها في مكان واحد ليسهل على القارئ الكريم الاطلاع عليها بسهولة.

                    </p>

                    

                </div>

            </div> 
            </div>
            
            

			<div id="read-more"  class=" m-cont " >	

            <div class="row cont-new-m">
            
            <?php
            
          
           
           $id = '';
           if($records)
        foreach($records as $record){
            
            $photo8=unserialize($record->img);
            $arr = '';
            for($x = 1 ; $x < count($photo8) ; $x++)
            {
                $arr .= '<a  href="'. base_url('uploads/images').'/'.$photo8[$x].'" ></a>';
            }
            $id .= $record->id.'/';
            
            echo '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 news-n text-center" >
                  <div class="col-md-11">
                    <div class="gallery-div">
                      <figure>
                        <img src="'. base_url('uploads/images').'/'.$photo8[0].'" alt="" class="img-responsive" >
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
                  </div></div>';
        }
        echo '<input type="hidden" name="record" id="record" value="'.$id.'" />';
            
            ?>
				
				
						</div>
            
		</div>

			</div>
            
            

		</div>	
        </section>

	

	

