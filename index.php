<?php include('track_script.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- DevCorner - Favicon -->
  <link rel="shortcut icon" href="img/favicon.svg">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <!-- Font-Awesome -->
  <link rel="stylesheet" href="css/all.css">

  <!-- Custom Css -->
  <link rel="stylesheet" href="css/style.css">

  <title>DevCorner</title>
</head>
<body>

  <div class="content">
    <h5><i class="fas fa-code" style="color: #28a745;"></i> DevCorner Community</h5>
    <div class="hint">
      <h6>Tracking Users With Css</h6>
      <p> The website works by using the content property to set a URL when an action is performed.</p>
      <ul>
        <li>The URL calls a script that records details about the actions</li>
        <li>Which are passed as URL parameters</li>
        <li>Setting this URL with the ::before and ::after CSS selectors</li>
        <li>The URL is only called when an action is performed</li>
        <li>Rather than when the page first loads</li>
      </ul>
      <p>An example link <a id="link" href="">Click</a></p>
      <p>
        The track script contains code that records the time of the event and the action performed. It can also be used to extract the user’s IP address, user agent, and other identifying information.
      </p>
      <p>For more please check the code behind the scenes!</p>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script src="js/main.js" charset="utf-8"></script>
</body>
</html>
