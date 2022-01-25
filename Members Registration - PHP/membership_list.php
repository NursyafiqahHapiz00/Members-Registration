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
		<title>Membership List</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>

<body>
		<!-- To create the header of the webpage -->
		<!-- Id=wrapper is used to create the white large box to insert the content -->
		<div id="wrapper">
		<div id="header">
			<h1>Membership List</h1>
		</div>
	
	<!-- To explain about the membership registration -->
	<div id="page-wrap">
		<p style="text-align:justify; margin-top: 50px;"> <a style="text-decoration:none; color:black;">Below are the list details regarding our club members!</a></p>
	
	<br><br> 

    <!-- To create table discount -->
			<table class="table table-striped">

    <!-- To create table column -->
        <thead>
            <tr>
                <th scope="col">IC No.</th>
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email Address</th>
                <th scope="col">Type of Membership</th>
                <th scope="col">Membership Since</th>
            </tr>
        </thead>

    <!-- To create table row -->
        <tbody>
        <?php
			$get_membership_688 = "select * from membership_688";
			$run_membership_688 = mysqli_query($con,$get_membership_688);
				while($row_membership_688 = mysqli_fetch_array($run_membership_688)){

					$ic_no_688 = $row_membership_688['ic_no_688'];
					$name_688 = $row_membership_688['name_688'];
					$phone_688 = $row_membership_688['phone_688'];
					$email_688 = $row_membership_688['email_688'];
					$member_type_688 = $row_membership_688['member_type_688'];
					$register_date_688 = $row_membership_688['register_date_688'];
		?>   

            <tr>
				<td><?php echo $ic_no_688; ?></td>
				<td><?php echo $name_688; ?></td>
				<td><?php echo $phone_688; ?></td>
				<td><?php echo $email_688; ?></td>
				<td><?php echo $member_type_688; ?></td>
				<td><?php echo $register_date_688; ?></td>
            </tr>
        <?php
          }
        ?>
        </tbody>
    </table>
    
        <div>
            <a href="index.php" class="btn btn-danger"> Back </a>
        </div>	
        
        </div>
        <p style="text-align:center; margin-top: 100px; color: black;">The app is created by <a href="https://www.linkedin.com/in/nursyafiqah-hapiz/" style="color:blue; text-decoration:none;">SYAFIQAH HAPIZ</a></p>
		</div>
	</body>
</html>