<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>Prune Beat</title>

        <!-- Meta Tags -->
        <meta name="description" content="The official Prune band website - serving up sweet domestic rock from the heart of St. Louis since 1997.">
        <meta name="keywords" content="prune, beat, prunebeat, band, music, st. louis, saint louis">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">

        <!-- JQUERY 3.2.1 -->
        <script src="lib/jquery-3.2.1.min.js"></script>

        <!-- BOOTSTRAP 3.3.7 -->
        <link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'/>
        
        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/style.css"/>

        <!-- Scripts -->
        <script src="script/script.js"></script>
        <script src="script/contact.js"></script>
        <?php include('script/submitForm.php'); ?>
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable" aria-expanded="false" id="collapse-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html"><img alt="Prune Home" src="img/logos/prune-logo.png" class="navbar-brand"></a>
                </div><!-- /.navbar-header -->
                
                <div class="collapse navbar-collapse navbar-right" id="collapsable">
                    <ul class="nav navbar-nav unselectable">
                        <li id="about-nav"><a href="about.html" class="navbar-text">ABOUT</a></li>
                        <li id="music-nav"><a href="music.html" class="navbar-text">DISCOGRAPHY</a></li>
                        <li id="videos-nav"><a href="videos.html" class="navbar-text">VIDEOS</a></li>
                        <!--<li id="shop-nav"><a href="shop.html" class="navbar-text">SHOP</a></li>-->
                        <li id="contact-nav"><a href="contact.php" class="navbar-text">CONTACT US</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                
                <button disabled="disabled" type="button" class="btn btn-default navbar-btn">SIGN IN / SIGN UP</button>
            </div><!-- /.container-fluid -->
        </nav>
           
        <!-- Page Body -->
        <div id="page-body">
            <div class="container-fluid" id="contact-page">
                <div class="row">
                    <h1>Contact Us</h1>
                    <h2>prune_beat@yahoo.com</h2>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" name="contact-form" class="container" id="contact-input">
                            <div class="row">
                                <h3>Enter your information:</h3>
                                <p id="contact-error"><?php echo $errMsg; ?></p>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="first-name">First Name &#8432;</label>
                                    <div class="input-group">
                                        <input name="first-name" type="text" class="form-control" id="first-name"
                                               value="<?php echo isset($_POST['first-name']) ? $_POST['first-name'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="last-name">Last Name</label>
                                     <div class="input-group">
                                        <input name="last-name" type="text" class="form-control" id="last-name"
                                               value="<?php echo isset($_POST['last-name']) ? $_POST['last-name'] : '' ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address-1">Address Line 1</label>
                                     <div class="input-group">
                                        <input name="address-1" type="text" class="form-control" id="address-1"
                                               value="<?php echo isset($_POST['address-1']) ? $_POST['address-1'] : '' ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address-2">Address Line 2</label>
                                     <div class="input-group">
                                        <input name="address-2" type="text" class="form-control" id="address-2"
                                               value="<?php echo isset($_POST['address-2']) ? $_POST['address-2'] : '' ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4" id="city-col">
                                    <label for="city">City</label>
                                     <div class="input-group">
                                        <input name="city" type="text" class="form-control" id="city"
                                               value="<?php echo isset($_POST['city']) ? $_POST['city'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-md-4" id="state-col">
                                    <label for="state">State</label>
                                    <div class="input-group">
                                        <select name="state" class="form-control" id="state"></select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="zip">Zip</label>
                                     <div class="input-group">
                                        <input name="zip" type="text" class="form-control" id="zip"
                                               value="<?php echo isset($_POST['zip']) ? $_POST['zip'] : '' ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4" id="phone-col">
                                    <label for="phone">Phone</label>
                                     <div class="input-group">
                                        <input name="phone" type="text" class="form-control" id="phone"
                                               value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-md-8" id="email-col">
                                    <label for="email">Email &#8432;</label>
                                     <div class="input-group">
                                        <input name="email" type="text" class="form-control" id="email"
                                               value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <label for="msg-box" id="msg-label">Type Your Message  &#8432; :</label>
                                <textarea rows="10" name="msg-box" id="msg-box"><?php echo isset($_POST['msg-box']) ? $_POST['msg-box'] : '' ?></textarea>
                            </div>
                            
                            <div class="row">
                                <h4> &#8432; required field</h4>
                                <input type="submit" name="submit" value="Send" class="btn btn-default">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
             
        <!-- Footer -->
        <footer>
            <address>
                © Copyright - Prune &#183;
                Elephant Playroom Records &#183;
                St. Louis, MO &#183;
                prune_beat@yahoo.com &#183;
                Prune @prunebeat on Facebook.com
            </address>
        </footer>
    </body>
</html>