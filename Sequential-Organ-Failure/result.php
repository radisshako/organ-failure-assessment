<?php
    /*getting the firstname surname and nhi number from the cookies*/
    $fname =$_COOKIE["fname"];
    $lname = $_COOKIE["lname"];
    $nhi = $_COOKIE["nhi"];
    ?>
<!--error reporting->
<?php
   ini_set("error_reporting",E_ALL);
   ini_set("log_errors","1");
   ini_set("error_log","php_errors.txt");
   ?>



<?php
    /*variable for the sofa */
    $sofaScore = 0;

    /*Assignig variables to values posted to result.php*/
    $cnsVal=$_POST["cnsystem"];
    
    $coagulationVal=$_POST["coagulation"];
    
    $liverVal=$_POST["liver"];
    
    $kidneyVal=$_POST["kidney"];
    
    $respiratoryVal = $_POST["respiratory"];
    
    $cardiovascularVal = $_POST["cardiovascular"];
    

    


    //Points added for cnsvalue
    $cnsPoints = 0;
    /*Calcualting the sofa */
    //For cns input
    if($cnsVal == "15"){
        //add nothing to the sofa score//
    }
    else if($cnsVal == "13-14"){
        //add 1
        $cnsPoints = 1;
        $sofaScore += $cnsPoints;
    }
    else if($cnsVal == "10-12"){
        //add 2
        $cnsPoints = 2;
        $sofaScore += $cnsPoints;
    }
    else if($cnsVal == "6-9"){
        //add 3
        $cnsPoints = 3;
        $sofaScore += $cnsPoints;
    }
    else if($cnsVal == "less than 6"){
        //add 4
        $cnsPoints = 4;
        $sofaScore += $cnsPoints;
    }

    //echo "<p> Sofa score is $sofaScore<br>";
    //points added for coagulation
    $coagPoints = 0;

    /*Calcualting the sofa */
    //for coagulation input
    if($coagulationVal == "&gt=150"){
        //add nothing to the sofa score//
    }
    else if($coagulationVal == "&lt150"){
        //add 1
        $coagPoints=1;
        $sofaScore += $coagPoints;
    }
    else if($coagulationVal == "&lt100"){
        //add 2
        $coagPoints = 2;
        $sofaScore += $coagPoints;
    }
    else if($coagulationVal == "&lt50"){
        //add 3
        $coagPoints=3;
        $sofaScore += $coagPoints;
    }
    else if($coagulationVal == "&lt20"){
        //add 4
        $coagPoints = 4;
        $sofaScore += $coagPoints;
    }

    //echo "<p> sofa score after coagualtion is $sofaScore<br> ";

    //points for liver input
    $liverPoints = 0;
    /*Calcualting the sofa */
    //for liver input
    if($liverVal == "&lt1.2 (&lt20)"){
        //add nothing to the sofa score//
    }
    else if($liverVal == "1.2-1.9 (20-32)"){
        //add 1
        $liverPoints = 1;
        $sofaScore += $liverPoints;
    }
    else if($liverVal == "2.0-5.9 (33-101)"){
        //add 2
        $liverPoints = 2;
        $sofaScore += $liverPoints;
    }
    else if($liverVal == "6.0-11.9 (102-204)"){
        //add 3
        $liverPoints = 3;
        $sofaScore += $liverPoints;
    }
    else if($liverVal == "&gt12.0 (&gt204)"){
        //add 4
        $liverPoints = 4;
        $sofaScore += $liverPoints;
    }

    //echo "<p> sofa score after liver is $sofaScore<br> ";

    //Points for $kidney value
    $kidneyPoints = 0;

    /*Calcualting the sofa */
    //for kidney input
    if($kidneyVal == "&lt1.2 [<110]"){
        //add nothing to the sofa score//
    }
    else if($kidneyVal == "1.2-1.9 [110-170]"){
        //add 1
        $kidneyPoints = 1;
        $sofaScore += $kidneyPoints;
    }
    else if($kidneyVal == "2.0-3.4 [171-299]"){
        //add 2
        $kidneyPoints = 2;
        $sofaScore += $kidneyPoints;
    }
    else if($kidneyVal == "3.5-4.9 [300-440] (or &lt500 ml/day) "){
        //add 3
        $kidneyPoints =3;
        $sofaScore += $kidneyPoints;
    }
    else if($kidneyVal == ">5.0 [> 440] (or <200 ml/day)"){
        //add 4
        $kidneyPoints = 4;
        $sofaScore += $kidneyPoints;
    }

    //echo "<p> sofa score after kidney is $sofaScore<br> ";

    //points for the respiratory input
    $respPoints = 0;

    /*Calcualting the sofa */
    //for respiratory input
    if($respiratoryVal == "&gt=400 (53.3)"){
        //add nothing to the sofa score//
    }
    else if($respiratoryVal == "&lt400 (53.3)"){
        //add 1
        $respPoints = 1;
        $sofaScore = $sofaScore + $respPoints;
    }
    else if($respiratoryVal == "&lt300 (40)"){
        //add 2
        $respPoints = 2;
        $sofaScore += $respPoints;
    }
    else if($respiratoryVal == "&lt200 (26.7) with ventilation"){
        //add 3
        $respPoints = 3;
        $sofaScore += $respPoints;
    }
    else if($respiratoryVal == "&lt100 (13.3) with ventilation"){
        //add 4
        $respPoints = 4;
        $sofaScore += $respPoints;
    }

    //echo "<p> sofa score after respiratory is $sofaScore<br> ";

    //points from cardiovacular input
    $cardioPoints = 0;
    /*Calcualting the sofa */
    //for cardiovascular input
    if($cardiovascularVal == "MAP ≥ 70 mmHg"){
        //add nothing to the sofa score//
    }
    else if($cardiovascularVal == "MAP less than 70 mmHg"){
        //add 1
        $cardioPoints = 1;
        $sofaScore += $cardioPoints;
    }
    else if($cardiovascularVal == "dopamine ≤ 5 μg/kg/min"){
        //add 2
        $cardioPoints = 2;
        $sofaScore += $cardioPoints;
    }
    else if($cardiovascularVal == "dobutamine (any dose)"){
        //add 2
        $cardioPoints =2;
        $sofaScore += $cardioPoints;
    }
    else if($cardiovascularVal == "dopamine > 5 μg/kg/min"){
        //add 3
        $cardioPoints = 3;
        $sofaScore += $cardioPoints;
    }
    else if($cardiovascularVal == "epinephrine ≤ 0.1 μg/kg/min"){
        //add 3
        $cardioPoints = 3;
        $sofaScore += $cardioPoints;
    }
    else if($cardiovascularVal == "norepinephrine ≤ 0.1 μg/kg/min"){
        //add 3
        $cardioPoints = 3;
        $sofaScore += $cardioPoints;
    }
    else if($cardiovascularVal == "dopamine > 15 μg/kg/min"){
        //add 4
        $cardioPoints = 4;
        $sofaScore += $cardioPoints;
    }
    else if($cardiovascularVal == "epinephrine > 0.1 μg/kg/min"){
        //add 4
        $cardioPoints = 4;
        $sofaScore += $cardioPoints;
    }
    else if($cardiovascularVal == "norepinephrine > 0.1 μg/kg/min"){
        //add 4
        $cardioPoints = 4;
        $sofaScore += $cardioPoints;
    }

    



    
    ?>





