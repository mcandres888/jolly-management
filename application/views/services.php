<?php include 'header.php'?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Services
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?=site_url()?>">Home</a>
                    </li>
                    <li class="active">Services</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="<?=base_url('images')?>/services_banner.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Services</h2>
            </div>
  	<div class="col-md-8">
       <ul>
<?php
    $services_data = $services['rows'];
    foreach ($services_data as $s_data) {
        echo "<li><h4>" . $s_data->description . "</h4></li>";
    }

?>
       </ul>
	</div>

	<br>
	<br>
	</div>
	<div class="row">

 		<div class="col-lg-12">
   		<h2 class="page-header">Our Specialization</h2>
   	</div>

  <div class="col-md-8">
 	<ul>

<?php
    $sp_data = $specializations['rows'];
    foreach ($sp_data as $s_data) {
        echo "<li><h4>" . $s_data->description . "</h4></li>";
    }

?>
	</ul>

	</div>

	<br>
	<br>
	</div>
 

        <!-- /.row -->

        <hr>
<?php include 'footer.php'?>
