<html>
    <head>
                          
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

            /* Welcome section */
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

            form button {
                align-content: center;
                background-color: black;
                color: #fff;
                border: none;
                margin-left: 30px;
                border-radius: 4px;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            form button:hover {
                background-color: #0056b3;
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
            input[type="password"],
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
            /* General reset */
                    </style>
    </head>
    <body>
        <div class="ilogo">


            <a href="../index.php">
                <img src="../cdn/shop/files/0fc34013-64d2-4011-be96-996a701b5f5e.jpg" alt="Phuler - Flower Shop Shopify Theme">
            </a>

        </div>
        <section class="welcome-section">
            <h1>Manage Delivery Boy</h1>
            <p>view,edit and add the delivery boy of the shop</p>
            <div class="user-links">
                <a href="#">Profile</a>
                <a href="#">Logout</a>
            </div>
        </section>
         <?php
        include 'header.php';
        ?>
        <br>
        <br>
       
        <div class="tables">
             <h1>Delivery Boy register</h1>
            <form method="POST">
                <table>

                    <tr>
                        <td><label for="username">username:</label></td>
                        <td><input type="text" name="txtuname" pattern="^[a-z A-Z 0-9]*$" title="you can enter the alpahabet and numbers"  required="" placeholder="enter username"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="name">name:</label>
                        </td>
                        <td><input type="text" name="txtname" title=" enter the alpahabets only"  pattern="^[a-z A-Z]*$" required="" placeholder="enter name"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="gender">Gender:</label>
                        </td>
                        <td><input type="radio" name="gender" value="Male" required="">Male <input type="radio" name="gender" value="Female" required="">Female </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dob">Date-of-Birth:</label> 
                        </td>
                        <td><input type="date" name="dob" required=""></td>
                    </tr>

                    <tr>
                        <td>
                            <label for="cno"> Contact no:</label>
                        </td>
                        <td><input type="text" name="cno" pattern="^[0-9]*$" title=" enter the numbers only"  maxlength="10" placeholder="enter contact no" required=""></td>
                    </tr>

                    <tr>
                        <td>
                            <label for="Email_id:">Email_id:</label>
                        </td>
                        <td><input type="email" name="email" placeholder="enter your email" required=""></td>
                    </tr>

                    <tr>
                        <td>
                            <label for="designation">Designation:</label>
                        </td>
                        <td><input type="text" name="txtdesig" title=" enter the alpahabets only" pattern="^[a-z A-Z]*$" required="" placeholder="enter designation"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="address">Address:</label> 
                        </td>
                        <td><input type="text" name="txtadd" required="" placeholder="enter address"></td>
                    </tr>

                    <tr>
                        <td>
                            <label for="City:">City:</label>
                        </td>
                        <td><input type="text" name="city" value="surat" pattern="^[a-z]*$" required=""></td>
                    </tr>

<!--                <tr>
 <td>
    Photo:
 </td>
 <td><input type="date" name="dob"</td>
</tr>-->

                    <tr>
                        <td>
                            <label for="salary">salary:</label>
                        </td>
                        <td><input type="text" name="txtsalary" required="" placeholder="enter salary"></td>
                    </tr>

                    <tr>
                        <td>
                            <label>Status:</label>
                        </td>
                        <td><input type="radio" name="status"  title=" enter the alpahabets only" pattern="^[a-z]*$" required="" value="active">Active <input type="radio" name="status" value="inactive" required="">Inactive</td>
                    </tr>

                    <tr>
                        <td><label>Password:</label></td>
                        <td><input type="password" pattern="^(?=.[a-z]|.\d).{1,8}$" name="txtpass" required="" placeholder="enter password"></td>
                    </tr>

                    <tr>
                        <td colspan="2"><input type="submit" name="btninsert" value="insert"> </td>

                    </tr>

                </table>
                <?php
                $c = mysqli_connect("localhost", "root", "", "dbphpprojechflower");
                if (!$c) {
                    die('error in code');
                }
                if (isset($_POST['btninsert'])) {
                    $username = $_POST["txtuname"];
                    $name = $_POST["txtname"];
                    $gender = $_POST["gender"];
                    $dob = $_POST["dob"];
                    $cno = $_POST["cno"];
                    $email = $_POST["email"];
                    $designation = $_POST["txtdesig"];
                    $address = $_POST["txtadd"];
                    $city = $_POST["city"];
//            $photo=$_POST["photo"] ;
                    $salary = $_POST["txtsalary"];
                    $status = $_POST["status"];
                    $pass = $_POST["txtpass"];
                    $password = password_hash($pass, PASSWORD_DEFAULT);
                   
                    

//           $qu= "insert into tbldeliveryboy_Detail(uname,name,gender,dob,cno,email_id,designation,address,city,salary,status,password) values('$username','$name','$gender','$dob',$cno,'$email','$designation','$address','$city',$salary,'$status','$password')";
                    $qu = "insert into tbldeliveryboy_detail(uname,name,gender,dob,cno,email,designation,address,city,salary,status,password) values('$username','$name','$gender','$dob',$cno,'$email','$designation','$address','$city',$salary,'$status','$password')";
                    $q = mysqli_query($c, $qu);
                    if (!$q) {
                        echo "<script> alert('not inserted'); </script>";
                    } else {

                        echo "<script>
                   alert('Inserted successfully');
                   window.location.href = 'DDview.php'; 
           </script>";
                    }
                }
                ?>   

            </form>
        </div>
    </body>
</html>

