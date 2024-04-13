<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dynamic</title>
</head>
<body>
    <form method="POST">

Enter your Fav Color : <input type="text" name="favcolor">
<input type="submit" name="submit" value="CheckNow">
   
    </form>
    <p>
        My favcolor is  <?php
if(isset($_POST['submit'])){
    $favcolor = $_POST['favcolor'];
    echo $favcolor;
}

?>
    </p>
    

 


</body>
</html>
