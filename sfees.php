<?php
/**
 * Created by PhpStorm.
 * User: babafemi
 * Date: 1/18/18
 * Time: 12:15 PM
 */
?>
<!--page title start-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DEMO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Unified Payments Demo">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
    <link href="demo-panel/demo-panel-style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page-content">


<section class="page-title ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Unified Pay</h2>
            </div>
        </div>
    </div>
</section>
<section class="section-padding default-blog grid-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="tt-sidebar-wrapper" role="complementary">
              
                    <div class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li><a href="#">PayArena</a></li>
                            <li><a href="#">USSD</a></li>

                        </ul>
                    </div><!-- /.widget_categories -->


                    <div class="widget widget_tt_twitter">
                        <i class="fa fa-twitter"></i>
                        <div id="twitter-gallery-feed">
                            <div class="twitter-widget"></div> <!-- this div is required for carousel injected by javascript -->
                            <!-- html code injected via javascript -->
                        </div>

                    </div><!-- /.widget_tt_twitter -->

                </div><!-- /.tt-sidebar-wrapper -->
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <article class="post-wrapper">

                            <p class="text-center">Demo Connection to Pay Arena</p>
                            <div style="margin:0 auto;"><img src="assets/img/ups.png" class="img-responsive"  /></div>
                            <form action="http://196.46.20.80:8085/KHROMEPAY" method="post">
                                <div class="input-container">
                                    <label for="fullname">Fullname</label>
                                    <input type="text" id="fullname" ng-model="pay.name" class="form-control"/>
                                </div>
                                <div class="input-container">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" ng-model="pay.email" class="form-control"/>

                                    <div class="bar"></div>
                                </div>
                                <div class="input-container">
                                    <label for="amount">Amount</label>
                                    <input type="text" id="amount" name="amount" required="required" ng-model="pay.amount" class="form-control"/>
                                    <input type="hidden" value="566" id="currency" name="currency" />
                                    <input type="hidden" value="demo" id="description" name="description" />
                                    <input type="hidden" value="https://payarena.herokuapp.com/response.php" id="returnUrl" name="returnUrl" />
                                    <input type="hidden" value="D8FA2DE2576009125CE6828E83CA8762525937B2F8BA9C9E" name="secretKey" id="secretKey" />
                                    <input type="hidden" name="fee" id="fee" value="0">

                                </div>
                                <div class="form-group">
                                    <input type="submit" value="do pay" class="btn btn-primary" />
                                </div>


                            </form>


                        </article><!-- /.post-wrapper -->
                    </div><!-- /.col-md-12-->




                </div>
            </div>

        </div>


    </div><!-- /.container -->
</section>
<!-- Grid News End -->
</div>