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
              <a class="nav-link" href="<?php echo base_url();?>features"><?php echo lang('users features');?></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url();?>contact"><?php echo lang('users support');?></a>
            </li>
						 <li class="nav-item active">
							 <a class="nav-link" href="<?php echo base_url();?>help"><?php echo lang('users help');?></a>
						 </li>
					 </ul>

             <?php 
            if ($this->session->userdata('logged_in')){
                 if ($this->user['is_admin']){ ?>
                  <a class="nav-link btn btn-danger btn-sm" href="<?php echo base_url();?>admin">
                    <?php echo lang('users title login');?>/<?php echo lang('users title signup');?>
                    </a>
                  <?php }else{ ?>
                   <a class="nav-link btn btn-danger btn-sm" href="<?php echo base_url();?>account/dashboard"><?php echo lang('users title dasboard');?></a>
                  
                <?php    } 

                  }else{ ?>
                <a class="nav-link btn btn-danger btn-sm" href="<?php echo base_url();?>login">
                   <?php echo lang('users title login');?>/<?php echo lang('users title signup');?>
                </a>
                <?php } ?>

				 </div>
			 </nav>
		</div>

    <div class="container">
     <br><br><br>
     <?php echo $this->session->flashdata('alert');?>
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
      <div class="col-md-6"><img src="<?php echo base_url();?>assets/img/appMock.webp" width="400"/></div>
      <div class="col-md-6">
           <center style="margin-top:60px">
            <img src="<?php echo base_url();?>assets/img/googlePlay.png" />
           <img src="<?php echo base_url();?>assets/img/appStore.png" />
           </center>
            <center style="margin-top:30px"><h3><?php echo lang('users download app');?></h3></center>
            <h6 class="nav-link-custom"><?php echo lang('users download text');?> <?php echo $this->settings->site_name; ?> App</h6>

              <h6><?php echo lang('users download link');?></h6>
              <input type="text" name="" class="form-control form-control-lg" /><br>
              <center><button class="btn btn-danger">Text App Link</button> </center><br>

      </div>
    </div>
  </div>

  <div class="container">

  </div>

	 <hr>
  <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
           <?php echo $this->settings->site_name; ?>
          <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5><?php echo lang('core menu support'); ?></h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?php echo base_url('faq'); ?>">
              <?php echo lang('core menu faq'); ?></a></li>
            <li><a class="text-muted" href="<?php echo base_url('contact'); ?>">
            <?php echo lang('core menu feedback'); ?></a></li>
            <li><a class="text-muted" href="<?php echo base_url('/account/support'); ?>">
              <?php echo lang('core menu ticket'); ?></a></li>
            <li><a class="text-muted" href="<?php echo base_url('developers'); ?>">
              <?php echo lang('core menu api_doc'); ?></a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5><?php echo lang('core menu payment'); ?></h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?php echo base_url('/account/money_transfer'); ?>"><?php echo lang('core menu transfer'); ?></a></li>
            <li><a class="text-muted" href="<?php echo base_url('/account/exchange'); ?>"><?php echo lang('core menu excnage'); ?></a></li>
            <li><a class="text-muted" href="<?php echo base_url('/account/request'); ?>"><?php echo lang('core menu request'); ?></a></li>
            <li><a class="text-muted" href="<?php echo base_url('/account/merchants'); ?>"><?php echo lang('core menu acceptance'); ?></a></li>
          </ul>
        </div>
        
        <div class="col-6 col-md">
          <h5><?php echo lang('core menu my_acc'); ?></h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?php echo base_url('/account/history'); ?>"><?php echo lang('core menu history'); ?></a></li>
            <li><a class="text-muted" href="<?php echo base_url('/account/dispute'); ?>"><?php echo lang('core menu resolution'); ?></a></li>
            <li><a class="text-muted" href="<?php echo base_url('/account/identification'); ?>"><?php echo lang('core menu verifi'); ?></a></li>
            <li><a class="text-muted" href="<?php echo base_url('/account/user_settings'); ?>"><?php echo lang('core menu settings'); ?></a></li>
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
