
<html>
	<head>
	<style>
        span{
            color:red;
        }
       form{
            position:absolute;
            left:33%;
            color: black;
        }
        #submit, select{
            color:grey;
        }
     </style>

	</head>
	<body>
<?php
     $errName="";
     $name="";
     $email="";
     $erremail="";
     $address="";
     $erraddress="";
     $profile="";
     $errprofile="";
     $rdo1checked="";
     $rdo2checked="";
     $rdo3checked="";
     $errfrequency="";
     $tech=array();
     $errlist="";
     if($_SERVER["REQUEST_METHOD"]=="POST"){
         if(isset($_POST["name"])){
             $name=$_POST["name"];
         }
      if(empty($_POST["name"])){
             $errName="Enter valid name";
         }
         if(isset($_POST["address"])){
            $address=$_POST["address"];
        }
        if(empty($_POST["address"])){
            $erraddress="Enter valid address";
        }
        if(isset($_POST["email"])){
            $email=$_POST["email"];
        }
        if(empty($_POST["email"])){
            $erremail="Enter valid email";
        }
        if(isset($_POST["profile"])){
            $profile=$_POST["profile"];
        }
        if(empty($_POST["profile"])){
            $errprofile="Enter valid profile";
        }
        if(isset($_POST["frequency"])){
            if($_POST["frequency"]=="weekly"){
                $rdo1checked="checked";
            }
            elseif($_POST["frequency"]=="monthly"){
                $rdo2checked="checked";
            }
            elseif($_POST["frequency"]=="ocassionaly"){
                $rdo3checked="checked";
            }
        }
            else{
                $errfrequency="please specify an option";
            }
            if(isset($_POST["tech"])){
                $tech=$_POST["tech"];
            }
            if(empty($_POST["tech"])){
                $errlist="select a value";
            }

     }
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="form"> Survey Form</label><br><br>
    Name:<br><input type="text" name="name" value="<?php echo htmlspecialchars($name);?>">
    <span class="error"><?php echo $errName; ?></span><br><br>
    Address:<br><textarea name="address" rows="5" cols="40" value="<?php echo htmlspecialchars($address);?>" ></textarea>
    <span class="error"><?php echo $erraddress; ?></span><br><br>
    E-mail:<br><input type="text" name="email" value="<?php echo htmlspecialchars($email);?>" >
    <span class="error"><?php echo $erremail; ?></span><br><br>
    LinkedIn Profile:<br> <input type="text" name="profile" value="<?php echo htmlspecialchars($profile);?>">
    <span class="error"><?php echo $errprofile; ?></span><br><br>
    Which technology you are interested in?
<br><br>
    <select size="5" name="tech[]" >
        <?php
        $techlist= array ("php","java","android","ios","shell scripting");
        $cnt=count($techlist);
        for($i=0;$i<$cnt;$i++){
            echo '<option value="'.$techlist[$i].'"';
            if(in_array($techlist[$i],$tech)){
             echo "selected";
            }
            echo '>'.$techlist[$i].'</option>';
        }
        ?>
    
</select>
<span class="error"><?php echo $errlist; ?></span><br><br>
    Would you like to subscribe our newsletter?<input type="checkbox" name="subscribe" > <br>
    How frequent do you want to receive the newsletter?<br><br>
  <input type="radio" name="frequency" value="weekly" <?php echo htmlspecialchars($rdo1checked);?> > weekly<br>
  <input type="radio" name="frequency" value="monthly" <?php echo htmlspecialchars($rdo2checked);?> > monthly<br>
  <input type="radio" name="frequency" value="ocassionaly" <?php echo htmlspecialchars($rdo3checked);?>> ocassionaly<br>
  <span class="error"><?php echo $errfrequency; ?></span><br>
  <br> <input type="submit" id="submit">
    </form>

</body>
	
</html>