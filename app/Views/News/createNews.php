<html>
<head>
<title>Create News</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>
<body>
<?= $this->extend('Views/admin_panel/admin_dashboard.php') ?>
<?= $this->section('content') ?>
<div class="card">
	<div class="card-body">
                    <form method="POST" action="<?= base_url('createnews')?>" class="creatnews-form"  id="createnews-form" enctype="multipart/form-data">
                             <?=csrf_field()?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                 <label>News Uploader Id:</label>
                                  <input autocomplete="off" type="number" class="form-control" name="news_uploader_id" title="Only Integer Value is Allowed" required />
                                </div>
                                 
                            </div>
                                
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                 <label>Title:</label>
                                  <input autocomplete="off" type="text" class="form-control"  name="title"  />
                                </div>
                                
                            </div>
                             <div class="col-md-12">
                                <div class="form-group mb-2">
                                     <label>Summary:</label>
                                     <textarea class="form-control ng-pristine ng-valid ng-not-empty ng-touched" name="summary" ng-model="popover.content" rows="3" ></textarea>
                                </div>
                                
                            </div>
                            <div class="col-md-12" >
                                <div class="form-group mb-2">
                                 <label>Description:</label>
                                 <textarea class="form-control ng-pristine ng-valid ng-not-empty ng-touched" name="descript" ng-model="popover.content" ></textarea>
                                </div>
                               
                            </div>
                             <div class="col-md-12" >
                               <div class="form-outline mb-4">
                                 <label class="form-label" for="form3Example1q">icon:</label>
                                <input type="file" id="form3Example1q" class="form-control" name="image" accept="image/*"  required/>
                                 <span class="text-danger"><?=isset($validation) ? display_error($validation,'image'):''?></span>
                               
                               </div>
                                
                           </div>
                               <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>Tag:</label>
                                    <input autocomplete="off" type="text" class="form-control"  name="tag" required />
                                    
                                </div>
                              
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>Date:</label>
                                    <input autocomplete="off" type="date" class="form-control" placeholder="" name="date" required />
                                    
                                </div>
                                  
                            </div>
                          
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>News Category:</label>
                                   
                                     <select class="form-control input-c" id="inlineFormSelectPref" name="news_category_id" required="true">
			                              <option value="">Choose One</option>
			                             
			                              	<?php
			                              	 foreach($newscategory_user as $data)
                                            {?>
                                          <option value="<?= $data['categoryid'] ?>"><?php echo $data["name"] ?></option>
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
                                          <option value="<?= $data['newspaper_id'] ?>"><?php echo $data["name"] ?>
                                              
                                          </option>
                                          <?php
                            
                                        }


                                        ?>

			                             
			                              
			                       </select>
                                </div>
                                 
                            </div>
                           
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>News Speciality Id:</label>
                                    <select class="form-control input-c" id="inlineFormSelectPref" name="news_speciality_id" required="true">
			                              <option value="">Choose One</option>
			                              <option value="0">0</option>
			                              <option value="1">1</option>
			                              
			                       </select>
                                    
                                </div>
                                 
                            </div>
                           
                             <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>Breaking News:</label>
                                    <select class="form-control input-c" id="inlineFormSelectPref" name="breaking_news" >
                                        <option selected>De_Active</option>
                                          <option value="Active">Active</option>
                                          
                                   </select>
                                </div>

                            </div>
                         
                          <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label>Publish:</label>
                                    <select class="form-control input-c" id="inlineFormSelectPref" name="publish_timestamp">
                                          <option selected>De_Active</option>
                                          <option value="Active">Active</option>
                                          
                                   </select>
                                </div>
                            </div>
                              
                            
                            <div class="col-md-12">
                                <hr>
                                <button type="submit" class="btn btn-primary float-right">Save</button>
                                
                            </div>
                        </div>
                    </form>
                        
                </div>
</div>
<!------------------------------Script for text Editor --------------------------->
<script src="../texteditor_plugin/ckeditor.js"></script>
<script>
  CKEDITOR.replace('descript');
</script>



<?= $this->endSection() ?>

</body>
</html>