
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
                        <h3>Results Newspaper</h3>
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
                        
                           
                          </tr>
                        

                          <?php } ?>
                          
                         
                      </tbody>
                    </table>
                     <div class="row col-md-2 float-end">
                      <a href="<?= base_url('NewspaperController/index');?>" type="button" class="col-md-12 btn btn-danger">Back</a>       
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