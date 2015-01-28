<?php include 'header.php'?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Branches
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?=site_url()?>">Home</a>
                    </li>
                    <li class="active">Branches</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

<?php

   $branches = [ array("branch_name"=> "Cagayan Office", "coordinator" => "TRENA BARETE",
           "address" => "17th - 1st St. Nazareth  Cagayan De Oro", 
           "iframe_src" => "https://www.google.com/maps/embed/v1/search?q=Nazareth%2C%201st%20St%2C%20Cagayan%20de%20Oro%2C%20Northern%20Mindanao%2C%20Philippines&key=AIzaSyDtO0uKMUJ9cHbpSkA4lebvPcfHoFasNlQ",
           "landline" => "088-8801429" , "mobile" => "0917-5080595"  ),
     array("branch_name"=> "Cebu Office", "coordinator" => "JOEL CANDOLETA",
           "address" => "Nicton Bldg., Eagle St.  T. Padilla Cebu City",
           "iframe_src" => "https://www.google.com/maps/embed/v1/search?q=Nicton%20Bldg.%2C%20Eagle%20St.%20%20T.%20Padilla%20Cebu%20City&key=AIzaSyDtO0uKMUJ9cHbpSkA4lebvPcfHoFasNlQ",
           "landline" => "032-2361220" , "mobile" => "0929-7620441"  ),
     array("branch_name"=> "Davao Office", "coordinator" => "JOSEPH TROPICO",
           "address" => "BGP Commercial Comp. II DOR# 202 Matina Crossing Davao City",
           "iframe_src" => "https://www.google.com/maps/embed/v1/search?q=bgp%20commercial%20matina%20crossing%20davao%20city&key=AIzaSyDtO0uKMUJ9cHbpSkA4lebvPcfHoFasNlQ",
           "landline" => "082-2957787" , "mobile" => "0910-3333222"  ),
     array("branch_name"=> "Iloilo Office", "coordinator" => "FERDINAND DORONILA",
           "address" => "2nd Flr. Injap Bldg. Cor. Luna and Huervana St Lapaz Iloilo City",
           "iframe_src" => "https://www.google.com/maps/embed/v1/search?q=Injap%20Bldg.%20Cor.%20Luna%20and%20Huervana%20St%20Lapaz%20Iloilo%20City&key=AIzaSyDtO0uKMUJ9cHbpSkA4lebvPcfHoFasNlQ",
           "landline" => "033-3204849" , "mobile" => "0999-5047720"  ) ] ;

   foreach ($branches as $branch) {

?>
        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
<iframe width="600" height="450" frameborder="0" style="border:0" src="<?=$branch['iframe_src']?>" ></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3><?=$branch['branch_name']?></h3>
                <p>
                   <h5><?=$branch['coordinator'] ?> </h5>
                </p>
                   <?=$branch['address'] ?> <br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: <?=$branch['landline'] ?>
<br></p>

                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: <?=$branch['mobile'] ?>
<br></p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:hrdrecruitment.jmsi@gmail.com">hrdrecruitment.jmsi@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Saturday: 9:00 AM to 5:00 PM</p>
            </div>
        </div>
        <!-- /.row -->
        <hr>
<?php

}

?>


<?php include 'footer.php'?>
