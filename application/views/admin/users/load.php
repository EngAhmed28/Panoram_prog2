<?php echo form_open_multipart('dashboard/add_user',array('class'=>"form-horizontal",'role'=>"form" ));





if($_POST['num'] && $_POST['id'] == ''){



        echo'



            <label for="select" class="col-lg-2 control-label">الطبيب</label>


            <div class="col-lg-4">


                <select id="doctor_id" name="doctor_id" class="form-control" required>

                <option value="">--قم بإختيار الطبيب--</option>';

            foreach($result as $record):

            

                echo '<option value="'.$record->id.'">'.$record->name.'</option>';

                        

            endforeach;

      echo '  </select>



            </div>

            ';
        echo'



            <label for="select" class="col-lg-2 control-label">القسم</label>


            <div class="col-lg-4">


                <select id="dep_id" name="dep_id" class="form-control" required>

                <option value="">--قم بإختيار القسم--</option>';

            foreach($departs as $record2):

            

                echo '<option value="'.$record2->id.'">'.$record2->dep_name.'</option>';

                        

            endforeach;

      echo '  </select>



            </div><br />

            ';

            }



elseif($_POST['num'] && $_POST['id']){

    

    echo'



            <label for="select" class="col-lg-2 control-label">الطبيب</label>



            

            

            <div class="col-lg-4">



                <select id="doctor_id" name="doctor_id" class="form-control" required>

                

                <option value="'.$_POST['id'].'">'.$result22[0]->name.'</option>';





            foreach($result as $record):

            

                echo '<option value="'.$record->id.'">'.$record->name.'</option>';

                        

            endforeach;

                   



      echo '  </select>



            </div>

            ';
            
            echo'



            <label for="select" class="col-lg-2 control-label">القسم</label>


            <div class="col-lg-4">


                <select id="dep_id" name="dep_id" class="form-control" required>

                <option value="">--قم بإختيار القسم--</option>';

            foreach($departs as $record2):

            if($record2->id == $user_row['dep_id'])
                $select = 'selected';
            else
                $select = '';

                echo '<option value="'.$record2->id.'" '.$select.'>'.$record2->dep_name.'</option>';

                        

            endforeach;

      echo '  </select>



            </div><br />

            ';

    

    }





 echo form_close();

 

 ?>