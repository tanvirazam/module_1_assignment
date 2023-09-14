
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
}

.container {
    margin: 50px auto;
    width: 300px;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

input[type="number"], select {
    width: 99%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #ffd934 !important;
    color: #0d0d0d !important;
    border: none;
    font-size: 16px !important;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}

#result {
    margin-top: 20px;
    font-size: 18px;
}
</style>
</head>
<body>
    <div class="container">
        <h2>Comparison Number Check </h2>
        <form method="POST" action="">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <button type="Celsius To Fahrenheit">Calculate</button>
        </form>
        <div id="result">
           <?php
           
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $num1=$_POST["num1"];
                $num2=$_POST["num2"];
                

                $result=$num1 > $num2?"{$num1} is grather than {$num2}":"{$num2} is grather than {$num1}";

                echo "Result :".$result;

                
               
            }
           ?>

        </div>
</body>
</html>