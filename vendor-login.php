<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PrintItNow </title>
<?php include'includes/head.php'; ?>
</head>
<body>


<section class="m-b-30">
   <div class="container">
    	<div class="row">
          <div class="login-page-logo">
                    <img src="images/print-logo.png"/ width=" " height=" " alt="logo">
                </div>
           <div class="module form-module">
                
             <div class="form" id="login-step1">
               
                <h2>Login to your account</h2>
                <form>
                  <input type="text" placeholder="Username"/>
                  <input type="password" placeholder="Password"/>
                  <a class="sub-btn">Login</a>
                  
                  
                  
                </form>
                
                  <div class="toggle">
                    <i class="fa fa-times fa-pencil"></i> Forgot your password?
                  </div>
              </div>
              
              <div class="form" id="login-step2">
                <h2>Forget Password</h2>
                <form>
                  <input type="text" placeholder="Username"/>
                  <a class="sub1 sub-btn">Submit</a>
                </form>
              </div>
              
              
              
              <div class="form" id="login-step3">
                
                <h2>Reset Password</h2>
                <form>
                  <input type="text" placeholder="New Password"/>
                   <input type="text" placeholder="Confirm Password"/>
                  <a class="sub-btn">Submit</a>
                </form>
              </div>
              
             
              
              
            </div>   
         </div>
    </div>
</section>


<?php include'includes/foot.php'; ?>

</body>
</html>