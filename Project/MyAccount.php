<?php 

session_start();

if (isset($_SESSION['UniqueID']) && isset($_SESSION['Username']) && isset($_SESSION['Address']) && isset($_SESSION['FirstName']) && isset($_SESSION['LastName'])) {

 ?>

 <!DOCTYPE html>

<html>

<head>

    <title>My Account</title>

    <link rel="stylesheet" type="text/css" href="Style2.css">

</head>


</div><div id="mainbodyareabody" class="overalllayoutalignblock">
                <h2 class="breadcrumbs overalllayoutaligntext">
                    <a href="home.php">Main Page</a>
                    →
                    <span class="currentpagecrumb">My Account</span>
                </h2>
                
                <div id="centralarea">
                    <div class="userinfosubsection">
                        
                
                        <form>
                        <div class="userinfotable inputcontainer">
                            <div>
                                <label class="columnname">First Name:</label>
                                <input name="name" type="text" size="30" value=<?php echo $_SESSION['FirstName']; ?> readonly="readonly">
                            </div>

                            <div>
                                <label class="columnname">Last Name:</label>
                                <input name="name" type="text" size="30" value=<?php echo $_SESSION['LastName']; ?> readonly="readonly">
                            </div>
                
                            <div style="display: none">
                                <label class="columnname">Gender:</label>
                                <input name="school" type="text" size="30" value="unknown" readonly="readonly">
                            </div>
                
                            <div>
                                <label class="columnname">Email:</label>
                                <input name="email" type="text" size="30" value=<?php echo $_SESSION['Address']; ?> readonly="readonly">
                                
                                
                            </div>
                
                            <div>
                                <label class="columnname">Username:</label>
                                <input name="username" type="text" size="30" value=<?php echo $_SESSION['Username']; ?> readonly="readonly">
                                
                                
                            </div>
                
                            <div>
                                <label class="columnname">Password:</label>
                                <input name="password" type="text" size="30" value="**********" readonly="readonly">
                            </div>

                            <div>
                                <label class="columnname">UniqueID:</label>
                                <input name="password" type="text" size="30" value=<?php echo $_SESSION['UniqueID']; ?> readonly="readonly">
                            </div>
                
                            <div>
                                <label class="columnname">School/Org:</label>
                                <input name="school" type="text" size="30" value="Miami University" readonly="readonly">
                            </div>
                
                            <div>
                                <label class="columnname">Type:</label>
                                <input name="name" type="text" size="30" value="Student" readonly="readonly">
                                
                            </div>
            </form>
                        
                
                
                
                
                

<?php

 }else{

header("Location: index.php");

exit();

}

?>