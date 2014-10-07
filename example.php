<html>
  <head>
    <title>Image</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>
      $(function() {
        setInterval(function() {
          d = new Date();
          $("img#image-camera").attr("src", "image_camera.jpeg?" + d.getTime());
        }, 60 * 1000);
      });
    </script>
  </head>
  <body>
    <h1>Example</h1>
    <img src="image_camera_cache.jpeg" id="image-camera">
  </body>
</html>
