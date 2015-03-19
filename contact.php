<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
		include 'head.php';
	?>
    <title>Contact Us | Fans Of Gaming (FOG)</title>
  </head>

  <body>

    <?php
		include 'navigation.php';
	?>

    <div class="container">
	<h1>Contact Fans Of Gaming</h1>
    
    <?php 
		$action=$_REQUEST['action']; 
		if ($action=="")    /* display the contact form */ 
			{ 
			?> 
            
            <p>Please send us your feedback or questions.</p>
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="action" value="submit"> 
            
            <fieldset>
                
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-1 control-label" for="name">Name:</label>  
              <div class="col-md-6">
              <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-1 control-label" for="email">Email:</label>  
              <div class="col-md-6">
              <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-1 control-label" for="topic">Topic:</label>  
              <div class="col-md-6">
                <select class="form-control" id="topic" name="topic">
                    <option value="">Please Select a Topic</option>
                    <option value="geninfo">General Information</option>
                    <option value="boardgames">Boardgames</option>
                    <option value="miniatures">Miniatures</option>
                    <option value="rpgs">RPGs</option>
                    <option value="sponsor">Vendor/Sponsor</option>
                    <option value="fleamarket">Flea Market</option>
                    <option value="test">Test</option>
                </select>
              </div>
            </div>
            
            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-1 control-label" for="message">Message: </label>
              <div class="col-md-6">                     
                <textarea class="form-control" id="message" name="message"></textarea>
              </div>
            </div>
            
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-1 control-label" for="Submit"></label>
              <div class="col-md-4">
                <input type="submit" id="Submit" name="Submit" class="btn btn-default" />
              </div>
            </div>
            
            </fieldset>
            </form>
			
			<?php 
			}  
		else                /* send the submitted data */ 
			{ 
			$name=$_REQUEST['name']; 
			$email=$_REQUEST['email']; 
			$message=$_REQUEST['message'];
			$topic=$_REQUEST['topic'];  
			if (($name=="")||($email=="")||($message=="")) 
				{ 
				echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
				} 
			else{         
				//$from="From: $name<$email>\r\nReturn-path: $email"; 
				
				$headers = "MIME-Version: 1.0\r\n";
				
				switch ($topic) {
					case "geninfo":
						$to = "fansofgaming@gmail.com";
						$subject = "FOG.net contact form - General Info";
						break;
					case "boardgames":
						$to = "rweagly2001@yahoo.com";
						$headers .= 'Cc: fansofgaming@gmail.com' . "\r\n";
						$subject = "FOG.net contact form - Boardgames";
						break;
					case "miniatures":
						$to = "legionaire22@hotmail.com";
						$headers .= 'Cc: fansofgaming@gmail.com' . "\r\n";
						$subject = "FOG.net contact form - Miniatures";
						break;
					case "rpgs":
						$to = "fogconrpgs@gmail.com.com";
						$headers .= 'Cc: fansofgaming@gmail.com' . "\r\n";
						$subject = "FOG.net contact form - RPGs";
						break;
					case "sponsor":
						$to = "rgraham2018@sbcglobal.net";
						$headers .= 'Cc: fansofgaming@gmail.com' . "\r\n";
						$subject = "FOG.net contact form - Vendor/Sponsor";
						break;
					case "fleamarket":
						$to = "legionaire22@hotmail.com";
						$headers .= 'Cc: fansofgaming@gmail.com' . "\r\n";
						$subject = "FOG.net contact form - Flea Market";
						break;
					case "test":
						$to = "wardseward@gmail.com";
						$subject = "FOG.net contact form - TEST";
						break;
					default:
						$to = "fansofgaming@gmail.com";
						$subject = "FOG.net contact form";
				}
				//$to = "wardseward@gmail.com";
				//$subject = "FOG.net contact form";
				
				
				$headers .= "From: " . strip_tags($email) . "\r\n";
				$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
				
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				
				$msg = "<html><body>";
				$msg .= "<table cellpadding='6' width='100%' border='1'>";
				$msg .= "<tr><th colspan='2' align='left' bgcolor='#E11822' style='color:#fff;'>A Message From fansofgaming.net</th></tr>";
				$msg .= "<tr><td width='60' valign='top'><strong>From:</strong></td><td valign='top'>" . strip_tags($_POST['name']) . " (" . strip_tags($_POST['email']) . ")</td></tr>";
				$msg .= "<tr><td valign='top'><strong>Message:</strong></td><td valign='top'>" . strip_tags($_POST['message']) . "</td></tr>";
				$msg .= "</table>";
				$msg .= "</body></html>";
				 
				mail($to, $subject, $msg, $headers); 
				echo "Thank you for the message. Someone will get back to you shortly."; 
				} 
			}   
		?> 
    
   
    
    </div><!-- /.container -->
	
	<?php
		include 'footer.php'; 
	?>


    
  </body>
</html>
