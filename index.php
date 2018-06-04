<?php session_start(); 
/*
 * @author Tobechukwu Osueke
 */

require_once ('includes/$_function.php');
require_once("includes/databaseConnection.php"); 
require_once("includes/Web_Page_Beginning.php");?>

</head>
<body>
<?php 

//add navigation file
require_once("includes/nav.php"); 

require_once("includes/checkIfUserHasaSession.php");

    
    
    //webpage body 
    
            //this is the search area region

        require_once("includes/search_Region.php"); 
            
            
            //<!--slide pictures-->
        
         include_once("includes/pictures_Slides.php"); 
?>
            
            <!--this is the How it works region-->
            <div class="row" id="howitworksrow">
                <div class="col-sm-12" id="howitworkscol">
                    <center><h3>How it works</h3></center>
                    <div class="row">
                        <div class="col-sm-4">
                            <center><h4>Tell Us what you want</h4>
                                <p>Enter the name of the service you want and choose a location near you. Click on Search.</p></center>
                        </div>
                        <div class="col-sm-4">
                            <center><h4>View List</h4>
                            <p>A list of service providers or businesses is displayed.</p></center> 
                        </div>
                        <div class="col-sm-4">
                            <center><h4>Make a choose</h4>
                             <p>Choose from the list to know more about a particular service provider</p></center>
                        </div>
                    </div>                   
                </div>           
            </div>
            <div class="row">
                <div class="col-sm-12">&nbsp</div>
            </div> 

            
<?php include_once("includes/Web_Page_Ending.php"); ?> 
            
           


            
            
            
        
        
        
        
        
        
        
        
        
   
      
 