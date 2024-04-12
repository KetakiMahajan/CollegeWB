<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-rpXnX+MDwTldG0n5LqcxjAvcUSL2vsq5OAetwIJqHrZ3lpxwyCepUx3nsoLk95uWlMSrIyGHVbECEm+q1xhftQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">
            <img src="assets1/images/collagelogo.jpg" alt="Logo" style="width: 100px; height: 100px;">
            <h2>Computer Department</h2>
          </div>

          <div class="card-body">

            <form action='' method='post'>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name='name' class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
            </div>

              <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" name='mobile' class="form-control" id="mobile" aria-describedby="mobileHelp" placeholder="Enter Mobile Number">
                
              </div>

              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>

              <div class="form-group">
                <label for="teacher_id">Teacher Id</label>
                <input type="text" name='id' class="form-control" id="teacher_id" aria-describedby="teacher_idHelp" placeholder="Enter Teacher Id">
                
              </div>
           
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name='password' class="form-control" id="password" placeholder="Password">
              </div>

              <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password">
              </div>
              
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
              </div>
             <div class="d-flex justify-content-between pb-2">
              <div class="text-right">
                <a href="teacherlogin.php">Already Have Account? login here</a>
              </div>
              <div class="text-right">
                <a href="#">Forgot password?</a>
              </div>
             </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
          </div>
          <div class="card-footer text-center">
            <a href="index.php" class="btn btn-link">Back to Home</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS, jQuery, and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-3jyuFf/JVXAnE6EsPe/E5bZW3uTal+qE5y8BtTcA21tF7u4d88fNAcqKyIC5zqvo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shCk5FRQwGibatl<|endoffile|>```

This code produces the same login page with the required styling applied directly through Bootstrap classes.
