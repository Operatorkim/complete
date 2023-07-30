<!DOCTYPE html>
<html>
<head>
    <title>medical</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="form.js"></script>                
</head>
<body>
    
    
    <h1>Login</h1>

    <div class="Register">
    
    <p><i style="color: blue">Students interested in attending the trip are required to fill in their details <em>below:</em></p></i>

    <form action="connect.php" method="post" onsubmit="validateForm()">
    
        <div class="form-control">


        <div class="form-control">
            <label>Student ID</label>
            <input type="number" name="ID" id="studentid">
            <div id="result3" class="result"></div>
        </div>

         

        <div class="form-control">
            <label>Student Email</label>
            <input type="text" name=" Email" id="email">
            <div id="result4" class="result"></div>
        </div>
        
        

       
        <div class="form-control">
            <input type="submit" name="Register" value="Login">
        </div>
        <br>
        <div>Don't have an account?<a href="register.php">Register</a></div>
    </form>
