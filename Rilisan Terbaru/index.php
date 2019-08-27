
<!DOCTYPE html>
<?php
    sleep(2);
    ?>
<html><head>

        <title>Rilisan Terbaru ~ Pustaka Anime</title>
        <link rel="shortcut icon" href="https://rawcdn.githack.com/setiawan4739/hosting-web/062187a4652568b88a5869a94553261c634d692a/img/default2.png">

        <!-- STYLES -->
        <link rel="stylesheet" href="https://rawcdn.githack.com/setiawan4739/hosting-web/062187a4652568b88a5869a94553261c634d692a/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://rawcdn.githack.com/setiawan4739/hosting-web/062187a4652568b88a5869a94553261c634d692a/css/style.css">

        <!-- SCRIPTS -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://rawcdn.githack.com/setiawan4739/hosting-web/062187a4652568b88a5869a94553261c634d692a/js/directorylister.js"></script>

        <!-- FONTS -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cutive+Mono">

        <!-- META -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

                <style type="text/css">
            .navbar-default {
            background-color: #222;
            border-color: #e7e7e7;
            }
            .navbar-default .navbar-brand {
            color: #9d9d9d;
            }
            .navbar-default .navbar-brand:hover {
            color: #f2f2f2;
            }
            .navbar-default .navbar-nav>li>a {
            color: #9d9d9d;
            }
            .navbar-default .navbar-nav>li>a:hover {
            color: #f2f2f2;
            }
            .container {
                max-width: none;
            }
            #directory-list-header {
                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
                font-size: 14px;
                font-weight: bold;

            }
            #directory-listing{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 14px;

            }
            @media (min-width: 768px){
            .col-md-1 {
            width: 17%;
            }
            .col-md-6{
            width: 47%;
            }
            /*.col-md-2 {
            width: 20%;
            }*/
            .col-md-3 {
            width: 25%;
            }
        }
            @media (max-width: 600px) {
            .col-md-1 {
            width: 27%;
            } 
            }
            @media (min-width: 601px) and (max-width: 767px){
            .col-md-1 {
            width: 22%;
            }
            }
            @media (min-width: 500px) {
            
            .col-md-6{
            width: 35%;
            }
            .col-md-2 {
            width: 32%;
            }
            .col-md-3 {
            width: 25%;
            }
            }
            @media (max-width: 499px) {
             .col-md-1 {
                display: none;
             }
             .col-xs-10 {
            width: 20%;
            }
            .col-xs-9 {
                width: 20%;
            }
            .col-md-6{
            width: 55%;
            }
            .col-xs-3 {
                width: 25%;
            }
            .col-xs-2 {
            width: 25%;
            }
            .col-md-3 {
                
            width: 25%;
            }   
            }
            @media (max-width: 767px) {
                .navbar-nav {
                    float: left;
                    
                }
                .navbar-nav > li {
                    float: none;
                }

            }
            @media (min-width: 768px) {
                .navbar-nav {
                    float: inherit;
                }
                .navbar-right {
                margin: 0;
                }
                .navbar-nav .home {
                    display: none;
                }
            }
            @media (max-width: 532px) {
                .navbar-right {
                    display: none;
                }
            }
            @media (max-width: 767px) {
                .navbar-default .navbar-brand {
                    display: none;
                }
            }
            @media (max-width: 436px) {
                .col-xs-3 {
                    width: 27%;
                }
                .col-md-6 {
                    width: 48%;
                }
                .col-xs-2 {
                width: 27%;
                }
                .file-name {
				white-space: normal;
				}
            }
            .navbar-collapse.in {
            overflow-y: visible;
            }
            .navbar-default .navbar-collapse, .navbar-default .navbar-form {
                border-color: transparent;
                border: none;
            }
            .navbar-inverse .navbar-toggle {
            border-color: #333;
            }
            .navbar-inverse .navbar-toggle .icon-bar {
            background-color: #fff;
            }
            .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
            background-color: transparent;
            }
            .navbar-default .navbar-toggle {
            border-color: #333;
            }
        </style>
   </head>

    <body>

        <div id="page-navbar" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Home</a>

                <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li><a class="home" href="/">Home</a></li>
                        <li><a href="/Daftar%20Anime">Daftar Anime</a></li>
                        <li><a href="/Genre">Genre</a></li>
                        <li><a href="/Musim">Musim</a></li>
                        <li><a href="/Rilisan%20Terbaru">Rilisan Terbaru</a></li>
                        <li><a href="https://pustakawibu.chatango.com">Chat</a></li>
                        <li><a href="/About">About</a></li>
                        
                    
                                    <ul class="nav navbar-nav navbar-right">

                    <ul id="page-top-nav" class="nav navbar-nav" style="display: none;">
                        <li>
                            <a href="javascript:void(0)" id="page-top-link">
                                <i class="fa fa-arrow-circle-up fa-lg"></i>
                            </a>
                        </li>
                    </ul>

                    
                </ul></ul>
                    </div>


            </div>
        </div>

        <div id="page-content" class="container">

            
                    <div class="alert alert-info alert-dismissible" id="infobubble" data-ts="1565729676">
        Cara melihat anime yang baru rilis atau di up, liat tanggal updatenya :D ~ <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        </div>
            <div id="directory-list-header">
                <div class="row">
                    <div class="col-md-1 col-sm-6 col-xs-10 text-center">Kategori</div>
                    <div class="col-md-6 col-sm-6 col-xs-10">Nama</div>
                    <div class="col-md-2 col-sm-2 col-xs-2 text-center" style="float: right;">Tanggal Update</div>
                    <div class="col-md-3 col-sm-4 text-center" style="float: right;display: none;">Tanggal</div>
                </div>
            </div>

            <ul id="directory-listing" class="nav nav-pills nav-stacked">

                <li data-name="Owari no Seraph BD" data-href="Owari no Seraph BD">
                        <a href="Owari no Seraph BD" class="clearfix" data-name="Owari no Seraph BD">


                            <div class="row">
                                <span class="file-name col-md-1 col-sm-6 col-xs-9 text-center">
                                    
                                        <div style="color: #337ab7; font-size: 13px; font-weight: bold; background-color: transparent; width: 80px; height: 18px; display: inline-block; vertical-align: middle; text-align: center; padding: 0 3px; border-radius: 10px 0px 0px 10px;border: 1px #337ab7 solid;border-right: none;" title="Subtitle Indonesia">Subtitle</div><img style="display: inline-block; vertical-align: middle; border-radius: 0px 10px 10px 0px; height: 18px;border: 1px #337ab7 solid;border-left: none;" src="https://lipis.github.io/flag-icon-css/flags/4x3/id.svg" title="Subtitle Indonesia">
                                    
    
                                </span>
                                <span class="file-name col-md-6 col-sm-6 col-xs-9">
                                    
                                    Owari no Seraph BD                                </span>

                                <span class="file-size col-md-2 col-sm-2 col-xs-3 text-center" style="float: right;">
                                    2019-08-27 16:48:56                                </span>

                                <span class="file-modified col-md-3 col-sm-4 text-center" style="float: right;display: none;">
                                    2019-08-27 16:48:56                                </span>
                            </div>

                        </a>

                        
                    </li>

                <li data-name="Date A Live III BD" data-href="Date A Live III BD">
                        <a href="Date A Live III BD" class="clearfix" data-name="Date A Live III BD">


                            <div class="row">
                                <span class="file-name col-md-1 col-sm-6 col-xs-9 text-center">
                                    
                                        <div style="color: #337ab7; font-size: 13px; font-weight: bold; background-color: transparent; width: 80px; height: 18px; display: inline-block; vertical-align: middle; text-align: center; padding: 0 3px; border-radius: 10px 0px 0px 10px;border: 1px #337ab7 solid;border-right: none;" title="Subtitle Indonesia">Subtitle</div><img style="display: inline-block; vertical-align: middle; border-radius: 0px 10px 10px 0px; height: 18px;border: 1px #337ab7 solid;border-left: none;" src="https://lipis.github.io/flag-icon-css/flags/4x3/id.svg" title="Subtitle Indonesia">
                                    
    
                                </span>
                                <span class="file-name col-md-6 col-sm-6 col-xs-9">
                                    
                                    Date A Live III BD                                </span>

                                <span class="file-size col-md-2 col-sm-2 col-xs-3 text-center" style="float: right;">
                                    2019-08-27 16:31:40                                </span>

                                <span class="file-modified col-md-3 col-sm-4 text-center" style="float: right;display: none;">
                                    2019-08-27 16:31:40                                </span>
                            </div>

                        </a>

                        
                    </li>

                <li data-name="Rakudai Kishi no Cavalry BD" data-href="Rakudai Kishi no Cavalry BD">
                        <a href="Rakudai Kishi no Cavalry BD" class="clearfix" data-name="Rakudai Kishi no Cavalry BD">


                            <div class="row">
                                <span class="file-name col-md-1 col-sm-6 col-xs-9 text-center">
                                    
                                        <div style="color: #337ab7; font-size: 13px; font-weight: bold; background-color: transparent; width: 80px; height: 18px; display: inline-block; vertical-align: middle; text-align: center; padding: 0 3px; border-radius: 10px 0px 0px 10px;border: 1px #337ab7 solid;border-right: none;" title="Subtitle Indonesia">Subtitle</div><img style="display: inline-block; vertical-align: middle; border-radius: 0px 10px 10px 0px; height: 18px;border: 1px #337ab7 solid;border-left: none;" src="https://lipis.github.io/flag-icon-css/flags/4x3/id.svg" title="Subtitle Indonesia">
                                    
    
                                </span>
                                <span class="file-name col-md-6 col-sm-6 col-xs-9">
                                    
                                    Rakudai Kishi no Cavalry BD                                </span>

                                <span class="file-size col-md-2 col-sm-2 col-xs-3 text-center" style="float: right;">
                                    2019-08-26 15:52:20                                </span>

                                <span class="file-modified col-md-3 col-sm-4 text-center" style="float: right;display: none;">
                                    2019-08-26 15:52:20                                </span>
                            </div>

                        </a>

                        
                    </li>

                <li data-name="Yosuga no Sora BD" data-href="Yosuga no Sora BD">
                        <a href="Yosuga no Sora BD" class="clearfix" data-name="Yosuga no Sora BD">


                            <div class="row">
                                <span class="file-name col-md-1 col-sm-6 col-xs-9 text-center">
                                    
                                        <div style="color: #337ab7; font-size: 13px; font-weight: bold; background-color: transparent; width: 80px; height: 18px; display: inline-block; vertical-align: middle; text-align: center; padding: 0 3px; border-radius: 10px 0px 0px 10px;border: 1px #337ab7 solid;border-right: none;" title="Subtitle Indonesia">Subtitle</div><img style="display: inline-block; vertical-align: middle; border-radius: 0px 10px 10px 0px; height: 18px;border: 1px #337ab7 solid;border-left: none;" src="https://lipis.github.io/flag-icon-css/flags/4x3/id.svg" title="Subtitle Indonesia">
                                    
    
                                </span>
                                <span class="file-name col-md-6 col-sm-6 col-xs-9">
                                    
                                    Yosuga no Sora BD                                </span>

                                <span class="file-size col-md-2 col-sm-2 col-xs-3 text-center" style="float: right;">
                                    2019-08-26 15:39:11                                </span>

                                <span class="file-modified col-md-3 col-sm-4 text-center" style="float: right;display: none;">
                                    2019-08-26 15:39:11                                </span>
                            </div>

                        </a>

                        
                    </li>

                <li data-name="Saekano S2 BD" data-href="Saekano S2 BD">
                        <a href="Saekano S2 BD" class="clearfix" data-name="Saekano S2 BD">


                            <div class="row">
                                <span class="file-name col-md-1 col-sm-6 col-xs-9 text-center">
                                    
                                        <div style="color: #337ab7; font-size: 13px; font-weight: bold; background-color: transparent; width: 80px; height: 18px; display: inline-block; vertical-align: middle; text-align: center; padding: 0 3px; border-radius: 10px 0px 0px 10px;border: 1px #337ab7 solid;border-right: none;" title="Subtitle Indonesia">Subtitle</div><img style="display: inline-block; vertical-align: middle; border-radius: 0px 10px 10px 0px; height: 18px;border: 1px #337ab7 solid;border-left: none;" src="https://lipis.github.io/flag-icon-css/flags/4x3/id.svg" title="Subtitle Indonesia">
                                    
    
                                </span>
                                <span class="file-name col-md-6 col-sm-6 col-xs-9">
                                    
                                    Saekano S2 BD                                </span>

                                <span class="file-size col-md-2 col-sm-2 col-xs-3 text-center" style="float: right;">
                                    2019-08-25 18:17:47                                </span>

                                <span class="file-modified col-md-3 col-sm-4 text-center" style="float: right;display: none;">
                                    2019-08-25 18:17:47                                </span>
                            </div>

                        </a>

                        
                    </li>

                <li data-name="Saekano BD" data-href="Saekano BD">
                        <a href="Saekano BD" class="clearfix" data-name="Saekano BD">


                            <div class="row">
                                <span class="file-name col-md-1 col-sm-6 col-xs-9 text-center">
                                    
                                        <div style="color: #337ab7; font-size: 13px; font-weight: bold; background-color: transparent; width: 80px; height: 18px; display: inline-block; vertical-align: middle; text-align: center; padding: 0 3px; border-radius: 10px 0px 0px 10px;border: 1px #337ab7 solid;border-right: none;" title="Subtitle Indonesia">Subtitle</div><img style="display: inline-block; vertical-align: middle; border-radius: 0px 10px 10px 0px; height: 18px;border: 1px #337ab7 solid;border-left: none;" src="https://lipis.github.io/flag-icon-css/flags/4x3/id.svg" title="Subtitle Indonesia">
                                    
    
                                </span>
                                <span class="file-name col-md-6 col-sm-6 col-xs-9">
                                    
                                    Saekano BD                                </span>

                                <span class="file-size col-md-2 col-sm-2 col-xs-3 text-center" style="float: right;">
                                    2019-08-25 17:14:03                                </span>

                                <span class="file-modified col-md-3 col-sm-4 text-center" style="float: right;display: none;">
                                    2019-08-25 17:14:03                                </span>
                            </div>

                        </a>

                        
                    </li>
                    
                <li data-name="Acchi Kocchi BD" data-href="Acchi Kocchi BD">
                        <a href="Acchi Kocchi BD" class="clearfix" data-name="Acchi Kocchi BD">


                            <div class="row">
                                <span class="file-name col-md-1 col-sm-6 col-xs-9 text-center">
                                    
                                        <div style="color: #337ab7; font-size: 13px; font-weight: bold; background-color: transparent; width: 80px; height: 18px; display: inline-block; vertical-align: middle; text-align: center; padding: 0 3px; border-radius: 10px 0px 0px 10px;border: 1px #337ab7 solid;border-right: none;" title="Subtitle Indonesia">Subtitle</div><img style="display: inline-block; vertical-align: middle; border-radius: 0px 10px 10px 0px; height: 18px;border: 1px #337ab7 solid;border-left: none;" src="https://lipis.github.io/flag-icon-css/flags/4x3/id.svg" title="Subtitle Indonesia">
                                    
    
                                </span>
                                <span class="file-name col-md-6 col-sm-6 col-xs-9">
                                    
                                    Acchi Kocchi BD                                </span>

                                <span class="file-size col-md-2 col-sm-2 col-xs-3 text-center" style="float: right;">
                                    2019-08-25 15:34:09                                </span>

                                <span class="file-modified col-md-3 col-sm-4 text-center" style="float: right;display: none;">
                                    2019-08-25 15:34:09                                </span>
                            </div>

                        </a>

                        
                    </li> 

                <li data-name="Clockwork Planet BD" data-href="Clockwork Planet BD">
                        <a href="Clockwork Planet BD" class="clearfix" data-name="Clockwork Planet BD">


                            <div class="row">
                                <span class="file-name col-md-1 col-sm-6 col-xs-9 text-center">
                                    <td class="text-left text-success">
                                        <div style="color: #337ab7; font-size: 13px; font-weight: bold; background-color: transparent; width: 80px; height: 18px; display: inline-block; vertical-align: middle; text-align: center; padding: 0 3px; border-radius: 10px 0px 0px 10px;border: 1px #337ab7 solid;border-right: none;" title="Subtitle Indonesia">Subtitle</div><img style="display: inline-block; vertical-align: middle; border-radius: 0px 10px 10px 0px; height: 18px;border: 1px #337ab7 solid;border-left: none;" src="https://lipis.github.io/flag-icon-css/flags/4x3/id.svg" title="Subtitle Indonesia">
                                    </td>
    
                                </span>
                                <span class="file-name col-md-6 col-sm-6 col-xs-9">
                                    
                                    Clockwork Planet BD                                </span>

                                <span class="file-size col-md-2 col-sm-2 col-xs-3 text-center" style="float: right;">
                                    2019-08-24 07:07:28                                </span>

                                <span class="file-modified col-md-3 col-sm-4 text-center" style="float: right;display: none;">
                                    2019-08-24 07:07:28                                </span>
                            </div>

                        </a>

                        
                    </li>
                                    
                <li data-name="Uchiage Hanabi BD" data-href="Uchiage Hanabi BD">

                        <a href="Uchiage Hanabi BD" class="clearfix" data-name="Uchiage Hanabi BD">


                            <div class="row">
                                <span class="file-name col-md-1 col-sm-6 col-xs-9 text-center">
                                    <td class="text-left text-success">
                                        <div style="color: #337ab7; font-size: 13px; font-weight: bold; background-color: transparent; width: 80px; height: 18px; display: inline-block; vertical-align: middle; text-align: center; padding: 0 3px; border-radius: 10px 0px 0px 10px;border: 1px #337ab7 solid;border-right: none;" title="Subtitle Indonesia">Subtitle</div><img style="display: inline-block; vertical-align: middle; border-radius: 0px 10px 10px 0px; height: 18px;border: 1px #337ab7 solid;border-left: none;" src="https://lipis.github.io/flag-icon-css/flags/4x3/id.svg" title="Subtitle Indonesia">
                                    </td>
    
                                </span>
                                <span class="file-name col-md-6 col-sm-6 col-xs-9">
                                    
                                    Uchiage Hanabi BD                                </span>

                                <span class="file-size col-md-2 col-sm-2 col-xs-3 text-center" style="float: right;">
                                    2019-08-24 06:35:21                                </span>

                                <span class="file-modified col-md-3 col-sm-4 text-center" style="float: right;display: none;">
                                    2019-08-24 06:35:21                                </span>
                            </div>

                        </a>

                        
                    </li>
                                    
                <li data-name="Kimi no Suizou wo Tabetai BD" data-href="Kimi no Suizou wo Tabetai BD">
                        <a href="Kimi no Suizou wo Tabetai BD" class="clearfix" data-name="Kimi no Suizou wo Tabetai BD">


                            <div class="row">
                                <span class="file-name col-md-1 col-sm-6 col-xs-9 text-center">
                                    <td class="text-left text-success">
                                        <div style="color: #337ab7; font-size: 13px; font-weight: bold; background-color: transparent; width: 80px; height: 18px; display: inline-block; vertical-align: middle; text-align: center; padding: 0 3px; border-radius: 10px 0px 0px 10px;border: 1px #337ab7 solid;border-right: none;" title="Subtitle Indonesia">Subtitle</div><img style="display: inline-block; vertical-align: middle; border-radius: 0px 10px 10px 0px; height: 18px;border: 1px #337ab7 solid;border-left: none;" src="https://lipis.github.io/flag-icon-css/flags/4x3/id.svg" title="Subtitle Indonesia">
                                    </td>
    
                                </span>
                                <span class="file-name col-md-6 col-sm-6 col-xs-9">
                                    
                                    Kimi no Suizou wo Tabetai BD                                </span>

                                <span class="file-size col-md-2 col-sm-2 col-xs-3 text-center" style="float: right;">
                                    2019-08-24 06:13:31                                </span>

                                <span class="file-modified col-md-3 col-sm-4 text-center" style="float: right;display: none;">
                                    2019-08-24 06:13:31                                </span>
                            </div>

                        </a>

                        
                    </li>

                    
                        
                    
                
            </ul>
             <br><div class="center" style="text-align: center;">
    <nav>
  <ul class="pagination">
    <li class="disabled"><a href="#">«</a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li><a href="/Rilisan%20Terbaru/2">2</a></li>


    <li><a rel="next" href="/Rilisan%20Terbaru/2">»</a></li>
