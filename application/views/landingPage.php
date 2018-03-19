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
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">


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
  #countryId,#cityId{
    font-size: 15px;
  }

    </style>
<script src="https://raw.githubusercontent.com/karacas/imgLiquid/master/js/imgLiquid.js"></script>
<script>
  $(document).ready(function() {
  $(".imgLiquidFill").imgLiquid();
});
</script>
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

		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" style="margin-top:15px">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          More
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <center>
          <a class="nav-link nav-link-custom" href="#" style="float:left"><center><i class="fas fa-child fa-3x"></i></center>Coaching & Tuition</a>
          <a class="nav-link nav-link-custom" href="#" style="float:left"><center><i class="fas fa-gavel fa-3x"></i></center>Home Cleaning & Repairs</a>
          <a class="nav-link nav-link-custom" href="#" style="float:left"><center><i class="fas fa-heartbeat fa-3x"></i></center>Beauty & Spa</a>
          <a class="nav-link nav-link-custom" href="#" style="float:left"><center><i class="far fa-gem fa-3x"></i></center>Weddings & Events</a>
          <a class="nav-link nav-link-custom" href="#" style="float:left"><center><i class="fas fa-suitcase fa-3x"></i></center>Business Services</a>
          <a class="nav-link nav-link-custom" href="#" style="float:left"><center><i class="far fa-user fa-3x"></i></center>Personal & More</a>
          <a class="nav-link nav-link-custom" href="#" style="float:left"><center><i class="fas fa-calendar fa-3x"></i></center>Lessons & Hobbies</a>
        </center>
        </div>

      </nav> -->

		</div>


    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" style="height:250px;background-image:url(<?php echo base_url();?>assets/img/bg3.png)">

      </div>

      <div class="container" style="margin-top:-150px">
        <div class="row mb-2">
          <div class="col-md-12">
       <div class="card flex-md-row mb-4 box-shadow h-md-250" style="background-color:#ced1dc">
         <div class="card-body d-flex flex-column">
            
            <div class="row">
             <h4 style="width:100%;color:#000">&nbsp;&nbsp;&nbsp;<?php echo lang('users slider header text');?> <?php echo $this->settings->site_name; ?></h4>
             <p>&nbsp;&nbsp;&nbsp;<?php echo lang('users slider header small text');?></p>
           </div>
            

            <?php echo form_open('welcome/landingPage');?>
                  <div class="row">
                <div class="col-md-2">
                  <select name="countryId" class="form-control form-control-lg" id="countryId" onchange="countryChange(this.value)">
                        <?php foreach($countries as $country): ?>
                         <option value="<?php echo $country['id'];?>" 
                          <?php echo ($country['id'] == $currentCountryId) ? "selected" : ""; ?> >
                          <?php echo $country['name'];?></option>
                       <?php endforeach;?>
                  </select> 
                </div>
                <div class="col-md-4">
                 <select name="cityId" class="form-control form-control-lg" id="cityId" onchange="cityChange(this.value)">
                        <?php foreach($cities as $city): ?>
                          <option value="<?php echo $city['id'];?>"
                            <?php echo ($city['id'] == $currentCityId) ? "selected" : ""; ?> >
                            <?php echo $city['name'];?></option>
                       <?php endforeach;?> 
                </select> 
                <ul class="list-group searchLocality" style="position:absolute;z-index:99999;display:none"></ul>
                 <?php echo lang('users locality text');?>
                </div>
                <div class="col-md-4">
                <input type="text" name="services" class="form-control form-control-lg services" placeholder="Search for a service" required onkeyup="searchService(this.value)" autocomplete="off" />    
                <ul class="list-group searchService" style="position:absolute;z-index:99999;display:none"></ul>
                  <?php echo lang('users services text');?>
                  <input type="hidden" name="serviceId" id="serviceId" /> 
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
     <h3>Recommended <small><a href="#" class="nav-link-custom float-right" style="font-size:15px">View All</a></small></h3>
   </div>

    <div class="container">



 <div class="container-fluid">
     <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
         <div class="carousel-inner row w-100 mx-auto" role="listbox">
          <?php $i = 1 ; foreach($getAllCategory as $category){ ?>
             <div class="carousel-item col-md-3  active">
                <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="<?php echo base_url().'welcome/landingPage';?>" title="image <?php echo $i;?>" class="thumb">
                       <img class="img-fluid mx-auto d-block imgLiquidFill imgLiquid" src="<?php echo base_url().'uploads/admin/'.$category['img'];?>" style="width:280px; height:172px;" alt="slide <?php echo $i;?>">

                     </a>
                       <center><h6><?php echo $category['title'];?></h6></center>
                   </div>
                 </div>
             </div>
           <?php $i++ ;} ?>
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

  <?php
  //print_r($getAllCategoryAndServices);
  foreach($getAllCategoryAndServices as $CS){ ?>

    <div class="container">
      <hr>
     <h3><?php echo $CS['categoryData'][0]['title'];?> <small><a href="#" class="nav-link-custom float-right" style="font-size:15px">View All</a></small></h3>
		</div>

<div class="container">
 <div class="container-fluid">
     <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
         <div class="carousel-inner row w-100 mx-auto" role="listbox">

             <?php $j = 1;foreach($CS['serviceData'] as $service){ ?>
             <div class="carousel-item col-md-3  active">
                <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image <?php echo $j;?>" class="thumb">
                       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=1" alt="slide <?php echo $j;?>">
                     </a>
                       <center><h6><?php echo $service['title'];?>
                        <?php 
                           $pricing_detail = json_decode($service['pricing_detail'],true);
                        ?>
                        <br>Rs 100/-</h6>

                      </center>
                   </div>
                 </div>
             </div>
           <?php $j++ ; } ?>

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

 <?php } ?>




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

       <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
        <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

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
         <script>
                function countryChange(x){
                  var data = {
                        'countryId' : $('#countryId').val(),
                      };
                     $.ajax({
                      type:'POST',
                      url:'<?php echo base_url();?>user/getAllCitiesFromCountryId', 
                      data:data,
                      success:function(html){
                        $('#cityId').html(html).show();
                        //console.log(html);
                      }
                    });
                  }
                 
                  function searchService(x){
                       var data = {
                                    'service_name':x
                                  };
                     $.ajax({
                      type:'POST',
                      url:'<?php echo base_url();?>user/getServices', 
                      data:data,
                      success:function(html){
                        $('.searchService').html(html).show();
                           console.log(html);
                      }
                    });  
                  }
                  function selectservices2(x){
                     var servicename = $('.selectservices2'+x).data('servicename'+x);
                     var serviceid   = $('.selectservices2'+x).data('serviceid'+x); 
                     $('.services').val(servicename);
                     $('#serviceId').val(serviceid);
                     $('.searchService').hide();  
                  }
              </script>
  </body>
</html>
