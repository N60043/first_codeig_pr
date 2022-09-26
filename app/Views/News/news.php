
<html>
  <head>
  <title>News</title>
  <style type="text/css">
     .container
     {
        width: 400px;
        height: auto;
        overflow: scroll;
        margin:auto;
        float:left;
     }
  </style>
 
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
        <div class="row" style="width: 100%;">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                     <form  method="get" action="<?= base_url("searchNews")?>" id="search_form" >
                           <div class="input-group rounded col-md-3 float-right">
                              <input type="search" name="search" class="form-control rounded" placeholder="" aria-label="Search" />
                             <input type='submit' class="btn btn-primary" id='btnsearch' value='Search'>
                           </div>
                         </form>
                        <h5>
                               <a href="<?= base_url('NewsController/create');?>" type="button" class="btn btn-primary" >Create News</a>
                        </h5>
                       
                        <br/>
                       
                        
                    </div>
                   <div>
                   <div class="card-body">
                    <div class="row">
                     <div class="container" >
                       <table class="table table-responsive table-bordered table-sm " style="margin-top: 20px;">
                        <thead class="thead">
                          <tr class="table_content" style="font-size:12px;">
                            <th scope="col">News_Id</th>
                            <th class="col-md-4">News_Uploader_Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Summary</th>
                            <th scope="col">Description</th>
                             <th scope="col">Image</th>
                            <th scope="col">Date</th>
                            <th scope="col" class="col-md-2">News_Category_Id</th>
                            <th scope="col" class="col-md-2">News Sub_Category_Id</th>
                            <th scope="col">View Count</th>
                            <th scope="col">Timestamp</th>
                            <th scope="col">Status</th>
                            <th scope="col">Breaking_News</th>
                            <th scope="col">Publish_Timestamp</th>
                            <th scope="col">Tag</th>
                            <th scope="col" class="col-md-2">News_Speciality_Id</th>
                            <th scope="col">Img_Features</th>
                            <th scope="col" >News_Reporter_Id</th>
                            <th scope="col">Newspaper_Id</th>
                            <th scope="col" >News_Api_Id</th>
                            <th scope="col">Guid</th>
                            <th class="col" class="col-md-6">Edit</th>
                            <th class="col" class="col-md-6">Delete</th>

                          </tr>

                        </thead>
                        <tbody class="tbody">
                          <?php 
                         
                          foreach($news_user as $data) 
                          {
                              ?>
                              <tr style="font-size:12px;">
                           
                            <td><?php echo $data["news_id"];?></td>
                            <td ><?php echo $data["news_uploader_id"];?></td>
                            <td><?php echo $data["title"];?></td>
                            <td><?php echo $data["summary"];?></td>
                            <td><?php echo $data["description"];?></td>
                            <td>
                                <?php if ($data['image']!=''): ?>
                                     <img src="<?="../uploads/".$data['image'];?>" alt="image" height="20";width="20">
                                 <?php else: ?>
                                     <img src="<?="../image/user.png"?> alt="image" height="20";width="20">
                                <?php endif ?>
                             
                            </td>
                            <td><?php echo $data["date"];?></td>
                            <td><?php echo $data["news_category_id"];?></td>
                            <td><?php echo $data["news_sub_category_id"];?></td>
                            <td><?php echo $data["view_count"];?></td>
                            <td><?php echo $data["timestamp"];?></td>
                            <td><?php echo $data["status"];?></td>
                            <td><?php echo $data["breaking_news"];?></td>
                            <td><?php echo $data["publish_timestamp"];?></td>
                            <td><?php echo $data["tag"];?></td>
                            <td><?php echo $data["news_speciality_id"];?></td>
                            <td><?php echo $data["img_features"];?></td>
                            <td><?php echo $data["news_reporter_id"];?></td>
                            <td><?php echo $data["newspaper_id"];?></td>
                            <td><?php echo $data["news_api_id"];?></td>
                            <td><?php echo $data["guid"];?></td>
                            <td class="col-md-12">
                              <a href="<?= base_url('editNews/'.$data['news_id']);?>" type="button" class="btn btn-primary" >Edit</a>
                            </td>
                            <td>
                                   <a href="<?= base_url('deleteNews/'.$data['news_id']);?>" type="button" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>

                          <?php } ?>
                          
                        </tbody>
                      </table>
                      
                    </div>
                    <div class="col-md-12 justify-content-center">
                        <?= $pager->links();?>
                    </div>
                 </div>
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