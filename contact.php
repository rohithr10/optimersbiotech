

    <?php include 'header.php'?>
            
    <!-- Page title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a></li>                           
                            <li> Contact</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                    <div class="page-title-heading">
                        <h1 class="title">Contact Us</h1>
                    </div><!-- /.page-title-captions -->  
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 
    <main class="main-content" id="main-content">
        <!-- Our Work -->
        <section class="flat-row pd-bottom5">
            <div class="container">
                <div class="contact-iconbox">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="iconbox">
                                <div class="box-header">
                                    <div class="box-icon">
                                        <i class="icon-location-pin"></i>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div class="box-title">Address Info</div>    
                                    <p>No: 5/7, 3rd School street, Virugambakkam,
                                     Chennai-600 092</p> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="iconbox">
                                <div class="box-header">
                                    <div class="box-icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div class="box-title">Phone</div>    
                                    <p>+91 9361877248<br></p> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="iconbox">
                                <div class="box-header">
                                    <div class="box-icon">
                                        <i class="icon-envelope-open"></i>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div class="box-title">Email</div>    
                                    <p>optimersbiotech1@gmail.com<br></p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider h96"></div>
                <div class="contact-form-maps">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title-section left">
                                <h1 class="title">Contact Form</h1>
                                <div class="sub-title">
                                    Your email address will not be published. Required fields are marked *
                                </div>
                            </div>
                            <form id="requestform" class="flat-contact-form" method="post" action="./contact/contact-process.php" novalidate="novalidate">
                                <div class="field clearfix">      
                                    <div class="wrap-type-input clearfix">                    
                                        <div class="input-wrap name">
                                            <input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name" required="">
                                        </div>
                                        <div class="input-wrap email">
                                            <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email" required="">
                                        </div>
                                        <div class="input-wrap phone">
                                            <input type="text" value="" placeholder="Phone" name="phone" id="phone" required="">
                                        </div> 
                                        <div class="input-wrap subject">
                                            <input type="text" value="" placeholder="Subject" name="subject" id="subject" required="">
                                        </div>  
                                    </div>
                                    <div class="textarea-wrap">
                                        <textarea class="type-input" tabindex="3" placeholder="Comment" name="message" id="message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="submit-wrap">
                                    <button name="submit" type="submit" class="flat-button" id="submit" title="Submit now">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="title-section left">
                                <h1 class="title">Map Location</h1>
                                <div class="sub-title">
                                    Your email address will not be published. Required fields are marked *
                                </div>
                            </div>
                            <div class="flat-maps">
                                <div id="maps"></div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>

        </section>
    </main>
    <!-- Footer -->
    <!-- Footer -->
    <?php include 'footer.php' ?>

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>       


    </div>
    
    <!-- Javascript -->
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script> 
    <script src="javascript/jquery.easing.js"></script>    
    <script src="javascript/jquery-waypoints.js"></script>     
    <script src="javascript/jquery.cookie.js"></script>
    <script src="javascript/jquery-validate.js"></script>
    <script src="javascript/jquery.magnific-popup.min.js"></script> 
    <script src="javascript/imagesloaded.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu7khRz0pekDx6jaYeKXvAzqmeEq0Vpc0&region=GB"></script>
    <script src="javascript/gmap3.min.js"></script>
    <script src="javascript/html5shiv.js"></script>
    <script src="javascript/respond.min.js"></script>
     
       
    
    <script src="javascript/main.js"></script>
</body>
</html>