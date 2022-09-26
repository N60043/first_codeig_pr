<!DOCTYPE html>
<html>
<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?php echo $pageName ?></title>
   <link rel="stylesheet" type="text/css" href="../css_News_frontend_pages/Newshome_Style.css">
    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- CDN for Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!--  CDN for jQUERY -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style type="text/css">
  .navbar-toggler,
.navbar-toggler:focus,
.navbar-toggler:active,
.navbar-toggler-icon:focus {
    outline: none;
    box-shadow: none;
    border: 0;
    position: relative;
    margin-left: 50%;
}
a:hover 
{
color: black;
background-color: transparent;
text-decoration: underline;
text-decoration-color:black ;
}

</style>
   
   

</head>
<body class="body">
   <div class="container">
      <div class="akhbar_logo" >
                  <h6 class="newspaperHeading">THE NEWSPAPER</h6>
      </div>

      <!-- Navigation -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light ">
           
               <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
          </button>
                  
               <div class="collapse navbar-collapse " id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" href="#">Top Stories</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="#">National</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="#">World News</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="#">Polictics</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="#">Sports</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="#">Entertainment</a>
                      </li>
                       <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           DAWN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                           <li><a class="dropdown-item" href="#">Action</a></li>
                           <li><a class="dropdown-item" href="#">Another action</a></li>
                           <li><hr class="dropdown-divider"></li>
                           <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                     <li class="nav-item">
                      <a class="nav-link" href="#">Sign In</a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" href="#" onclick="openSearch()">
                         <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                             <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                         </svg>
                      </a>
                     </li>
                    

         
                  </ul>
               </div>
         </nav>
         <!-- End Navigation -->
         <!-- Search Full Screen -->
         <div id="myOverlay" class="overlay">
          <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
          <div class="overlay-content">
            <form action="">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>

       <!--------------------------------------------------  Main content --------------------------------------------------------->
       
    <div class="grand_parent">
       
      <div class="parents">

        <!---------------------------------------------- starts left bar Content -------------------------------------------------->

        <div class="child">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-tab-btn" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="true">LATEST</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-tab-btn" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pill-trending" aria-selected="false">TRENDING</button>
            </li>

          </ul>
          <div class="tab-content" id="pills-tabContent">
            
            <div class="tab-pane fade show active" id="pills-latest" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
              <img src="../images/user.png" class="image-pills-tabContent" >
              <div id="latest_pills_tabContent">
                <a href="#">
                <h5 class="heading">fsfksdflkfjsldfksddsklskfksdf</h5>
                </a>
                <p class="fw-light mb-2 paragraph">fsfksdflkfjsldfksddsklskfksdf</p>
              </div>
             
             </br>
            
              <img src="../images/user.png" class="image-pills-tabContent" >
               <div id="latest_pills_tabContent">
                 <a href="#">
                  <h5 class="heading">fsfksdflkfjsldfksddsklskfksdf</h5>
                  </a>
                  <p class="fw-light mb-2 paragraph">fsfksdflkfjsldfksddsklskfksdf</p>
               </div>
             
            </div>
            <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
               <img src="../images/user.png" class="image-pills-tabContent" >
              <div id="trending_pills_tabContent">
                <a href="#">
                <h5 class="heading">fsfksdflkfjsldfksddsklskfksdf</h5>
                </a>
                <p class="fw-light mb-2 paragraph">fsfksdflkfjsldfksddsklskfksdf</p>
              </div>
             </br>
            
              <img src="../images/user.png" class="image-pills-tabContent" >
              <div id="trending_pills_tabContent">
                <a href="#">
                <h5 class="heading">fsfksdflkfjsldfksddsklskfksdf</h5>
                </a>
                <p class="fw-light mb-2 paragraph">fsfksdflkfjsldfksddsklskfksdf</p>
              </div>
             
            </div>
            
          </div>

         <!--------------------------------------------- Ends left bar Content -------------------------------------------------->

        </div>

       <!----------------------------------------------  Starts Middle Content -------------------------------------------------->
        <div class="child ">
           <div class="col-12" id="breakingnews_heading" > 
             Breaking News
           </div>
           <div class="col-12" style="border-top: 1px solid lightgrey;margin-top:2px;">
             <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators" >
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../images/image-gallery/10.jpg" class="d-block w-100" alt="First Image" id="carousel_image">
                  <div class="carousel-caption ">
                    <a href="#">
                      <h5 class="heading">First slide label kdjaslkfjaslkasflsd fldskfjdslfkjdsfjds skldfjsklfjskfjsfs sflksjflskfjslkfs sfjsflskjf</h5>
                    </a>
                    <p class="paragraph">first slide. fkjds;lfjsd;fkdls;fksd;fsff sf sjfs fsjf jslfk sfjsl fsfj slf sfsjl fsklf s fsfjs f sf s fjsdkjfsdkfdjskfdsjf sf sfsl fs</p>
                    <a href="#" id="read_more">
                      READ MORE...
                    </a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../images/image-gallery/11.jpg" class="d-block w-100" alt="Second Image" id="carousel_image">
                  <div class="carousel-caption ">
                    <a href="#">
                      <h5 class="heading">Second slide label kfjsdklfsklfsfd sklfsfs fsfl,snfs fsfklsflsdf sfldsf dsfskfsfl sfk slfs fsklf slfsflsf sflsfksfls fls f</h5>
                    </a>
                    <p class="paragraph">Third slide. fkjds;lfjsd;fkdls;fksd;fsff sf sjfs fsjf jslfk sfjsl fsfj slf sfsjl fsklf s fsfjs f sf s fjsdkjfsdkfdjskfdsjf sf sfsl fs</p>
                    <a href="#" id="read_more">
                      READ MORE...
                    </a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../images/image-gallery/12.jpg" class="d-block w-100" alt="Third Image" id="carousel_image">
                  <div class="carousel-caption ">
                   <a href="#" >
                     <h5 class="heading">Third slide label fkjds;lfjsd;fkdls;fksd;fsff sf sjfs fsjf jslfk sfjsl fsfj slf sfsjl fsklf s fsfjs f sf s fjsdkjfsdkfdjskfdsjf sf sfsl fs</h5>
                   </a>
                    <p class="paragraph">third slide. fkjds;lfjsd;fkdls;fksd;fsff sf sjfs fsjf jslfk sfjsl fsfj slf sfsjl fsklf s fsfjs f sf s fjsdkjfsdkfdjskfdsjf sf sfsl fs</p>
                    <a href="#" id="read_more">
                      READ MORE...
                    </a>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="new-caption-area"></div>
           </div>
        </div>
        <!-------------------------------------------------- End Middle Content ----------------------------------------------------->

        <!-------------------------------------------------- Start Right Side Bar Content ------------------------------------------->

        <div class="child">
           <div class="col-12" id="dailyfeeds_heading" > 
             Daily Feeds
           </div>
           <div class="col-12" style="border-top: 1px solid lightgrey;margin-top:2px;">
            <!-- <div id="carouselExampleDark" class="carousel carousel-dark slide dailyfeeds-carousal" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active dailyfeeds-carousel-item" data-bs-interval="10000">
                  <div class="carousel-caption d-none d-md-block dailyfeeds-carousel-caption">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div> -->
            </div>

         
        </div>
        <!-------------------------------------------------- Start Right Side Bar Content ------------------------------------------->
      </div>
    </div>

    <!------------------------------------------------------ Ends Main Content ------------------------------------------------------>
    
   </div>
  
    <script>
    function openSearch() {
      document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
      document.getElementById("myOverlay").style.display = "none";
    }

    </script>

    <!-- Script for Carousal Caption below Image -->
   <script>
       $(document).ready(function(){
        $('.carousel').carousel();
        var caption = $('div.carousel-item:nth-child(1) .carousel-caption');
        $('.new-caption-area').html(caption.html());
        caption.css('display', 'none');

        $(".carousel").on('slide.bs.carousel', function (evt) {
            var caption = $('div.carousel-item:nth-child(' + ($(evt.relatedTarget).index() + 1) + ') .carousel-caption');
            $('.new-caption-area').html(caption.html());
            caption.css('display', 'none');
        });
    });
    </script>
     <!-- Script for Carousal Caption Daiily Feeds without image -->
    
     <script>
       $(document).ready(function(){
        $('#dailyfeeds-carousal').carousel();
        var caption = $('div#dailyfeeds-carousel-item:nth-child(1) #dailyfeeds-carousel-caption');
        $('.new-dailyfeeds-caption-area').html(caption.html());
        caption.css('display', 'none');

        $("#dailyfeeds_carousal").on('slide.bs.carousel', function (evt) {
            var caption = $('div#dailyfeeds-carousel-item:nth-child(' + ($(evt.relatedTarget).index() + 1) + ') #dailyfeeds-carousel-caption');
            $('.new-dailyfeeds-caption-area').html(caption.html());
            caption.css('display', 'none');
        });
    });
    </script>
</body>
</html>
