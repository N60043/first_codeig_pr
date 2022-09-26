<html>
  <head>
  <title>News</title>
  <style type="text/css">
     .container
     {
        width: 400px;
        height: auto;
        overflow: scroll;
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
             
                  
  
  <div class="item">
    <div class="item-bg">
      <img src="<?= '../uploads/'.$userdata->icon?>" alt="image" class="blur opacity-3">
    </div>
    <div class="p-a-md">
      <div class="row m-t">
        <div class="col-sm-7">
            <span class="avatar w-96">
              <img src="<?= '../uploads/'.$userdata->icon?>" alt="image" >
              <i class="on b-white"></i>
            </span>
     
      
          <div class="clear m-b">
            <h5 class="m-0 m-b-xs">Hi <?php echo  $userdata->name;?>!</h3>
           
          </div>
        </div>
        <div class="col-sm-5">
          <p class="text-md profile-status">I am feeling good!</p>
         
        </div>
      </div>
    </div>
  </div>
  <div class="dker p-x">
    <div class="row">
      
      <div class="col-sm-6 pull-sm-6">
        <div class="p-y-md clearfix nav-active-{{app.setting.theme.primary}}">
          <ul class="nav nav-pills nav-sm">
            
            <li class="nav-item">
             <button class="btn btn-sm white" data-toggle="collapse" data-target="#tab_2">Profile</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="padding">
    <div class="row">
      <div class="col-sm-8 col-lg-9">
        <div class="tab-content">      
          <div class="tab-pane p-v-sm active" id="tab_1">
            <div class="streamline b-l m-b m-l">
              
            </div>
          </div>
         
          <div class="collapse  p-v-sm" id="tab_2">
            <div class="row m-b">
              <div class="col-xs-6">
                <small class="text-muted">Name:</small>
                <div class="_500"><?php echo  $userdata->name;?></div>
              </div>
              <div class="col-xs-6">
                <small class="text-muted">Email</small>
                <div class="_500"><?php echo $userdata->email;?></div>
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
