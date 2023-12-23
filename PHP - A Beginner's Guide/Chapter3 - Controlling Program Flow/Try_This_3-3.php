<html>

<head>
    <title>Project 3-3: Factorial Calculator</title>
</head>

<body>

<h2>Project 3-3:Factorial Calculator</h2>

<?php

if(!isset($_POST['submit'])){

?>

    <form method="post" action="Try_This_3-3.php">
        Enter a number: <br>
        <input type="text" name="num" size="3" />
        <p/>
        <input type="submit" name="submit" value="Submit" />
    </form>

<?php

} else{

    $num = $_POST['num'];

    if ($num <= 0){
        echo 'ERROR: Please enter a number greater than 0';
        exit();
    }

}


?>

</body>

</html>