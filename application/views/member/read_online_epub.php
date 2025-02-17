<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>LMS | Read Online</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">


        <!-- EPUBJS Renderer -->
        <script src="<?php echo base_url().'plugins/build/epub.js'; ?>"></script>
        <script src="<?php echo base_url().'plugins/build/libs/zip.min.js'; ?>"></script>

        <style type="text/css">

          body {
            overflow: hidden;
          }

          #main {
            position: absolute;
            width: 100%;
            height: 100%;
          }

          #area {
            width: 80%;
            height: 80%;
            margin: 5% auto;
            max-width: 1250px;
          }

          #area iframe {
            border: none;
          }

          #prev {
            left: 40px;
          }

          #next {
            right: 40px;
          }

          .arrow {
            position: absolute;
            top: 50%;
            margin-top: -32px;
            font-size: 64px;
            color: #E2E2E2;
            font-family: arial, sans-serif;
            font-weight: bold;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          .arrow:hover {
            color: #777;
          }

          .arrow:active {
            color: #000;
          }
        </style>

         <script>
            "use strict";
            var epub_link = "<?php echo $epub_link; ?>";
            var Book = ePub(epub_link);
        </script>
    </head>
    <body>
        <div id="main">
          <div id="prev" onclick="Book.prevPage();" class="arrow"><</div>
          <div id="area"></div>
          <div id="next" onclick="Book.nextPage();" class="arrow">></div>
        </div>

        <script>

            Book.renderTo("area");

        </script>
    </body>
</html>
