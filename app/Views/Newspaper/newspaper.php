
<html>
  <head>
    <title>Newspaper</title>


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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <form  method="get" action="<?= base_url("searchNewspaper")?>" id="search_form">
                            <div class="input-group rounded col-md-3 float-right"  >
                              <input type="search" name="search" class="form-control rounded" placeholder="" aria-label="Search" />
                             <input type='submit' class="btn btn-primary" id='btnsearch' value='Search'>
                           </div>
                         </form>
                        <h5>
                              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#createModal">
                                 Create Newspaper
                              </button>
                        </h5>
                        <br/>
                       
                        
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered" style="margin-top: 20px;">
                        <thead >
                          <tr>
                             
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">icon</th>
                            <th scope="col">is_active</th>
                            <th scope="col">is_urdu</th>
                            <th scope="col">Action</th>
                          </tr>

                        </thead>
                        <tbody >
                          <?php 
                         
                          foreach($users as $data) 
                          {
                              ?>
                              <tr>
                           
                            <td><?php echo $data["newspaper_id"];?></td>
                            <td><?php echo $data["name"];?></td>
                           
                              <td>
                                     <img src="<?="../uploads/".$data['icon'];?>" alt="image" height="20";width="20">
                              
                            </td>
                            
                            <td><?php echo $data["is_active"];?></td>
                            <td><?php echo $data["is_urdu"];?></td>
                            <td>
                              <a href="<?= base_url('editNewspaper/'.$data['newspaper_id']);?>" type="button" class="btn btn-primary">Edit</a>
                              |
                               <a href="<?= base_url('deleteNewspaper/'.$data['newspaper_id']);?>" type="button" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>

                          <?php } ?>
                          
                         
                      </tbody>
                    </table>
                    <div class="row justify-content-center">
                      <?= $pager->links() ?>
                    </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
         
     </div>
  
<!--------------------------------------------------- Create News Model------------------------------------------------>
<div id="createModal" class="modal" data-backdrop="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
      </div>
      <div class="modal-body">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Create New Newspaper</h3>

             <form method="POST" action="<?= base_url('createnewspaper');?>" id="createnews-form" class="px-md-2" enctype="multipart/form-data" >
                            <?=csrf_field()?>
                      <div class="form-outline mb-4">
                         <label class="form-label" for="form3Example1q" >Name:</label>
                        <input type="text" id="form3Example1q" class="form-control" name="name"  required />
                         <span class="text-danger"><?=isset($validation) ? display_error($validation,'name'):''?></span>
                        
                      </div>
                      <div class="form-outline mb-4">
                         <label class="form-label" for="form3Example1q">icon:</label>
                        <input type="file" id="form3Example1q" class="form-control" name="image"  accept="image/*"   required />
                        
                       
                      </div>
                      <br/>
                      <div class="row">
                        <div class="col-12">
                          <label class="form-label" for="form3Example1q">Is Active:</label>
                            <select class="form-control input-c" id="inlineFormSelectPref" name="is_active" required="true">
                              <option value="">Choose One</option>
                              <option value="0">0</option>
                              <option value="1">1</option>
                              
                            </select>
                           
                         </div>
                        
                          <div class="col-12">
                            <br/>
                             <label class="form-label" for="form3Example1q">Is Urdu:</label>
                            <select class="form-control input-c" id="inlineFormSelectPref" name="is_urdu" required="true">
                              <option value="">Choose One</option>
                              <option value="0">0</option>
                              <option value="1">1</option>
                             
                            </select>
                            
                         </div>

                      
                      </div>
                      <br/>
                      <button type="submit" class="btn btn-primary float-right" style="">Save</button>

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
        document.getElementById("showalertsuccess").style.display="none";;
      }setTimeout("hideSuccessAlert()",2000);
</script>

<script type="text/javascript">
      function hidedangerAlert()
      {
          document.getElementById("showalertdanger").style.display="none";;
      }setTimeout("hidedangerAlert()",2000);
   </script>
<?= $this->endSection() ?>
</body>
</html>