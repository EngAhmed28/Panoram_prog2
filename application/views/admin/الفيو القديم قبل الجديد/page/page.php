
    <div class="col-xs-12 wizard">
        <a href="<?php echo base_url().'dashboard' ?>" class="current btn btn-success"> <i class="fa fa-home" aria-hidden="true"></i>
        </a>
        <?php
        foreach(getpages($_SESSION['role_id_fk'],$group_id) as $page){
            echo '<a href="'.base_url($page->page_link).'" class="btn btn-success"> '.$page->page_title.' </a>';
        }
        ?>
    </div>
    
    <div></div>

<style>
[class^="col-"] {#efefef
    position: relative;
    float: right !important;
  direction: rtl!important;
}
.col-xs-12 wizard{
    direction: rtl !important;
    
}
        .wizard {
            font-size: 10px;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        
        .wizard a {
            padding: 12px 30px 12px 12px;
            margin-left: 5px;
          /*  background: #efefef;*/
            position: relative;
            display: inline-block;
            margin-bottom: 5px;
            color: #fff;
            font-size: 15px;
        }
        
        .wizard a:hover {
            text-decoration: none;
        }
        
        .wizard a:after {
            width: 0;
            height: 0;
            border-top: 23px inset transparent;
            border-bottom: 23px inset transparent;
            border-right: 20px solid #fff;
            position: absolute;
            content: "";
            top: 0;
            right: 0;
        }
        
        .wizard a:before {
            width: 0;
            height: 0;
            border-top: 23px inset transparent;
            border-bottom: 23px inset transparent;
          /*  border-right: 20px solid #efefef;*/
            position: absolute;
            content: "";
            top: 0;
            left: -20px;
            z-index: 2;
        }
        
        .wizard a:first-child:after,
        .wizard a:last-child:before {
            border: none;
        }
        
        .wizard a:last-child {
            -webkit-border-radius: 4px 0 0 4px;
            -moz-border-radius: 4px 0 0 4px;
            border-radius: 4px 0 0 4px;
        }
        
        .wizard a:first-child {
            -webkit-border-radius: 0 4px 4px 0;
            -moz-border-radius: 0 4px 4px 0;
            border-radius: 0 4px 4px 0;
        }
        
        .wizard .badge {
            margin: 0 18px 0 5px;
            position: relative;
            top: -1px;
        }
        
        .wizard a:first-child .badge {
            margin-right: 0;
        }
        
        .wizard .current {
            background: #3294d6;
            color: #fff;
            padding-right: 15px;
        }
        
        .wizard .current:before {
            border-right-color: #3294d6;
        }
        /* ff anti-aliasing bug */
        
        .mywizard li {
            position: relative;
            background: #f5f5f5;
            padding-left: 30px;
            padding-right: 5px;
        }
        
        .mywizard li a:after,
        .mywizard li a:before {
            right: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }
        
        .mywizard li a:after {
            border-color: rgba(245, 245, 245, 0);
            border-right-color: #f5f5f5;
            border-width: 20px;
            top: 50%;
            margin-top: -20px;
            margin-right: -30px;
        }
        
        .mywizard li a:before {
            border-color: rgba(255, 255, 255, 0);
            border-right-color: #fff;
            border-width: 30px;
            top: 50%;
            margin-top: -30px;
            margin-right: -30px;
        }
        
        .mywizard li .badge {
            vertical-align: text-bottom;
            padding-top: 3px;
        }
        /* End of Wizard */
        
        .r-list {
            list-style: none;
        }
        
        .r-list li {
            display: inline-block;
            background-color: #e54c3c;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            font-size: 13px;
            margin-bottom: 5px;
        }

</style>


<script>
$(document).ready(function(){
    $(window).resize(function() {

        ellipses1 = $("#bc1 :nth-child(2)")
        if ($("#bc1 a:hidden").length >0) {ellipses1.show()} else {ellipses1.hide()}
        
        ellipses2 = $("#bc2 :nth-child(2)")
        if ($("#bc2 a:hidden").length >0) {ellipses2.show()} else {ellipses2.hide()}
        
    })
    
});
</script>


