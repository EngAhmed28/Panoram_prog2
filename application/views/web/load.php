<?php if($_POST['num']){ ?>

<h6>إسم الطبيب:</h6>
				<select aria-label="Select menu example" onchange="return appoint($('#doc_id').val());" id="doc_id" name="doc_id" required>
				    <option value="">اختر  طبيبك</option>
				    
                     <?php
                    
                    if($records)
                    foreach($records as $doc){
                        
                        echo '<option value="'.$doc->id.'" >'.$doc->name.'</option>';
                    }
                    
                    ?>
                    
                    
				  </select>
                  
                  <?php 
                  }
                  
                  
                  ?>