<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
		include 'head.php';
	?>
    <title>Game Master Request - RPG | FOG CON 2015 | Fans Of Gaming (FOG)</title>
  </head>

  <body>

    <?php
		include 'navigation.php';
	?>
	
    <div class="container">
	<h1>Game Master Request - RPG</h1>
    
    
   <?php 
		$action=$_REQUEST['action']; 
		if ($action=="")    /* display the contact form */ 
			{ 
			?> 
            <p>If you are interested in GMing a RPG game, please fill out and submit the form below. You should hear back from a FOG member shortly.</p>

      <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="hidden" name="action" value="submit"> 
            
            <fieldset>
            
            <div class="row">
            <div class="col-md-6 col-md-offset-2">
            	<h2 class="formHeading">Contact Information</h2>
            </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="name">Name:</label>  
              <div class="col-md-6">
              <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>
            

            
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="phone">Phone:</label>  
              <div class="col-md-6">
              	<span>(</span>
                <input id="phone1" name="phone1" type="text" placeholder="" class="form-control shortInput" maxlength="3" size="3"> 
              	<span>) - </span>
              	<input id="phone2" name="phone2" type="text" placeholder="" class="form-control shortInput" maxlength="3"> 
                <span> - </span>
              	<input id="phone3" name="phone3" type="text" placeholder="" class="form-control shortInput" maxlength="4">
              </div>
            </div>
            
            
            
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="email">Email:</label>  
              <div class="col-md-6">
              <input id="email" name="email" type="text" placeholder="" class="form-control">
              </div>
            </div>
            

            <div class="row">
            <div class="col-md-6 col-md-offset-2">
            	<h2 class="formHeading">Game Information</h2>
            </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="game">Game System:</label>  
              <div class="col-md-6">
              <input id="game" name="game" type="text" placeholder="" class="form-control">
              <small>(e.g. D&amp;D e5, WarHammer 40k, Pathfinder, GURPS, ...)</small>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="title">Adventure Title:</label>  
              <div class="col-md-6">
              <input id="title" name="title" type="text" placeholder="" class="form-control">
              <small>Descriptive title for session/adventure.</small>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="description">Adventure Description:</label>  
              <div class="col-md-6">
              <textarea id="description" name="description" type="text" placeholder="" class="form-control input-md" rows='4'></textarea>
				<small>Short description of planned adventure.</small>
              </div>
            </div>
            
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="organized">Organized Play:</label>  
              <div class="col-md-6">
              <input type="radio" name="organized" id="Yes" value="Yes">
              Yes 
              <input type="radio" name="organized" id="No" value="No" checked>
              No
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="players">Number of Players:</label>  
              <div class="col-md-6">
              	<select class="form-control mediumInput" id="players" name="players">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
              <small>&nbsp;&nbsp;Max number of players for session.</small>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="levels">Character Level(s):</label>  
              <div class="col-md-6">
              <input id="levels" name="levels" type="text" placeholder="" class="form-control">
              <small>Level or range of levels characters will start at.</small>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="pregens">Pregens Provided:</label>  
              <div class="col-md-6">
              <input type="radio" name="pregens" id="Yes" value="Yes">
              Yes 
              <input type="radio" name="pregens" id="No" value="No" checked>
              No
              <small>&nbsp; - Will pregenerated characters be provided?</small>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="experience">Player Experience:</label>  
              <div class="col-md-6">
              <input type="radio" name="experience" id="Yes" value="Yes">
              Yes 
              <input type="radio" name="experience" id="No" value="No" checked>
              No
              <small>&nbsp; - Is player experience required?</small>
              </div>
            </div>
            
            
            
            
            <div class="row">
            <div class="col-md-6 col-md-offset-2">
            	<h2 class="formHeading">Game Time</h2>
            </div>
            </div>

            
            <div class="row">
            	<div class="col-md-6 col-md-offset-2">
                 <p>Please select your two preferred 4 hour* time slots for running your game. FOG will schedule games based on GM slot requests.</p>
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label" for="primary">Primary Time Slot:</label>  
              <div class="col-md-6">
                <select class="form-control" id="primary" name="primary">
                    <option value="">Please Select a Time Slot</option>
                    <option value="Friday - 2pm-6pm">Friday - 2pm-6pm</option>
                    <option value="Friday - 7pm-11pm">Friday - 7pm-11pm</option>
                    <option value="Saturday - 9am-1pm">Saturday - 9am-1pm</option>
                    <option value="Saturday - 2pm-6pm">Saturday - 2pm-6pm</option>
                    <option value="Saturday - 7pm-11pm">Saturday - 7pm-11pm</option>
                    <option value="Sunday - 9am-1pm">Sunday - 9am-1pm</option>
                    <option value="Sunday - 2pm-6pm">Sunday - 2pm-6pm</option>
                </select>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="secondary">Primary Time Slot:</label>  
              <div class="col-md-6">
                <select class="form-control" id="secondary" name="secondary">
                    <option value="">Please Select a Time Slot</option>
                    <option value="Friday - 2pm-6pm">Friday - 2pm-6pm</option>
                    <option value="Friday - 7pm-11pm">Friday - 7pm-11pm</option>
                    <option value="Saturday - 9am-1pm">Saturday - 9am-1pm</option>
                    <option value="Saturday - 2pm-6pm">Saturday - 2pm-6pm</option>
                    <option value="Saturday - 7pm-11pm">Saturday - 7pm-11pm</option>
                    <option value="Sunday - 9am-1pm">Sunday - 9am-1pm</option>
                    <option value="Sunday - 2pm-6pm">Sunday - 2pm-6pm</option>
                </select>
                <small>* If your gaming session requires more than 4 hours please tell us in the Addtional Information area below.</small>
              </div>
            </div>
            
            <div class="row">
            <div class="col-md-6 col-md-offset-2">
            	<h2 class="formHeading">Additional Requirements</h2>
            </div>
            </div>

            
            <div class="form-group">
              <label class="col-md-2 control-label" for="tables">Tables:</label>  
              <div class="col-md-6">
              	<select class="form-control mediumInput" id="tables" name="tables">
                    <option value="none">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
              &nbsp;&nbsp;<small>Addtional 2.5' x 8' tables needed.</small>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="special">Additional Information:</label>  
              <div class="col-md-6">
              <textarea id="special" name="special" type="text" placeholder="" class="form-control input-md" rows='4'></textarea>
              <small>Please enter any additional information or needs you might have.</small>
              </div>
            </div>
                        
            <div class="form-group">
              <label class="col-md-2 control-label" for="electrical">Electrical Outlet:</label>  
              <div class="col-md-6">
              <input type="radio" name="optionsRadios" id="Yes" value="Yes">
              Yes 
              <input type="radio" name="optionsRadios" id="No" value="No" checked>
              No
              </div>
            </div>
            
            
            
            
            
            
            <!-- Submit Button -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="Submit"></label>
              <div class="col-md-4">
                <button type="submit" id="Submit" name="Submit" class="btn btn-primary">Submit Request</button>
              </div>
            </div>
            
            </fieldset>
            </form>
			
			<?php 
			}  
		else                /* send the submitted data */ 
			{ 
			$name=$_REQUEST['name'];
			$phone1=$_REQUEST['phone1']; 
			$phone2=$_REQUEST['phone2'];
			$phone3=$_REQUEST['phone3'];
			$email=$_REQUEST['email']; 
			$game=$_REQUEST['game']; 
			$title=$_REQUEST['title']; 
			$description=$_REQUEST['description']; 
			$organized=$_REQUEST['organized'];
			$players=$_REQUEST['players'];
			$levels=$_REQUEST['levels'];
			$pregens=$_REQUEST['pregens'];
			$experience=$_REQUEST['experience'];
			 
			$tables=$_REQUEST['tables']; 
			$special=$_REQUEST['special']; 
			$primary=$_REQUEST['primary']; 
			$secondary=$_REQUEST['secondary'];
			$optionsRadios=$_REQUEST['optionsRadios'];
			

			if (($name=="")||($email=="")) 
				{ 
				echo "All fields are required, please fill out <a href=\"\">the form</a> again."; 
				} 
			else{         
				//$from="From: $name<$email>\r\nReturn-path: $email"; 
				
				
				
				
				$to = "fogconrpgs@gmail.com";
				$subject = "Game Master Request - RGP";
				
				
				$headers = "From: " . strip_tags($email) . "\r\n";
				$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
				$headers .= "Cc: fansofgaming@gmail.com\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				
				$msg = "<html><body>";
				$msg .= "<table cellpadding='6' width='100%' border='1'>";
				$msg .= "<tr><th colspan='2' align='left' bgcolor='#E11822' style='color:#fff;'>Game Master Request - RGP</th></tr>";
				$msg .= "<tr><td width='160' valign='top'><strong>From:</strong></td><td valign='top'>" . strip_tags($_POST['name']) . " (" . strip_tags($_POST['email']) . ")</td></tr>";
				$msg .= "<tr><td valign='top'><strong>Phone:</strong></td><td valign='top'>(" . strip_tags($_POST['phone1']) . ") "  . strip_tags($_POST['phone2']) . "-" . strip_tags($_POST['phone3']) . "</td></tr>";
				$msg .= "<tr><td valign='top'><strong>Game System:</strong></td><td valign='top'>" . strip_tags($_POST['game']) . "</td></tr>";
				$msg .= "<tr><td valign='top'><strong>Adventure Title:</strong></td><td valign='top'>" . strip_tags($_POST['title']) . "</td></tr>";
				$msg .= "<tr><td valign='top'><strong>Adventure Description:</strong></td><td valign='top'>" . strip_tags($_POST['description']) . "</td></tr>";
				$msg .= "<tr><td valign='top'><strong>Organized Play:</strong></td><td valign='top'>" . strip_tags($_POST['organized']) . "</td></tr>";
				$msg .= "<tr><td valign='top'><strong># of Players:</strong></td><td valign='top'>" . strip_tags($_POST['players']) . "</td></tr>";
				$msg .= "<tr><td valign='top'><strong>Character Level(s):</strong></td><td valign='top'>" . strip_tags($_POST['levels']) . "</td></tr>";
				$msg .= "<tr><td valign='top'><strong>Pregenerated Character:</strong></td><td valign='top'>" . strip_tags($_POST['pregens']) . "</td></tr>";
				$msg .= "<tr><td valign='top'><strong>Player Experience Required:</strong></td><td valign='top'>" . strip_tags($_POST['experience']) . "</td></tr>";
				
				$msg .= "<tr><td valign='top'><strong>Primary Time Slot:</strong></td><td valign='top'>" . strip_tags($_POST['primary']) . "</td></tr>";
				$msg .= "<tr><td valign='top'><strong>Secondary Time Slot:</strong></td><td valign='top'>" . strip_tags($_POST['secondary']) . "</td></tr>";
				
				$msg .= "<tr><td valign='top'><strong>Tables Needed:</strong></td><td valign='top'>" . strip_tags($_POST['tables']) . "</td></tr>";
				$msg .= "<tr><td valign='top'><strong>Special Needs:</strong></td><td valign='top'>" . strip_tags($_POST['special']) . "</td></tr>";

				$msg .= "<tr><td valign='top'><strong>Electrical Needed:</strong></td><td valign='top'>" . strip_tags($_POST['optionsRadios']) . "</td></tr>";
				$msg .= "</table>";
				$msg .= "</body></html>";
				 
				mail($to, $subject, $msg, $headers); 
				echo "Thank you for your Game Master request. Someone will get back to you shortly."; 
				} 
			}   
		?> 
    
    <p>&nbsp;</p>
     <p><strong>Additional Questions?</strong><br>
	Contact Shaun Burton at <a href="mailto:fogconrpgs@gmail.com">fogconrpgs@gmail.com</a>.</p>
    <div>
    <p class="alert alert-info"><strong>Looking to run different type of game? </strong><br />
    Check out our other <a href="gamemasters.php">Game Master request forms</a>.</p>
    </div>
     
    </div><!-- /.container -->
	
	<?php
		include '../footer.php'; 
	?>


    
  </body>
</html>
