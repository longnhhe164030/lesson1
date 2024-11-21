<?php

function numberToWord($num){
    if($num >= 1000|| $num < 0){
    return "Out of ability"; 
    }
    $ones = ["Zero","One","Two","Three","Four","Five","Six","Seven","Eight","Nine"];
    $teens = ["Ten","Eleven","Twelve","Thirteen","Fourteen","Fitteen","Sixteen","Seventeen","Eighteen","Nineteen"];
    $tens = ["","","Twenty","Thirty","Forty","Fifty","Sixty","Seventy","Eighty","Ninety"];
    if($num < 10){
        return $ones[$num];
    }
    if($num < 20){
        return $teens[$num - 10];
    }
    if($num < 100){
        $tenDigit=intdiv($num,10);
        $oneDigit=$num % 10;
        if($oneDigit == 0){
            return $tens[$tenDigit];
        }
        return $tens[$tenDigit] . " " . $ones[$oneDigit] ; 
    }
    $hundredDigit = intdiv($num,100);
    $remainder = $num % 100;
    if($remainder == 0){
        return $ones[$hundredDigit]. " hundred ";
    }
    return $ones[$hundredDigit] . " hundred and " . numberToWord($remainder);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["num"])){
        $num= intval($_POST["num"]);
        echo "The number " . $num . " is read as: " . numberToWord($num); 
    }else{
        echo "No number provied";
    }
}
?>