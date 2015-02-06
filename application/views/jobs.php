<?php include 'header.php'?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Job Opportunity
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?=site_url()?>">Home</a>
                    </li>
                    <li class="active">Job Opportunity</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

<?php
$jobs = array(
    array("position" => "1 Production Crew", "location" => "Taguig" , "salary" => "pakyaw rate"),
    array("position" => "2 Production Crew", "location" => "Taguig" , "salary" => "pakyaw rate"),
    array("position" => "3 Production Crew", "location" => "Taguig" , "salary" => "pakyaw rate"),
    array("position" => "4 Production Crew", "location" => "Taguig" , "salary" => "pakyaw rate"),
    array("position" => "5 Production Crew", "location" => "Taguig" , "salary" => "pakyaw rate"),

);

foreach ($jobs as $job) {


?>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-9">
		<h3><?=$job['position']?></h3>

                <h4>Job location: Taguig</h4>
                <h4>Salary: Pakyaw Rate/Piece Rate</h4>
		<h3>Job Requirement</h3>
                <p>Male not more than 28 years old <br>
                Atleast 1 year experience in the food industry <br>
                College Level, High School Graduate, College Graduate</p>
                <p>Interested applicant may apply personally at:
Islas Unidas Building 5590 Osmeña Highway Cor. Makiling St. Brgy. Palanan Makati.Email Us At: hrdrecruitment.jmsi@gmail.com & hrdrecruitment.jmsi@yahoo.com </p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

<?php } //closing ?>

<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="active"><a  href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<?php include 'footer.php'?>
