<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
		include 'head.php';
	?>
    <title>FOGCON 2015 | Fans Of Gaming (FOG)</title>
    <style>
		.container img {border:1px solid #ccc; padding:5px; margin-bottom:5px;}
		.row {margin-bottom:40px;}
	</style>
  </head>

  <body>

    <?php
		include 'navigation.php';
	?>
	
    <div class="container">
		<h1>Events</h1>
        <p>schedule of events will go here...</p>
        
        
        <?php
		//http://www.google.com/calendar/render?cid=http%3A%2F%2Fwarhorn.net%2Fevents%2Fcon-nooga-2015%2Fschedule.ics
		require 'class.iCalReader.php';
		$ical = new ical('http://warhorn.net/events/fog-con-ii-2015/schedule.ics');
		
		//$ical= new ical('ConNooga2015.ics');
		//print_r( $ical->events() );
		
		$events = $ical->events();
		
		$date = $events[0]['DTSTART'];
		echo "The ical date: ";
		echo $date;
		echo "<br/>";
		
		echo "The Unix timestamp: ";
		echo $ical->iCalDateToUnixTimestamp($date);
		echo "<br/>";
		
		echo "The number of events: ";
		echo $ical->event_count;
		echo "<br/>";
		
		echo "The number of todos: ";
		echo $ical->todo_count;
		echo "<br/>";
		echo "<hr/><hr/>";
		
		foreach ($events as $event) {
			echo "SUMMARY: ".$event['SUMMARY']."<br/>";
			echo "DTSTART: ".$event['DTSTART']." - UNIX-Time: ".$ical->iCalDateToUnixTimestamp($event['DTSTART'])."<br/>";
			echo "DTEND: ".$event['DTEND']."<br/>";
			echo "DTSTAMP: ".$event['DTSTAMP']."<br/>";
			echo "UID: ".$event['UID']."<br/>";
			echo "CREATED: ".$event['CREATED']."<br/>";
			echo "DESCRIPTION: ".$event['DESCRIPTION']."<br/>";
			echo "LAST-MODIFIED: ".$event['LAST-MODIFIED']."<br/>";
			echo "LOCATION: ".$event['LOCATION']."<br/>";
			echo "SEQUENCE: ".$event['SEQUENCE']."<br/>";
			echo "STATUS: ".$event['STATUS']."<br/>";
			echo "TRANSP: ".$event['TRANSP']."<br/>";
			echo "<hr/>";
		}
		?>
        
        
        
    </div><!-- /.container -->
	
	<?php
		include '../footer.php'; 
	?>


    
  </body>
</html>
