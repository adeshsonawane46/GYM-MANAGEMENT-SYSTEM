<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width", initial-scale="1.0">
        <title>FitZone Fitness Admin</title>
        <!-- css file connecter-->
        <link rel="stylesheet" href="adminCSS.css">

        <!-- fonts connecter-->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
            </style>

            <!-- fontawesome icons connecter-->
        <script src="https://kit.fontawesome.com/70d0595457.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <header class="header">
            <div class="logo">
                <a href="">FITZONE FITNESS | ADMINISTRATION</a>
                <div class="search-box">
                    <input type="text" placeholder="search here">
                    <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                </div>

            </div>

            <div class="header-icons">
                <i class="fas fa-bell"></i>
                <div class="account">
                    <img src="../images1/adminProPic.jpg" alt="User Picture">
                    <h4>Admin</h4>
                </div>
            </div>
        </header>
        <div class="container">
            <nav>
                <div class="side-navbar">
                    <span>Main Menu</span>
                    <a href="adminHomepg.php" class="active">Staff</a>
                    <a href="customerpg.php">Customers</a>
                    <a href="adminQueries.php">Queries</a>
                    <a href="adminAppointments.php">Appoinments</a>
                    <a href="programs.php">Program Registrations</a>

                    <div class="links">
                        <span>Quick Links</span>
                        <a href="../Home.html">Go To FFC Website</a>
                        <a href="loginAdmin.html">Logout</a>
                    </div>
                </div>
            </nav>

            <div class="main-body">
                <h2>DASHBOARD</h2>
                <div class="display">
                    <h1>Welcome to FitZone Administration</h1>
                    <span>Administration and Website Management</span>
                    

                </div>

                <div class="display-tbl">
                    <div class="list">
                        <div class="row">
                            <h4>Staff Details</h4>
                            <a href="AddStaff.html">Add From Here</a>
                        </div>


                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Post</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                <tbody>
                                    <?php
                                    $server = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $databse = "fitzone_gym";
                    
                                    //creating connection
                                    $conn = new mysqli ($server,$username,$password,$databse);
                    
                                    //checking connection
                                    if($conn->connect_error){
                                        die("Connection Failed: " .$conn->connect_error);
                                    }

                                    //read all rows from the db
                                    $sql = "SELECT * FROM staff";
                                    $result = $conn->query($sql);

                                    if (!$result){
                                    die("Invalid query: " .$conn->connect_error);
                                    }
                                    ?>

                                    <?php
                                    //read data of each row
                                    while($row = $result->fetch_assoc()){
                                    ?>
                                        <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['usernameStaff']; ?></td>
                                        <td><?php echo $row['passwordStaff']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['phone_num']; ?></td>
                                        <td><?php echo $row['position']; ?></td>
                                        <td><a href="update_staff.php?id=<?php echo $row['id']; ?>" class="update-btn">Update</a></td>
                                        <td><a href="delete_staff.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');" 
                                        class='delete-btn'>Delete</a></td>
                                                
                                                

                                            </tr>
                                    <?php
                                    }

                                    ?>
                                </tbody>
                            </thead>
                        </table>
                    </div>

                </div>

            </div>

        </div>
        
        
    


    </body>
</html>



        

