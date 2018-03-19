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
    
    <!-- Custom BootStrapCss -->
    <link href="https://v4-alpha.getbootstrap.com/assets/css/docs.min.css" rel="stylesheet">


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


    <main role="main">

      <div class="container" style="margin-top:30px">
        <div class="row mb-2">
          <div class="col-md-12">
       <div class="card flex-md-row mb-4 box-shadow h-md-250" style="background-color:#ced1dc">
         <div class="card-body d-flex flex-column">
            <div class="row">
            <h4 style="width:100%;color:#000">&nbsp;&nbsp;&nbsp;Recruit better with <?php echo $this->settings->site_name; ?></h4>
             <p>&nbsp;&nbsp;&nbsp;Get instant access to reliable and affordable services</p>
           </div>


            <?php echo form_open('welcome/search');?>
              <div class="row">
                <div class="col-md-2">
                  <select name="countryId" class="form-control form-control-lg" id="countryId" onchange="countryChange(this.value)">
                        <?php foreach($countries as $country): ?>
                         <option value="<?php echo $country['id'];?>" 
                          <?php echo ($country['id'] == $setCountryId) ? "selected" : ""; ?> >
                          <?php echo $country['name'];?>
                          </option>
                       <?php endforeach;?>
                  </select> 
                </div>
                <div class="col-md-4">
                   <select name="cityId" class="form-control form-control-lg" id="cityId" onchange="cityChange(this.value)" >
                        <?php foreach($cities as $city): ?>
                         <option value="<?php echo $city['id'];?>" 
                          <?php echo ($city['id'] == $setCityId) ? "selected" : ""; ?>>
                          <?php echo $city['name'];?></option>
                       <?php endforeach;?> 
                </select> 
                <ul class="list-group searchLocality" style="position:absolute;z-index:99999;display:none"></ul>
                 <?php echo lang('users locality text');?>
                </div>
                <div class="col-md-4">
                  <input type="text" name="services" class="form-control form-control-lg services" placeholder="Search for a service" required onkeyup="searchService(this.value)" autocomplete="off" 
                  value="<?php echo $getServiceNameFromId;?>" />    
                <ul class="list-group searchService" style="position:absolute;z-index:99999;display:none"></ul>
                  <?php echo lang('users services text');?>
                  <input type="hidden" name="serviceId" id="serviceId" value="<?php echo $setServiceId;?>"/> 
                </div>
                <div class="col-md-2">
                  <input type="submit" class="btn btn-danger btn-lg" name="searchBtn" value="Filter &raquo;"/>
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
   
     <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
        <?php if($getCountryNameFromId){ ?>
        <li class="breadcrumb-item active" ><?php echo $getCountryNameFromId;?></li>
        <?php } ?>
        <?php if($getCityNameFromId){ ?>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $getCityNameFromId;?></li>
        <?php } ?>
        <?php if($getServiceNameFromId){ ?>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $getServiceNameFromId;?></li>
        <?php } ?>
      </ol>
    </nav>
    </div>




    <div class="container">
    <?php echo $this->session->flashdata('alert');?>
    
       <?php 
        if(is_array($getCategoryQuestionsFromServiceId) && count($getCategoryQuestionsFromServiceId) > 0){
            echo form_open('welcome/searchPost');
       foreach($getCategoryQuestionsFromServiceId as $r){ ?> 

         <?php
         $jsonArrays = array();  
         $jsonArrays = json_decode($r['json'],true);
            if(is_array($jsonArrays) && array_key_exists('radio',$jsonArrays)){ ?>

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
    <?php } ?>
         <br>
      <input type="hidden" value="<?php echo $this->uri->segment(4);?>" name="categoryName" />
      <input type="hidden" value="<?php echo $this->uri->segment(5);?>" name="serviceName" />
       <?php if($user['id']){ ?>
           <input type="submit" name="postQuestions" class="btn btn-success btn-lg" />
       <?php }else{ ?>
           <a href="<?php echo base_url();?>user/register" class="btn btn-success btn-lg">Signup Before Submit</a>
       <?php } ?>
       <?php echo form_close();?>
    <?php  }else{ ?>
        <!-- <center><div class="alert alert-warning">Sorry , no jobs in this region</div></center> -->
        <div class="bd-callout bd-callout-info">
        <h3>Tell us more what you need done</h3>
        <p>Get free quotes from skilled workers within minutes, view profiles, ratings and portfolios and chat with them. Pay the worker only when you are 100% satisfied with their work.</p>
  <?php echo form_open_multipart('welcome/searchPost');?> 
  <div class="form-group">
    <label for="exampleInputEmail1">Job Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Job Title" required name="jobTitle" />
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Employer Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Name" required name="employerName" />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Employer Code or Access Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employer ID or Code or Number" name="employerCode" />
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Job Type</label>
    <select class="form-control" id="exampleSelect1" name="serviceId">
      <?php foreach($getAllServices as $service){ ?>
        <option value="<?php echo $service['id'];?>" 
          <?php echo ($service['id'] == $setServiceId) ? "selected":"" ;?> >
          <?php echo $service['title'];?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Work Place</label>
     <input type="text" class="form-control controls" id="pac-input" placeholder="Work Place" required name="workPlace" />
     <div id="map"></div>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&sensor=false"></script> -->
    <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBDHsd26aj9wzu4nzXXT96ArLaXunKHRI&libraries=places&callback=initAutocomplete"
         async defer></script>
  </div>
  <div class="form-group">
    <label for="exampleSelect2">Number of employees looking for</label>
    <select multiple class="form-control" id="exampleSelect2" name="noOfEmployees">
      <option value="1-10" selected >1 - 10</option>
      <option value="11-20">11 - 20</option>
      <option value="21-30">21 - 30</option>
      <option value="31-50">31 - 50</option>
      <option value="50<">50 < </option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Remuneration </label>
     
     <div class="input-group mb-3">
        <div class="input-group-prepend">
          <button class="btn btn-outline-secondary dropdown-toggle currencyType" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:void(0)" onclick="currencyType('USD')">USD</a>
            <a class="dropdown-item" href="javascript:void(0)" onclick="currencyType('EURO')">EURO</a>
            <a class="dropdown-item" href="javascript:void(0)" onclick="currencyType('NARNIA')">NARNIA</a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void(0)" onclick="currencyType('BTC')">BTC</a>
          </div>
        </div>
        <input type="text" class="form-control" placeholder="Budget for this work" aria-label="Text input with dropdown button" name="budget" />
        <div class="input-group-append">
          <button class="btn btn-primary btn-outline-secondary dropdown-toggle jobKind" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HOURLY</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:void(0)" onclick="jobKind('HOURLY')">HOURLY</a>
            <a class="dropdown-item" href="javascript:void(0)" onclick="jobKind('FIXED')">FIXED</a>
          </div>
        </div>
     </div>
     <input type="hidden" value="USD" name="currencyTypeInput"/>
     <input type="hidden" value="HOURLY" name="jobTypeInput" /> 
    <script>
      function currencyType(x){
        $('.currencyType').html(x);
        $('.currencyTypeInput').val(x);
      }
      function jobKind(x){
        $('.jobKind').html(x);
        $('.jobTypeInput').val(x);
      }
    </script>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date of execution </label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="When the job need to start" name="executionDate" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Announcement Date </label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Announcement Date" name="announcementDate">
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Description of Job</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" required name="jobDescription"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Document Attach</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="jobDocument">
    <small id="fileHelp" class="form-text text-muted">Upload document file in docx,pdf,text,excel and image files</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mode of Payment </label>
    <select name="payment_method" class="form-control">
      <option value="cash">Cash</option>
      <option value="bank">Bank</option>
    </select>
  </div>
  <fieldset class="form-group">
    <legend>Job Marker (Optional Upgrades)</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="jobMarker[]" id="optionsRadios1" value="featured" checked>
        <h4><label class="badge badge-warning">Mark This Job As Featured - 4.00$</label>
          <br><span style="font-size: 14px;color:#000">(Featured jobs attract higher-quality bids and are displayed prominently in the 'Featured Jobs and Contests' page.)</span></h4>
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="jobMarker[]" id="optionsRadios2" value="urgent">
        <h4><label class="badge badge-danger">Mark This Job As Urgent - 3.00$</label>
          <br><span style="font-size: 14px;color:#000">(Make your job stand out and let seekers know that your job is time sensitive)</span></h4>
      </label>
    </div>
    <div class="form-check">    
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="jobMarker[]" id="optionsRadios2" value="private">
        <h4><label class="badge badge-success">Mark This Job As Private - 5.00$</label>
          <br><span style="font-size: 14px;color:#000">(Hide project details from search engines and users that are not logged in, for projects that you need to keep confidential.)</span></h4>
      </label>
    </div>
  </fieldset>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      I agree all the detail entered are correct as according to me.
    </label>
  </div><br>
  <input type="submit" class="btn btn-primary btn-lg" name="postJobSubmit" value="Post My Job"/>
</form>
        </div>
    <?php };?> 
    

    






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
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        
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
