<h2 class="text-flat">إدارة البيانات الأساسية <span class="text-sm"><?php echo $title; ?></span></h2>

<ul class="breadcrumb pb30">

    <li><a href="<?php echo base_url().'dashboard' ?>"><i class="fa fa-home"></i> الرئيسية</a></li>



    <li class="active"><?php echo $title; ?></li>

</ul>

<span id="message">

<?php

$day = array('السبت','الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس');

if(isset($_SESSION['message']))

    echo $_SESSION['message'];

unset($_SESSION['message']);

?>
    </span>

<div class="well bs-component" data-sr="wait 0s, then enter left and hustle 100%">

    <?php if(isset($result)):?>

        <!-- <form class="form-horizontal">-->
        <?php echo form_open_multipart('dashboard/update_doctor/'.$result['id'],array('class'=>"form-horizontal",'role'=>"form" ))?>

        <fieldset>

            <legend data-sr="wait 0.3s, then enter left and hustle 100%"><?php echo $title; ?></legend>


            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">إسم الطبيب:</label>
                <div class="col-lg-10 input-grup">
                <i class="fa fa-user-md"></i>

                    <input type="text" id="name"  name="name" value="<?php echo $result['name']; ?>"  class="form-control text-right" placeholder=" إسم الطبيب" required>

                </div>
            </div>
            

            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">الصورة:</label>
                <div class="col-lg-10 input-grup">

                    <input type="file" id="img" name="img" class="form-control text-right" >
                    <span class="help-block"></span>

                </div>
            </div>
            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label"></label>
                <div class="col-lg-10 input-grup">

                    <img src="<?php echo base_url('uploads/thumbs/'.$result['img'])?>" alt="الصورة" class="img-rounded" width="150" height="150">
                    <span class="help-block"></span>

                </div>
            </div>
            
            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">القسم:</label>
                <div class="col-lg-10 input-grup">
                <!--i class="fa fa-sitemap"></i-->

                    <?php
                    
                    echo ' <select id="departments" name="departments" class="form-control" required>

                

                <option value="--قم بإختيار القسم--">--قم بإختيار القسم--</option>';
                
                foreach($departs as $dep):
                
                if($dep->id == $result['departments'])
                    $selected = 'selected';
                else
                    $selected = '';
                
                    echo '<option value='.$dep->id.' '.$selected.'>'.$dep->name.'</option>';
                
                endforeach;
                
                echo '</select>';
                    
                    ?>

                </div>
            </div>
            
            
            
                
                <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">الجوال:</label>
                <div class="col-lg-10 input-grup">
                <i class="fa fa-phone-square"></i>

                    <input type="text" id="phone"  name="phone" value="<?php echo $result['phone']; ?>" class="form-control text-right" placeholder=" الجوال" required>

                </div>
            </div>
            
            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">التخصص:</label>
                <div class="col-lg-10 input-grup">
                <i class="fa fa-wordpress"></i>

                    <input type="text" id="major"  name="major" value="<?php echo $result['major']; ?>" class="form-control text-right" placeholder=" التخصص" required>

                </div>
            </div>
            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">الإيميل:</label>
                <div class="col-lg-10 input-grup">
                <i class="fa fa-at"></i>

                    <input type="text" id="email"  name="email" value="<?php echo $result['email']; ?>" class="form-control text-right" placeholder=" الإيميل" required>

                </div>
            </div>
            
            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">تفاصيل أخرى:</label>
           
                    
                      <div class="col-lg-10 input-grup">
                    <i class="fa fa-list"></i>
                    <textarea type="text" id="details"  name="details" class="form-control text-right"><?php echo $result['details']; ?></textarea>
                </div>

                
            </div> 
            
            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">مواعيد الحجز:</label>
           
                    
                      <div class="col-lg-10 input-grup">
                  <label for="inputUser" class="col-lg-12 control-label">
                  <?php
                  
                  if($booking)
                  {
                      for($z = 0 ; $z < count($booking) ; $z++)
                           echo '<div class="alert alert-danger">'.$day[$booking[$z]->day].' '.$booking[$z]->time.'</div>' ;
                      $book = $booking;
                  }
                  else
                  {
                    echo '<div class="alert alert-danger">لا توجد مواعيد حجز تم تسجيلها</div>' ;
                    $book = '';
                  }
                  ?>
                  </label>
                   
                </div>

                
            </div>
            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label"> </label>
           
                    
                      <div class="col-lg-10 input-grup">
                  
                   <button type="button" class="btn btn-warning" onclick="return load(1);">إضغط للتعديل</button>
                </div>

                
            </div>
            
            
            
           <div id="optionearea1"></div>
            
            
            



            <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">

                <div class="col-xs-10 col-xs-pull-2">

                    <input type="submit" name="update" value="حفظ" class="btn btn-primary" >
                </div>

            </div>

        </fieldset>

        <!-- </form>-->



        <!-- </form>-->

        <?php echo form_close()?>

    <?php else: ?>

        <?php echo form_open_multipart('dashboard/add_doctor',array('class'=>"form-horizontal",'role'=>"form" ))?>
        <fieldset>

            <legend data-sr="wait 0.3s, then enter left and hustle 100%"><?php echo $title; ?></legend>


            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">إسم الطبيب:</label>
                <div class="col-lg-10 input-grup">
                <i class="fa fa-user-md"></i>

                    <input type="text" id="name"  name="name" class="form-control text-right" placeholder=" إسم الطبيب" required>

                </div>
            </div>
            

            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">الصورة:</label>
                <div class="col-lg-10 input-grup">

                    <input type="file" id="img" name="img" class="form-control text-right" required>
                    <span class="help-block"></span>

                </div>
            </div>
            
            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">القسم:</label>
                <div class="col-lg-10 input-grup">
                <!--i class="fa fa-sitemap"></i-->

                    <?php
                    
                    echo ' <select id="departments" name="departments" class="form-control" required>

                

                <option value="--قم بإختيار القسم--">--قم بإختيار القسم--</option>';
                
                foreach($departs as $record):
                
                    echo '<option value='.$record->id.'>'.$record->name.'</option>';
                
                endforeach;
                
                echo '</select>';
                    
                    ?>

                </div>
            </div>
            
            
            
                
                <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">الجوال:</label>
                <div class="col-lg-10 input-grup">
                <i class="fa fa-phone-square"></i>

                    <input type="text" id="phone"  name="phone" class="form-control text-right" placeholder=" الجوال" required>

                </div>
            </div>
            
            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">التخصص:</label>
                <div class="col-lg-10 input-grup">
                <i class="fa fa-wordpress"></i>

                    <input type="text" id="major"  name="major" class="form-control text-right" placeholder=" التخصص" required>

                </div>
            </div>
            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">الإيميل:</label>
                <div class="col-lg-10 input-grup">
                <i class="fa fa-at"></i>

                    <input type="text" id="email"  name="email" class="form-control text-right" placeholder=" الإيميل" required>

                </div>
            </div>
            
            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">تفاصيل أخرى:</label>
           
                    
                      <div class="col-lg-10 input-grup">
                    <i class="fa fa-list"></i>
                    <textarea type="text" id="details"  name="details" class="form-control text-right"></textarea>
                </div>

                
            </div>
            
            <div class="form-group" data-sr="wait 0.6s, then enter bottom and hustle 100%">
                <label for="inputUser" class="col-lg-2 control-label">مواعيد الحجز:</label>
           
                    
                      <div class="col-lg-10 input-grup">
                   <button type="button" class="btn btn-warning" onclick="return load(1);">إضغط للإضافة</button>
                </div>

                
            </div>
            
            
            
           <div id="optionearea1"></div>




            <div class="form-group" data-sr="wait 0.3s, then enter bottom and hustle 100%">

                <div class="col-xs-10 col-xs-pull-2">

                    <button type="reset" class="btn btn-default">إبدأ من جديد ؟</button>

                    <input type="submit"  name="add" value="حفظ" class="btn btn-primary" >
                </div>

            </div>

        </fieldset>
        

        <!-- </form>-->

        <?php echo form_close()?>

    <?php endif?>
