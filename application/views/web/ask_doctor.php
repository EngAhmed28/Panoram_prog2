 

<span id="message">



<?php



if(isset($_SESSION['message']))



    echo $_SESSION['message'];



unset($_SESSION['message']);



?>

    </span> 


 <form role="form" action="" method="POST">
 <div class="ask-doctor" style="margin-bottom: 50px;">
         <div class="container">
         
				<div class="row">
				<div class="box-ask">
				 <div class="col-sm-6 col-xs-12 hidden-xs">
              	 <div class="doctor-img">
              	<img src="<?php echo base_url().'asisst/web_asset/img/'  ?>doctor.png">
              </div>
              </div>

				  <div class="col-sm-6 col-xs-12">
				 <div class="ask-form text-center">
				 <h5>أرسل سؤالك لطبيبك المختص وسيقوم بالرد على حضراتكم فى أقرب وقت</h5>
                 
				 <h6>الإسم:</h6>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="الإسم" required>
              	<h6>العنوان:</h6>
              <input type="text" class="form-control" name="city" id="exampleInputEmail1" placeholder="العنوان">
                <h6>البريد الإلكترونى:</h6>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="البريد الإلكترونى" required>
                <h6>رقم الهاتف:</h6>
              <input type="number" class="form-control" name="phone" id="exampleInputEmail1" placeholder=" +2 009665436" required>
                 <h6>اكتب سؤالك:</h6>
               <textarea class="form-control" name="question" rows="3" required></textarea>
               <br />

                <input class="btn btn-lg btn-primary" type="submit" name="send" value="أرسل" />





				</div>
              </div>
             
             
				</div>
		

				</div>
                   </div>
                  </div>
                  
                  </form>