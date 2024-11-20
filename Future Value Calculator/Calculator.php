<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["amount"]) && isset( $_POST["rate"]) && isset( $_POST["number"])){
        $amount = floatval($_POST["amount"]);
        $rate = floatval($_POST["rate"]);
        $number = floatval($_POST["number"]);
        if($amount <= 0 ||$rate <= 0 || $number <= 0) {
            echo"Error: All values must be greater than zero.";
            exit();
        }
        $furValue = $amount;
        for($i = 0; $i < $number; $i++){
        $furValue += $furValue *$rate;
        }
        echo "Future Value:" . number_format($furValue) ."";
    }
}
?>