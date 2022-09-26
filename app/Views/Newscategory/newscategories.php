<html>
  <head>
    <title>NewsCategories</title>


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
                      <form  method="get" action="<?= base_url("searchNewspaperCategory")?>" id="search-form">
                       <div class="input-group rounded col-md-3 col-sm-2 float-right" >
                          <input type="search" name="search" class="form-control rounded" placeholder="" aria-label="Search" />
                         <input type='submit' class="btn btn-primary" id='btnsearch' value='Search'>
                       </div>
                     </form>
                     
                        <h5>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                                 Create NewsCategory
                              </button>
                        </h5>
                       </br>
                     </div> 
                   
                    <div class="card-body">
                      <table class="table table-bordered" style="margin-top: 20px;">
                        <thead >
                          <tr>
                             
                            <th scope="col">News Category Id</th>
                            <th scope="col">News Name</th>
                            <th scope="col">Urdu Name</th>
                            <th scope="col">Sort By</th>
                            <th scope="col">Action</th>
                          </tr>

                        </thead>
                        <tbody >
                          <?php 
                         
                          foreach($users as $data) 
                          {
                              ?>
                              <tr>
                           
                            <td><?php echo $data["categoryid"];?></td>
                            <td><?php echo $data["name"];?></td>
                            <td><?php echo $data["urdu_name"];?></td>
                            <td><?php echo $data["sort_by"];?></td>
                            <td>
                              <a href="<?= base_url('editNewspaperCategories/'.$data['categoryid']);?>" type="button" class="btn btn-primary">Edit</a>
                              |
                               <a href="<?= base_url('deleteNewspaperCategories/'.$data['categoryid']);?>" type="button" class="btn btn-danger">Delete</a>
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
<div class="modal" id="createModal" data-backdrop="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
      </div>
      <div class="modal-body">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Create NewsCategory</h3>

             <form method="POST" action="<?= base_url('createnewsCategories');?>" id="createnews-form" class="px-md-2" enctype="multipart/form-data" >
                            <?=csrf_field()?>
                      <div class="form-outline mb-4">
                         <label class="form-label" for="form3Example1q" >Name News:</label>
                        <input type="text" id="form3Example1q" class="form-control" name="name"  required />
                        
                      </div>
                      <div class="form-outline mb-4">
                         <label class="form-label" for="form3Example1q">Urdu Name:</label>
                        <input type="text" id="form3Example1q" class="form-control" name="urdu_name" required />
                       
                      </div>
                      <br/>
                      <div class="row">
                        <div class="col-12">
                          <label class="form-label" for="form3Example1q">Sort by:</label>
                            <input type="text" id="form3Example1q" class="form-control" name="sort_by" required />
                  
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

 
  
</script>

<script type="text/javascript">
    
      function hideSuccessAlert()
      {
         document.getElementById("showalertsuccess").style.display="none";;
      }setTimeout("hideSuccessAlert()",2000);

      function hidedangerAlert()
      {
         document.getElementById("showalertdanger").style.display="none";;
      }setTimeout("hidedangerAlert()",2000);
   </script>
<?= $this->endSection() ?>
</body>
</html>


