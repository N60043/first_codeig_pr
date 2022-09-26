<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Newspaper</title>
  </head>
<body>
<?= $this->extend('Views/admin_panel/admin_dashboard.php') ?>
  <?= $this->section('content') ?>
     <div class="container md-4">
        <div class="row justify-content-center" >
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Newspaper
                              <a href="<?= base_url('NewspaperController/index')?>" class="btn btn-danger btn-sm float-right">Close</a>
                        </h5>
                        
                    </div>
                 <div class="card-body">
                    <form method="POST" action="<?= base_url('updateNewspaperRecord/'.$editNewspapar_Info['newspaper_id']);?>" class="editnews-form" id="editnews-form" enctype="multipart/form-data">
                       <input type="hidden" name="_method" value="PUT" />
                             <?=csrf_field()?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                 <label>Name:</label>
                                  <input autocomplete="off" type="text" class="form-control" placeholder="Name" name="name" value="<?=$editNewspapar_Info['name']; ?>" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>Icon:</label>
                                    <input autocomplete="off" type="file" class="form-control" placeholder="" name="image" accept="image/*"  >

                                    
                                </div>
                            </div>
                           
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <button type="submit" class="btn btn-primary btn-sm float-right">Update</button>
                                
                            </div>
                        </div>
                    </form>
                        
                </div>
                    
                </div>
                
            </div>
            
        </div>
         
     </div>
     <?= $this->endSection() ?>
</body>
</html>