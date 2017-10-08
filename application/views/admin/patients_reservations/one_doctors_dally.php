<style>
    .btn-mobileSelect-gen {
        display:none!important;
    }
    #doctor_id {
        display:block!important;
    }
</style>


<br>


<br>
<div class="well bs-component">
    <fieldset>
        <legend></legend>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">إختر إسم الطبيب </label>
                        <select name="doctor_id"  class="form-control" id="doctor_id" onchange="return doc($('#doctor_id').val());">
                            <option>إختر</option>
                            <?php foreach($doctors as $row) :?>
                                <option value="<?php echo $row->id?>"><?php echo $row->name?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row" id="optionearea1">
            </div>
            <br>
    </fieldset>
</div>

<script>

    function doc(doctor_id){

        var id = doctor_id;
        //    alert(id);
        var dataString = 'doctor_id=' + id ;
        $.ajax({
            type:'post',
            url: '<?php echo base_url() ?>dashboard/report_one_doctors_dally',
            data:dataString,
            dataType: 'html',
            cache:false,
            success: function(html){
                $("#optionearea1").html(html);
            }
        });
        return false;
    }

</script>


