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
		/**
		 * Take XML content and convert
		 * it to a PHP array.
		 * @param string $xml Raw XML data.
		 * @param string $main_heading If there is a primary heading within the XML that you only want the array for.
		 * @return array XML data in array format.
		 */
		$xml = 'https://warhorn.net/events/fog-con-ii-2015/schedule.atom'; 
		function xml_to_array($xml,$main_heading = '') {
			$deXml = simplexml_load_file($xml);
			$deJson = json_encode($deXml);
			$xml_array = json_decode($deJson,TRUE);
			if (! empty($main_heading)) {
				$returned = $xml_array[$main_heading];
				return $returned;
			} else {
				return $xml_array;
			}
		}
		
		$data_array = xml_to_array($xml);
		var_dump($data_array);
		
		
		echo $data_array->feed->entry[1]->content;
		echo $data_array->entry->title;
		
		?>
		
        
        
        
    </div><!-- /.container -->
	
	<?php
		include '../footer.php'; 
	?>


    
  </body>
</html>
