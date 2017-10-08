<!--------------------------------------------------------------------->


<?php if(isset($datas)&&$datas!=null):?>

    <div  class="panel panel-default card-topline-red card lobipanel">
        <div class="panel-body">
            <div class="table-responsive">
                <table id="example" class=" display table table-bordered table-striped table-hover">
                    <thead>
                    <tr class="info">
                        <th class="text-center">م</th>
                        <th class="text-center">اسم الموظف </th>
                        <th class="text-center"> الدرجة </th>
                        <th class="text-center">الراتب الأساسي</th>
                        <th class="text-center"> بدل نقل  </th>
                        <th class="text-center">بدل منصب اشرافي </th>
                        <th class="text-center">بدل طبيعة عمل   </th>
                        <th class="text-center">بدل اتصالات  </th>
                        <th class="text-center">خصم تأمينات  </th>
                        <th class="text-center">إجمالي الراتب  </th>
                        <th class="text-center">مكافأة  </th>
                        <th class="text-center">خصم  </th>
                        <th class="text-center">صافي الراتب  </th>
                    </tr>
                    </thead>
                    <?php
                    $a=1;
                    foreach ($datas as $record ):
                        $query = $this->db->query("SELECT * FROM mon_rewards WHERE emp_id =" .$record['emp_code']);
                        $rewards = 0;
                        foreach ($query->result() as $row)
                        {
                            $rewards+=  $row->value;
                        }
                        $query_kasm = $this->db->query("SELECT * FROM penalty WHERE emp_id =" .$record['emp_code'] .' and  penalty_type = 1');
                        $kasm = 0;
                        foreach ($query_kasm->result() as $row)
                        {
                            $kasm+=  $row->value;
                        }
                        $total_salary = $record['salary'] + $record['b_naql'] + $record['b_eshraf'] + $record['b_amal'] + $record['b_etislat'] - $record['k_tamen'];
                        $safi_salary = $total_salary + $rewards - $kasm;
                        ?>
                        <tr>
                            <td><?php echo $a ?></td>
                            <td><? echo $record['employee'];?></td>
                            <td><? echo $record['degree_id'];?></td>
                            <td><? echo $record['salary'];?></td>
                            <td><? echo $record['b_naql'];?></td>
                            <td><? echo $record['b_eshraf'];?></td>
                            <td><? echo $record['b_amal'];?></td>
                            <td><? echo $record['b_etislat'];?></td>
                            <td><? echo ( $record['k_tamen'] ) ?></td>
                            <td><? echo $total_salary; ?></td>
                            <td><?php echo $rewards; ?></td>
                            <td><?php echo $kasm; ?></td>
                            <td><?php echo $safi_salary; ?></td>
                        </tr>
                        <?php
                        $a++;
                    endforeach;  ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
<? endif; ?>