<!DOCTYPE html>
<html lang="en">
    <!--Page header-->
    <head>
        <!--meta data -->
        <meta charset="utf-8">
        <!--Page title-->
        <title>SOFA Score Calculator</title>
        <!-- link to the css stylesheet-->
        <link rel="preload" as="style" href="style2.css">
        <link rel="stylesheet" type="text/css" href="style2.css">



    </head>
    <!--Page Body-->
    <body>
        <!--header of page-->
        <h1>SOFA Score Calculator</h1>
        <?php
        /*Displaying patient nhi surname and firstname*/
        echo "<div class='patient_header'>";
        echo "<h2>$fname $lname NHI number: $nhi</h2>";
        echo "</div>";

        ?>
        <div class='table_div'>
        <form id="page1_form" method="POST" action="./index.php" >
            <?php
            //table of results
            echo "<table>";
            echo "<tr><th>SOFA calculator input</th><th>SOFA score</th></tr>";
            echo "<tr><td>Central nervous systmem(Glasgow coma scale) is: $cnsVal</td><td>$cnsPoints</td></tr>";
            echo "<tr><td>Coagulation(Platelets×103/μl) is: $coagulationVal</td><td>$coagPoints</td></tr>";
            echo "<tr><td>Liver(Bilirubin (mg/dl) [μmol/L]) is: $liverVal</td><td>$liverPoints</td></tr>" ;
            echo "<tr><td>Kidney(Creatinine (mg/dl) [μmol/L] (or urine output) ) is: $kidneyVal</td><td>$kidneyPoints</td></tr>" ;
            echo "<tr><td>Respiratory system(PaO2/FiO2 [mmHg (kPa)])  is: $respiratoryVal</td><td>$respPoints</td></tr>";
            echo "<tr><td>Cardiovascular system(Mean arterial pressure OR administration of vasopressors required) is: $cardiovascularVal </td><td>$cardioPoints</td></tr>";
            //echo "<p>sofa score after cardiovascular is $sofaScore<br> ";
            echo "<tr><td><span class='final_message'>The SOFA score is: </span></td><td><span class='final_message'>$sofaScore</span></td></tr>";

            echo "</table>";
            ?>
            <button type="submit">Restart</button>
        
        </form>
        </div>
        
    </body>
</html>