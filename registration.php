<html>
   <head>
      <title>Registration page</title>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <div class="container">
         <div class="formHeader">
           <img src="images/logo.png" title="Logo" width="180px"/>
            
         </div> 
     
         <hr style="width:85%"/>
         <?php 
            $status = @$_GET['status'];  
          
            if($status=="success" || $status=="failed"){  
                
                if( $status=="failed"){
                    
                    echo "<center><h3>Registration ".$status."</h3></center><br/><div class=\"bottomForm\">
                        Please <a href='registration.php'>Try again</a>  here 
                    </div>";
                }else{
                     echo "<center><h3>Registration ".$status."</h3></center><br/><div class=\"bottomForm\">
                        Please <a href='login.php'>Signin</a>  here 
                            </div>";
                }
               
            }else {
          ?>
          
         <form class="regForm" action="process.php" method="post">
              <div class="form-controltype1 " >
                   <input type="text" name="firstname" id="fname" class="form-input" placeholder="First Name" required >
              </div> 
                <div class="form-controltype1"> 
                   <input type="text" name="lastname" placeholder="Last Name"  class="form-input" required> 
                  </div>
               <div class="form-control">
                    <input type="email" name="email"  class="form-input"  placeholder="Email" required>
              </div> 
                <div class="form-control"> 
                   <input type="text" name="username"  class="form-input"  placeholder="Username" required>
                  </div>
              <div class="form-control">
                   <input type="password" name="password"  class="form-input"  placeholder="Password" required>
              </div> 
                <div class="form-control"> 
                  <input type="password" name="rpassword"  class="form-input"  placeholder="Re-enter password" required>
                  </div> 
           
            <div class="registerBtn">
                <button type="submit" name="register">Register</button> 
            </div>
               <div class="bottomForm">
               Already registered? <a href="login.php">Signin</a>  here 
            </div>
              
         </form>
         <?php } ?>
      </div>
   </body>
</html>