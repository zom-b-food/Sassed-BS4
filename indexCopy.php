<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0' name='viewport'/>
        <meta name="description"
              content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
        <meta name="author" content="ui-design-engineering.com, www.myuikit.com">
        <script src="./assets-bs/js/jquery-2.1.1.js" type="text/javascript"></script>
        <script src="./assets-bs/compiled/_myuikit.min.js" type="text/javascript"></script>
        <link rel="icon" href="./assets-bs/images/ui/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="./assets-bs/images/ui/favicon.ico" type="image/x-icon"/>
        <link rel="apple-touch-icon-precomposed" href="./assets-bs/images/apple-touch-icon.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="./assets-bs/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="./assets-bs/compiled/_myuikit.min.css"/>
        <link rel="stylesheet" href="./assets-bs/css/custom.css"/>
        <meta name="description"
              content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
        <meta name="author" content="ui-design-engineering.com, www.myuikit.com">
        <title>SASS-ified UI Kits</title>
        <style type="text/css">
            html {
                background-color: #05080f !important;

            }

            body, .ghostly {
                margin: 0;
                padding: 0;
                background-color: #05080f !important;
                height: 2000px;
            }

            img {
                max-width: 100%;
                height: auto;
            }

            h2.white {
                color: lightslategray;
                text-align: center;
                margin-top: 60px;
                font-family: Candara, sans-serif;
                font-style: italic;
            }

            #innerhead {
                position: relative;
                margin: 0 auto;
                width: 960px;
                padding-top: 20px;
                padding-bottom: 20px;
                display: block;
            }

            .sk-cube-grid {
                width: 40px;
                height: 40px;
                margin: 100px auto;
            }

            .sk-cube-grid .sk-cube {
                width: 33%;
                height: 33%;
                background-color: #cccccc;
                float: left;
                -webkit-animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
                animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
            }

            .sk-cube-grid .sk-cube1 {
                -webkit-animation-delay: 0.2s;
                animation-delay: 0.2s;
            }

            .sk-cube-grid .sk-cube2 {
                -webkit-animation-delay: 0.3s;
                animation-delay: 0.3s;
            }

            .sk-cube-grid .sk-cube3 {
                -webkit-animation-delay: 0.4s;
                animation-delay: 0.4s;
            }

            .sk-cube-grid .sk-cube4 {
                -webkit-animation-delay: 0.1s;
                animation-delay: 0.1s;
            }

            .sk-cube-grid .sk-cube5 {
                -webkit-animation-delay: 0.2s;
                animation-delay: 0.2s;
            }

            .sk-cube-grid .sk-cube6 {
                -webkit-animation-delay: 0.3s;
                animation-delay: 0.3s;
            }

            .sk-cube-grid .sk-cube7 {
                -webkit-animation-delay: 0s;
                animation-delay: 0s;
            }

            .sk-cube-grid .sk-cube8 {
                -webkit-animation-delay: 0.1s;
                animation-delay: 0.1s;
            }

            .sk-cube-grid .sk-cube9 {
                -webkit-animation-delay: 0.2s;
                animation-delay: 0.2s;
            }

            @-webkit-keyframes sk-cubeGridScaleDelay {
                0%, 70%, 100% {
                    -webkit-transform: scale3D(1, 1, 1);
                    transform: scale3D(1, 1, 1);
                }
                35% {
                    -webkit-transform: scale3D(0, 0, 1);
                    transform: scale3D(0, 0, 1);
                }
            }

            @keyframes sk-cubeGridScaleDelay {
                0%, 70%, 100% {
                    -webkit-transform: scale3D(1, 1, 1);
                    transform: scale3D(1, 1, 1);
                }
                35% {
                    -webkit-transform: scale3D(0, 0, 1);
                    transform: scale3D(0, 0, 1);
                }
            }
        </style>

        <body style="background-color: black!important;">
            <div class="ghostly">

                <h2 class="white">Loading assets...</h2>

                <div class="sk-cube-grid">
                    <div class="sk-cube sk-cube1"></div>
                    <div class="sk-cube sk-cube2"></div>
                    <div class="sk-cube sk-cube3"></div>
                    <div class="sk-cube sk-cube4"></div>
                    <div class="sk-cube sk-cube5"></div>
                    <div class="sk-cube sk-cube6"></div>
                    <div class="sk-cube sk-cube7"></div>
                    <div class="sk-cube sk-cube8"></div>
                    <div class="sk-cube sk-cube9"></div>
                </div>
            </div>

        <script type="text/javascript">
            jQuery(function ($) {

                $(window).load(function (event) {
                    event.preventDefault();

                    $("body").fadeOut(4000, function () {
                        window.location.href = "pages-bs/jump.php"
                    });
                });
            });

            //var loaderAnimation = $("#html5Loader").LoaderAnimation();
            $.html5Loader({filesToLoad: './files.json',
                //onUpdate: loaderAnimation.update,
                /*onUpdate: function () {
                 console.log("Asset updated!");
                 },*/
                onElementLoaded: function () {
                    console.log("Asset loaded!");
                },
                onMediaError: function () {
                    console.log("wtf!");
                },
                debugMode: true
            });
        </SCRIPT>



        <script src="./assets-bs/js/components/popper.min.js" type="text/javascript"></script>
        <script src="./assets-bs/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./assets-bs/js/bootstrap-switch.js" type="text/javascript"></script>
        <script src="./assets-bs/js/components/accordion.js" type="text/javascript"></script>
        <script src="./assets-bs/js/components/nouislider.min.js" type="text/javascript"></script>
        <script src="./assets-bs/js/components/wow.min.js" type="text/javascript"></script>
        <script src="./assets-bs/js/components/jquery.filtertable.js" type="text/javascript"></script>
        <script src="./assets-bs/js/components/tablesort.js" type="text/javascript"></script>
        <script src="./assets-bs/js/components/jquery.beefup.min.js"></script>
    </body>
</html>
