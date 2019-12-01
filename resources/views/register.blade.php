<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <!--<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">-->
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!--<link rel="stylesheet" href="css/owl.theme.default.min.css">-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--<link rel="stylesheet" href="css/aos.css">-->

    <!--<link rel="stylesheet" href="css/ionicons.min.css">-->

    <!--<link rel="stylesheet" href="css/bootstrap-datepicker.css">-->
    <!--<link rel="stylesheet" href="css/jquery.timepicker.css">-->

    
    <!--<link rel="stylesheet" href="css/flaticon.css">-->
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">

</head>
<body>

<div class="register-box">
	<h1>Register Here</h1>	

    <a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#register_patient">Patient Registration</a>   &nbsp &nbsp
    <a href="#" class="btn btn-primary px-4 py-3">Doctor Registration</a>   &nbsp &nbsp
    <a href="#" class="btn btn-primary px-4 py-3">Admin Registration</a> <br><br><br><br><br>
    <p>Back to <a href="index">Home</a></p></div>

   
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="patientModalLabel" id="register_patient">   
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" name="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <h3 class="modal-title" id="patientModalLabel">REGISTRATION FORM</h3>
            
            </div>
            <div class="modal-body">
            <form action="#">
<label for="firstname" style="font-weight: 600"><b>First Name</b></label>
				<input class="form-control" type="text" name="firstname" required>

				<label for="lastname" style="font-weight: 600"><b>Last Name</b></label>
				<input class="form-control" type="text" name="lastname" required>

				<label for="email" style="font-weight: 600"><b>Email Address</b></label>
				<input class="form-control" type="email" name="email" required>

				<label for="phonenumber" style="font-weight: 600"><b>Phone Number</b></label>
				<input class="form-control" type="text" name="phonenumber" required>

				<label for="password" style="font-weight: 600"><b>Password</b></label>
				<input class="form-control" type="password" name="password" required>

<input type="submit" class="btnRegister" value="REGISTER">
<a href="login" class="login">Have an Account Already?</a>
</form>

            </div>
        </div>

        <div class="modal-footer">footer</div>
    </div>

</div>
    <!--<div class="modal_container">
<div class="modal">
<a href="#" class="close">X</a>
<span class="modal_heading">Registration Form</span>
<p>Fill Up The Form With Correct Values.</p>

<form action="#">
<label for="firstname" style="font-weight: 600"><b>First Name</b></label>
				<input class="form-control" type="text" name="firstname" required>

				<label for="lastname" style="font-weight: 600"><b>Last Name</b></label>
				<input class="form-control" type="text" name="lastname" required>

				<label for="email" style="font-weight: 600"><b>Email Address</b></label>
				<input class="form-control" type="email" name="email" required>

				<label for="phonenumber" style="font-weight: 600"><b>Phone Number</b></label>
				<input class="form-control" type="text" name="phonenumber" required>

				<label for="password" style="font-weight: 600"><b>Password</b></label>
				<input class="form-control" type="password" name="password" required>

<input type="submit" class="btnRegister" value="REGISTER">
<a href="login" class="login">Have an Account Already?</a>
</form>

</div>
</div>-->


   
 
</body>
</html>