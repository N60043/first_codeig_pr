<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit NewsCategories</title>
  </head>
<body>
<?= $this->extend('Views/admin_panel/admin_dashboard.php') ?>
  <?= $this->section('content') ?>
     <div class="container md-4">
        <div class="row justify-content-center" >
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit News Category
                              <a href="<?= base_url('NewscategoriesController/index')?>" class="btn btn-danger btn-sm float-right" >Close</a>
                        </h5>
                        
                    </div>
                 <div class="card-body">
                     <form method="POST" action="<?= base_url('updateNewscategoryRecord/'.$editNewscategory['categoryid']);?>" class="editnewscategory-form" id="editnewscategory-form" enctype="multipart/form-data">
                     <input type="hidden" name="_method" value="PUT" />
                     
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>News Name:</label>
                                 <input autocomplete="off" type="text" class="form-control" placeholder="Name" name="name" value="<?=$editNewscategory['name']; ?>" >
                                 <span class="text-danger"><?=isset($validation) ? display_error($validation,'name'):''?></span>
                                </div>
                            </div>
        
                             <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>Urdu Name:</label>
                                   <input autocomplete="off" type="text" class="form-control" placeholder="" name="urdu_name" value="<?=$editNewscategory['urdu_name']; ?>" >
                                    <span class="text-danger"><?=isset($validation) ? display_error($validation,'urdu_name'):''?></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>Sort by:</label>
                                <input autocomplete="off" type="text" class="form-control" placeholder="Name" name="sort_by" value="<?=$editNewscategory['sort_by']; ?>" >
                                <span class="text-danger"><?=isset($validation) ? display_error($validation,'sort_by'):''?></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">

                                </div>
                            </div>
        
         
                     <div class="col-md-12">
                                
                                <button type="submit" class="btn btn-primary btn-sm float-right">Update</button>
                                
                            </div>
                    
        
           
        </form>
    </div>
        
       </div>
                    
                </div>
                
            </div>
            
        </div>
         
     </div>
     <?= $this->endSection() ?>
</body>
</html>
</body>

</html>
