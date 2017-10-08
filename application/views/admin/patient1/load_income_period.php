<?php if(isset($records)&&$records!=null){

var_dump($records);die;

?>



    <table id="no-more-tables" class="table table-bordered" role="table">

        <caption class="text-right text-success"><i class="fa fa-table fa-fw"></i>لوحة التحكم في الإدارة.</p></caption>

        <thead>

        <tr>

            <th width="2%">#</th>
            
            <th  class="text-right">التاريخ</th>

            <th  class="text-right">إسم العميل</th>

            <th class="text-right">رقم الجوال</th>
            
            <th class="text-right">المدفوع</th>

        </tr>

        </thead>
        <tbody>
        
        
        
</tbody>

    </table>

    

<?php 
}
else
echo '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>تنبية!</strong> لا توجد زيارات تمت خلال تلك الفترة
</div>';

?>
