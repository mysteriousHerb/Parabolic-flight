<!DOCTYPE html>
<html>
  <head>
    <title>RPi Cam Preview</title>
    <script src="js/script.js"></script>
	<link rel="stylesheet" href="css/style_minified.css" />
  </head>
  <body onload="setTimeout('init(0,25,1);', 100);">
    <center>
      <div><img id="mjpeg_dest" onclick="toggle_fullscreen(this);" /></div>
      <button type="button">Click Me!</button>
      <input id="video_button" type="button" class="btn btn-primary">
    </center>
 </body>
</html>