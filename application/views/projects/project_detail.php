<style>
.index-content a:hover{
    color:black;
    text-decoration:none;
}
.index-content{
    margin-bottom:20px;
    padding:50px 0px;

}
.index-content .row{
    margin-top:20px;
}
.index-content a{
    color: black;
}
.index-content .card{
    background-color: #FFFFFF;
    padding:0;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius:4px;
    box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.3);

}
.index-content .card:hover{
    box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 6px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
    color:black;
}
.index-content .card img{
    width:100%;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}
.index-content .card h4{
    margin:20px;
}
.index-content .card p{
    margin:20px;
    opacity: 0.65;
}
.index-content .blue-button{
    width: 100px;
    -webkit-transition: background-color 1s , color 1s; /* For Safari 3.1 to 6.0 */
    transition: background-color 1s , color 1s;
    min-height: 20px;
    background-color: #002E5B;
    color: #ffffff;
    border-radius: 4px;
    text-align: center;
    font-weight: lighter;
    margin: 0px 20px 15px 20px;
    padding: 5px 0px;
    display: inline-block;
}
.index-content .blue-button:hover{
    background-color: #dadada;
    color: #002E5B;
}
@media (max-width: 768px) {

    .index-content .col-lg-3 {
        margin-top: 20px;
    }
}






@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

body {
    padding: 30px 0px 60px;
}
.panel > .list-group .list-group-item:first-child {
    /*border-top: 1px solid rgb(204, 204, 204);*/
}
@media (max-width: 767px) {
    .visible-xs {
        display: inline-block !important;
    }
    .block {
        display: block !important;
        width: 100%;
        height: 1px !important;
    }
}
#back-to-bootsnipp {
    position: fixed;
    top: 10px; right: 10px;
}


.c-search > .form-control {
   border-radius: 0px;
   border-width: 0px;
   border-bottom-width: 1px;
   font-size: 1.3em;
   padding: 12px 12px;
   height: 44px;
   outline: none !important;
}
.c-search > .form-control:focus {
    outline:0px !important;
    -webkit-appearance:none;
    box-shadow: none;
}
.c-search > .input-group-btn .btn {
   border-radius: 0px;
   border-width: 0px;
   border-left-width: 1px;
   border-bottom-width: 1px;
   height: 44px;
}


.c-list {
    padding: 0px;
    min-height: 44px;
}
.title {
    display: inline-block;
    font-size: 1.7em;
    font-weight: bold;
    padding: 5px 15px;
}
ul.c-controls {
    list-style: none;
    margin: 0px;
    min-height: 44px;
}

ul.c-controls li {
    margin-top: 8px;
    float: left;
}

ul.c-controls li a {
    font-size: 1.7em;
    padding: 11px 10px 6px;
}
ul.c-controls li a i {
    min-width: 24px;
    text-align: center;
}

ul.c-controls li a:hover {
    background-color: rgba(51, 51, 51, 0.2);
}

.c-toggle {
    font-size: 1.7em;
}

.name {
    font-size: 1.7em;
    font-weight: 700;
}

.c-info {
    padding: 5px 10px;
    font-size: 1.25em;
}
.img-circle{
  width:50% !important
}
</style>
<div class="index-content">

          <?php foreach($projectDetail as $project){ ?>
            <a href="<?php echo base_url();?>account/project_detail/<?php echo $project['id'];?>">
                <div class="col-lg-3">
                    <div class="card">
                        <img src="http://cevirdikce.com/proje/hasem-2/images/finance-1.jpg">
                        <h4><?php echo $project['serviceName'];?></h4>
                        <p>Created <?php echo $project['created'];?></p>
                        <p>Status <?php echo $project['statusName'];?></p>
                        <a href="#" class="blue-button">Delete</a>
                    </div>
                </div>
            </a>

          <?php } ?>

          <h3>Job Detail</h3>
          <h4>Need for a <?php echo $project['serviceName'];?></h4>
          <p><?php
            $json =  json_decode($project['json'],true);
            foreach($json['radio'] as $r){
              $q = $r[0];
              echo $q;
              echo '<br>';
            }
          ?><p>


</div>
<h3>Available Workers</h3>
<div class="row">
      <div class="">
          <div class="panel panel-default">
              <div class="row" style="display: none;">
                  <div class="col-xs-12">
                      <div class="input-group c-search">
                          <input type="text" class="form-control" id="contact-list-search">
                          <span class="input-group-btn">
                              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                          </span>
                      </div>
                  </div>
              </div>

              <ul class="list-group" id="contact-list">

                  <li class="list-group-item">
                      <div class="col-xs-12 col-sm-3">
                          <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle"/>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                          <span class="name">Scott Stevens</span><br/>
                          <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5842 Hillcrest Rd"></span>
                          <span class="visible-xs"> <span class="text-muted">5842 Hillcrest Rd</span><br/></span>
                          <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(870) 288-4149"></span>
                          <span class="visible-xs"> <span class="text-muted">(870) 288-4149</span><br/></span>
                          <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="scott.stevens@example.com"></span>
                          <span class="visible-xs"> <span class="text-muted">scott.stevens@example.com</span><br/></span>
                          <span>Rate 7.9<br/></span>

                      </div>
                      <div class="col-xs-12 col-sm-3">
                          <button class="btn btn-success btn-sm">Assign | Award</button>
                          <button class="btn btn-danger btn-sm">Revoke</button>
                          <h5>Job Completed 100%</h5>
                          <h5><b>456 Reviews</b></h5>
                      </div>
                      <div class="clearfix"></div>
                  </li>

              </ul>
          </div>
      </div>
</div>
