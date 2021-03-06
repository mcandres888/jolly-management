<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jolly Management Solution Inc</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a class="navbar-brand" href="#"> Jolly Management Solutions Inc.</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

     <ul class="nav navbar-nav navbar-right">
                    <li <? if ($nav=="home") { ?>class="active" <? }?>>
                        <a href="<?=site_url()?>">Home</a>
                    </li>
                    <li <? if ($nav=="about") { ?>class="active" <? }?>>
                        <a href="<?=site_url()?>/main/about">About</a>
                    </li>
                    <li <? if ($nav=="services") { ?>class="active" <? }?>>
                        <a href="<?=site_url()?>/main/services">Services</a>
                    </li>
                    <li <? if ($nav=="jobs") { ?>class="active" <? }?>>
                        <a href="<?=site_url()?>/main/jobs/0">Job Opportunity</a>
                    </li>
                    <li <? if ($nav=="tools") { ?>class="dropdown active" <? } else {?> class="dropdown" <?}?>>
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Tools <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
				<li><a href="http://payslip.jmsi.com.ph:8080/jmsi-payslip-viewer-1.0/">WEB Payslip</a></li>
              			</ul>
                    </li>
                    <li <? if ($nav=="contact") { ?>class="active" <? }?>>
  			 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Contact Us <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url()?>/main/contact">Main Office</a></li>
                        <li><a href="<?=site_url()?>/main/branches">Branches</a></li>
              	          </ul>


                    </li>
<!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Full Width Page</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->
    </nav>
