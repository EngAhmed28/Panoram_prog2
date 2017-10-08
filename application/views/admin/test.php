
<?php  $this->load->view('admin/requires/header');?>
<style>


    ul {
        list-style: none;
        margin: 5px 20px;
    }
    li {
        margin: 10px 0;
    }</style>
<!--<ul>
    <?php foreach ($results_main as $main_row):?>
    <li>
        <input type="checkbox" name="tall" id="tall">
        <label for="tall"><?php echo  $main_row->group_title?></label>
   <?php if(sizeof($main_row->sub) >0){
        ?>
        <ul>
           <?php foreach ($main_row->sub as $sub_row ){?>


            <li>
                <input type="checkbox" name="tall-2" id="tall-2">
                <label for="tall-2"><?php echo  $sub_row->page_title?></label>
                <?php if(sizeof($sub_row->sub) >0){
                ?>
                <ul>
                    <?php foreach ($sub_row->sub as $sub_sub_row ){?>
                    <li>
                        <input type="checkbox" name="tall-2-1" id="tall-2-1">
                        <label for="tall-2-1"><?php echo  $sub_sub_row->page_title?></label>
                    </li>
                   <?php } ?>

                </ul>
                <?php } ?>
            </li>

            <?php } ?>
        </ul>
        <?php } ?>
    </li>
    <?php endforeach;?>
</ul>
-->







<ul>






        <li>

                <input type="checkbox" name="tall" id="tall">

                <label for="tall">sssssssssssssssssssssssss</label>





            <ul>
                <li>
                    <input type="checkbox" name="tall-1" id="tall-1">
                    <label for="tall-1">Buildings</label>
                </li>
                <li>
                    <input type="checkbox" name="tall-2" id="tall-2">
                    <label for="tall-2">Giants</label>

                    <ul>
                        <li>
                            <input type="checkbox" name="tall-2-1" id="tall-2-1">
                            <label for="tall-2-1">Andre</label>
                        </li>
                        <li>
                            <input type="checkbox" name="tall-2-2" id="tall-2-2">
                            <label for="tall-2-2">Paul Bunyan</label>
                        </li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" name="tall-3" id="tall-3">
                    <label for="tall-3">Two sandwiches</label>
                </li>
            </ul>
      


</li>
</ul>















<script>
    $('input[type="checkbox"]').change(function(e) {

        var checked = $(this).prop("checked"),
            container = $(this).parent(),
            siblings = container.siblings();

        container.find('input[type="checkbox"]').prop({
            indeterminate: false,
            checked: checked
        });

        function checkSiblings(el) {

            var parent = el.parent().parent(),
                all = true;

            el.siblings().each(function() {
                return all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
            });

            if (all && checked) {

                parent.children('input[type="checkbox"]').prop({
                    indeterminate: false,
                    checked: checked
                });

                checkSiblings(parent);

            } else if (all && !checked) {

                parent.children('input[type="checkbox"]').prop("checked", checked);
                parent.children('input[type="checkbox"]').prop("indeterminate",
                    (parent.find('input[type="checkbox"]:checked').length > 0));
                checkSiblings(parent);

            } else {

                el.parents("li").children('input[type="checkbox"]').prop({
                    indeterminate: true,
                    checked: false
                });

            }

        }

        checkSiblings(container);
    });


</script>
<?php  $this->load->view('admin/requires/footer'); ?>