<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		


		<link rel="stylesheet" href="<?php echo base_url().'asisst/web_asset/css/'  ?>bootstrap-arabic-theme.min.css" />
		<link rel="stylesheet" href="<?php echo base_url().'asisst/web_asset/css/'  ?>bootstrap-arabic.min.css" />
		<link rel="stylesheet" type="text/css" href="http://www.fontstatic.com/f=cairo" />
		<link rel="stylesheet" href="<?php echo base_url().'asisst/web_asset/css/'  ?>custome.css">
		<link rel="stylesheet" href="<?php echo base_url().'asisst/web_asset/css/'  ?>font-awesome.min.css">
		<title><?php echo $title;  ?></title>
		<link href="<?php echo base_url().'asisst/web_asset/css/'  ?>bootstrap-datetimepicker.min.css" rel="stylesheet" >
		<link href="<?php echo base_url().'asisst/web_asset/img/'  ?>logo1.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
		<!-- Important Owl stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url().'asisst/web_asset/css/'  ?>owl.carousel.css">

		<!-- Default Theme -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asisst/web_asset/css/'  ?>jquery.lightbox-0.5.css">
		<link rel="stylesheet" href="<?php echo base_url().'asisst/web_asset/css/'  ?>owl.theme.css">
	      <link rel="stylesheet" href="<?php echo base_url().'asisst/web_asset/css/'  ?>scroll.css">
	    <link rel="stylesheet" href="<?php echo base_url().'asisst/web_asset/css/'  ?>style.css">
        <link rel="stylesheet" href="<?php echo base_url().'asisst/web_asset/css/'  ?>animate.css">
        
        <link rel="stylesheet" href="<?php echo base_url().'asisst/web_asset/'  ?>cssslider_files/csss_engine1/style.css">

			<style>
			/* code for animated blinking cursor */
			.typed-cursor {
				opacity: 1;
				font-weight: 100;
				-webkit-animation: blink 0.7s infinite;
				-moz-animation: blink 0.7s infinite;
				-ms-animation: blink 0.7s infinite;
				-o-animation: blink 0.7s infinite;
				animation: blink 0.7s infinite;
			}
			@-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
			}
			@-webkit-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
			}
			@-moz-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
			}
			@-ms-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
			}
			@-o-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
			}
		</style>
	</head>
	<script type="text/javascript">
		 $(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-static-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-static-top").removeClass("top-nav-collapse");
    }
});
	</script>
	</head>
	<body data-spy="scroll" data-target=".navbar-static-top">
    
    <!-- top Navbar -->
		<section class="top-navbar  visible-lg">
			<div class="container">

			<p>
              		 <script type='text/javascript'>
	            		
						var months = ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(day + " " + months[month] + " " + year);
						
						</script>
             </p>

				<a href="http://<?php if($this->footer) echo $this->footer[0]->facebook; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="http://google.com" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				
				<a href="http://skype.com" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a>
				<a href="http://<?php if($this->footer) echo $this->footer[0]->twitter; ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a class="list-news">أخر الأخبار:</a>

                <a class="marq"><MARQUEE onmouseover=this.stop(); onmouseout=this.start(); scrollAmount=5 scrollDelay=5 direction=right height=40 width=600>
                    <?php
                    if($this->neew)
                    for($x = 0 ; $x < count($this->neew) ; $x++)
                    {
                        echo '<a href="'.base_url('web').'/single_news/'.$this->neew[$x]->id.'/'.$this->neew[$x]->type.'" >'.$this->neew[$x]->title.'</a> | ';
                    }
                    
                    ?>

				</MARQUEE></a>



			</div>
		</section>
        
		<!-- Navbar -->
		
        
        
        
        
        <nav class="navbar navbar-default navbar-static-top"
 role="navigation" data-spy="affix" data-offset-top="50" ">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url('web/index');?>">
					<img src="<?php if($this->footer) echo base_url().'uploads/images/'.$this->footer[0]->logo // echo base_url().'asisst/web_asset/img/'  ?>" /></a>
				   </div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
				

	<li  class="dropdown mega-dropdown "> 
        <a id="" href="<?php echo base_url('web/index');?>" class="dropdown-toggle" data-toggle="dropdown">الرئيسية <span class="caret"></span> </a>
          <ul  class="dropdown-menu mega-dropdown-menu">
            
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">عن بانوراما</li>
                <li><a href="<?php echo base_url('web/about/3');?>">نبذة عن بانوراما</a></li>
                <li><a href="<?php echo base_url('web/about/1');?>">الرؤية والرسالة</a></li>
                <li><a href="<?php echo base_url('web/manager_word');?>">كلمة رئيس مجلس الإدارة</a></li>
                <li><a href="<?php echo base_url('web/about/2');?>">قالو عن بانوراما</a></li>
                <li><a ><br /></a></li>

                <li class="divider"></li>
                <li class="dropdown-header">أقسام مجمع بانوراما الطبي</li>
                <?php
                                if($this->departments)
                                for($x = 0 ; $x < count($this->departments) ; $x++)
                                {
                                    echo '<li>
            									<a href="'.base_url('web/departs').'/'.$this->departments[$x]->id.'">'.$this->departments[$x]->name.'</a>
            							  </li>';
                                }
                                ?>    
               

              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">خدمات المراجعيين</li>
                <li><a href="<?php echo base_url('web/search_doctor');?>">ابحث عن طبيبك</a></li>
                <li><a href="<?php echo base_url('web/ask_doctor/0');?>">إسأل طبيبك</a></li>
                <li><a href="<?php echo base_url('web/booking');?>">إحجز موعدك</a></li>
                <li><a href="#">الخدمات الطبية المساعدة</a></li>
                <li>
				<a href="<?php echo base_url('web/complains');?>">المقترحات الشكاوي</a>
                </li>
                   <li class="divider"></li>
                <li class="dropdown-header">المركز الإعلامي</li>
                <li>
									<a href="<?php echo base_url('web/news/0');?>">اخبار بانوراما</a>
								</li>
								<li>
									<a href="<?php echo base_url('web/album');?>">مكتبة الصور</a>
								</li>
								<li>
									<a href="<?php echo base_url('web/videos');?>">مكتبة الفيديو</a>
								</li>
								<li>
									<a href="<?php echo base_url('web/news/1');?>">بانوراما في الصحافة</a>
								</li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">الوظائف</li>
                <li>
								<a href="<?php echo base_url('web/jobs');?>">إعلان وظيفة</a>
								</li>
								<li>
									<a href="<?php echo base_url('web/career');?>">طلب وظيفة</a>
								</li>

                                  

              </ul>
            </li>
          </ul>
        </li>

			<li>
		<a href="<?php echo base_url('web/contact');?>">اتصل بنا</a>
		</li>
        
        
        	
			
  <li>
                       <a href="https://al-mamlakh.com/">بوابة المملكة</a>
                    </li>
                    
                    				<li>
		<a href="<?php echo base_url();?>/login">تسجيل الدخول </a>
		</li>
                    
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<!-- Navbar -->
		<!-- Navbar -->