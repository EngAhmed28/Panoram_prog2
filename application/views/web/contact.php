



	<section class="latest-news" style="margin-bottom: 50px; margin-top: 0px;">
        <div class="container">

			





			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-6">

            

    <div class="">
            <div class="testmonial_title ">
<h1><?php echo $title ?></h1>
  </div>

            <div class="panel-body">

                <div class="deal-box">

                    

                    <p>

              

                    </p>

                    

                </div>

            </div> 
            </div>        



<span id="message">



<?php



if(isset($_SESSION['message']))



    echo $_SESSION['message'];



unset($_SESSION['message']);



?>

    </span>            

            

            

            

				 <form role="form" action="" method="POST">

						<div class="form-group">

							<label for="exampleInputEmail1">البريد الألكتروني</label>

							<input type="email"  name="email" class="form-control" placeholder="البريد الألكتروني " required >

						</div>

						<div class="form-group">

							<label for="exampleInputEmail1">الإسم</label>

							<input type="text" name="name" class="form-control" placeholder="الإسم" required>

						</div>

						<div class="form-group">

							<label for="exampleInputEmail1">الموضوع</label>

							<input type="text" name="title" class="form-control" placeholder="الموضوع" required>

						</div>

						<div class="form-group">

							<label for="exampleInputEmail1">الرسالة</label>

							<textarea class="form-control" placeholder="اترك رسالتك" name="content" rows="9" required></textarea>

						</div>

                        



                        

                 

						<input class="btn btn-info" type="submit" name="send" value="إرسل" />

					</form>

			</div>

			<!-- news-content -->



			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-6">
         <br /><br /><br /><br />

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3435.156918443588!2d31.012730585134413!3d30.573115381693082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7d6bf7fe428e7%3A0x40056051f2e24c6c!2z2YbYp9iv2Yog2LrYstmEINi02KjZitmGINin2YTZg9mI2YU!5e0!3m2!1sar!2seg!4v1485939994408" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            
            </div>
		

		

		</div>

	</section>