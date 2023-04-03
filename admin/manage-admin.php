<?php
include('breakdowns/menu.php')
?>
    <!-- main content section starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>manage-admin</h1>
            <!-- button to add admin -->
            <php
                if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                }
            ?>
            
            <br><br>
            <a href="add-admin.php" class="btn-primary">Add administrator</a>
            <br><br>
        <table class="tbl-full">
            <tr>
                <th>Serial number</th>
                <th>Full name</th>
                <th>User name</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td> 1 </td>
                <td>Malik Mumali</td>
                <td>Monk</td>
                <td>
                   <a href="#" class="btn-secondary"> Update Admin</a>
                  <a href="#" class="btn-danger">  Delete Admin</a>
                </td>
            </tr>
            <tr>
                <td> 1 </td>
                <td>Malik Mumali</td>
                <td>Monk</td>
                <td>
                <a href="#" class="btn-secondary"> Update Admin</a>
                  <a href="#" class="btn-danger">  Delete Admin</a>
                </td>
            </tr>
            <tr>
                <td> 1 </td>
                <td>Malik Mumali</td>
                <td>Monk</td>
                <td>
                <a href="#" class="btn-secondary"> Update Admin</a>
                  <a href="#" class="btn-danger">  Delete Admin</a>
                </td>
            </tr>
        </table>    
        </div>   
    </div>
    
    <!-- main content section ends -->

<?php
include('breakdowns/footer.php')
?> 