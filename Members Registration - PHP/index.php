<?php
	session_start(); 
	include("includes/db.php"); //Import from database file in includes folder
?>

<?php
	//To set the bills variable 	
	$get_membership_688 = "select * from membership_688"; //Use $get to collect the values from bills. Select the records from bills table admin_email in phpmyadmin (admins table)
	$run_membership_688 = mysqli_query($con,$get_membership_688); //To run the admin database. To execute the sql query from admin_email in phpmyadmin 
	$row_membership_688 = mysqli_fetch_array($run_membership_688); //To fetch the row array from the query result in admins phpmyadmin
	
	//To set the variable $row_admin
	$ic_no_688 = $row_membership_688['ic_no_688']; //Row is used to get the bills_id rows record from table bills in phpmyadmin
	$name_688 = $row_membership_688['name_688'];
	$phone_688 = $row_membership_688['phone_688'];
	$email_688 = $row_membership_688['email_688'];
	$member_type_688 = $row_membership_688['member_type_688'];
    $register_date_688 = $row_membership_688['register_date_688'];
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
		<title>Membership Registrtion</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>

<body>
		<!-- Id=wrapper is used to create the white large box to insert the content -->
    	<div id="wrapper">
        <div id="header">
			<h1>TISSA-UUM Programming Club Membership System</h1>
		</div>

        <!-- To explain about the membership registration -->
    	<div id="page-wrap">

            <!-- To create the form -->
			<form class="post-form" action="" method="post"> 
		    	<div class="form-group">
                    <div class="col-md-12">
                        <a href="insert_record.php" type="button" class="MyButton"> Membership Registration </a>
                    </div>
                    <br>

                    <div class="col-md-12">
                        <a href="search.php" type="button" class="MyButton"> Membership Search </a>
                    </div>
                    <br>
                    
                    <div class="col-md-12">
                        <a href="membership_list.php" type="button" class="MyButton"> Membership List </a>
                    </div>

                    <style>
                    .MyButton {
                        width: 800px;
                        padding: 20px;
                        cursor: pointer;
                        font-weight: bold;
                        font-size: 150%;
                        background: #E0AB98;
                        color: #fff;
                        border: 1px solid #E0AB98;
                        border-radius: 10px;
                    }

                    .MyButton:hover {
                        color: #F8E4DF;
                        background: #000;
                        border: 1px solid  #F8E4DF;
                    }
                    </style>
                    </div>
                </div>
                

       <?php
          //To get insert record
           if(isset($_GET['insert_record'])){
                 include("insert_record.php"); //Get the insert record from insert_record.php file
            }

            //To get search record
           if(isset($_GET['search'])){
                 include("search.php"); //Get the search record from search.php file
           }

             //To get memmbership list record
             if(isset($_GET['membership_list'])){
                include("membership_list.php"); //Get the search record from search.php file
             }
        ?>

        </div>
        
		<p style="text-align:center; margin-top: 100px; color: black;">The app is created by <a href="https://www.linkedin.com/in/nursyafiqah-hapiz/" style="color:blue; text-decoration:none;">SYAFIQAH HAPIZ</a></p>
		</div>
    </body>
</html>