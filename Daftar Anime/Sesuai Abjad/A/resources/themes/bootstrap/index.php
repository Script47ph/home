<!DOCTYPE html>
<?php
    sleep(2);
    ?>
<html>

    <head>

        <title>Daftar Anime #A ~ Pustaka Anime</title>
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
        <link rel="stylesheet" type="text/css"  href="//fonts.googleapis.com/css?family=Cutive+Mono">

        <!-- META -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <?php file_exists('analytics.inc') ? include('analytics.inc') : false; ?>
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
                    display: none;
                }
                .col-md-6 {
                    width: 80%;
                }
                .col-xs-2 {
                width: 27%;
                display: none;
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

                <div id="navbar"  class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li><a class="home" href="/">Home</a></li>
                        <li><a href="/Daftar%20Anime">Daftar Anime</a></li>
                        <li><a href="/Genre">Genre</a></li>
                        <li><a href="/Musim">Musim</a></li>
                        <li><a href="/Rilisan%20Terbaru">Rilisan Terbaru</a></li>
                        <li><a href="https://pustakawibu.chatango.com">Chat</a></li>
                        <li><a href="/About">About</a></li>
                        
                        
                    
                                    <ul class="nav navbar-nav navbar-right">

                    <ul id="page-top-nav" class="nav navbar-nav">
                        <li>
                            <a href="javascript:void(0)" id="page-top-link">
                                <i class="fa fa-arrow-circle-up fa-lg"></i>
                            </a>
                        </li>
                    </ul>

                    <?php  if ($lister->isZipEnabled()): ?>
                        <ul id="page-top-download-all" class="nav navbar-nav">
                            <li>
                                <a href="?zip=<?php echo $lister->getDirectoryPath(); ?>" id="download-all-link">
                                    <i class="fa fa-download fa-lg"></i>
                                </a>
                            </li>
                        </ul>
                    <?php endif; ?>

                </ul></ul>
                    </div>


            </div>
        </div>

        <div id="page-content" class="container">

            <?php file_exists('header.php') ? include('header.php') : include($lister->getThemePath(true) . "/default_header.php"); ?>

            <?php if($lister->getSystemMessages()): ?>
                <?php foreach ($lister->getSystemMessages() as $message): ?>
                    <div class="alert alert-<?php echo $message['type']; ?>">
                        <?php echo $message['text']; ?>
                        <a class="close" data-dismiss="alert" href="#">&times;</a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        <div class="alert alert-info alert-dismissible" id="infobubble" data-ts="1565729676">
        Kamu sedang berada di pilihan Daftar Anime #A ~ <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        </div>
            <div id="directory-list-header">
                <div class="row">
                    <div class="col-md-1 col-sm-6 col-xs-10 text-center">Kategori</div>
                    <div class="col-md-6 col-sm-6 col-xs-10">Nama Anime</div>
                    <div class="col-md-2 col-sm-2 col-xs-2 text-center" style="float: right;">Tanggal</div>
                    <div class="col-md-3 col-sm-4 text-center" style="float: right;display: none;">Tanggal</div>
                </div>
            </div>

            <ul id="directory-listing" class="nav nav-pills nav-stacked">

                <?php foreach($dirArray as $name => $fileInfo): ?>
                    
                    <li data-name="<?php echo $name; ?>" data-href="<?php echo $fileInfo['url_path']; ?>">
                        <a href="<?php echo $fileInfo['url_path']; ?>" class="clearfix" data-name="<?php echo $name; ?>">


                            <div class="row">
                                <span class="file-name col-md-1 col-sm-6 col-xs-9 text-center">
                                    <td class="text-left text-success">
                                        <div style="color: #337ab7; font-size: 13px; font-weight: bold; background-color: transparent; width: 80px; height: 18px; display: inline-block; vertical-align: middle; text-align: center; padding: 0 3px; border-radius: 10px 0px 0px 10px;border: 1px #337ab7 solid;border-right: none;" title="Subtitle Indonesia">Subtitle</div><img style="display: inline-block; vertical-align: middle; border-radius: 0px 10px 10px 0px; height: 18px;border: 1px #337ab7 solid;border-left: none;" src="https://lipis.github.io/flag-icon-css/flags/4x3/id.svg" title="Subtitle Indonesia">
                                    </td>
    
                                </span>
                                <span class="file-name col-md-6 col-sm-6 col-xs-9">
                                    
                                    <?php echo $name; ?>
                                </span>

                                <span class="file-size col-md-2 col-sm-2 col-xs-3 text-center" style="float: right;">
                                    <?php echo $fileInfo['mod_time']; ?>
                                </span>

                                <span class="file-modified col-md-3 col-sm-4 text-center" style="float: right;display: none;">
                                    <?php echo $fileInfo['mod_time']; ?>
                                </span>
                            </div>

                        </a>

                        <?php if (is_file($fileInfo['file_path'])): ?>

                            <a href="javascript:void(0)" class="file-info-button">
                                <i class="fa fa-info-circle"></i>
                            </a>

                        <?php endif; ?>

                    </li>
                <?php endforeach; ?>

            </ul>
            <br><br>
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

        <?php file_exists('footer.php') ? include('footer.php') : include($lister->getThemePath(true) . "/default_footer.php"); ?>

                            
        <div id="file-info-modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
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
