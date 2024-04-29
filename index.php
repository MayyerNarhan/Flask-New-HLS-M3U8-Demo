<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Player</title>
    <!-- Include CSS and JS files for Video.js -->
    <link href="https://vjs.zencdn.net/7.16.0/video-js.css" rel="stylesheet" />
    <script src="https://vjs.zencdn.net/7.16.0/video.min.js"></script>
</head>
<body>
    <video id="my-video" class="video-js" controls preload="auto" width="640" height="264" data-setup="{}">
        <!-- Use the provided M3U8 URL -->
        <source src="<?php echo 'https://edge7-sof.live.mmcdn.com/live-hls/amlst:_mary_chili-sd-8cedeb447acf029ebf620fc6483683c299167cb4f4c0bb85ed87287c6470a539_trns_h264/chunklist_w1306483979_b3096000_t64RlBTOjI0LjA=.m3u8'; ?>" type="application/x-mpegURL">
        <!-- Fallback for browsers that don't support HTML5 video -->
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
    </video>
</body>
</html>
