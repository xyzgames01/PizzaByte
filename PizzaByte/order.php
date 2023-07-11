

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap5.css">
    <script defer src="js/bootstrap5.js"></script>
    <title>Pizza Byte</title>
</head>
<body>


    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="row d-flex align-items-center">
            <img src="images/logo.png" class="col-md-4" alt="">
            <h1 class="display-1 text-center col-md-4">Online ordering Form</h1>
            <img src="images/delivery.png" class="col-md-4" alt="">
        </div>
    </div>
    <hr>
    
    <?php

        $error_message = "";
        $fname = "";
        $lname = "";
        $address = "";
        $phone = "";
        $delivery_time = "";
        $size = "";
        $crusts = "";
        $quantity = "";
        $special = "";
        $pepperoni = "";
        $ham = "";
        $pork = "";
        $sausage = "";
        $chicken = "";
        $mushrooms = "";
        $green_peppers = "";
        $onions = "";
        $tomatoes = "";
        $jalapenos = "";
        $double_cheese = "";
        $double_sauce = "";
        
        $display_form = false;
        $errors = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check all of the form data.....
            
        if (empty($_POST["fname"])) {
            $error_message = $error_message . "Error... Missing First Name!!<br>";
            $errors = true;
        }
        else
        {
            $fname = trim(htmlspecialchars($_POST["fname"]));
        }
            
        if (empty($_POST["lname"])) {
            $error_message = $error_message . "Error... Missing Last Name!!<br>";
            $errors = true;
        }
        else
        {
            $lname = trim(htmlspecialchars($_POST["lname"]));
        }

        if (empty($_POST["address"])) {
            $error_message = $error_message . "Error... Missing Address!!<br>";
            $errors = true;
        }
        else
        {
            $address = trim(htmlspecialchars($_POST["address"]));
        }
            
        if (empty($_POST["phone"])) {
            $error_message = $error_message . "Error... Missing Phone Name!!<br>";
            $errors = true;
        }
        else
        {
            $phone = trim(htmlspecialchars($_POST["phone"]));
        }

        if (!empty($_POST["delivery_time"])) {
            $delivery_time = $_POST["delivery_time"];
        }
        if (!empty($_POST["size"])) {
            $size = $_POST["size"];
        }
        if (!empty($_POST["crusts"])) {
            $crusts = trim(htmlspecialchars($_POST["crusts"]));
            
        }
        if (!empty($_POST["quantity"])) {
            $quantity = $_POST["quantity"];
        }
        if (!empty($_POST["special"])) {
            $special = $_POST["special"];
        }
        if (!empty($_POST["pepperoni"])) {
            $pepperoni = $_POST["pepperoni"];
        }
        if (!empty($_POST["ham"])) {
            $ham = $_POST["ham"];
        }
        if (!empty($_POST["pork"])) {
            $pork = $_POST["pork"];
        }
        if (!empty($_POST["sausage"])) {
            $sausage = $_POST["sausage"];
        }
        if (!empty($_POST["chicken"])) {
            $chicken = $_POST["chicken"];
        }
        if (!empty($_POST["mushrooms"])) {
            $mushrooms = $_POST["mushrooms"];
        }
        if (!empty($_POST["green_peppers"])) {
            $green_peppers = $_POST["green_peppers"];
        }
        if (!empty($_POST["onions"])) {
            $onions = $_POST["onions"];
        }
        if (!empty($_POST["tomatoes"])) {
            $tomatoes = $_POST["tomatoes"];
        }
        if (!empty($_POST["jalapenos"])) {
            $jalapenos = $_POST["jalapenos"];
        }
        if (!empty($_POST["double_cheese"])) {
            $double_cheese = $_POST["double_cheese"];
        }
        if (!empty($_POST["double_sauce"])) {
            $double_sauce = $_POST["double_sauce"];
        }
           
        if(!empty($error_message)){
            $display_form = true;
        }
        } 
        else {
        $display_form = true;
        }

        if($display_form == true) {
    ?>			
        <p class="container-fluid mx-3 fs-3">Required Values are marked by an asterisk(*)</p>

        <div class="container-fluid d-flex flex-column" style="height:70vh;">
            <form action="order.php" method="post" role="form">
    <?php
        if ($errors == true ) {
            echo('<div style="color:red;">');
            echo($error_message);
            echo("<p>Errors have occured... Please resubmit</p>");
            echo("</div>");
        }
    ?>			
            <div class="row">
                <div class="col-xxl-4">
                    <div class="container-fluid border px-3">
                        <p class="text-center py-1 fs-5">Customer Information</p>
                        <div class="row">
                            <div class="col-6 border-end border-top">
                                <div class="container-fluid d-flex flex-column  ">
                                    <p classs="">First Name *</p>
                                    <p>Last Name *</p>
                                    <p  class="mb-5" >Delivery Location *</p>
                                    <p class="mb-5">Phone *</p>
                                    <p class="mb-0">Delivery Time</p>
                                    <p class="mt-0">(Leave blank for immediate delivery)</p>
                                </div>
                            </div>
                            <div class="col-6 border-start border-top">
                                <div class="container-fluid d-flex flex-column align-items-start">
                                    <input class="my-2" type="text" name="fname" placeholder="First Name" value="<?php echo $fname;?>" required style="width: 100%;">
                                    <input class="mb-2" type="text" name="lname" placeholder="Last Name" value="<?php echo $lname;?>" style="width: 100%;">
                                    <textarea class="form-control mb-2 border border-1 border-secondary border-none rounded-0" name="address" rows="3" placeholder="Address" style="width: 100%;"><?php echo $address;?></textarea>
                                    <input class="mb-2" type="text" name="phone" placeholder="302-547-3782" value="<?php echo $phone;?>" required style="width: 100%;">
                                    <input class="mb-2" type="time" name="delivery_time" value="<?php echo $delivery_time;?>" style="width: 100%;">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="col-xxl-8">
                    <div class="container-fluid border px-3">
                        <p class="text-center pb-2 fs-5">Customize Your Pizza</p>
                        <div class="row">
                            <div class="col-3">
                                <p class="mb-0">Select your Pizza size</p>
                                <p>(10, 12, or 14 inch)</p>
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center align-items-end">
                                        <div class="container d-flex justify-content-center align-items-center bg-danger rounded-circle mb-4" style="height: 50px; width:50px">
                                            <p class="text-white text-center mb-0">10</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-4 d-flex justify-content-center align-items-end">
                                        <div class="container d-flex justify-content-center align-items-center bg-danger rounded-circle mb-4" style="height: 60px; width:60px">
                                            <p class="text-white text-center mb-0">12</p>
                                        </div>
                                    </div>

                                    <div class="col-4 d-flex justify-content-center align-items-end">
                                        <div class="container d-flex justify-content-center align-items-center bg-danger rounded-circle mb-4" style="height: 70px; width:70px">
                                            <p class="text-white text-center mb-0">14</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center align-items-center"><input type="radio" name="size" value="10"<?php if($size == 10){echo"checked";}  ?>></div>
                                    <div class="col-4 d-flex justify-content-center align-items-center"><input type="radio" name="size" value="12"<?php if($size == 12){echo"checked";}  ?>></div>
                                    <div class="col-4 d-flex justify-content-center align-items-center"><input type="radio" name="size" value="14"<?php if($size == 14){echo"checked";}  ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-3">
                                <p class="">Choose your Crust</p>       
                            </div>
                            <div class="col-9">
                                <select name="crusts" >
                                    <option value="Thick" <?php if($crusts == "Thick"){echo"selected";}  ?>>Thick</option>
                                    <option value="Thin" <?php if($crusts == "Thin"){echo"selected";}  ?>>Thin</option>
                                    <option value="Stuffed"  <?php if($crusts == "Stuffed"){echo "selected";} ?> >Stuffed</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-3">
                                <p class="mb-0">Quantity</p>       
                            </div>
                            <div class="col-9">
                                <input type="number" name="quantity" min="1" max="10" value="<?php echo $quantity;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p class="">Special Instructions</p>       
                            </div>
                            <div class="col-9">
                                <textarea class="form-control mb-2 border border-1 border-secondary border-none rounded-0" name="special" rows="3" placeholder=""><?php echo $special;?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 border-end border-top">
                                <p class="text-center">Meat Toppings</p>
                                <div class="row">
                                    <label for="pepperoni" class="col-sm-2 col-form-label">Pepperoni</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Pepperoni" name="pepperoni" <?php if($pepperoni == "Pepperoni"){echo "checked";} ?>>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="ham" class="col-sm-2 col-form-label">Ham</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Ham" name="ham" <?php if($ham == "Ham"){echo "checked";} ?>>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="pork" class="col-sm-2 col-form-label">Pork</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Pork" name="pork" <?php if($pork == "Pork"){echo "checked";} ?>>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="sausage" class="col-sm-2 col-form-label">Sausage</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Sausage" name="sausage" <?php if($sausage == "Sausage"){echo "checked";} ?>>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="chicken" class="col-sm-2 col-form-label">Chicken</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Chicken" name="chicken" <?php if($chicken == "Chicken"){echo "checked";} ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 border-start border-top">
                            <p class="text-center">Vegetable Toppings</p>
                                <div class="row">
                                    <label for="mushrooms" class="col-sm-2 col-form-label">Mushrooms</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Mushrooms" name="mushrooms" <?php if($mushrooms == "Mushrooms"){echo "checked";} ?>>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="green_peppers" class="col-sm-2 col-form-label">Green Peppers</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Green Peppers" name="green_peppers" <?php if($green_peppers == "Green Peppers"){echo "checked";} ?>>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="onions" class="col-sm-2 col-form-label">Onions</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Onions" name="onions" <?php if($onions == "Onions"){echo "checked";} ?>>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="tomatoes" class="col-sm-2 col-form-label">Tomatoes</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Tomatoes" name="tomatoes" <?php if($tomatoes == "Tomatoes"){echo "checked";} ?>>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="jalapenos" class="col-sm-2 col-form-label">Jalapenos</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Jalapenos" name="jalapenos" <?php if($jalapenos == "Jalapenos"){echo "checked";} ?>>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="row">
                                    <label for="double_cheese" class="col-sm-2 col-form-label">Double Cheese</label>
                                    <div class="col-sm-10 d-flex justify-content-start align-items-center">
                                        <input type="checkbox" value="Double Cheese" name="double_cheese">
                                    </div>
                                </div>    
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <label for="double_sauce" class="col-sm-2 col-form-label">Double Sauce</label>
                                    <div class="col-sm-10 d-flex justify-content-start align-items-center">
                                        <input type="checkbox" value="Double Sauce" name="double_sauce">
                                    </div>
                                </div>    
                            </div>                            
                        </div>
                    </div>
                </div>       
            </div>
            <div class="d-flex justify-content-center align-items-center mt-2">
                <input type="submit" value="Next" style="width:200px;">
            </div>
            
        </form>
    </div>
    <?php
        }
        else
        {
        ?>
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
            <div class="row">
                <h1 class="display-1 text-center">Thank You!</h1>           
            </div>
            <div class="row">
                <p class="lead text-center fs-1">Your Order is on its way</p>
            </div>
        </div>
        <hr>

        <div class="container-fluid d-flex flex-column">
            <div class="row align-items-start justify-content-center">
                <h1 class="display-6 text-start">Customer Information</h1>           
            </div>
            <hr>
            <div class="row">
                <p class="lead col-6 fs-2">Name</p>
                <p class="lead col-6 fs-2"><?php echo($fname." ".$lname)?></p>
                <p class="lead col-6 fs-2">Address</p>
                <p class="lead col-6 fs-2"><?php echo($address)?></p>
                <p class="lead col-6 fs-2">Phone Number</p>
                <p class="lead col-6 fs-2"><?php echo($phone)?></p>
                <p class="lead col-6 fs-2">Delivery Time</p>
                <p class="lead col-6 fs-2"><?php if(!empty($delivery_time)){echo($delivery_time);} else{echo('Immediate');}?></p>
            </div>
        </div>
        <hr>
        <div class="container-fluid d-flex flex-column">
            <div class="row align-items-start justify-content-center">
                <h1 class="display-6 text-start">Your Order</h1>           
            </div>
            <hr>
            <div class="row">
                <p class="lead col-6 fs-2">Size</p>
                <p class="lead col-6 fs-2"><?php echo($size . " Inches")?></p>
                <p class="lead col-6 fs-2">Crust</p>
                <p class="lead col-6 fs-2"><?php echo($crusts)?></p>
                <p class="lead col-6 fs-2">Quantity</p>
                <p class="lead col-6 fs-2"><?php echo($quantity)?></p>
                <p class="lead col-6 fs-2">Special Instructions</p>
                <p class="lead col-6 fs-2"><?php if(!empty($special)){echo($special);} else{echo('None');}?></p>
            </div>
            <div class="row">
                <p class="lead col-6 fs-2">Pizza Toppings</p>
                <div class="col-6 d-flex justify-content-start align-items-center">
                    <p class="lead col-6 fs-2 "> <?php
                     $toppings = array($pepperoni, $ham, $pork, $sausage, $chicken, $mushrooms, $green_peppers, $onions, $tomatoes, $jalapenos, $double_cheese, $double_sauce);
                     $active_toppings = array();
                     foreach($toppings as $val){
                        if(!empty($val)){
                            array_push($active_toppings, $val);
                        }
                     }
                     for($i = 0; $i < count($active_toppings); $i++){
                        if($i == count($active_toppings) - 1){
                            echo("and " . $active_toppings[$i]);
                        }else{
                            echo($active_toppings[$i]. ", " );      
                        }
                        
                    }
                }
                ?> </p>
                </div>
            </div>
        </div>
</body>
</html>