</div>



<?php if(isset($records)&&$records!=null):?>



    <table id="no-more-tables" class="table table-bordered" role="table">

        <caption class="text-right text-success"><i class="fa fa-table fa-fw"></i>لوحة التحكم في الإدارة.</p></caption>

        <thead>

        <tr>

            <th width="2%">#</th>

            <th  class="text-right">إسم الطبيب</th>

            <th class="text-right">القسم</th>

            <th width="20%" class="text-right">الإيميل</th>
            
            <th width="20%" class="text-right">التحكم</th>
            
            <th class="text-right">حالة الطبيب</th>

        </tr>

        </thead>
        <tbody>
        <?php $x = 0; ?>
        <?php foreach($records as $record):?>
        <?php 
            $x++; 
            if($record->suspend == 1)
            {
                $class = 'success';
                $title = 'نشط';
            }
            else
            {
                $class = 'danger';
                $title = 'غير نشط';
            }
            foreach($departs as $dep):
                if($dep->id == $record->departments)
                    $depart = $dep->name;
            endforeach;
        ?>
            <tr>
                <td data-title="#"><span class="badge"><?php echo $x?></span></td>
                <td data-title=""><?php echo $record->name?> </td>
                <td  data-title=""><?php echo $depart?></td>
                
                <td  data-title=""><?php echo $record->email?></td>

                <td data-title="التحكم" class="text-center">

                    <a href="<?php echo base_url().'dashboard/update_doctor/'.$record->id?>" class="btn btn-warning btn-xs col-lg-5"><i class="fa fa-pencil"></i> تعديل</a>

                    <a  href="<?php echo base_url().'dashboard/delete_doctor/'.$record->id?>" onclick="return confirm('هل انت متأكد من عملية الحذف ؟');" class="btn btn-danger btn-xs   col-lg-5"><i class="fa fa-trash"></i> حذف</a>

                </td>
                
                <td data-title="" class="text-center">

                    <a href="<?php echo base_url().'dashboard/suspend_doctor/'.$record->id.'/'.$class?>" class="btn btn-<?php echo $class ?> btn-xs col-lg-6"><?php echo $title ?> </a>

                </td>

            </tr>

        <?php endforeach ;?>

        </tbody>

    </table>

    

<?php endif;?>
<style>
.btn-mobileSelect-gen {
display:none!important;
}

#departments {
display:block!important;
}

</style>



<script>
 function load(num){
    
    var dataString = 'num=' + num ;
        $.ajax({
            type:'post',
            url: '<?php echo base_url() ?>/dashboard/add_doctor',
            data:dataString,
            dataType: 'html',
            cache:false,
            success: function(html){
             $('#optionearea1').html(html).toggle();
            } 
        });
    
        return false;
        
    
 }
</script>

<script>
 function load2(num,book){
    
    alert(book);
    var dataString = 'num=' + num + '&book=' + book ;
        $.ajax({
            type:'post',
            url: '<?php echo base_url() ?>/dashboard/add_doctor',
            data:dataString,
            dataType: 'html',
            cache:false,
            success: function(html){
             $('#optionearea1').html(html).toggle();
            } 
        });
    
        return false;
        
    
 }
</script>