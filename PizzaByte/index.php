

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

    <p class="container-fluid fs-3">Required Values are marked by an asterisk(*)</p>

    <div class="container-fluid d-flex flex-column" style="height:70vh;">
        <form action="order.php" method="post" role="form">
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
                                    <input class="my-2" type="text" name="fname" placeholder="First Name" style="width: 100%;">
                                    <input class="mb-2" type="text" name="lname" placeholder="Last Name" style="width: 100%;">
                                    <textarea class="form-control mb-2 border border-1 border-secondary border-none rounded-0" name="address" rows="3" placeholder="Address" style="width: 100%;"></textarea>
                                    <input class="mb-2" type="text" name="phone" placeholder="302-547-3782" style="width: 100%;">
                                    <input class="mb-2" type="time" name="delivery_time" style="width: 100%;">
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
                                    <div class="col-4 d-flex justify-content-center align-items-center"><input type="radio" name="size" value="10" checked></div>
                                    <div class="col-4 d-flex justify-content-center align-items-center"><input type="radio" name="size" value="12"></div>
                                    <div class="col-4 d-flex justify-content-center align-items-center"><input type="radio" name="size" value="14"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-3">
                                <p class="">Choose your Crust</p>       
                            </div>
                            <div class="col-9">
                                <select name="crusts">
                                    <option value="Thick">Thick</option>
                                    <option value="Thin">Thin</option>
                                    <option value="Stuffed">Stuffed</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-3">
                                <p class="mb-0">Quantity</p>       
                            </div>
                            <div class="col-9">
                                <input type="number" name="quantity" min="1" max="10" value="1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p class="">Special Instructions</p>       
                            </div>
                            <div class="col-9">
                                <textarea class="form-control mb-2 border border-1 border-secondary border-none rounded-0" name="special" rows="3" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 border-end border-top">
                                <p class="text-center">Meat Toppings</p>
                                <div class="row">
                                    <label for="pepperoni" class="col-sm-2 col-form-label">Pepperoni</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Pepperoni" name="pepperoni">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="ham" class="col-sm-2 col-form-label">Ham</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Ham" name="ham">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="pork" class="col-sm-2 col-form-label">Pork</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Pork" name="pork">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="sausage" class="col-sm-2 col-form-label">Sausage</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Sausage" name="sausage">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="chicken" class="col-sm-2 col-form-label">Chicken</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Chicken" name="chicken">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 border-start border-top">
                            <p class="text-center">Vegetable Toppings</p>
                                <div class="row">
                                    <label for="mushrooms" class="col-sm-2 col-form-label">Mushrooms</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Mushrooms" name="mushrooms">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="green_peppers" class="col-sm-2 col-form-label">Green Peppers</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Green Peppers" name="green_peppers">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="onions" class="col-sm-2 col-form-label">Onions</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Onions" name="onions">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="tomatoes" class="col-sm-2 col-form-label">Tomatoes</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Tomatoes" name="tomatoes">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="jalapenos" class="col-sm-2 col-form-label">Jalapenos</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                    <input type="checkbox" value="Jalapenos" name="jalapenos">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="row">
                                    <label for="double_cheese" class="col-4 col-form-label">Double Cheese</label>
                                    <div class="col-8 d-flex justify-content-start align-items-center">
                                        <input type="checkbox" value="Double Cheese" name="double_cheese">
                                    </div>
                                </div>    
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <label for="double_sauce" class="col-4 col-form-label">Double Sauce</label>
                                    <div class="col-8 d-flex justify-content-start align-items-center">
                                        <input type="checkbox" value="Double Sauce" name="double_sauce">
                                    </div>
                                </div>    
                            </div>                            
                        </div>
                    </div>
                </div>       
            </div>
            <div class="d-flex justify-content-center align-items-center my-3">
                <input type="submit" value="Next" style="width:200px;">
            </div>
            
        </form>
    </div>


</body>
</html>