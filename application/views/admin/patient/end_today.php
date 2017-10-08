<ul class="breadcrumb pb30">
    <li><a href="<?php echo base_url().'dashboard' ?>"><i class="fa fa-home"></i> الرئيسية</a></li>
    <li class="active"><?php echo $title; ?></li>
</ul>
<span id="message">
<?php
if(isset($_SESSION['message']))
    echo $_SESSION['message'];
unset($_SESSION['message']);
?>
    </span>
<div class="well bs-component" >
    <fieldset>
            <table  class="table table-bordered" role="table">
                <thead>
                <tr>
                    <th class="text-right" width="10%">#</th>
                    <th width="25%" class="text-right">إسم المريض</th>
                    <th width="25%" class="text-right">الجوال</th>
                    <th width="16%" class="text-right">المبلغ المدفوع</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                 <?php
          
                 
                 
                 
                 $cout=1;
                 $total3 = 0;
                 if(isset($opration_paid) && $opration_paid !=null && !empty($opration_paid)){
                     foreach ($opration_paid as $row):   ?>
                         <td><?php echo $cout++; ?></td>
                         <td><?php echo $row->a_name; ?></td>
                         <td><?php echo $row->mobile; ?></td>
                         <td><?php echo ($row->paid + $row->first_paid); ?></td>
                             <?php
                         $total3 = ($row->paid + $row->first_paid);
                       endforeach; }?>



                    <?php if(isset($records5) && $records5 != null) { ?>
                        <?php

                        for ($b = 0; $b < count($records5); $b++) {
                            $val = 0;
                            $pay2 = 0;
                            echo '<tr>
                      <td>' . ($cout++) . '</td>
                      <td>' . $records5[key($records5)][key($records5[key($records5)])][0]->a_name . '</td>
                      <td>' . $records5[key($records5)][key($records5[key($records5)])][0]->mobile . '</td>';
                            for ($a = 0; $a < count($records5[key($records5)]); $a++) {
                                for ($z = 0; $z < count($records5[key($records5)][key($records5[key($records5)])]); $z++) {
                                    if ($records5[key($records5)][key($records5[key($records5)])][$z]->status == 0)
                                        $val += $records5[key($records5)][key($records5[key($records5)])][$z]->paid;
                                    else {
                                        $DB1 = $this->load->database('kingdom', TRUE);
                                        $h = $DB1->get_where('payment', array(
                                            'patient_id' => $records5[key($records5)][key($records5[key($records5)])][$z]->p_id,
                                            'hospital_id' => 1,
                                            'out_date' => date("Y-m-d"),
                                            'fatora_num' => $records5[key($records5)][key($records5[key($records5)])][$z]->fatora_num));
                                        $pay = $h->row_array();
                                        $pay2 = $pay['paid']+$pay['other_medical'];
                                    }
                                    next($records5[key($records5)][key($records5[key($records5)])]);
                                }
                                $val += $pay2;
                                $pay2 = 0;
                                next($records5[key($records5)]);
                            }
                            echo '<td>' . sprintf('%.2f', $val) . '</td>
                      </tr>';
                            next($records5);
                           // $total3 += $val;
                            
                            $xx = $val + $total3 ;
                            
                        }// end for each
                    }// end if
                    echo '<tr class="alert alert-success">
                  <td colspan="3">الإجمـــــالي</td>
                  <td>'.sprintf('%.2f',$xx).'</td>
                  </tr>';
                    ?>
                </tr>
                </tbody>
            </table>

    </fieldset>
</div>