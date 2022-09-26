
<html lang="en">
<head>
    <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}
</style>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="../assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">

  <!-- style -->
  <link rel="stylesheet" href="../assets/animate.css/animate.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/glyphicons/glyphicons.css" type="text/css">
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/material-design-icons/material-design-icons.css" type="text/css">

  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/styles/app.min.css">
  <link rel="stylesheet" href="../assets/styles/font.css" type="text/css"><script src="scripts/controllers/chart.js" async=""></script><script src="../libs/jquery/screenfull/dist/screenfull.min.js" async=""></script>
<script src="apps/inbox/inbox.js" async=""></script><script src="../libs/js/moment/moment.js" async=""></script>
<script src="apps/contact/contact.js" async=""></script>
<style type="text/css">
.jqstooltip
 { position: absolute;
   left: 0px;
   top: 0px;
   visibility: hidden;
   background: rgb(0, 0, 0) transparent;
   background-color: rgba(0,0,0,0.6);
   filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
   -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
   color: white;
   font: 10px arial, san serif;
   text-align: left;
   white-space: nowrap;
   padding: 5px;
   border: 1px solid white;
   z-index: 10000;
  }
  .jqsfield { 
   color: white;
   font: 10px arial, san serif;
   text-align: left;
  }
 </style>
</head>
<body ng-app="app" ng-controller="AppCtrl" class="pace-done" ng-class="{'container': app.setting.boxed, 'ie': isIE,'smart': isSmart}">
<div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
<div class="pace-progress-inner"> 
</div>
</div>
<div class="pace-activity"></div></div>
  <!-- uiView:  --><div class="app ng-scope" ui-view="" style=""><div class="dark bg-auto w-full ng-scope"><!-- uiView:  --><div ui-view="" class="fade-in-right-big smooth pos-rlt ng-scope"><div class="center-block w-xxl w-auto-xs p-y-md ng-scope"><div class="navbar"><div class="pull-center"><a class="navbar-brand ng-scope"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24" height="24">
    <path d="M 4 4 L 44 4 L 44 44 Z" fill="#a88add"></path>
    <path d="M 4 4 L 34 4 L 24 24 Z" fill="rgba(0,0,0,0.15)"></path>
    <path d="M 4 4 L 24 4 L 4  44 Z" fill="#0cc2aa"></path>
</svg>
<img src="../assets/images/logo.png" alt="." class="hide"> 
<span class="hidden-folded inline ng-binding">News Portal</span>
</a>
</div>
</div>
<div class="p-a-md box-color r box-shadow-z1 text-color m-a">
  <div class="m-b text-sm float-centre">
   <p>Sign in with your NewsPortal Account</p>
 </div>
                        <form method="POST" action="<?=base_url('auth/login_Check') ?>" class="register-form" id="login-form">
                           <?=csrf_field()?>
                            <?php if(!empty(session()->getflashdata('fail'))):?>
                               <div class="alert alert-danger" id="showalertdanger"><?=session()->getflashdata('fail'); ?></div>
                            <?php endif ?>

                            <?php if(!empty(session()->getflashdata('success'))):?>
                               <div class="alert alert-success" id="showalertsuccess"><?=session()->getflashdata('success'); ?></div>
                            <?php endif ?>
                           <div class="form-group">
                             <label for="exampleInputEmail1">Email:</label>
                             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?= set_value('email') ?>" required>

                                <span class="text-danger"><?=isset($validation) ?display_error($validation,'email'):''?></span>
                            </div>
                           <div class="form-group">
                             <label for="exampleInputPassword1">Password:</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password" value="<?= set_value('password') ?>" required>
                                <span class="text-danger"><?=isset($validation) ? display_error($validation,'password'):''?></span>
                            </div>
                
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="signin" class="btn primary btn-block p-x-md" value="login"/>
                             </div>
                        </form>
                        
                   </div>
                   <div class="p-v-lg text-center">
                    <div>Do not have an account?
                     <a href="<?= base_url('auth/register')?>" class="text-primary _600">Sign up</a>
                    </div>
                   </div>
</div>
</div>
</div>
</div>
<script src="scripts/app.angular.js"></script>


<script src="../libs/jquery/flot/jquery.flot.js"></script>
<script src="../libs/jquery/flot/jquery.flot.resize.js"></script>
<script src="../libs/jquery/flot/jquery.flot.pie.js"></script>
<script src="../libs/jquery/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="../libs/jquery/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../libs/jquery/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../libs/jquery/jquery.sparkline/dist/jquery.sparkline.retina.js"></script><div class="flotTip" style="display: none; position: absolute;"></div>

  <script type="text/javascript">
    
      function hideSuccessAlert()
      {
        document.getElementById("showalertsuccess").style.display="none";;
      }setTimeout("hideSuccessAlert()",3000);
</script>

<script type="text/javascript">
      function hidedangerAlert()
      {
          document.getElementById("showalertdanger").style.display="none";;
      }setTimeout("hidedangerAlert()",3000);
   </script>
</body>
</html>