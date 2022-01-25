<?php
	session_start(); 
	include("includes/db.php"); //Import from database file in includes folder
?>

<!DOCTYPE html>

<!-- The webpage is in english language
 Use UTF-8 which covers almost all of the characters and symbols in the world
 Enable the user's visible area depends on their device, small for smartphone and large for computers
 Allows web authors to choose what version of Internet Explorer and ie=edge display the content in the highest mode available
 Rel Stylesheet specifies the relationship between current document with imported style sheet from href. Href specifies the link's destination -->

<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Membership Registration</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>

<body>
		<!-- To create the header of the webpage -->
		<!-- Id=wrapper is used to create the white large box to insert the content -->
		<div id="wrapper">
		<div id="header">
			<h1>Membership Registration Form</h1>
		</div>
	
	<!-- To explain about the membership registration -->
	<div id="page-wrap">
		<p style="text-align:justify; margin-top: 50px;"> <a style="text-decoration:none; color:black;">Kindly fill in your details to become one of our members!</a></p>
	
	<br><br> 

		<!-- To create the form -->
			<form class="post-form" action="" method="post"> 
		    	<div class="form-group">
					<label class="col-md-3 control-label"> IC No.: </label>
					<input type="number" name="ic_no_688" placeholder="Without (-)" min="0" class="form-control" required value=""/>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label"> Full Name: </label>
					<input type="text" name="name_688" placeholder="Your name" class="form-control" required value=""/>
				</div>

                <div class="form-group">
					<label class="col-md-3 control-label"> Phone Number: </label>
					<input type="text" name="phone_688" placeholder="e.g: xxx-xxxxxxx" class="form-control" required value=""/>
				</div>

                <div class="form-group">
					<label class="col-md-3 control-label"> Email: </label>
					<input type="email" name="email_688" placeholder="Valid email address" class="form-control" required value=""/>
				</div>

                <div class="form-group">
                    <label for="member_type_688">Select membership type:</label>
                        <select name="member_type_688">
                            <option required value="" selected disabled>Choose your membership</option>
                            <option required value="Student">Student</option>
                            <option required value="Staff">Staff</option>
                            <option required value="Public">Public</option>
                        </select>
                </div>

				<div class="form-group">
					<label class="col-md-3 control-label"> Date of Registration: </label>
					<input type="text" name="register_date_688" class="form-control" readonly value="<?php echo date("Y/m/d")?>"/>
				</div>

			<br><br>

				<div>
					<a href="index.php" class="btn btn-danger"> Back </a>
					<input class="submit" type="submit" name="submit" value="Submit" />
					<input class="submit" type="submit" name="reset" value="Reset" />
				</div>				
			</form>
		</div>
<?php
    if (isset($_POST['reset'])) {
        //Destroys all the data associated with the current session
        session_destroy();
        header('location:insert_record.php');
    }	

	if(isset($_POST['submit'])){

    $ic_no_688 = $_POST['ic_no_688'];  
    $name_688 = $_POST['name_688'];   
    $phone_688 = $_POST['phone_688'];
    $email_688 = $_POST['email_688'];   
    $member_type_688 = $_POST['member_type_688'];   
    $register_date_688 = $_POST['register_date_688'];  

	$insert_registration = "insert into membership_688 (ic_no_688, name_688, phone_688, email_688, member_type_688, register_date_688) values ('$ic_no_688', '$name_688', '$phone_688', '$email_688', '$member_type_688', '$register_date_688')";
	$run_registration = mysqli_query($con,$insert_registration);

		if($run_registration){
			echo "<script>alert('New membership record has been created succesfully!')</script>";
			echo "<script>window.open('membership_list.php','_self')</script>";
		}
		
			else {
				echo "<script>alert('Membership records failed to be recorded and saved')</script>";	
			}
		}
	?>

		<p style="text-align:center; margin-top: 100px; color: black;">The app is created by <a href="https://www.linkedin.com/in/nursyafiqah-hapiz/" style="color:blue; text-decoration:none;">SYAFIQAH HAPIZ</a></p>
		</div>
	</body>
</html>