<?php
   ini_set("error_reporting",E_ALL);
   ini_set("log_errors","1");
   ini_set("error_log","php_errors.txt");
   
   ?>

<!--Check if any cookies exist-->
<?php
    if(isset($_COOKIE["fname"])){
        $fname=$_COOKIE["fname"];
    }
    else{
        $fname="";
    }
    if(isset($_COOKIE["lname"])){
        $lname=$_COOKIE["lname"];
    }
    else{
        $lname="";
    }
    if(isset($_COOKIE["nhi"])){
        $nhi=$_COOKIE["nhi"];
    }
    else{
        $nhi="";
    }
    


    ?>




<!--Validates the inputs-->
<?php
    //set the three input parameters to true
    $fnameValid=TRUE;
    $lnameValid=TRUE;
    $nhiValid=TRUE;

    //check if the first name is valid
    if(isset($_POST["fname"])){
        if(strlen($_POST["fname"]) < 2){
            $fnameValid = False;
        }
        //$result1 = preg_match('/^[a-zA-Z]+$/', $_POST["fname"]);
        //if($result1 == 0){
        //    $nhiValid = FALSE;
       // }
    }
    //check if the last name is valid
    if(isset($_POST["lname"])){
        if(strlen($_POST["lname"]) < 2){
            $lnameValid = False;
        }
        //$result2 = preg_match('/^[a-zA-Z]+$/', $_POST["lname"]);
        //if($result2 == 0){
        //    $nhiValid = FALSE;
        //}
    }
    //check if the nhi is valid
    if(isset($_POST["nhi"])){
        if(strlen($_POST["nhi"]) != 7){
            $nhiValid = False;
        }
        //$result3 = preg_match('/^[A-Z]{3}[0-9]{4}$/', $_POST["nhi"]);
       // if($result3 == 0){
         //   $nhiValid = FALSE;
        //}
    }
    //only if all three inputs exist and are accurate go to next page
    if(count($_POST)>2){
        if($fnameValid && $lnameValid & $nhiValid){
            header("Location:./sofa.php");
            exit();
        }
    }

    
    ?>




<!DOCTYPE html>
<html lang="en">
    <!--Page header-->
    <head>
        <meta charset="utf-8">
        <!--Page title-->
        <title>SOFA Score Calculator</title>
        <!-- link to the css stylesheet-->
        <link rel="preload" as="style" href="style2.css">
        <link rel="stylesheet" type="text/css" href="style2.css">
        


        <!--<script src="./validation.js" defer></script>-->
        
        
    </head>
    <!--Page Body-->
    <body>
        <!--header of page-->
        <h1>SOFA Score Calculator</h1>
        <!--Sub heading-->
        <div class="outline" id="page1_outline_div">
            <h2>What is a SOFA score?</h2>
            <!--Paragraph explaining what a sofa score is-->
            <p>A SOFA(Sequential Organ Failure Assessment) score
                is a type of risk assessment used by medical professionals to
                assess the health and functioning of a patients organs.
                Used in intensive care units, it is a score that uses a patients
                cardiovascular, renal, respiratory, hepatatic, renal and neurological systems.
                To then determine a risk score for the patient. This score helps medical professionals
                to  better predict medical outcomes.
            </p>
            <!--header for form-->
            <h2>To start enter your details</h2>
        </div>
        <!--Form for name and nhi-->
        <div class="form" id="form1_div">
            <form id="page1_form" method="POST" action="./sofa.php" >
                <!--Name inputs-->
                <div class="input i1">
                    <label for="fname">Firstname:</label>
                    <input  placeholder=" " type="text" id="fname" name="fname" value=<?php echo $fname;?>>
                    <label class="error">
                    </label>
                </div>
                <div class="input-container ic2">
                    <label for="lname">Lastname:</label>
                    <input  placeholder=" " type="text" id="lname" name="lname" value=<?php echo $lname;?>>
                    <label class="error">
                    </label>
                </div>
                <!--NHI input-->
                <div class="input i2">
                    <label for="nhi">NHI:</label>
                    <input placeholder=" " type="text" id="nhi" name="nhi" value=<?php echo $nhi;?>>
                    <label class="error">
                    </label>
                </div>
                <!--Reset and submit buttons-->
                <button type="reset">Reset</button>
                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>
