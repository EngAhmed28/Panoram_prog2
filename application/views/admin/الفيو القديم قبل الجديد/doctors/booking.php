<?php

$day = array('السبت','الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس');

if($_POST['num'] == 1)
{
    echo '<div class="form-group">';
    for($x = 0 ; $x < count($day) ; $x++)
    {
        echo '<label class="col-lg-1 control-label">'.$day[$x].'</label>
              <div class="col-lg-5 input-grup">
              <i class="fa fa-clock-o"></i>
              <input type="text" name="day'.$x.'" class="form-control" placeholder=" المواعيد">
              </div>';
        if($x % 2 != 0)
            echo '</div>
                  <br />
                  <div class="form-group">';
    }
    echo '</div>';
}

elseif($_POST['num'] == 2)
{
    echo '<div class="form-group">';
    for($x = 0 ; $x < count($day) ; $x++)
    {
        $b = $_POST['book'];
        var_dump($b);die;
        if($booking[$x])
            $val = $booking[$x]->time;
        echo '<label class="col-lg-1 control-label">'.$day[$x].'</label>
              <div class="col-lg-5 input-grup">
              <i class="fa fa-clock-o"></i>
              <input type="text" name="day'.$x.'" class="form-control" value="'.$val.'" placeholder=" المواعيد">
              </div>';
        if($x % 2 != 0)
            echo '</div>
                  <br />
                  <div class="form-group">';
    }
    echo '</div>';
}
   
?>

            