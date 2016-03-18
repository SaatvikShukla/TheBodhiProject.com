<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img/favicon.png" type="image/png">
<link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Bodhi Project</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <!-- jQuery -->
 <script src="../js/jquery.js"></script>

 <!-- Bootstrap Core JavaScript -->
 <script src="../js/bootstrap.min.js"></script>

 <!-- Plugin JavaScript -->
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
 <script src="../js/classie.js"></script>
 <script src="../js/cbpAnimatedHeader.js"></script>

 <!-- Custom Theme JavaScript -->
 <script src="../js/agency.js"></script>

</head>
<body id="page-top" class="index">
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="#page-top">The Bodhi Project</a>
            </div>
        </div>
    </nav>
</body>
<section class="container">
<?php
   include_once 'vars.php';
   // Check for empty fields
   if(empty($_POST['jname'])          ||
      empty($_POST['email_id'])       ||
      empty($_POST['phone'])          ||
      empty($_POST['date_of_birth'])  ||
      empty($_POST['gender'])         ||
      empty($_POST['address'])        ||
      empty($_POST['education'])      ||
      empty($_POST['organization'])   ||
      empty($_POST['english'])        ||
      empty($_POST['marathi'])        ||
      empty($_POST['hindi'])          ||
      empty($_POST['association'])    ||
      empty($_POST['join_reason'])    ||
      empty($_POST['howFound'])       ||
      !filter_var($_POST['email_id'],FILTER_VALIDATE_EMAIL))
      {
      echo "<div class='alert alert-success'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times</button>";
      echo "<strong>Please fill all the data before submitting</strong>";
      echo "</div>";
      echo "<div class='alert alert-success'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times</button>";
      echo "<strong><a href='../'>Click here to go back to the homepage.</a> </strong>";
      echo "</div>";
      return false;
      }

   $name = $_POST['jname'];
   $email_address = $_POST['email_id'];
   $phone = $_POST['phone'];
   $date_of_birth = $_POST['date_of_birth'];
   $gender = $_POST['gender'];
   $address = $_POST['address'];
   $education = $_POST['education'];
   $organization = $_POST['organization'];
   $english = $_POST['english'];
   $marathi = $_POST['marathi'];
   $hindi = $_POST['hindi'];
   $association = $_POST['association'];
   $join_reason = $_POST['join_reason'];
   $howFound = $_POST['howFound'];

   // Create the email and send the message
   $email_subject = "Registration form:  $name";
   $email_body = "You have received a new registration request to join The Bodhi Project.\n\n "."Here are the details:\n\n Name: $name\n\n Email: $email_address\n\n Phone: $phone\n\n Date of Birth:\n$date_of_birth\n\n Gender:\n$gender\n\n Address:\n$address\n\n Education:\n$education\n\n Organization:\n$organization\n\n english:\n$english\n\n marathi:\n$marathi\n\n hindi:\n$hindi\n\n Association:\n$association\n\n Reason to join TBP:\n$join_reason\n\n How did they find TBP:\n$howFound";
   $headers = "From: join@thebodhiproject.com\n";
   $headers .= "Reply-To: $email_address";	
   if (mail($jointo,$email_subject,$email_body,$headers)) {
      echo "<div class='alert alert-success'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times</button>";
      echo "<strong>Your message has been sent. </strong>";
      echo "</div>";
      echo "<div class='alert alert-success'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times</button>";
      echo "<strong><a href='../'>Click here to go back to the homepage.</a> </strong>";
      echo "</div>";
   }
?>
</section>
</html>