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



$jobs = $jobs_data['rows'];
$pages = $jobs_data['pages'];

foreach ($jobs as $job) {


?>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-9">
		<h3><?=$job->position?></h3>

                <h4>Job location: <?=$job->location?></h4>
                <h4>Salary: <?=$job->salary?></h4>
		<h3>Job Requirement</h3>
                <p>
                	<?=$job->requirement?>
                </p>
            <p>Email Us At: <?=$job->email?></p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

<?php } //closing ?>

<nav>
  <ul class="pagination">
    <li>
      <a href="<?=$prev_url?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php
     
     for ($i = 0; $i < $jobs_data['pages'] ; $i++) {
     
        $url = site_url() . "/main/jobs/$i";
        $page = $i + 1;
        if ($current_page == $i) {
    			echo "<li class='active'><a  href='$url'>$page</a></li>";
        } else {
    			echo "<li><a  href='$url'>$page</a></li>";
        }
		}
		?>
    <li>
      <a href="<?=$next_url?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<?php include 'footer.php'?>