</ul>
</nav>

</div><br>
<hr>
             <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://manager-disqus.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

        </div>

        <hr>

<div class="footer">
	Copyright © 2019 <a href="/">Pustaka Anime</a> All rights reserved. <br>
    Powered by <a href="http://www.directorylister.com">Directory Lister</a>
</div>

        <div id="file-info-modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title">{{modal_header}}</h4>
                    </div>

                    <div class="modal-body">

                        <table id="file-info" class="table table-bordered">
                            <tbody>

                                <tr>
                                    <td class="table-title">MD5</td>
                                    <td class="md5-hash">{{md5_sum}}</td>
                                </tr>

                                <tr>
                                    <td class="table-title">SHA1</td>
                                    <td class="sha1-hash">{{sha1_sum}}</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
<script id="dsq-count-scr" src="//manager-disqus.disqus.com/count.js" async></script>
<script id="cid0020000227611803073" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 300px;height: 450px;">{"handle":"pustakawibu","arch":"js","styles":{"a":"222222","b":100,"c":"FFFFFF","d":"FFFFFF","k":"222222","l":"222222","m":"222222","n":"FFFFFF","p":"10.8","q":"222222","r":100,"pos":"br","cv":1,"cvbg":"222222","cvw":300,"cvh":33,"cnrs":"0.5","ticker":1,"fwtickm":1}}</script>
</body>
</html>