<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schedule | FOGCON - Pekin, IL May 30 - June 1, 2014</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
  
	<?php
		include 'header.php';
	?>
  
    
    <div class="row">
      <div class="large-12 columns">
      	<h1>Schedule</h1>
        <p>Below is the complete list of events happing at FOGCON 2014. To get more details or to register for a specific event <a href="https://warhorn.net/events/fog-convention">visit our Warhorn registration site</a>.</p>
        
        <dl class="tabs" data-tab>
          <dd class="active"><a href="#panel2-1">Day 1 - Friday</a></dd>
          <dd><a href="#panel2-2">Day 2 - Saturday</a></dd>
          <dd><a href="#panel2-3">Day 3 - Sunday</a></dd>
        </dl>
        <div class="tabs-content">
        	<div class="content active" id="panel2-1">
       			<?php include 'day1.php'; ?>
        	</div>
            <div class="content" id="panel2-2">
       			<?php include 'day2.php'; ?>
        	</div>
            <div class="content" id="panel2-3">
       			<?php include 'day3.php'; ?>
        	</div>
		</div>
        
      </div>
    </div>

    
    
    <div class="row">
      <div class="large-12 columns">
    <?php
		include 'footer.php';
	?>
      </div>
    </div>


    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
