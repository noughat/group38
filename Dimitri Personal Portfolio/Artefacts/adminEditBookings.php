<?php

include_once "serverConnection.php";

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>
 	<link rel="stylesheet" href="css/editProfile.css">
    <link rel="shortcut icon" href="img/gear-2.png">

 <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    

    
<title>GameGearSocial -  Login</title>
</head>
<body>
<div id="header"> 
<div id="headerL"> <?php echo  "<strong>".$_SESSION['firstName']."</strong>"; ?></div> <!-- END headerL -->
<div id="headerM"> <img src="img/GGS cog.png" width="30" height="30"  /> </div> <!-- END headerM -->
<div id="headerR"> 
<a href="loggedin.php"><img src="img/GGS menu white.png" width="50" height="27" alt="Logout Button" /></a>
<a href="process/logout.php"><img src="img/logout.png" width="100" height="27" alt="Logout Button" /></a>
</div> <!-- END headerR -->
</div> <!-- end header --> 
  
    
    
<!-- Edit Profile --><!-- Edit Profile --><!-- Edit Profile -->
<!-- Edit Profile --><!-- Edit Profile --><!-- Edit Profile -->
<!-- Edit Profile --><!-- Edit Profile --><!-- Edit Profile -->
<!-- Edit Profile --><!-- Edit Profile --><!-- Edit Profile -->

<div id="editProfile"> <!-- START EDIT PROFILE -->
            <h1> Edit Your Profile </h1>
				<form class="cd-form" action="process/processUpdateProfile.php" method="post">  
                
                <span id="registererror"> 
                    <?php if(isset($_SESSION['editPMessage']))
                    echo "{$_SESSION['editPMessage']}"; $_SESSION['editPMessage']=" ";  ?>
                </span>	
                    
                
                    
                <p class="fieldset">
                    First Name:
						<input class="full-width has-padding has-border" id="firstName" name="firstName" type="text" value="<?php echo $_SESSION['firstName']; ?>" required>
						<span class="cd-error-message">Error message here!</span>
				</p>
                    
                <p class="fieldset">
                    Last Name:
						<input class="full-width has-padding has-border" id="lastName" name="lastName" type="text" value="<?php echo $_SESSION['lastName']; ?>" required>
						<span class="cd-error-message">Error message here!</span>
				</p>
                
                <p class="fieldset">
                    D.O.B:
						<input class="full-width has-padding has-border" id="dateOfBirth" name="dateOfBirth" type="date" min="1900-12-31" max="2100-01-02" value="<?php echo $_SESSION['dateOfBirth']; ?>" required>
						<span class="cd-error-message">Error message here!</span>
				</p>
                    
                <p class="fieldset">
                    Gender: (change to dropdown menu to choose Male/Female!)
						<input class="full-width has-padding has-border" id="gender" name="gender" type="text" value="<?php echo $_SESSION['gender']; ?>" required>
						<span class="cd-error-message">Error message here!</span>
				</p>
                
                <p class="fieldset">
                    Mobile:
						<input class="full-width has-padding has-border" id="mobile" name="mobile" type="text" value="<?php echo $_SESSION['mobile']; ?>" required>
						<span class="cd-error-message">Error message here!</span>
				</p>
                
                <p class="fieldset">
                    Home Address:
						<input class="full-width has-padding has-border" id="homeAddress" name="homeAddress" type="text" value="<?php echo $_SESSION['homeAddress']; ?>" required>
						<span class="cd-error-message">Error message here!</span>
				</p>
                
                <p class="fieldset">
                    Email:
						<input class="full-width has-padding has-border" id="email" name="email" type="text" value="<?php echo $_SESSION['email']; ?>" required>
						<span class="cd-error-message">Error message here!</span>
				</p>
                    
                    
                    
                    
                    
                    
                
               

                 
				<!--<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" name="password" password type="password"  placeholder="Password*" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message"></span>
					</p>
<i>*=Password requires min 1 upper case letter, min 1 lower case letter, min 1 number OR special character, and min 8 characters in length!</i><br>-->

       

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" name="updateProfile" value="Update"><p>
                        <input class="full-width has-padding" type="submit" name="back" value="Back" formaction="loggedin.php">
					</p>
				</form>
                <p class="fieldset">
						
					</p>

				<!--<a href="#0" class="cd-close-form">Close</a>-->
			</div> <!-- END EDIT PROFILE -->


  
  
</div> <!-- END PAGE --> 

</body>
</html>

<!-- <embed src="audio/mw2soundtrack.mp3" autostart="true" loop="true" width="2" height="0">
</embed>
<noembed>
<bgsound src="audio/mw2soundtrack.mp3" loop="infinite">
</noembed> -->