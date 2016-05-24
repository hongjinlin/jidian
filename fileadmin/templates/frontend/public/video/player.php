<!DOCTYPE html>
<html>
<head>
    <title>Video Player</title>
    <link href="video-js.css" rel="stylesheet" type="text/css">
    <script src="video.js"></script>
    <script type="text/javascript">
        videojs.options.flash.swf = "video-js.swf";
    </script>
    <style type="text/css">
        html,body{
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #000;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <video id="video" class="video-js vjs-default-skin" width="100%" style="height: auto;">
        <?php
        echo '<source src="../../../../../uploads/pics/'.$_GET['src'].'" type="video/mp4" />';
        ?>
    </video>
    <script>
        videojs("video", {"controls": false, "autoplay": true, "preload": "none", "loop": true, "muted": true});
    </script>
</body>
</html>