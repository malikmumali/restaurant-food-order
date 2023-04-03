<?php
include('breakdowns/menu.php')
?>
<div class="main-content">
        <div class="wrapper">
            <h1>add administrator</h1>
        <div>
        <br><br>
        <form action="#" method="POST">
            <table class = "tbl-30">
                <tr>
                    <td> Full name: </td>
                    <td> <input type="text" name = "full_name"placeholder = "enter name"></td>
                
                </tr>
                <tr>
                    <td> username name: </td>
                    <td> <input type="text" name = "username" placeholder = "enter username"></td>
                
                </tr>
                <tr>
                    <td> password: </td>
                    <td> <input type="password"  name = "password" placeholder = "enter password"></td>
                
                </tr>

                <tr >
                    <td colspan = "2">
                        <input type="submit" name = "submit"  value="Add Adminstrator" class = "btn-secondary">

                        <!-- <input type="submit" name="appetizer_button" value="Appetizers & Soup" class = "btn-secondary" > -->
                    </td>

                </tr>
            </table>
        </form>
<div>
<?php
include('breakdowns/footer.php');
?>
<?php
// processing the form value and saving it in the db
// if the button is clicked check

if (isset($_POST['submit'])) {
    // Your code that you want to execute
    // echo "clicked";
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // sql to save the data into database
    $sql = "INSERT INTO tbl_admin SET full_name='$full_name', 
    user_name='$username',
    password='$password'";

    // query to save data to database
    // $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error); //database connection
    // $db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_error());//selecting database.

// executing query and inserting data to the database
    $res = mysqli_query($conn, $sql) or die(mysqli_error());
// check whether the query is excecuted

if($res === True)
{
    // Data inserted
    // echo "data inserted";
    // session variable to display message
    $_SESSION['add'] = "Admin Added Successfully";
    // redirect page
    header("location:admin/manage-admin.php");
}
}
else{
    // failed
    // echo "failed";
    // session variable to display message
    $_SESSION['add'] = "Failed to Add administrator";
    // redirect page
    header("location:admin/add-admin.php");
}



?>
