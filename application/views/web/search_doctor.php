<div class="search-doctor" style="margin-top: 50px; margin-bottom: 60px;">
         <div class="container">
         
				<div class="row">
				<div class="box-search">
				 <div class="col-sm-6 col-xs-12 hidden-xs">
              	 <div class="doctor-img">
              	<img src="<?php echo base_url().'asisst/web_asset/img/'  ?>doctor.png">
              </div>
              </div>

				  <div class="col-sm-6 col-xs-12">
				 <div class="search-form text-center">
				 <h5>إختر إسم القسم ثم إضغط على إبحث</h5>
				<form class="widget">

				
				  
				<div class="select">
				  <select  aria-label="Select menu example" id="dep" required >
                  <option value="" >اختر عيادة طبيبك</option>
                  <?php
                  
                  foreach($departs as $record):
                  
                    echo '<option value="'.$record->id.'" >'.$record->name.'</option>';
                  
                  endforeach;
                  
                  ?>
				  </select>
				</div>
				  <button class="btn btn-lg btn-primary" onclick="return search($('#dep').val());">إبحث عن طبيبك</button>

				</form>
				</div>
              </div>
             
             
				</div>
		

				</div>
                   </div>
                  </div>
                  
                  <div id="optionearea1"></div>

		<!-- End section search the doctor -->

		<!-- start section results of searching the doctor -->
        
        
        <script>
 function search(num){
    if(num != '')
    {
        
        var dataString = 'num=' + num ;
        $.ajax({
            type:'post',
            url: '<?php echo base_url() ?>/web/search_doctor',
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
            
            $("#optionearea1").html('');
        }
 }
</script>
	