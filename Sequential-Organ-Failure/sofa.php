<?php
    if(isset($_POST["fname"])){
        setcookie("fname", $_POST["fname"],time() + 4000,"/");
    }
    if(isset($_POST["lname"])){
        setcookie("lname", $_POST["lname"],time() + 4000,"/");
    }
    if(isset($_POST["nhi"])){
        setcookie("nhi", $_POST["nhi"],time() + 4000,"/");
    }


    ?>
<?php
   ini_set("error_reporting",E_ALL);
   ini_set("log_errors","1");
   ini_set("error_log","php_errors.txt");
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
        

        
    </head>
    <!--Page Body-->
    <body>
            
        <?php 
            /*Get then patients fname and lname and nhi number */
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $nhi=$_POST["nhi"];
            ?>
        <!--header of page-->
        <h1>SOFA Score Calculator</h1>
        <?php
            /*Displaying patient nhi surname and firstname*/
            echo "<div class='patient_header'>";
            echo "<h2>$fname $lname NHI number: $nhi</h2>";
            echo "</div>";

            ?>
        <!--Sub header-->
        <h2>Please enter a value for the following parameters</h2>
        <!--Form for name and nhi-->
        <div class="form" id="form2_div">
            <form id="page2_form" method="POST" action="./result.php">
                <!--Central nervous system inputs-->
                <div class="input i1">
                    <label for="cnsystem">Central nervous system(Glasgow Coma Scale) <br></label>
                    <select name="cnsystem" id="cnsystem">
                        <option value="15">15</option>
                        <option value="13-14">13-14</option>
                        <option value="10-12">10-12</option>
                        <option value="6-9">6-9</option>
                        <option value="less than 6">less than 6</option>
                    </select>
                </div>
                <!--Coagulation inputs-->
                <div class="input i2">
                    <label for="coagulation">Coagulation(Platelets ×10³/μL)<br></label>
                    <select name="coagulation" id="coagulation">
                        <option value="&gt=150">&gt=150</option>
                        <option value="&lt150">&lt150</option>
                        <option value="&lt100">&lt100</option>
                        <option value="&lt50">&lt50</option>
                        <option value="&lt20">&lt20</option>
                    </select>
                </div>
                <!--Liver inputs-->
                <div class="input i2">
                    <label for="liver">Liver(Bilirubin mg/dL(μmol/L))<br></label>
                    <select name="liver" id="liver">
                        <option value="&lt1.2 (&lt20)">&lt1.2 (&lt20)</option>
                        <option value="1.2-1.9 (20-32)">1.2-1.9 (20-32)</option>
                        <option value="2.0-5.9 (33-101)">2.0-5.9 (33-101)</option>
                        <option value="6.0-11.9 (102-204)">6.0-11.9 (102-204)</option>
                        <option value="&gt12.0 (&gt204)">&gt12.0 (&gt204)</option>
                    </select>
                </div>
                <!--Kidney inputs-->
                <div class="input i2">
                    <label for="kidney">Renal function(Creatinine (mg/dl) [μmol/L] (or urine output))<br></label>
                    <select name="kidney" id="kidney">
                        <option value="&lt1.2 [<110]">&lt1.2 [<110]</option>
                        <option value="1.2-1.9 [110-170]">1.2-1.9 [110-170]</option>
                        <option value="2.0-3.4 [171-299]">2.0-3.4 [171-299] </option>
                        <option value="3.5-4.9 [300-440] (or &lt500 ml/day) ">3.5-4.9 [300-440] (or &lt500 ml/day) </option>
                        <option value=">5.0 [> 440] (or <200 ml/day)">&gt5.0 [&gt 440] (or &lt200 ml/day) </option>
                    </select>
                </div>
                <!--Respiratory system inputs-->
                <div class="input i2">
                    <label for="respiratory">Respiratory system(PaO2/FiO2 [mmHg (kPa)])<br></label>
                    <select name="respiratory" id="respiratory">
                        <option value="&gt=400 (53.3)">&gt=400 (53.3)</option>
                        <option value="&lt400 (53.3)">&lt400 (53.3)</option>
                        <option value="&lt300 (40)">&lt300 (40)</option>
                        <option value="&lt200 (26.7) with ventilation">&lt200 (26.7) and mechanically ventilated including CPAP</option>
                        <option value="&lt100 (13.3) with ventilation">&lt100 (13.3) and mechanically ventilated including CPAP</option>
                    </select>
                </div>
                <!--cardiovascular system inputs-->
                <div class="input i2">
                    <label for="cardiovascular">Cardiovascular system(Mean arterial pressure OR administration of vasopressors required)<br></label>
                    <select name="cardiovascular" id="cardiovascular">
                        <option value="MAP ≥ 70 mmHg">MAP ≥ 70 mmHg</option>
                        <option value="MAP less than 70 mmHg">MAP &lt 70 mmHg</option>
                        <option value="dopamine ≤ 5 μg/kg/min">dopamine ≤ 5 μg/kg/min</option>
                        <option value="dobutamine (any dose)">dobutamine (any dose)</option>
                        <option value="dopamine > 5 μg/kg/min">dopamine > 5 μg/kg/min</option>
                        <option value="epinephrine ≤ 0.1 μg/kg/min">epinephrine ≤ 0.1 μg/kg/min</option>
                        <option value="norepinephrine ≤ 0.1 μg/kg/min">norepinephrine ≤ 0.1 μg/kg/min</option>
                        <option value="dopamine > 15 μg/kg/min">dopamine > 15 μg/kg/min</option>
                        <option value="epinephrine > 0.1 μg/kg/min">epinephrine > 0.1 μg/kg/min</option>
                        <option value="norepinephrine > 0.1 μg/kg/min">norepinephrine > 0.1 μg/kg/min</option>
                    </select>
                </div>
                
                <!--Reset and submit buttons-->
                <button type="reset">Reset</button>
                <button type="submit">Submit</button>
            </form>
        </div>

    </body>
</html>







