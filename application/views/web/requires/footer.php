
		<!-- footer -->
		<footer>
			<div class="container">
				<div class="col-xs-12 ,col-sm-12 col-md-3">
					<a href="<?php echo base_url('web/index');?>">الرئيسية</a>
					<a href="<?php echo base_url('web/about/3');?>">نبذة عن بانوراما</a>
					<a href="<?php echo base_url('web/about/1');?>">الرؤية والرسالة</a>
					<a href="<?php echo base_url('web/about/2');?>">قالوا عن بانوراما</a>
				</div>
				<div class="col-xs-12 ,col-sm-12 col-md-3">
					<a href="<?php echo base_url('web/manager_word');?>">كلمة رئيس مجلس الإدارة</a>
					<a href="<?php echo base_url('web/news/0');?>">أخبار بانوراما</a>
					<a href="<?php echo base_url('web/videos');?>">مكتبة الفيديو</a>
                    <a href="<?php echo base_url('web/career');?>">طلب وظيفة</a>
				</div>
                
                <?php
                if($this->footer){
                $telephone=unserialize($this->footer[0]->tele_info);

                $fax=unserialize($this->footer[0]->fax_info);

                $email=unserialize($this->footer[0]->email_info);
                

                ?>
                
				<div class="col-xs-12 ,col-sm-12 col-md-3 text-center">
					<h4>
						تواصل معنا 
					</h4>
					<?php

                    

                    for($x = 0 ; $x < count($telephone) ; $x++){

                        if($x == 0)

                            echo '<p>ت: '.$telephone[$x];

                        else

                            echo '</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$telephone[$x].'';

                    }

                    

                    for($x = 0 ; $x < count($fax) ; $x++){

                        if($x == 0)

                            echo '<p>ف: '.$fax[$x];

                        else

                            echo '</p><p></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$fax[$x].'';

                    }

                    

                    for($x = 0 ; $x < count($email) ; $x++){

                        if($x == 0)

                            echo '<p>بريد ألكتروني: '.$email[$x];

                        else

                            echo '</p><p></p><p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$email[$x].'';

                    }

                    }

                    ?>
				</div>
				<div class="col-xs-12 ,col-sm-12 col-md-3 text-center">
					<h4>مواقع التواصل الاجتماعية</h4>
					<a href="http://<?php if($this->footer) echo $this->footer[0]->facebook; ?>" class="inline" target="_blank">

					<i class="fa fa-facebook"></i>

					</a>

					<a href="http://<?php if($this->footer) echo $this->footer[0]->twitter; ?>" class="inline" target="_blank">

					<i class="fa fa-twitter"></i>

					</a>

					<a href="http://<?php if($this->footer) echo $this->footer[0]->youtube; ?>" class="inline" target="_blank">
					<i class="fa fa-youtube"></i>
					</a>
				</div>
				<div class="col-xs-12 ,col-sm-12 col-md-3"></div>
			</div>
			
		</footer>
		<div class="container-fluid copy-write">
        <a href="http://alatheertech.com/">
        	&copy; جميع الحقوق محفوظ لشركة الأثير
        </a>
        
			
			</div>



<script src="<?php echo base_url().'asisst/web_asset/js/'  ?>jquery-1.10.1.min.js"></script>
		<script src="<?php echo base_url().'asisst/web_asset/js/'  ?>bootstrap-arabic.min.js"></script>
		<script src="<?php echo base_url().'asisst/web_asset/js/'  ?>custome.js"></script>
		<script src="<?php echo base_url().'asisst/web_asset/js/'  ?>typed.min.js"></script>
		<script src="<?php echo base_url().'asisst/web_asset/js/'  ?>owl.carousel.min.js"></script>
		<script src="<?php echo base_url().'asisst/web_asset/js/'  ?>scroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'asisst/web_asset/js/'  ?>jquery.lightbox-0.5.min.js"></script>


  <script type="text/javascript">
$(function() {
    var s = $('#record').val();
    
    var temp = new Array();
    temp = s.split("/");
    
    for(i = 0; i < temp.length; i++)
      {
        $('.thumbnails' + temp[i] + ' a').lightBox();
      }
     
});

</script>


<script type="text/javascript" src="<?php echo base_url().'asisst/web_asset/js/'  ?>bootstrap-datetimepicker.js" ></script>
<script type="text/javascript" src="<?php echo base_url().'asisst/web_asset/js/'  ?>bootstrap-datetimepicker.fr.js" ></script>


<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });

</script>

<style>
#lightbox-container-image-box {
  max-width:700px ! important; // Or your max-width
  width: 100%; //use 100% of even 90% , see what works for you
}
#lightbox-container-image-box {
  max-height:400px ! important; // Or your max-width
  height: 100%; //use 100% of even 90% , see what works for you
}
#lightbox-container-image-data-box {
  max-width:680px ! important; // Or your max-width
  width: 100%; //use 100% of even 90% , see what works for you
}
#lightbox-nav-btnNext {
  max-height:200px ! important; // Or your max-width
  height: 100%; //use 100% of even 90% , see what works for you
}
#lightbox-nav-btnPrev {
  max-height:200px ! important; // Or your max-width
  height: 100%; //use 100% of even 90% , see what works for you
}
</style>

	</body>
</html>