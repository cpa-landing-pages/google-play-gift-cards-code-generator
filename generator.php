<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="MIG-92">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="images/favicon.png">

    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <meta property="fb:app_id" content="" />

    <title>GooglePlay Generator</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.unpacker.org/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.unpacker.org/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="styles/vendors/animate.min.css" rel="stylesheet">
    <link href="styles/main.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">

        <!-- Basic-header-2 -->

    <nav class="navbar navbar-default">

        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo2.png" width="220" alt="Google Play Gratuit"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a id="home" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>

                    <li class="active">
                        <a id="cards" href="generator.php"><i class="fa fa-cogs" aria-hidden="true"></i> Generator</a>
                    </li>

                    <li>
                        <a id="cards" href="contact.php"><i class="fa fa-users" aria-hidden="true"></i> Contact us</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

        <!-- Basic-conatiner-2 -->

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="first" class="panel panel-default google-panel">
                            <div class="panel-body">
                            <img src="images/generator-play.png" width="80" class="img-circle img-custom" alt="">

                                <h1 class="h1-generator text-center">Google Play Generator <i class="fa fa-cogs" aria-hidden="true"></i></h1>
                                <hr>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a, commodi blanditiis.</p>
                                <br>
                                <div class="img-flex-gen">
                                    <div class="google-gen-card">
                                        <img class="img-respo card-value gift-active" src="images/10-gift.png" alt="" data-value="10€">
                                    </div>

                                    <div class="google-gen-card">
                                        <img class="img-respo card-value" src="images/20-gift.png" alt="" data-value="20€">
                                    </div>

                                    <div class="google-gen-card">
                                        <img class="img-respo card-value" src="images/50-gift.png" alt="" data-value="50€">
                                    </div>

                                    <div class="google-gen-card">
                                        <img class="img-respo card-value" src="images/100-gift.png" alt="" data-value="100€">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <label>Select a Region:</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                            <select id="region" class="form-control ubuntu-bold form-text pointer">
                                                    <option value="North America">North America</option>
                                                    <option value="South America">South America</option>
                                                    <option value="Europe">Europe</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="East Asia">East Asia</option>
                                                    <option value="China">China</option>
                                                    <option value="Oceania">Oceania</option>
                                                <option value="Choisissez votre plateforme" disabled="" selected="">▼ Choisisez votre région</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-xs-12 col-md-6">
                                        <div class="switch">
                                             <label>I agree to <a href="#" > TOS </a>
                                                    <input type="checkbox" checked class="simple-switch-input tos"/>
                                                    <span class="simple-switch dark"></span>
                                            </label>
                                            <label>SHA 256
                                                    <input type="checkbox" class="simple-switch-input sha"/>
                                                    <span class="simple-switch dark"></span>
                                            </label>

                                        </div>
                                        <input id="card" name="" value="20€" type="hidden">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                        <a id="next" href="#" class="btn btn-default btn-lg btn-block generator-btn"><i class="fa fa-cogs" aria-hidden="true"></i> Démarrez le générateur</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="second" class="panel panel-default google-panel hide">
                            <div class="panel-body konzola">
                                <img src="images/generator-play.png" width="80" class="img-circle img-custom" alt="">
                                <h1 class="h1-generator text-center minecraft-font">Google Play Generator <i class="fa fa-cogs" aria-hidden="true"></i></h1>
                                <hr>
                                <br>
                                <br>
                                <div class="loader"></div>
                                <br>
                                <div id="cons" class="consol-text text-center">
                                </div>
                                <br>
                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                                <!-- change this onclick function with function from  your network. -->
                                <button onclick="alert('demo')" class="user-data btn btn-default btn-lg btn-block generator-btn hide"><i class="fa fa-cogs" aria-hidden="true"></i> Procceed</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Basic-footer-1 -->
        <div class="basic-footer-1 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <a class="social-btn" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="social-btn" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="social-btn" href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <span class="basic-footer-1-text">© 2017 - Your domain name. All rights reserved.</span>
            </div>
        </div>

        <!-- modal-error -->
        <div class="modal fade bs-example-modal-sm" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="modal-error">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Error <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h4>
                        <p class="error-message text-center">Choisissez votre plateforme!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- JS -->
    <script type="text/javascript">
    //consoleMessages edit text if you wish just leave text in {}
          hack = ['Connecting to {server} server ...', 'Proxy Protection: On ...', 'SHA 256 Encryption: {sha} ...', ' Card Found: [ {card} ]   ...', 'Verifying card code ...', 'Uploading code...', 'Please verify you are not bot... '];


    </script>

    <script src="https://cdn.unpacker.org/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.unpacker.org/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="scripts/vendors/jquery.shuffleLetters.js"></script>
    <script src="scripts/script.min.js"></script>
</body>
</html>
