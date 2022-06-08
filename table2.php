<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    
</head>
<?php
        // $result_str = $result = '';
        // if(isset($_POST['unit-submit'])){
        //     $units = $_POST['units'];
        //     if(!empty($units)){
        //         $result = calculate_bill($units);
        //         $result_str = 'Total amount of '. $units . '-' . $result;
        //     }
        // }

        // Functions for bill as per unit cost
        function table($a){
            
            // define('a', 7);   
            // $a = 7 ;
            $result = 0;
            for($i=1; $i<=10; $i++)   
            {   
            echo $i*$a;   
            echo '<br>';     
            }  
            // return number_format();
        }
    ?>
<body>
    
    <div id="page-wrap" >
        <h1>Calculate</h1>
        <form action="" method="post" id="ele_form">
        <input type="number" name="units" id="units" placeholder="Enter no.">
        <input type="submit" name="unit-submit" id="unit-submit" value="Submit" action="table">
        </form>
        <div>
            <?php
                // echo '<br /> ' . $result_str;
                $number = (int)$_POST['units'];
                table($number) ;
            ?>
        </div>
    </div>

</body>
</html>