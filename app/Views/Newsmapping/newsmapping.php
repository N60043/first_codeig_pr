
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <form  method="get" action="<?= base_url("searchNewsmapping")?>" id="search_form">
                            <div class="input-group rounded col-md-3 float-right"  >
                              <input type="search" name="search" class="form-control rounded" placeholder="" aria-label="Search" required />
                             <input type='submit' class="btn btn-primary" id='btnsearch' value='Search'>
                           </div>
                         </form>
                        <h5>
                              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#createModal">
                                 Create NewsMapping
                              </button>
                        </h5>
                        <br/>
                       
                        
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered" style="margin-top: 20px;">
                        <thead class="thead">
                          <tr class="table_content" style="font-size:12px;">
                            <th scope="col">Newsmapping_Id</th>
                            <th scope="col" class="col-md-2">News_Category_Id</th>
                            <th scope="col">Newspaper_Id</th>
                            <th scope="col" >News_Category_Name</th>
                            <th scope="col">Category Url</th>
                            <th scope="col">Action</th>

                          </tr>

                        </thead>
                        <tbody class="tbody">
                          <?php 
                         
                          foreach($newsmapping_user as $data) 
                          {
                              ?>
                              <tr style="font-size:12px;">
                           
                            <td><?php echo $data["newsmaping_id"];?></td>
                            <td><?php echo $data["news_category_id"];?></td>
                            <td><?php echo $data["newspaper_id"];?></td>
                            <td><?php echo $data["news_category_name"];?></td>
                            <td><?php echo $data["category_url"];?></td>
                            <td>
                              <a href="<?= base_url('editNewsmapping/'.$data['newsmaping_id']);?>" type="button" class="btn btn-primary" >Edit</a>
                            </td>
                            <td>
                                   <a href="<?= base_url('deleteNewsmapping/'.$data['newsmaping_id']);?>" type="button" class="btn btn-danger">Delete</a>
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Create NewsMapping</h3>

             <form method="POST" action="<?= base_url('createnewsmapping');?>" id="createnews-form" class="px-md-2" enctype="multipart/form-data" >
                            <?=csrf_field()?>
                       <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>News Category:</label>
                                   
                                     <select class="form-control input-c" id="inlineFormSelectPref" name="news_category_id" required="true">
                                    <option value="">Choose One</option>
                                   
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
                                   
                                     <select class="form-control input-c" id="inlineFormSelectPref" name="newspaper_id" required="true">
                                    <option value="">Chose One</option>
                                  
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
                        <input type="text" id="form3Example1q" class="form-control" name="news_category_name"  required /> 
                        </div> 
                      </div>
                       <div class="col-md-12">
                        <div class="form-group mb-2">
                         <label class="form-label" for="form3Example1q" >Category URL:</label>
                        <input type="url" id="form3Example1q" class="form-control" name="category_url"  required /> 
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
        document.getElementById("showalertsuccess").style.display="none";
      }setTimeout("hideSuccessAlert()",3000);
</script>

<script type="text/javascript">
      function hidedangerAlert()
      {
          document.getElementById("showalertdanger").style.display="none";
      }setTimeout("hidedangerAlert()",3000);
   </script>
<?= $this->endSection() ?>
</body>
</html>