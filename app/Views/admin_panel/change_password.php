<html>
  <head>
    <title>Change Password</title>


  </head>
<body>
   <?= $this->extend('Views/admin_panel/admin_dashboard.php') ?>
  <?= $this->section('content') ?>
      <?=csrf_field()?>
                              <?php if(isset($validation)):?>
                                 <div class="alert alert-danger" ><?= $validation->listErrors(); ?> </div>
                             <?php endif;?>
                              <?php if(!empty(session()->getflashdata('fail'))):?>
                               <div class="alert alert-danger" id="showalertdanger"><?=session()->getflashdata('fail'); ?></div>
                            <?php endif ?>

                             <?php if(!empty(session()->getflashdata('success'))):?>
                               <div class="alert alert-success" id="showalertsuccess" ><?=session()->getflashdata('success'); ?></div>
                            <?php endif ?>
   <div class="container md-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body p-4 p-md-5">
            
                             <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Change Password</h3>
                             <form method="POST" action="<?= base_url('update_password/'.$userdata->id);?>" id="createnews-form" class="px-md-2" enctype="multipart/form-data" >
                                 <input type="hidden" name="_method" value="PUT" />
                                            <?=csrf_field()?>
                                      <div class="form-outline mb-4">
                                         <label class="form-label" for="form3Example1q" >Old Password:</label>
                                        <input type="text" id="form3Example1q" class="form-control" name="old_pass" />
                                       
                                        
                                      </div>
                                      <div class="form-outline mb-4">
                                         <label class="form-label" for="form3Example1q">News Password:</label>
                                        <input type="text" id="form3Example1q" class="form-control" name="new_pass"/>
                                        
                                      </div>
                                      <br/>
                                      <div class="row">
                                        <div class="col-12">
                                          <label class="form-label" for="form3Example1q">Confirm Password:</label>
                                            <input type="text" id="form3Example1q" class="form-control" name="confirm_pass"/>
                                          
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
    </script>

<script type="text/javascript">
    
      function hideSuccessAlert()
      {
         document.getElementById("showalertsuccess").style.display="none";;
      }setTimeout("hideSuccessAlert()",5000);

      function hidedangerAlert()
      {
         document.getElementById("showalertdanger").style.display="none";;
      }setTimeout("hidedangerAlert()",5000);
   </script>
<?= $this->endSection() ?>
</body>
</html>
