
<html>
  <head>
    <title>News Mapping</title>


  </head>
<body>
   <?= $this->extend('Views/admin_panel/admin_dashboard.php') ?>
  <?= $this->section('content') ?>
      <?=csrf_field()?>
                              <?php if(!empty(session()->getflashdata('fail'))):?>
                               <div class="alert alert-danger" id="showalertdanger"><?=session()->getflashdata('fail'); ?></div>
                            <?php endif ?>

                             <?php if(!empty(session()->getflashdata('success'))):?>
                               <div class="alert alert-success" id="showalertsuccess" ><?=session()->getflashdata('success'); ?></div>
                            <?php endif ?>
     <div class="container md-4">
        <div class="row justify-content-center" >
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit News Mapping
                              <a href="<?= base_url('NewsmappingController/index')?>" class="btn btn-danger btn-sm float-right" >Close</a>
                        </h5>
                        
                    </div>
                 <div class="card-body">
                    <form method="POST" action="<?= base_url('updateNewsmapping/'.$editnewsmapping['newsmaping_id']);?>" class="editnewsmapping-form" id="editnewsmapping-form" >
                     <input type="hidden" name="_method" value="PUT" />
                     
                            
                       <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>News Category:</label>
                                   
                                     <select class="form-control input-c" id="inlineFormSelectPref" name="news_category_id" >
                                    <option ><?php echo $editnewsmapping['news_category_id']?></option>
                                   
                                      <?php
                                       foreach($newscategory_user as $data)
                                            {?>
                                          <option value="<?= $data['categoryid'] ?>">
                                              <?php echo $data["name"] ?>
                                             
                                            </option>
                                          <?php

                                       }
                                       ?>
                                  </select>
                                </div>
                                 
                            </div>
                             <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>News Paper:</label>
                                   
                                     <select class="form-control input-c" id="inlineFormSelectPref" name="newspaper_id" >
                                    <option ><?php echo $editnewsmapping['newspaper_id']?></option>
                                  
                                     <?php
                                          
                                          foreach($newspaper_user as $data)
                                            {?>
                                          <option value="<?= $data['newspaper_id'] ?>">
                                            <?php echo $data["name"] ?>
                                            
                                          </option>
                                          <?php
                            
                                        }


                                        ?>

                                    </select>
                                </div>
                                 
                            </div>
                           
                     <div class="col-md-12">
                        <div class="form-group mb-2">
                         <label class="form-label" for="form3Example1q" >News Category Name:</label>
                        <input type="text" id="form3Example1q" class="form-control" name="news_category_name" value="<?= $editnewsmapping['news_category_name']?>"/> 
                        </div> 
                      </div>
                       <div class="col-md-12">
                        <div class="form-group mb-2">
                         <label class="form-label" for="form3Example1q" >Category URL:</label>
                        <input type="text" id="form3Example1q" class="form-control" name="category_url" value="<?= $editnewsmapping['category_url'] ?>"/> 
                       </div>
                      </div>
                     
                      
                     
                      <br/>
                      <button type="submit" class="btn btn-primary float-right" style="">Update</button>

               </form>

          
        </div>
        </div>
      </div>
    
    </div>
  </div>
</div>

 

<script type="text/javascript">
    
      function hideSuccessAlert()
      {
        document.getElementById("showalertsuccess").style.visibility="hidden";
      }setTimeout("hideSuccessAlert()",3000);
</script>

<script type="text/javascript">
      function hidedangerAlert()
      {
          document.getElementById("showalertdanger").style.visibility="hidden";
      }setTimeout("hidedangerAlert()",3000);
   </script>
<?= $this->endSection() ?>
</body>
</html>