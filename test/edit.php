<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>You can edit your information here.</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<?php
require('db.php');
// get id from url to edit in database
    if(isset($_REQUEST['name'])) {
	    $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con,$name); 
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        // $address = stripslashes($_REQUEST['address']);
        // $address = mysqli_real_escape_string($con,$address);
        $trn_date = date("Y-m-d H:i:s");
        
        $query = "UPDATE users
                  SET username = $name, email = $email
                  WHERE id = $id";
                  
        $result = mysqli_query($con,$query);

        if($result){ 
            header('Location:userslist.php');
        }
    }
?>

<body>
<div class="form">
<h1 align ="center">Information of user</h1>
<form name="registration" action="<?php $_SERVER["PHP_SELF"] ?>" method="post" align="center">
<input type="text" name="name" placeholder="Username" required />
<br> <br>
<input type="email" name="email" placeholder="Email" required />
<br> <br>
<input type="address" name="Address" placeholder="Address" required />
<br> <br>
<input type="submit" name="save" value="Save" onclick= "edit()"/>
</form>
</div>
</body>
</html>

