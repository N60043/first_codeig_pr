
<html>
  <head>
    <title>Search</title>


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
                        <h3>Results News Mapping</h3>
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
                          </tr>

                        </thead>
                            <tbody >
                              <?php 
                             
                              foreach($users as $data) 
                              {
                                  ?>
                                  <tr>         
                                      <td><?php echo $data["newsmaping_id"];?></td>
                                      <td><?php echo $data["news_category_id"];?></td>
                                      <td><?php echo $data["newspaper_id"];?></td>
                                      <td><?php echo $data["news_category_name"];?></td>
                                      <td><?php echo $data["category_url"];?></td>
                                  </tr>

                              <?php } ?>
                              
                             
                          </tbody>
                       </table>
                      <div class="row col-md-2 float-end">
                            <a href="<?= base_url('NewsmappingController/index');?>" type="button" class="btn btn-danger">Back</a>
                      </div>
                      <div class="row justify-content-center">
                        <?= $pager->links() ?>
                      </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
         
     </div>
  


 

<?= $this->endSection() ?>
</body>
</html>