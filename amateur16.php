<?php
session_start();
if( !$_SESSION['Email'])
{
	header( "Location: signin.php");
}
?>
<!DOCTYPE html>
<!--
    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
<head>
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">
    <!--
    Customize this policy to fit your own app's needs. For more guidance, see:
        https://github.com/apache/cordova-plugin-whitelist/blob/master/README.md#content-security-policy
    Some notes:
        * gap: is required only on iOS (when using UIWebView) and is needed for JS->native communication
        * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
        * Disables use of inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
            * Enable inline JS: add 'unsafe-inline' to default-src
    -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <title>Profile|QBAccounts</title>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="logout.php">LOG OUT</a></li>
                <li><a href="profile.php">BACK</a></li>
            </ul>
        </div>
    	</nav>
    
    <div style="margin:10px;">
        <h3>Lecture 12|Division Of Partnership Profit And Loss</h3>
        <!-- 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9" style="margin:10px;">
            <iframe width="854" height="510" src="https://www.youtube.com/embed/wODP0UekxhM" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    
    <nav>
      <ul class="pager">
        <li class="previous"><a href="amateur15.php"><span aria-hidden="true">&larr;</span> Older</a></li>
        <li class="next"><a href="amateur17.php">Newer <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
	</nav>
    
    <div style="margin:10px;">
        <h3>Congratulations! YOU HAVE COMPLETED THE BASICS OF ACCOUNTING. NOW TAKE THE SEMI PRO COURSE AND BEAT THE BEST.</h3>
    </div>
    <p><a class="btn btn-primary btn-lg" href="semipro.html" role="button">SEMIPRO</a></p>

    <p><a class="btn btn-primary btn-lg" href="profile.html" role="button">BACK</a></p>
</body>
</html>