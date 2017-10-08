

    <!------------------------------------------------->
   

    <!-------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------->
    <div class="news-details" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row">
                
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-7 ">
                    <a >
                        
                        <img src="<?php echo base_url('uploads/images/'.$records[0]->img.'') ?>" alt="" width="450" class="img-responsive">
                    </a>
                    
                    
                    <h1>
                         <span>
                         </span><?php echo $records[0]->name ?></h1>
                         
                      <p>
                      <?php echo $records[0]->content ?>
                    </p>
                
                
                
                  
                    
                </div>
                <br />
                <div class="col-md-1 col-sm-1"></div>
                
                
                <div class="col-md-4 col-sm-4">
                    <div class="row head text-center">
                        <h3> أقسام بانوراما</h3>
                    </div>
                    <div class="row " style="    border: 3px solid #df1c1a; border-radius: 10px; margin-top: 5px;">
                    
                    
                        <div class="row text-center">
                        
                            
                            <?php
                            
                            foreach($records2 as $record){
                            echo '<div class="row ">
                            <a href="'.base_url('web/departs').'/'.$record->id.'">
                            <div class="titel col-md-4 col-sm-4 col-xs-4" >
                                <img src="'.base_url('uploads/images/'.$record->img.'').'" alt="" class="img-thumbnail" style="width:100px;height:100px">
                            </div>
                            <div class=" col-md-6 col-sm-6 col-xs-6 text-left" style="margin-top:20px;">
                              <h1>  '.$record->name.'</h1>
                            </div></a></div><br>';
                            }
                            ?>
                            
                            
                        </div>
                        
                       
                        
                
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------->
    
    
    <style>
    .head{
        
   color: #fff;
    background-color: #df1c1a;
    border-radius: 13px;
    
    } 
     .titel{
        margin-top: 20px;
        margin-right: 20px;
       
     }
     .titel a{
        color:#df1c1a;
     }
    .head h3{
        color:#fff;
        font-size:30px;
        text-shadow:#999 3px 3px 0;
    }
    </style>
  

   