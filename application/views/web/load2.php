<?php

$day = array('السبت','الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس');

if($_POST['id']){
                    ?>
                    
                    <h6>مواعيد الطبيب:</h6>
                    
                    <?php
                    
                    if($records2)
                    foreach($records2 as $appoint){
                        echo '<div class="col-lg-2"></div><h6>'.$day[$appoint->day].' '.$appoint->time.'</h6>';
                    }
                    }