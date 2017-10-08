<h2 class="text-flat">إدارة التقارير <span class="text-sm"><?php echo $title; ?></span></h2>

<ul class="breadcrumb pb30">

    <li><a href="<?php echo base_url().'dashboard' ?>"><i class="fa fa-home"></i> الرئيسية</a></li>



    <li class="active"><?php echo $title; ?></li>

</ul>

<?php if(isset($records)&&$records!=null):?>



    <table id="no-more-tables" class="table table-bordered" role="table">

        <caption class="text-right text-success"><i class="fa fa-table fa-fw"></i>لوحة التحكم في الإدارة.</p></caption>

        <thead>

        <tr>

            <th width="2%">#</th>

            <th  class="text-right">إسم العميل</th>

            <th class="text-right">الجوال</th>

        </tr>

        </thead>
        <tbody>
        <?php $x = 1; ?>
        <?php for($x = 0 ; $x < count($records[2]); $x++){ 
            //echo'<pre>';var_dump(next($records[1]));die; ?>
       
            <tr>
                <td data-title="#"><span class="badge"><?php echo ($x+1); ?></span></td>
                <td data-title=""><?php echo $records[2][key($records[2])]->a_name?> </td>
                <td  data-title=""><?php echo $records[2][key($records[2])]->mobile ?></td>
            </tr>

        <?php
            next($records[2]);
         } ?>

        </tbody>

    </table>

    

<?php
else:
echo '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>تنبية!</strong> لا يوجد عملاء مسجلين
</div>';
 endif;?>

