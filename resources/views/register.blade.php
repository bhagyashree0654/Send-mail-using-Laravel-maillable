<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="assets\vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">

<!-- Favicons -->
  <link href="public\tools\indexLogo.jpg" rel="icon">
  <link href="public\tools\indexLogo.jpg" rel="indexLogo">

<title>Student Registration Form</title>
</head>

<body class="bg-light">
  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="public/tools/mscbduLogo.png" alt="logo" width="80" height="80">
      <h2>Student Registration Form</h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
      <form id="signupform" name = "signupform" action="registerUser" method = "POST">
      <div class="form-group">
      <label for="fullName">Name</label>
      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name" required>
      <input type="hidden" class="form-control tooltips" name="_token" id="_token" value="{{ csrf_token() }}"/>
      <input type="hidden" class="form-control" id="hidId" name="hidId" aria-describedby="id">
      </div>
    
    <div class="form-group">
      <label for="department">Department</label>
      <select class="form-control d-block w-100" id="department" name="department" required>
      </select>
    </div>
    <div class="form-group">
      <label for="course">Course</label>
      <select class="form-control d-block w-100" id="course" name="course" required>
      </select>
    </div>
    
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@email.com" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>    
    </div>
    
  
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" aria-describedby="password">
    </div>
    <div class="form-group">
      <label for="cnfpassword">Confirm Password</label>
      <input type="password" class="form-control" id="cnfpassword" placeholder="Re-type password" aria-describedby="password">
      </div>
    
  <hr class="mb-4">
    <button type="submit" class="btn btn-primary btn-lg btn-block" id="btnSubmit">Submit</button>
    <p class="float-right"> <a href="login"> Already Register..? Login </a> </p>
    </form>
      </div>
    </div>
    
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2020-2021 Maharaja Sriram Chandra Bhanja Deo University</p>    
    </footer>
    </div>
    
    <script src="public\plugins\jquery-3.4.1.min.js"></script>
    <script src="resources\views\js\register.js"></script>
    <script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#password").val();
            var confirmPassword = $("#cnfpassword").val();
            
            if(password.length < 6 && confirmpassword.length < 6){
              alert("Password must be 6 character long..")
              return false;
            }
            if(password == "" && confirmPassword == ""){
              alert("Do not leave it blank..")
              return false;
            }
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
</body>
</html>
