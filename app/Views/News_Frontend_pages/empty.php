<?php 
 include_once('header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageName ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css_News_frontend_pages/style.css">
    <style type="text/css">
    
    
    </style>
  </head>
  <body>
    <div class="grand_parent">
      <div class="parents">
        <div class="child">
          <div  id="carouselExampleIndicators" class="carousel slide carousel-multi-item d-flex align-items-end justify-content-end flex-column"  data-ride="carousel">
          <ol class="carousel-indicators arousel-multi-item d-flex align-items-end justify-content-end flex-column " >
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="../images/image-gallery/1.jpg" alt="First slide">
              <div class="carousel-caption   d-md-block md-auto " id="carousel_1">
               <button class="btn" id="btn_breakingNews">BREAKING NEWS</button>
              </div>
              <div class="carousel-caption  d-md-block md-auto " >
                <button class="btn " id="btn_geoNews">GEO NEWS</button>
              <h5 class="caption_1">Naqash sdkjasdhkasjdask dihasdjasldjasld asdajsd</h5>
              <p class="caption_2 font-weight-light">Abbasi djahkdjaskdhasdhjask askdhasdsjhakdasdk akdaldasd</p>
            </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../images/image-gallery/2.jpg" alt="Second slide">
              <div class="carousel-caption   d-md-block md-auto " id="carousel_1">
               <button class="btn" id="btn_breakingNews">BREAKING NEWS</button>
              </div>
              <div class="carousel-caption  d-md-block ">
                <button class="btn " id="btn_geoNews">GEO NEWS</button>
              <h5 class="caption_1">Zohaib dashdkjasdhjaskdaskd sadjasdnkasdjaad ajdakdsjasd</h5>
              <p class="caption_2 font-weight-light">Abbasi dhakjdhaskjdasd adnaskjdasd djadnad </p>
            </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../images/image-gallery/3.jpg" alt="Third slide">
              <div class="carousel-caption   d-md-block md-auto " id="carousel_1">
               <button class="btn" id="btn_breakingNews">BREAKING NEWS</button>
              </div>
              <div class="carousel-caption d-md-block ">
                <button class="btn" id="btn_geoNews">GEO NEWS</button>
              <h5 class="caption_1">Osama ajdhaskjdhaskdjas</h5>
              <p class="caption_2 font-weight-light">Abbasi jdhsakjdhsakdjashd</p>
            </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
         </div>
        </div>
        
        <div class="child scrollmenu" scrollmenu id="top-stories">
          <h4 class="top-stories_heading" >TOP STORIES</h4>
          <div class="col-md-12" id="top-stories_list" style="">
            <span >01</span>
            <h6> POLITICS</h6>
            <p class="font-weight-light" > Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations among individuals, such as the</p>
            </div>
             <div class="dropdown-divider"></div>
          <div class="col-md-12" id="top-stories_list" style="">
            <span >02</span>
            <h6>Sports</h6>
            <p class="font-weight-light" >An activity involving physical exertion and skill in which an individual or team competes against another or others for entertainment.</p>
            </div>
            <div class="dropdown-divider"></div>
          <div class="col-md-12" id="top-stories_list" style="">
            <span >03</span>
            <h6>Education</h6>
            <p class="font-weight-light" >The process of receiving or giving systematic instruction, especially at a school or university.</p>
            </div>
             <div class="dropdown-divider"></div>
            <div class="col-md-12" id="top-stories_list" style="">
            <span >03</span>
            <h6>National</h6>
            <p class="font-weight-light" >The process of receiving or giving systematic instruction, especially at a school or university.</p>
            </div>
             <div class="dropdown-divider"></div>
             <div class="col-md-12" id="top-stories_list" style="">
            <span >03</span>
            <h6>National</h6>
            <p class="font-weight-light" >The process of receiving or giving systematic instruction, especially at a school or university.</p>
            </div>
             <div class="dropdown-divider"></div>
             <div class="col-md-12" id="top-stories_list" style="">
            <span >03</span>
            <h6>National</h6>
            <p class="font-weight-light" >The process of receiving or giving systematic instruction, especially at a school or university.</p>
            </div>
             <div class="dropdown-divider"></div>
             <div class="col-md-12" id="top-stories_list" style="">
            <span >03</span>
            <h6>National</h6>
            <p class="font-weight-light" >The process of receiving or giving systematic instruction, especially at a school or university.</p>
            </div>
             <div class="dropdown-divider"></div>
          </div>
      </div>
    </div>
  </body>
</html>