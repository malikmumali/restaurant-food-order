<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="issettest.php" method="post">
        <table>
        <tr>
        <td>
        <input type="submit" name="appetizer_button" value="Appetizers & Soup">
        </td>
        </tr> 
        </table>
</form>
<?php
    if (isset($_POST['appetizer_button'])) {
        // Your code that you want to execute
        echo "clicked";
    }
    else{
        echo "not clicked";
    }
?>
</body>
</html>
