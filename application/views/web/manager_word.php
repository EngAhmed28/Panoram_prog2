

		<section class="latest-news" style="margin-bottom: 400px; margin-top: 0px;">
        <div class="container">

			


		

		<!-- news-content -->

			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-12">

				

		       

               

                

                <?php
                
                if($records)

                foreach($records as $record):

                    echo '<div class="words">

                                       <h1>كلمة رئيس مجلس الإدارة</h1>
                                       <br/>

                                        <p>

                                            '.$record->content.'

                                        </p>

                    

                                    </div>';

                endforeach ;

                ?>

               

               

                

			</div>

			<!-- news-content -->



		

		

		</div>
          </section>

