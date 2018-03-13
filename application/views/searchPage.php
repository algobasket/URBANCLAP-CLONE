<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo $this->settings->site_name; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


    <style>
    @media (min-width: 768px) {

     /* show 3 items */
     .carousel-inner .active,
     .carousel-inner .active + .carousel-item,
     .carousel-inner .active + .carousel-item + .carousel-item,
     .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
         display: block;
     }

     .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
     .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
     .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
     .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
         transition: none;
     }

     .carousel-inner .carousel-item-next,
     .carousel-inner .carousel-item-prev {
       position: relative;
       transform: translate3d(0, 0, 0);
     }

     .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
         position: absolute;
         top: 0;
         right: -25%;
         z-index: -1;
         display: block;
         visibility: visible;
     }

     /* left or forward direction */
     .active.carousel-item-left + .carousel-item-next.carousel-item-left,
     .carousel-item-next.carousel-item-left + .carousel-item,
     .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
     .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
     .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
         position: relative;
         transform: translate3d(-100%, 0, 0);
         visibility: visible;
     }

     /* farthest right hidden item must be abso position for animations */
     .carousel-inner .carousel-item-prev.carousel-item-right {
         position: absolute;
         top: 0;
         left: 0;
         z-index: -1;
         display: block;
         visibility: visible;
     }

     /* right or prev direction */
     .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
     .carousel-item-prev.carousel-item-right + .carousel-item,
     .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
     .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
     .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
         position: relative;
         transform: translate3d(100%, 0, 0);
         visibility: visible;
         display: block;
         visibility: visible;
     }

 }

  /* Bootstrap Lightbox using Modal */

 #profile-grid { overflow: auto; white-space: normal; }
 #profile-grid .profile { padding-bottom: 40px; }
 #profile-grid .panel { padding: 0 }
 #profile-grid .panel-body { padding: 15px }
 #profile-grid .profile-name { font-weight: bold; }
 #profile-grid .thumbnail {margin-bottom:6px;}
 #profile-grid .panel-thumbnail { overflow: hidden; }
 #profile-grid .img-rounded { border-radius: 4px 4px 0 0;}
 .carousel-control-prev{ top: -30px !important }
  .carousel-control-next{ top: -30px !important }
  .nav-link-custom{
    text-decoration:none !important;
    color:#000 !important;
    font-family: 'Abel', sans-serif !important;
  }

    </style>

  </head>

  <body>
		 <div class="container">

			 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color:#168394 !important">
				 <a class="navbar-brand" href="<?php echo base_url();?>"><?php echo $this->settings->site_name; ?></a>
				 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
					 <span class="navbar-toggler-icon"></span>
				 </button>

				 <div class="collapse navbar-collapse" id="navbarsExampleDefault">


					<ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Become A Professional</a>
            </li>
						 <li class="nav-item active">
							 <a class="nav-link" href="#">Refer & Earn</a>
						 </li>
					 </ul>

             <a class="nav-link btn btn-danger btn-sm" href="<?php echo base_url();?>login">Login/Signup</a>

				 </div>
			 </nav>
		</div>


    <main role="main">

      <div class="container" style="margin-top:30px">
        <div class="row mb-2">
          <div class="col-md-12">
       <div class="card flex-md-row mb-4 box-shadow h-md-250" style="background-color:#ced1dc">
         <div class="card-body d-flex flex-column">
            <div class="row">
             <h4 style="width:100%">&nbsp;&nbsp;&nbsp;Browse Jobs on <?php echo $this->settings->site_name; ?></h4>
             <p>&nbsp;&nbsp;&nbsp;Get instant access to reliable and affordable services</p>
           </div>
            <?php echo form_open('welcome/search');?>

              <div class="row">
                <div class="col-md-2"><select name="state" class="form-control form-control-lg" >
                        <?php foreach($states as $state): ?>
                         <option value="<?php echo $state;?>"><?php echo $state;?></option>
                       <?php endforeach;?>
                  </select>
                </div>
                <div class="col-md-4">
                <input type="text" name="locality" class="form-control form-control-lg" placeholder="Enter your locality here" required/>
                 Remark Area or landmark residing your place
                </div>
                <div class="col-md-4">
                <input type="text" name="services" class="form-control form-control-lg" placeholder="Search for a service" required/>
                 E.g. Tutor at Home, Plumber, Wedding Photographer
                </div>
                <div class="col-md-2">
                  <input type="submit" class="btn btn-danger btn-lg" name="searchBtn" value="Search &raquo;"/>
                </div>
              </div>


            <?php echo form_close();?>
         </div>
       </div>

     </div>
       </div>
      </div>

    </main>

    <div class="container">
      <hr>
     <h3>
       <small><a href="<?php echo base_url().'welcome';?>" class="nav-link-custom" style="font-size:16px">Home</a> / </small>
       <small><a href="<?php echo base_url().'/'.$location;?>" class="nav-link-custom" style="font-size:16px"><?php echo $location;?> / </a></small>
       <small><a href="<?php echo base_url().'/'.$location.'/'.$serviceCategory;?>" class="nav-link-custom" style="font-size:16px"><?php echo $serviceCategory;?> / </a></small>
       <?php if($locality){ ?>
         <small><a href="<?php echo base_url().'/'.$location.'/'.$serviceCategory.'/'.$locality;?>" class="nav-link-custom" style="font-size:16px"><?php echo $locality;?> / </a></small>
       <?php } ?>

     </h3>
    </div>

    <div class="container">
     <center></center>
     <?php if($this->uri->segment(4) && $this->uri->segment(5)==null){ ?>
       <ul class="list-group">
        <li class="list-group-item active" style="background-color:#168394"><center><h2><?php echo ucfirst($this->uri->segment(4));?></h2></center></li>
         <?php foreach($getServicesFromCategoryName as $r) : ?>
        <li class="list-group-item"><?php echo anchor('welcome/search/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$r['name'],$r['title']);?></li>
      <?php endforeach;?>
      </ul>
     <?php } ?>
     <?php echo form_open('welcome/searchPost');?>
     <?php if($this->uri->segment(5)){ ?>
       <?php foreach($getCategoryQuestionsFromCategoryNameServiceName as $r):?>
         <?php
         $jsonArrays = array();
         $jsonArrays = json_decode($r['json'],true);
               if(is_array($jsonArrays) && array_key_exists('radio',$jsonArrays)){
               ?>
               <ul class="list-group">
                <li class="list-group-item active" style="background-color:#168394"><center><h2><?php echo $r['title'];?></h2></center></li>
                <?php $i = 1;foreach($jsonArrays['radio'] as $key => $jsonArray){ ?>
                <li class="list-group-item"><h4><input type="radio" <?php echo ($i ==1) ? "checked" : "" ?> name="questions_radio[]['<?php echo str_replace(' ','-',$r['title']);?>']" value="['<?php echo $jsonArray; ?>','<?php echo $r['title'];?>']"/>  <?php echo $jsonArray;?></h4></li>
              </ul>
               <?php
                 $i++ ;}
               }
               if(is_array($jsonArrays) && array_key_exists('textField',@$jsonArrays)){
                 ?>
                 <ul class="list-group">
                  <li class="list-group-item active" style="background-color:#168394"><center><h2><?php echo $r['title'];?></h2></center></li>
                  <li class="list-group-item">
                    <h4>
                      <textarea class="form-control" required name="questions_text_answer"></textarea>
                      <input type="hidden" name="questions_text" value="<?php echo $r['title'];?>"/>
                    </li>
                  <!-- <li class="list-group-item"><button class="btn btn-primary btn-lg">Next</button></li> -->
                </ul>
                <?php
              }
         ?>

    <?php endforeach;?>
  <?php } ?>
    <br>
      <input type="hidden" value="<?php echo $this->uri->segment(4);?>" name="categoryName" />
      <input type="hidden" value="<?php echo $this->uri->segment(5);?>" name="serviceName" />
    <?php if($this->uri->segment(5)){ ?>
       <?php if($user['id']){ ?>
           <input type="submit" name="postQuestions" class="btn btn-success btn-lg" />
       <?php }else{ ?>
           <a href="<?php echo base_url();?>user/register" class="btn btn-success btn-lg">Signup Before Submit</a>
       <?php } ?>

    <?php } ?>

    <?php echo form_close();?>
    </div>

    <br><br>

    <div class="container">
      <hr>
     <h3>You may also like <small><a href="#" class="nav-link-custom float-right" style="font-size:15px">View All</a></small></h3>
		</div>

<div class="container">
 <div class="container-fluid">
     <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
         <div class="carousel-inner row w-100 mx-auto" role="listbox">
             <div class="carousel-item col-md-3  active">
                <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 1" class="thumb">
                       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=1" alt="slide 1">

                     </a>
                       <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
             <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 3" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2" alt="slide 2">
                     </a>
                     <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
             <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 4" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=3" alt="slide 3">
                     </a>
                      <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
             <div class="carousel-item col-md-3 ">
                 <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 5" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
                     </a>
                      <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
             <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 6" class="thumb">
                       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">
                     </a>
                      <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
             <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 7" class="thumb">
                       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
                     </a>
                      <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
             <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 8" class="thumb">
                       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">

                     </a>
                      <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
              <div class="carousel-item col-md-3  ">
                 <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 2" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 8">
                     </a>
                      <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>
       </div>
     </div>
   </div><!--.container-->
   <hr>
  <div class="container">
    <div class="row">
      <div class="col-md-6"><img src="https://res.cloudinary.com/urbanclap/image/upload/q_auto,f_auto/v1497606505/appMock.png" width="400"/></div>
      <div class="col-md-6">
           <center style="margin-top:60px">
           <img src="https://res.cloudinary.com/urbanclap/image/upload/v1488200693/googlePlay.png" />
           <img src="https://res.cloudinary.com/urbanclap/image/upload/v1488200693/appStore.png" />
           </center>
            <center style="margin-top:30px"><h3>Download Our App</h3></center>
            <h6 class="nav-link-custom">Choose and book from 100+ services and track them on the go with the UrbanClap App</h6>

              <h6>Send a link via SMS to install the app</h6>
              <input type="text" name="" class="form-control form-control-lg" /><br>
              <center><button class="btn btn-primary">Text App Link</button> </center><br>

      </div>
    </div>
  </div>

  <div class="container">

  </div>

	<footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
          <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Network</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Browse Categories</a></li>
            <li><a class="text-muted" href="#">Browse Jobs</a></li>
            <li><a class="text-muted" href="#">Browse Job Seeker</a></li>
            <li><a class="text-muted" href="#">Stuff for developers</a></li>
            <li><a class="text-muted" href="#">Showcase</a></li>
            <li><a class="text-muted" href="#">Forum</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">About us</a></li>
            <li><a class="text-muted" href="#">How it Works</a></li>
            <li><a class="text-muted" href="#">Mobile App</a></li>
            <li><a class="text-muted" href="#">Security</a></li>
            <li><a class="text-muted" href="#">Fee & Charges</a></li>
              <li><a class="text-muted" href="#">Investor</a></li>
                <li><a class="text-muted" href="#">Sitemap</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Get in touch</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Get support</a></li>
            <li><a class="text-muted" href="#">Career</a></li>
            <li><a class="text-muted" href="#">Community</a></li>
            <li><a class="text-muted" href="#">Affiliate Program</a></li>
            <li><a class="text-muted" href="#">Merchandise</a></li>
            <li><a class="text-muted" href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Press</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">In the News</a></li>
            <li><a class="text-muted" href="#">Press Release</a></li>
            <li><a class="text-muted" href="#">Awards</a></li>
            <li><a class="text-muted" href="#">Testimonials</a></li>
          </ul>
        </div>
      </div>
    </footer>

    <!-- The Modal -->



<div class="modal fade" id="categoryNav">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-6 col-md-4">
            <h6>Shop by Category</h6>
            <ul class="list-group">
            <li class="list-group-item">Mobile</li>
            <li class="list-group-item">Gas</li>
            <li class="list-group-item">Clothing</li>
            <li class="list-group-item">Watches</li>
            <li class="list-group-item">Laptops</li>
            </ul>
          </div>
          <div class="col-12 col-md-8">.col-12 .col-md-8</div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
        <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <script>

    $('#carouselExample').on('slide.bs.carousel', function (e) {


       var $e = $(e.relatedTarget);
       var idx = $e.index();
       var itemsPerSlide = 4;
       var totalItems = $('.carousel-item').length;

       if (idx >= totalItems-(itemsPerSlide-1)) {
           var it = itemsPerSlide - (totalItems - idx);
           for (var i=0; i<it; i++) {
               // append slides to end
               if (e.direction=="left") {
                   $('.carousel-item').eq(i).appendTo('.carousel-inner');
               }
               else {
                   $('.carousel-item').eq(0).appendTo('.carousel-inner');
               }
           }
       }
    });


     $('#carouselExample').carousel({
                   interval: 2000
           });


     $(document).ready(function() {
    /* show lightbox when clicking a thumbnail */
       $('a.thumb').click(function(event){
         event.preventDefault();
         var content = $('.modal-body');
         content.empty();
           var title = $(this).attr("title");
           $('.modal-title').html(title);
           content.html($(this).html());
           $(".modal-profile").modal({show:true});
       });

     });
        </script>
  </body>
</html>
