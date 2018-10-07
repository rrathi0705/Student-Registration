<?php   
    session_start();
        $a=rand(1,50);
        $b=rand(1,50);
    $realanswer=0;
$realanswer=$a+$b;
$_SESSION["answer"]=$realanswer;

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/stylesignup.css">
        
    </head>
    
    <body class="body">
            <div class="wrapper">
                <div class="head">
                    <h1 style="color: blue ;text-align:center;">Sardar Vallabhbhai  National  Institute Of Technology</h1>
                     <img src="Logo.jpg" width="120px;">
                    <h1 style="margin-top: 35px ;text-align: center;" >Student Registration System</h1>
                   
                </div>
                <fieldset class="fieldsetalign"> 
                    <legend>SIGN UP</legend>
                <form action="includes/signup.inc.php" method="POST">
                    <table class="tableset">
                        <thead>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>                           
                            <tr>
                                <td><label for="fname">First Name</label><span><d style="color:red; margin-left:3px;">*</d></span></td>
                                <td><?php 
                                    if(isset($_GET['fname'])){
                                    $fname = $_GET['fname'];
                                    echo '<input type="text" id="fname" name="fname" placeholder="Firstname" value="'.$fname.'">';
                                    }
                                    else{
            
                                        echo '<input type="text" id="fname" name="fname" placeholder="Firstname">';
                                    }
                                    ?>
                               </td>
                                <td><?php
                                    if(isset($_GET['signup'])){
                                        $signupcheck = $_GET['signup'];
                                        if($signupcheck=="firstname_empty"){
                                            echo "<p class='required'>Firstname Required</p>";
                                        }
                                    
                                    }
                                    
                                    ?></td>
                            </tr>
                            <tr>
                                <td><label for="lname">Last Name</label><span><d style="color:red; margin-left:3px;">*</d></span></td>
                                  <td><?php 
                                    if(isset($_GET['lname'])){
                                    $lname = $_GET['lname'];
                                    echo '<input type="text" id="lname" name="lname" placeholder="Lastname" value="'.$lname.'">';
                                    }
                                    else{
                                        echo ' <input type="text" id="lname" name="lname" placeholder="Lastname">';
                                    }
                                    ?>
                               </td>
                                <td><?php
                                    if(isset($_GET['signup'])){
                                        $signupcheck = $_GET['signup'];
                                        if($signupcheck=="lastname_empty"){
                                            echo "<p class='required'>Lastname Required</p>";
                                        }
                                    }
                                    
                                    ?></td>
                            <tr>
                                <td><label for="adno">Admission Number</label><span><d style="color:red; margin-left:3px;">*</d></span></td>
                                  <td><?php 
                                    if(isset($_GET['adno'])){
                                    $uid = $_GET['adno'];
                                    echo '<input type="text" id="adno" name="adno" placeholder="Admission Number" value="'.$adno.'">';
                                    }
                                    else{
                                        echo ' <input type="text" id="adno" name="adno" placeholder="Admission Number">';
                                    }
                                    ?>
                               </td>
                                <td><?php
                                    if(isset($_GET['signup'])){
                                        $signupcheck = $_GET['signup'];
                                        if($signupcheck=="admissionNumber_empty"){
                                            echo "<p class='required'>Admission Number Required</p>";
                                        }
                                    
                                    }
                                    
                                    ?></td>
                            </tr>

                            <tr>
                                <td><label for="email">Email-ID</label><span><d style="color:red; margin-left:3px;">*</d></span></td>
                                  <td><?php 
                                    if(isset($_GET['email'])){
                                    $email = $_GET['email'];
                                    echo '<input type="text" id="email" name="email" placeholder="Email-ID" value="'.$email.'">';
                                    }
                                    else{
                                        echo ' <input type="text" id="email" name="email" placeholder="Email-ID">';
                                    }
                                    ?>
                               </td>
                                <td><?php
                                    if(isset($_GET['signup'])){
                                        $signupcheck = $_GET['signup'];
                                        if($signupcheck=="email_empty"){
                                            echo "<p class='required'>Email-ID Required</p>";
                                        }
                                    
                                    }
                                    
                                    ?></td>
                            </tr>
                            <tr>
                                <td><label for="branch">Branch</label><span><d style="color:red; margin-left:3px;">*</d></span></td>
                                  <td><?php 
                                        echo '
                                       <div class="select">
                                        <select name="branch" id="branch">
                                            <option value="Computer Engineering">Computer Engineering</option>
                                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                                            <option value="Electronics Engineering">Electronics Engineering</option>
                                            <option value="Electrical Engineering">Electrical Engineering</option>
                                            <option value="Civil Engineering">Civil Engineering</option>
                                            <option value="Chemical Engineering">Chemical Engineering</option>
                                        </select></div>';
                                    ?>
                               </td>
                                <td><?php
                                    if(isset($_GET['signup'])){
                                        $signupcheck = $_GET['signup'];
                                        if($signupcheck=="admissionNumber_empty"){
                                            echo "<p class='required'>Admission Number Required</p>";
                                        }
                                    
                                    }
                                    
                                    ?></td>
                            </tr>
                            <tr>
                                <td><label for="pwd">Password</label><span><d style="color:red; margin-left:3px;">*</d></span></td>
                                  <td><?php 
                                    if(isset($_GET['pwd'])){
                                    $fname = $_GET['pwd'];
                                    echo '<input type="text" id="pwd" name="pwd" placeholder="Password" value="'.$pwd.'">';
                                    }
                                    else{
                                        echo ' <input type="password" id="pwd" name="pwd" placeholder="Password">';
                                    }
                                    ?>
                               </td>
                                <td><?php
                                    if(isset($_GET['signup'])){
                                        $signupcheck = $_GET['signup'];
                                        if($signupcheck=="password_empty"){
                                            echo "<p class='required' >Password Required</p>";
                                        }
                                    
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                                <td><label for="secCheck"><?php echo $a. " + " .$b ;?></label><span><d style="color:red; margin-left:3px;">*</d></span></td>
                                <td> <?php 
                                    if(isset($_GET['ans'])){
                                    $ans = $_GET['ans'];
                                    echo '<input type="text" id="secCheck" name="ans" placeholder="Answer" value="'.$ans.'">';
                                    }
                                    else{
                                        echo ' <input type="text" id="secCheck" name="ans" placeholder="Answer">';
                                    }
                                    ?>
                               </td>
                                <td><?php
                                    if(isset($_GET['signup'])){
                                        $signupcheck = $_GET['signup'];
                                        if($signupcheck=="answer_empty"){
                                            echo "<p class='required'>Answer Required</p>";
                                        }
                                    
                                    }
                                    
                                    ?></td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="submit" name="submit" style="width:100px;">Submit</button></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                </fieldset>
        </div>
    
    </body>
</html>