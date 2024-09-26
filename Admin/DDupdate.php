<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
session_start();?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
        
               <?php           
$username = $_REQUEST['uname'];
            $c = mysqli_connect("localhost", "root", "", "dbphpprojechflower");
          

            if (!$c) {
                die("error in code");
            }
          

            if(isset($_POST['btnupdate']))
            {
            $username = $_POST["txtuname"];
            $name = $_POST["txtname"];
            $gender = $_POST["gender"];
            $dob = $_POST["dob"];
            $cno = $_POST["cno"];
            $email = $_POST["email"];
            $designation = $_POST["txtdesig"];
            $address= $_POST["txtadd"];
            $city = $_POST["city"];
            $salary = $_POST["txtsalary"];
            $status = $_POST["status"];
            $pass = $_POST["txtpass"];
                     
            
             $qu = "update tbldeliveryboy_detail set name='$name',gender='$gender',dob='$dob',cno=$cno,email='$email',designation='$designation',address='$address',city='$city',salary=$salary,status='$status',password='$pass' where uname='$username'";
            $quee=mysqli_query($c,$qu);
            

            
            
            if (!$quee) {

            echo "<script>
               alert('Not update');
               
           </script>";
        }
        else {

             echo "<script>
                   alert('update successfully');
                   window.location.href = 'DDview.php'; 
           </script>";
        }
            }
            
          
                 $u="select * from tbldeliveryboy_Detail where uname='$username';";
                 $v=mysqli_query($c,$u);
             
           
             while ($r = mysqli_fetch_assoc($v)) {
                
                
            $username = $r["uname"];
            
            $name = $r["name"];
            $g = $r["gender"];
            $dob = $r["dob"];
            $cno = $r["cno"];
            $email = $r["email"];
            $designation = $r["designation"];
            $address= $r["address"];
            $city = $r["city"];
            $salary =$r["salary"];
            $status = $r["status"];
            $pass =$r["password"];
            
       

             }
             
            ?>
        <div class="tables">
               <h1>Edit Deliveryboy</h1>
         
        <form method="post">
          <table>
              
               
               
                <tr>
                    <td>
                        <label>Username:</label> 
                    </td>
                    <td><input type="text" name="txtuname"  pattern="^[a-z A-Z 0-9]*$" title="you can enter the alpahabet and numbers" required="" value="<?php echo $username;  ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>name:</label>
                    </td>
                    <td><input type="text" name="txtname" title=" enter the alpahabets only" pattern="^[a-z A-Z]*$" required="" placeholder="enter name" value="<?php echo $name;  ?>"</td>
                </tr>
                <tr>
                    <td>
                         <label>Gender:</label>
                    </td>
                     <td><input type="radio" name="gender" required="" value="Male"<?php if($g=='Male') echo 'checked';  ?>>Male
                        <input type="radio" name="gender" required="" value="Female"<?php if($g=='Female') echo 'checked'; ?>>Female
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Date-of-Birth:</label> 
                    </td>
                    <td><input type="date" name="dob" required="" value="<?php echo $dob;  ?>"</td>
                </tr>

                <tr>
                    <td>
                         <label>Contact no:</label>
                    </td>
                    <td><input type="text" name="cno" pattern="^[0-9]*$"  required="" title=" enter the numbers only" value="<?php echo $cno;  ?>"</td>
                </tr>

                <tr>
                    <td>
                         <label>Email_id:</label>
                    </td>
                    <td><input type="email" name="email" required="" placeholder="enter your email" value="<?php echo $email;  ?>"</td>
                </tr>

                <tr>
                    <td>
                         <label>Designation:</label>
                    </td>
                    <td><input type="text"  pattern="^[a-z A-Z]*$" title=" enter the alpahabets only" name="txtdesig" required="" value="<?php echo $designation;  ?>"</td>
                </tr>
                <tr>
                    <td>
                         <label>Address:</label>
                    </td>
                    <td><input type="text"  name="txtadd" required="" value="<?php echo $address;  ?>"</td>
                </tr>

                <tr>
                    <td>
                        <label>City:</label> 
                    </td>
                    <td><input type="text" pattern="^[a-z A-Z]*$" title=" enter the alpahabets only" name="city" required="" value="surat" value="<?php echo $city;  ?>"</td>
                </tr>



                <tr>
                    <td>
                        <label>Salary:</label> 
                    </td>
                    <td><input type="text" name="txtsalary" pattern="^[0-9]*$" value="<?php echo $salary;  ?>"</td>
                </tr>

                <tr>
                    <td>
                        <label>Status:</label> 
                    </td>
                    <td><input type="radio" name="status" value="active"<?php if($status=='active') echo 'checked';  ?>>Active
                        <input type="radio" name="status" value="inactive"<?php if($status=='inactive') echo 'checked'; ?>>Inactive
                    </td>
                </tr>

<!--                <tr>
                    <td>
                        Password:
                    </td>
                    <td><input type="password" name="txtpass" value="<?php // echo $pass;  ?>"</td>
                </tr>-->    




                <tr>
                    <td colspan="2"><input type="submit" name="btnupdate" value="update" </td>
            
                </tr>
            </table>
              
        </form> 
    </div>

    </body>
</html>
