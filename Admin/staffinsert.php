<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flower Shop Admin Panel</title>
        <!--<link rel="stylesheet" href="styles.css">-->
        <style>
           /* User links */
            .user-links {
                display: flex;
                float: right;
                padding: 0px 20px 0px 20px;
            }

            .user-links a {
                text-decoration: none;
                color: blue;
                font-size: 20px;
                margin-left: 20px;

            }

            .welcome-section {
                text-align: center;
                padding:20px 0px 40px 0px;

                background-color: #f7f7f7;
            }

            .welcome-section h1 {
                font-size: 36px;
                color: #333;
                margin-bottom: 10px;
                margin-right: 150px;
            }

            .welcome-section p {
                font-size: 18px;
                color: #666;
                margin-right: 150px;
            }
            
            .ilogo{
                float:left;
                width:250px;
                padding: 10px 20px 10px 20px;
            }

            .tables form {
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                max-width: 600px;
                margin: 20px auto;
                background-color: #fff;
            }

            .tables table {
                width: 100%;
                border-collapse: collapse;
            }

            .tables td, th {
               
                padding: 10px;
                text-align: left;
            }

            .tables input[type="text"],
            input[type="email"],
            input[type="tel"],
            input[type="date"],
            input[type="number"],
            textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                background-color: #f4f4f9;
              
            }

            .tables input[type="submit"] {
                width: 100px;
                padding: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                display: block;
                margin: 20px auto;
                background-color: black;
                color: #fff;
            }
            .tables label{
                  font-weight: bold;
            }
            .tables input[type="submit"]:hover {
                background-color: #0056b3;
            }

          
            .radio-group {
                margin-bottom: 10px;
            }

            .radio-group label {
                margin-right: 10px;
            }


            .tables h1 {
                text-align: center;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>

        <div class="ilogo">


            <a href="../index.php">
                <img src="../cdn/shop/files/0fc34013-64d2-4011-be96-996a701b5f5e.jpg" alt="Phuler - Flower Shop Shopify Theme">
            </a>

        </div>
        <section class="welcome-section">
            <h1>Manage Worker</h1>
            <p>view,edit and add the workers of the shop</p>

            <div class="user-links">
                <a href="#">Profile</a>
                <a href="#">Logout</a>
            </div>
        </section>
        <?php
        include 'header.php';
        ?>
        <h1 style="text-align: center;margin-top: 70px; margin-bottom: 40px;">Registr Worker</h1>
        <div class="tables">
        <form method="post" enctype="multipart/form-data">
            <table class="space" align="center">
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="txtname" pattern="[A-Za-z]+" placeholder="Name" title="Enter capital or small alphabets only" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Gender</label>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Date Of Birth:</label>
                    </td>
                    <td>
                        <input type="date" name="txtdob" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Contect no:</label>
                    </td>
                    <td>
                        <input type="tel" name="txtcontectno" placeholder="Mobile No" pattern="[0-9]{10}" maxlength="10" title="Must contain number" required>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email id:</label>
                    </td>
                    <td>
                        <input type="email" name="txtemail"  placeholder="Email"  required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Designation:</label>
                    </td>
                    <td>
                        <input type="text" name="txtdesignation" placeholder="Designation" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Address:</label>
                    </td>
                    <td>
                        <textarea rows="3" name="txtaddress" cols="20" placeholder="Address" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>City:</label>
                    </td>
                    <td><input type="text" name="txtcity" value="Surat" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Salary:</label>
                    </td>
                    <td><input type="number" name="txtsalary" placeholder="Salary" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Status:</label>
                    </td>
                    <td>
                        <input type="radio" name="status" value="active">Active
                        <input type="radio" name="status" value="inactive">Inactive
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" value="Submit" name="btnsubmit" class="btnsub">
                    </td>
                </tr>
            </table>
        </form>

        </div>


        <?php
        if (isset($_POST["btnsubmit"])) {
            $name = $_POST["txtname"];
            $gender = $_POST["gender"];
            $dob = $_POST["txtdob"];
            $cno = $_POST["txtcontectno"];
            $email = $_POST["txtemail"];
            $designation = $_POST["txtdesignation"];
            $address = $_POST["txtaddress"];
            $city = $_POST["txtcity"];
            $salary = $_POST["txtsalary"];
            $status = $_POST["status"];

           
            $con = mysqli_connect("localhost", "root", "", "dbphpprojechflower");
            if (!$con) {
                die("Connection unsuccessful: " . mysqli_connect_error());
            }
            $query = "INSERT INTO tblstaff_detail(name,gender,dob,cno,email_id,designation,address,city,salary,status) VALUES ('$name','$gender','$dob','$cno','$email','$designation','$address','$city','$salary','$status')";
            $q = mysqli_query($con, $query);
            if (!$q) {
                echo "<script>alert('registered unsuccessfull !!!');</script>";

                exit();
            } else {
                echo "<script>alert('registered successfull !!!');</script>";
                echo "<script>location.replace('staffview.php')</script>";
            }
        }
        ?>
    </body>
</html>
