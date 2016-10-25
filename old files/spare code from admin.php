 <label class="select-div1">User ID / Name</label>
			<div class="select-div">	
                <select name="userID" >
                    <?php while($row = mysqli_fetch_array($loginpage)) { ?>
                    <option value="<?php $row['userID']; ?>"> 
                          <?php echo $row['userID']; ?>: 
                          <?php echo $row['firstName']; ?> 
                          <?php echo $row['lastName']; ?>  
                        <?php } ?>
                    </option>
                </select> 
                </div> </td>
            
            <label class="select-div1">Gender:</label>
			<div class="select-div">	
                <select name="gender" >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select> 
            </div>


        <p class="fieldset">
                <label class="select-div1">Course Type:</label>
			<div class="select-div">	
            <select name="courseType" >
                  <option class="full-width has-padding has-border"  value="3">3 Day Course</option>
                  <option class="full-width has-padding has-border" value="10">10 Day Course</option>
                  <option class="full-width has-padding has-border" value="30">30 Day Course</option>
                </select> </div>
        </p>
    				</p>
		<br>
         <p class="fieldset">
                    <label class="select-div1">Course Start:</label>
					<br>
                    <h5> All Bookings start on Mondays!</h5>
						<input class="full-width has-padding has-border" id="courseStart" name="courseStart" type="date" min="2016-08-01" max="2100-01-02" required> <br><br>

    <p class="fieldset">
        <input class='btn-lg btn-primary' type="submit" name="bookNow" value="Book Now" ><br><br> 
            </p> </p>