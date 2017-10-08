

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

               يعنى هذا الجزء من الموقع بعرض فيديوهات بانوراما حيث يتم جمعها في مكان واحد ليسهل على القارئ الكريم الاطلاع عليها بسهولة.

                    </p>

                    

                </div>

            </div> 
            </div>
            
            

			<div id="read-more"  class=" m-cont " >	

            <div class="row cont-new-m">
            
            <?php
            if($records)
            foreach($records as $record){
            
            echo '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 news-n text-center">
        		      <iframe src="https://www.youtube.com/embed/'.$record->link.'" width="400" height="281" allowfullscreen=""></iframe>
                      <p class="text-center"><b>'.$record->name.'</b></p>		
                  </div>';
            
           }
            
            ?>
				
				
						</div>
            
		</div>

			</div>
            
            

		</div>	
        </section>

	

	

