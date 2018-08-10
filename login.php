<html>
   <head>
      <title>Login page</title>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
 
      <div class="container">
         <div class="formHeader">
           <img src="images/logo.png" title="Logo" width="180px"/>
           
           
          <!--  <h3><i>SPR</i> SCHOOL</h3>
            <div class="headerLinks"> 
                <a href="login.php">Login</a>
            </div>   
              <div class="clear"></div> -->
         </div> 
     
         <hr style="width:85%"/>
         <form class="regForm" action="process.php" method="post">
               
               
                <div class="form-control"> 
                   <input type="text" name="username"  class="form-input"  placeholder="Username" required>
                  </div>
              <div class="form-control">
                   <input type="password" name="password"  class="form-input"  placeholder="Password" required>
              </div> 
                 
           
            <div class="registerBtn">
                <button type="submit" name="register">Login</button> 
            </div>
               <div class="bottomForm">
               New to website? <a href="registration.php">Register</a>  here 
            </div>
              
         </form>
      </div>
   </body>
</html>