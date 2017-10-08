 

<span id="message">



<?php



if(isset($_SESSION['message']))



    echo $_SESSION['message'];



unset($_SESSION['message']);



?>

    </span> 


 <form role="form" action="" method="POST">
<section class="booking" style="margin-bottom: 30px;">
	<div class="booking-doctor">
         <div class="container">
         
				<div class="row">
				<div class="box-booking">
				 <div class="col-sm-6 col-xs-12 hidden-xs">
              	 <div class="booking-img">
              	<img src="<?php echo base_url().'asisst/web_asset/img/'  ?>doctor.png">
              </div>
              </div>

				  <div class="col-sm-6 col-xs-12">
				 <div class="booking-form text-center">
				 <h5>إحجز موعد</h5>
				 <h4 class="text-left">اذا كنت تريد حجز موعد مع الطبيب / العيادة، يرجى ملء النموذج أدناه وانقر على زر أرسل. بعد تلقي المعلومات الخاصة بك سوف نتصل بك في غضون ساعة.</h4>
				 	 <h6>الإسم:</h6>
              <input type="text" class="form-control" name="name" required >
              	<h6>العنوان:</h6>
              <input type="text" class="form-control" name="address" placeholder="مدينة الرياض /..." required>
                   <h6>الجنس:</h6>
                   <div class="col-xs-1">
                   	<div class="radio">
				  <label><input type="radio" name="gender" value="1" required>ذكر</label>
				</div>
                   </div>
                  <div class="col-xs-1">
				<div class="radio">
				  <label><input type="radio" name="gender" value="2" required>أنثى</label>
				</div>
				</div>
				<br><br>
			
                <h6>البريد الإلكترونى:</h6>
              <input type="email" class="form-control" name="email" placeholder="مثال:info@gmail.com " required>
                <h6>رقم الهاتف:</h6>
              <input type="number" class="form-control" name="phone" placeholder="مثال: +2 009665436" required>
               <h6>رقم الملف:</h6>
              <input type="number" class="form-control" name="file_no" placeholder="مثال:#5445">
               <h6>إسم العيادة:</h6>
				<select aria-label="Select menu example" onchange="return search($('#dep').val());" name="dep_id" id="dep" required>
				    <option value="" >اختر عيادة طبيبك</option>
				    <?php
                    
                    if($departs)
                    foreach($departs as $dep){
                        
                        echo '<option value="'.$dep->id.'" >'.$dep->name.'</option>';
                    }
                    
                    ?>
                    
                    
				  </select>
                  
               <div id="optionearea1"><h6>إسم الطبيب:</h6>
				<select aria-label="Select menu example" name="doc_id" required >
				    <option value="">اختر  طبيبك</option>
	
				  </select>
                  </div>
                  
                  <div id="optionearea2"><h6>مواعيد الطبيب:</h6>
                 <h6><hr /></h6>
                  
				
                  </div>

		   <div class="control-group">
		    <h6 >التاريخ :</h6>
                <div class="controls input-append date form_datetime" data-date-format="yyyy/m/d - HH:ii p" data-link-field="dtp_input1">
                    <input name="booking_date" placeholder="اضغط لادخال التاريخ" size="16" type="text" value="" readonly required>
                    <span class="add-on"><i class="icon-remove"></i></span>
					<span class="add-on"><i class="icon-th"></i></span>
                </div>

				<br/>
            </div>
                 

                <input type="submit" name="send" class="btn btn-lg btn-primary" value="أرسل" />





				</div>
              </div>
             
             
				</div>
		

				</div>
                   </div>
                  </div>

</section>
                  
                  </form>
                  
                  
<script>
 function search(num){
    if(num != '')
    {
        
        var dataString = 'num=' + num ;
        $.ajax({
            type:'post',
            url: '<?php echo base_url() ?>/web/booking',
            data:dataString,
            dataType: 'html',
            cache:false,
            success: function(html){
             $("#optionearea1").html(html);
            } 
        });
    
        return false; 
        } 
        else
        {
            
            $("#optionearea1").html('<h6>إسم الطبيب:</h6><select aria-label="Select menu example" name="doc" required ><option value="">اختر  طبيبك</option></select>');
        }
 }
</script>

<script>
 function appoint(num){
    
    if(num != '')
    {
        
        var dataString = 'id=' + num ;
        $.ajax({
            type:'post',
            url: '<?php echo base_url() ?>/web/booking',
            data:dataString,
            dataType: 'html',
            cache:false,
            success: function(html){
             $("#optionearea2").html(html);
            } 
        });
    
        return false; 
        } 
        else
        {
            
            $("#optionearea2").html('<h6>مواعيد الطبيب:</h6><h6><hr /></h6>');
        }
 }
</script>