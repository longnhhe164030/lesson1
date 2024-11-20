
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["product"]) && isset($_POST["list"]) && isset($_POST["disc"])){
    $product = $_POST["product"];
    echo "Product description:" . $product . "<br>";
    $list = floatval($_POST["list"]);
    $disc = floatval($_POST["disc"]);
    echo "List price: " . $list. "<br>";
    echo "Discount percent: " .$disc . "%<br>";
    if($list <= 0){
        echo "The product's price must be greater than 0";
        exit();
            }
    if($disc <=0 || $disc >100){
        echo "Discount percent must be between 0 and 100%";
        exit();
            }     
        $discAmount = $list * $disc * 0.01;
        $discPrice = $list - $discAmount;
        echo "Discount Amount:" . $discAmount . "<br>";
        echo "Discount Price: ". $discPrice . "<br>";
        }else{
            echo "Error";
        }   
    } 
    ?>

