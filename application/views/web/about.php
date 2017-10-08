

		<section class="latest-news" style="margin-bottom: 150px;margin-top: 2px;">
        <div class="container">



			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-12">

				

		<div class=" cont-new-m">

			<!-- slider -->

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

			

			<!-- Indicators -->

			<ol class="carousel-indicators">

				<?php

                $k = 0;
                
                if($records)

                foreach($records as $record):

                    if($k==0)

                        {$activety='active';}

                    else

                        {$activety='';}

                    echo '<li data-target="#carousel-example-generic" data-slide-to="'.$k.'" class="'.$activety.'"></li>';

                    $k++;

                endforeach ;

                ?>

			</ol>



			<!-- Wrapper for slides -->

			<div class="carousel-inner" role="listbox">

			<?php

                $k = 0;
                if($records)

                foreach($records as $record):

                    if($k==0)

                        {$activety='active';}

                    else

                        {$activety='';}

                    echo '<div class="item '.$activety.'" >

					      <img src="'.base_url('uploads/images/'.$record->img.'').'"  style="width:1920px;height:400px"  alt="...">

				          </div>';

                    $k++;

                endforeach ;

                ?>

			</div>



			<!-- Controls -->

			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>

			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>

		</div>

		<!-- slider -->

			</div>

				<?php

                $k = 0;
                if($records)

                foreach($records as $record):

                    if($k==0)

                        {$activety='active';}

                    else

                        {$activety='';}

                    echo '<h1>'.$record->title.'</h1>

            			  <p>'.$record->content.'</p>';

                    $k++;

                endforeach ;

                ?>

			</div>

			<!-- news-content -->



		

		

		</div>	
        </section>

	

	

