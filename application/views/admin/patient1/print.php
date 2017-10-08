<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asisst/layout/bootstrap-arabic.min.css">
<style>
    table,
    th,
    td {
        border: 1px solid #ccc;
        padding: 10px 20px;
        font-size: 15px;
        text-align: center;
    }
    
    .result {
        font-weight: bold;
    }
    
    .col-xs-12 {
        padding-bottom: 20px;
    }
    
    hr {
        width: 100%;
        border: 1px dotted #999;
    }
    
    .col-xs-6 {
        padding-right: 0;
    }
    
    .bottom {
        padding-bottom: 0;
    }
</style>


    <div id="printdiv" class="header">
        <div class="container">
            <br>
            <div class="col-xs-12">
                <div class="col-xs-4">
                    <h4> الاسم : <span> <?php echo $records[key($records)][0]->a_name ?> </span></h4>
                </div>
                <div class="col-xs-4">
                    <h4> رقم الفاتورة : <span> <?php echo $records[key($records)][0]->date_s ?> </span></h4>
                </div>
                <div class="col-xs-4">
                    <h4 class="pull-right"> التاريخ : <span> <?php echo date("Y/m/d") ?> </span></h4>
                </div>
            </div>
            <div class="col-xs-12">
                <table style="width:100%">
                    <tr>
                        <th class="text-center"> العملية </th>
                        <th class="text-center"> القيمة </th>
                        <th class="text-center"> الخصم </th>
                        <th class="text-center"> القيمه بعد الخصم </th>
                    </tr>
                    
                    <?php
                    $money = 0;
                    $payment = 0;
                    $check = 0;
                    for($x = 0 ; $x < count($records[key($records)]) ; $x++){
                        echo '<tr>
                              <td>'.$operations[$records[key($records)][$x]->operation_id]->operation.'</td>
                              <td>'.$records[key($records)][$x]->operation_price.'</td>
                              <td>'.$records[key($records)][$x]->discount.'%</td>
                              <td>'.sprintf('%.2f',$records[key($records)][$x]->paid).'</td>
                              </tr>';
                              
                        $money += $records[key($records)][$x]->paid;
                        
                        if($records[key($records)][$x]->status == 1 && $check == 0){
                            $DB1 = $this->load->database('kingdom', TRUE);
                            $DB1->select('*');
                            $array = array('hospital_id'=>1,
                            'patient_id'=>$records[key($records)][$x]->p_id,
                            'out_date'=>$records[key($records)][$x]->out_date);
                            $DB1->where($array);
                            $query = $DB1->get('payment');
                            if ($query->num_rows() > 0) {
                                foreach ($query->result() as $row)
                                    $data[] = $row;
                                    $payment += $row->paid;
                            }
                            echo '<pre>';var_dump($data);die;
                            $check = 1;
                        }
                        else
                            $payment += $records[key($records)][$x]->paid;
                    }
                    
                    ?>
                    
                    <tr class="result">
                        <td colspan="3" class="text-center"> الإجمـــــــالي </td>
                        <td class="text-center"> <?php echo sprintf('%.2f',$money) ?> </td>
                    </tr>
                    <tr class="result">
                        <td class="text-center"> المبلغ المدفوع </td>
                        <td class="text-center"> <?php echo sprintf('%.2f',$payment) ?> </td>
                        <td class="text-center"> المتبقى  </td>
                        <td class="text-center"> <?php echo sprintf('%.2f',($money-$payment)) ?> </td>
                    </tr>
                </table>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-8"></div>
                <div class="col-xs-4">
                    <div class="col-xs-12  bottom">
                        <div class="col-xs-6">
                            <h4 class="text-right"> توقيع المحاسب  :</h4>
                        </div>
                        <div class="col-xs-6">
                            <h4> ................................. </h4>
                        </div>
                    </div>
                    <div class="col-xs-12  bottom">
                        <div class="col-xs-6">
                            <h4 class="text-right"> توقيع المستلم    :  </h4>
                        </div>
                        <div class="col-xs-6">
                            <h4> ................................. </h4>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <div class="col-xs-12">
                <div class="col-xs-4">
                    <h4> الاسم : <span> <?php echo $records[key($records)][0]->a_name ?> </span></h4>
                </div>
                <div class="col-xs-4">
                    <h4> رقم الفاتورة : <span> <?php echo $records[key($records)][0]->date_s ?> </span></h4>
                </div>
                <div class="col-xs-4">
                    <h4 class="pull-right"> التاريخ : <span> <?php echo date("Y/m/d") ?> </span></h4>
                </div>
            </div>
            <div class="col-xs-12">
                <table style="width:100%">
                    <tr>
                        <th class="text-center"> العملية </th>
                        <th class="text-center"> القيمة </th>
                        <th class="text-center"> الخصم </th>
                        <th class="text-center"> القيمه بعد الخصم </th>
                    </tr>
                    
                    <?php
                    $money = 0;
                    $payment = 0;
                    for($x = 0 ; $x < count($records[key($records)]) ; $x++){
                        echo '<tr>
                              <td>'.$operations[$records[key($records)][$x]->operation_id]->operation.'</td>
                              <td>'.$records[key($records)][$x]->operation_price.'</td>
                              <td>'.$records[key($records)][$x]->discount.'%</td>
                              <td>'.sprintf('%.2f',$records[key($records)][$x]->paid).'</td>
                              </tr>';
                              
                        $money += $records[key($records)][$x]->paid;
                        
                        if($records[key($records)][$x]->status == 1){
                            $DB1 = $this->load->database('kingdom', TRUE);
                            $DB1->select('*');
                            $array = array('hospital_id'=>1,
                            'patient_id'=>$records[key($records)][$x]->p_id,
                            'out_date'=>$records[key($records)][$x]->out_date);
                            $DB1->where($array);
                            $query = $DB1->get('payment');
                            if ($query->num_rows() > 0) {
                                foreach ($query->result() as $row)
                                    $payment = $row->paid;
                            }
                        }
                        else
                            $payment += $records[key($records)][$x]->paid;
                    }
                        
                    ?>
                    
                    <tr class="result">
                        <td colspan="3" class="text-center"> الإجمـــــــالي </td>
                        <td class="text-center"> <?php echo sprintf('%.2f',$money) ?> </td>
                    </tr>
                    <tr class="result">
                        <td class="text-center"> المبلغ المدفوع </td>
                        <td class="text-center"> <?php echo sprintf('%.2f',$payment) ?> </td>
                        <td class="text-center"> المتبقى  </td>
                        <td class="text-center"> <?php echo sprintf('%.2f',($money-$payment)) ?> </td>
                    </tr>
                </table>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-8"></div>
                <div class="col-xs-4">
                    <div class="col-xs-12 bottom">
                        <div class="col-xs-6">
                            <h4 class="text-right"> توقيع المحاسب  :</h4>
                        </div>
                        <div class="col-xs-6">
                            <h4> ................................. </h4>
                        </div>
                    </div>
                    <div class="col-xs-12 bottom">
                        <div class="col-xs-6">
                            <h4 class="text-right"> توقيع المستلم    :  </h4>
                        </div>
                        <div class="col-xs-6">
                            <h4> ................................. </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
  /*  //Get the HTML of div
    var divElements = document.getElementById("printdiv").innerHTML;
    //Get the HTML of whole page
    var oldPage = document.body.innerHTML;
    //Reset the page's HTML with div's HTML only
    document.body.innerHTML =
        "<html><head><title></title></head><body><div id='printdiv'>" +
        divElements + "</div></body>";
    //Print Page
    window.print();
    //Restore orignal HTML
    // document.body.innerHTML = oldPage;
    setTimeout(function () {location.replace("<?php echo base_url('dashboard/patient#tab3default')?>");}, 500);
</script>
