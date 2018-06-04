<?php
/*
 * @author Tobechukwu Treasure Osueke, x17132070
 */
session_start();

 //check to see if business user accout is login
    if(isset($_SESSION['bizuser'])){
        session_destroy();
        session_start();
    }

 if(isset($_SESSION['normaluser'])){
        header('location: index.php');
        exit;
    }
    else{
include_once("includes/Web_Page_Beginning.php");

?>
</head>
<body>
    <?php include_once("includes/nav.php"); 
    
   
    ?>
    
    <div class="conterner">
        <div class="row well">
            <div class="col-sm-12">
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-3">
            </div>
       
    <div class="col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading"><center><h3 style="color:black">LOGIN</h3></center>
                        <p style="color:palevioletred">Login to begin your search for the best professionals in Dublin</p>
                        </div>
    
                        <div class="panel-body">
                            <center> <span class="error" id="loginerr"><?php  if(isset($_GET['loginerr']))echo htmlspecialchars($_GET['loginerr']);   ?></span></center>
    <form name="login" method="POST" action="users_login_Process.php"  class="form-horizontal">
        <div class="form-group">
            <label  for="loginusername" class="col-sm-3">Username:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="loginusername" name="loginusername" placeholder="Enter username">
            <span class="error"> <?php if(isset($loginusernameerr))echo $loginusernameerr;?></span>
            </div>
        </div>
          <div class="form-group">
               <label  for="loginpwd" class="col-sm-3">Password:</label>
                <div class="col-sm-5">
                  <input type="password" class="form-control" id="loginpwd" name="loginpwd" placeholder="Enter password">
                 
                </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-3">&nbsp;</div>
            
            <div class="g-recaptcha col-sm-5" data-sitekey="6LcLUjsUAAAAAGkAmMNhJ_QBw_edGtozA74lhf_w"></div>
           
        </div>

            
        <div class="form-group">
            <div class="col-sm-6">&nbsp;</div>
            <div class="col-sm-3">
            <button type="submit" id=sub class="btn btn-primary btn-md">Submit</button>
            </div>
        </div>
                
    </form>
                        </div>
            <div class="panel-footer"><center><i><b> <a href="user_forgot_password.php" style="color:darkred;">Forgot Password?</a></b></i></center></div>
        </div>
           
                
            </div>
             <div class="col-sm-3">
            </div>
    
     </div>
    </div>    
    
<?php include_once("includes/Web_Page_Ending.php"); 
}
?>