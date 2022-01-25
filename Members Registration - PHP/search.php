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
		<title>Membership Search</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
	</head>

<body>
		<!-- To create the header of the webpage -->
		<!-- Id=wrapper is used to create the white large box to insert the content -->
		<div id="wrapper">
		<div id="header">
			<h1>Membership Search</h1>
		</div>

        <!-- To explain about the membership search -->
        <div id="page-wrap">
		<p style="text-align:justify; margin-top: 50px;"> <a style="text-decoration:none; color:black;">To confirm your registration, you may check your IC number here!</a></p>
	
	<br><br> 

    <!-- To create the form -->
			<form class="post-form" action="" method="post"> 
		    	<div class="form-group" class="example" >
                    <input type="text" placeholder="Enter IC number" name="ic_no_688">
                    <button class="btn btn-primary" name="submit" type="submit"><i class="fa fa-search"> Search</i></button>
                </div>				

<?php
	if(isset($_POST['submit'])){

    $ic_no_688 = $_POST['ic_no_688'];   
	$get_membership_688 = "select * from membership_688 where ic_no_688 = '$ic_no_688'";
    $run_search = mysqli_query($con,$get_membership_688);
    
    //if ths informations is there in the dbtable
    if (mysqli_num_rows($run_search) > 0) {
        while($row_membership_688 = mysqli_fetch_array($run_search)) {

            ?>

            <div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
                <span style="font-size: 18px; background-color: #F8E4DF; padding: 0 5px;">
                    <b>Your Details</b>
                </span>
            </div>

            <br><br>
        
            <!-- To display the record search -->
            <form class="post-form" action="" method="post"> 
		    	<div class="form-group">
					<label class="col-md-3 control-label"> IC No.: </label>
					<input type="number" name="ic_no_688" class="form-control" readonly value="<?php echo $row_membership_688['ic_no_688'];?>">
				</div>

                <div class="form-group">
					<label class="col-md-3 control-label"> Full Name: </label>
					<input type="text" name="name_688" class="form-control" readonly value="<?php echo $row_membership_688['name_688'];?>">
				</div>

                <div class="form-group">
					<label class="col-md-3 control-label"> Phone Number: </label>
					<input type="text" name="phone_688" class="form-control" readonly value="<?php echo $row_membership_688['phone_688'];?>">
				</div>

                <div class="form-group">
					<label class="col-md-3 control-label"> Email: </label>
					<input type="email" name="email_688" class="form-control" readonly value="<?php echo $row_membership_688['email_688'];?>">
				</div>

                <div class="form-group">
					<label class="col-md-3 control-label"> Type of Membership: </label>
					<input type="text" name="member_type_688" class="form-control" readonly value="<?php echo $row_membership_688['member_type_688'];?>">
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label"> Membership Since: </label>
					<input type="text" name="register_date_688" class="form-control" readonly value="<?php echo $row_membership_688['register_date_688'];?>">
				</div>

    <?php
        }
            }

            else { 
                echo "<br><br>";
                echo "<h3> No Record Found </h3>";
            }
        }
    ?>

    <br><br>	
    
        <div>
			<a href="index.php" class="btn btn-danger"> Back </a>
		</div>
    </form>

        </div>
        <p style="text-align:center; margin-top: 100px; color: black;">The app is created by <a href="https://www.linkedin.com/in/nursyafiqah-hapiz/" style="color:blue; text-decoration:none;">SYAFIQAH HAPIZ</a></p>
		</div>
	</body>
</html>



