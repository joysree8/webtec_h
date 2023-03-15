<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    .error{
      color: red;
    }
  </style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dobErr =  $genderErr = $degreeErr = $bloodgroupErr =  "";
$name = $email = $dob = $gender = $degree = $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z1-9-. ]*$/",$name)) {
      $nameErr = "Atleast two letters, period , dash allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if(empty($_POST["date"])){
    $dobErr = "Date of birth is required";
    } else{
      $dob=($_POST["date"]);
    }
    
 

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

  if(empty($_POST["degree"])){
    $degreeErr = "Degree is required and at least two";
    } else{
      $degreeErr=($_POST["degree"]);
    }

  if (empty($_POST["B"])) {
    $bloodgroupErr = "Bloodgroup is required";
    } else {
      $bloodgroup = $_POST["B"];
    }

}
?>






<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  Name: 
  <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Email: 
  <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date of Birth: 
  <input type="date" name="date">
  <span class="error">*  <?php echo $dobErr;?></span>
  <br><br>
  Gender: 
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Degree:
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="SSC") echo $degree;?>">SSC 
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="HSC") echo $degree;?>">HSC
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="BSc") echo $degree;?>">BSc
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="MSc") echo $degree;?>">MSc
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
  Blood Group:
  <select name="B" id="B">
	<option value=""> Choose </option>
	<option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="A+") echo $Bloodgroup;?>" >A+</option>
	<option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="A-") echo $Bloodgroup;?>" >A-</option>
	<option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="B+") echo $Bloodgroup;?>" >B+</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="B-") echo $Bloodgroup;?>" >B-</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="O+") echo $Bloodgroup;?>" >O+</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="O-") echo $Bloodgroup;?>" >O-</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="AB+") echo $Bloodgroup;?>" >AB+</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="AB-") echo $Bloodgroup;?>" >AB-</option>
  
  </select>
  <span class="error">* <?php echo $bloodgroupErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>"; 
echo $bloodgroup;
?>

</body>
</html>