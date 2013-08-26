<?php
//session_start();
//init variables
$cf = array();
$sr = false;

if(isset($_SESSION['lf_returndata'])){
    $lf = $_SESSION['lf_returndata'];
    $sr = true;
}


// spinner with fonts
// get errors in proper position
// validate fields JS


// FORCE CRHOME FRAME
// fallBACK for HTML5 Forms

//Remember login (if check login)



//Change color of li icons invalid

// change opacity of msg when device is mobile. Put msg overtop





?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="pt"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="pt"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="pt"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="pt"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta http-equiv="cleartype" content="on" />
  <title>Your Future Login</title>

  <meta name="HandheldFriendly" content="True" />
  <meta name="MobileOptimized" content="320" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <link rel="stylesheet" href="css/style.css">


  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Signika:400,600,700" rel="stylesheet" type="text/css">

  <script src="js/modernizr.custom.22926.js" type="text/javascript"></script>


    <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" href="css/ie.css">
    <script type="text/javascript" src="js/selectivizr-min.js"></script>
    <script type="text/javascript" src="js/respond.js"></script>
    <![endif]-->


    <script>
Modernizr.load([
/*    {
        test : Modernizr.mq('only all'),
        nope : 'js/respond.js',
        callback: function(){
           console.log('loaded mq');
       }
   },
   */
   {
test: ('__proto__' in {}), // not IE?
yep: 'js/zepto.min.js',
nope: 'js/jquery-1.7.1.min.js',
callback: function(){
   // console.log(($));
}
},

{
    test: Modernizr.inputtypes.email && Modernizr.input.required && Modernizr.input.placeholder && Modernizr.input.pattern,
    // Polyfill older browsers
    nope: ['js/h5f.min.js','js/h5f.ie.js'],
    complete: function() {
    if(typeof H5F!='undefined'){
        H5F.setup(document.getElementById("dologin"));
    }

    }
},

{
    test: Modernizr.touch,
    yep: ['js/fastclick.js', 'js/touch.js']
},

{
    test: window.JSON,
    nope: 'js/json2.js'
},

{
    test: !(Modernizr.csstransitions),
    nope: 'jquery.animate-enhanced.min.js'
},

{load: 'js/main.js'}


]);



    </script>

</head>
<body>

    <noscript>
        <div>
            <p>Please enable Javascript to best experience this website</p>
        </div>
    </noscript>

    <div data-role="page">

        <div id="content">