<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head
<body>
<?= $this->extend('Views/admin_panel/admin_dashboard.php') ?>
  <?= $this->section('content') ?>
     <div class="container md-4">
        <div class="row justify-content-center" >
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Create Newspaper
                              <a href="<?= base_url('NewspaperController/index')?>" class="btn btn-danger btn-sm float-end">Close</a>
                        </h5>
                        
                    </div>
                 <div class="card-body">
                    <form method="POST" action="<?= base_url('updateNewsRecord/'.$editNewspapar_Info['id']);?>" class="editnews-form" id="editnews-form" enctype="multipart/form-data">
                       <input type="hidden" name="_method" value="PUT" />
                             <?=csrf_field()?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                 <label>Name:</label>
                                  <input autocomplete="off" type="text" class="form-control" placeholder="Name" name="name" value="<?=$editNewspapar_Info['name']; ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>Icon:</label>
                                    <input autocomplete="off" type="file" class="form-control" placeholder="" name="icon" >
                                     <span class="text-danger"><?=isset($validation) ? display_error($validation,'image'):''?></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>Is Active:</label>
                                    <select class="form-select" id="inlineFormSelectPref" name="is_active"  >
                                          <option selected value="<?=$editNewspapar_Info['is_active'];?>" >Is Active...</option>
                                          <option value="1" >0</option>
                                          <option value="2">1</option>
                              
                                 </select>
                                 <span class="text-danger"><?=isset($validation) ? display_error($validation,'is_active'):''?></span>
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>Is Urdu:</label>
                                    <select class="form-select" id="inlineFormSelectPref" name="is_urdu"  value="<?=$editNewspapar_Info['is_urdu'];?>" required>
                                      <option selected>Is Urdu...</option>
                                      <option value="1">0</option>
                                      <option value="2">1</option>
                                     
                                    </select>
                                     <span class="text-danger"><?=isset($validation) ? display_error($validation,'is_urdu'):''?></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <button type="submit" class="btn btn-primary btn-sm float-end">Update</button>
                                
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