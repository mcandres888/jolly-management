<?php include 'header.php'?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?=site_url()?>">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?=base_url('images')?>/temp.jpg" alt="">
            </div>
            <div class="col-md-6">
                <h2>About JMSI</h2>
          <p>
The company was incorporated on April 29, 2005 to engage in the business of local contracting, enlisting, recruiting professionals, skilled, unskilled and individuals or firms in the supply of manpower.
</p><p>

<strong>JMSI</strong>, has been supplying manpower nationwide with experience in Luzon, Visayas and Mindanao evidenced by the clientele in our map where we are deploying manpower. We ensure quality and competitiveness of our workers. We invest efforts in mobilizing highly qualified workers to suit the requirements and to the satisfaction of our clients.
</p>
<p>
<strong>JMSI</strong> is committed to creating a highly interactive relationship to provide our clients with the best possible service tailored and to suit their specific needs while aiming to provide quality service at a very reasonable and competitive cost.
</p>
<p>

<strong>JMSI</strong> also have not lost sight that its objective is to assist Filipinos in securing promising job opportunities nationwide in order to help them augment their needs and attain economic stability for their families.
</p>
<p>


<strong>JMSI</strong> believes that to obtain the success of a business of this kind aside from the combined effort between the company and its clienteles the company should also have an understanding of its client’s business.  Thus, our company place a huge emphasis on taking a full client briefing and thereby get a full understanding of their needs.  The objective is to transpose that need into a viable recruitment action plan.
           </p>
            </div>
        </div>

<br><br>
<div class="col-lg-12">

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Our Vision and Mission</h4>
                    </div>
                    <div class="panel-body">
                        <h4>Our Mission</h4>
                        <p>
                      Explore the market needs and match it with JMSI strength and core competence in manpower supply to it’s valued clients.
                        </p>
                        <h4>Our Vision</h4>
                        <p>
                        For the company to master the core competence of effective skills matching the least possible time to provide value and enhance our Clients operations and business.

                        </p>
                    </div>
                </div>
            </div>
         <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Our Core Asset</h4>
                    </div>
                    <div class="panel-body">
                        <p><b>JMSI</b> prides itself in having people with wide range of experience in respective areas of expertise, who are always looking for improvements to meet the needs of our clients.  This is why we see the people in our organization as our core asset.</p>
<p>  <b>JMSI</b> has built a good working relationship amongst its staff premised on trust, confidence and teamwork which results in harmony and team efforts that promotes effectiveness and result.
</p>
                    </div>
                </div>
            </div>

 <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Our Core Value</h4>
                    </div>
                    <div class="panel-body">
                        <p><b>JMSI</b> guiding principles hinge on our ideologies with emphasis on:</p>
<p> Providing clients with superior services. Intimate knowledge of our clients and their business activities. </p>
<p> Providing workplace that is pleasant and comfortable to our employees. Commitment in pursuit of higher goals.
</p>
                    </div>
                </div>
            </div>



</div>
        <!-- /.row -->

        <!-- Team Members -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>

<?php

    $members = $employees_data['rows'];

    foreach ($members as $member) {

?>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><?=$member->employee_name?><br>
                            <small><?=$member->job_title?></small>
                        </h3>
                        <p><?=$member->description?></p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


<?php }  // closing?>


        </div>
        <!-- /.row -->

        <!-- Our Customers -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Clients</h2>
            </div>
        </div>



<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
          <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
          <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
          <h3>Caption Text</h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->

        <!-- /.row -->

        <hr>

<?php include 'footer.php'?>
