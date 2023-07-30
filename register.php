


<!DOCTYPE html>
<html>
<head>
    <title>medical</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="form.js"></script>                
</head>
<body>
    
    
    <h1>Signup</h1>

    <div class="Register">
    
    <p><i style="color: blue">Students interested in attending the trip are required to fill in their details <em>below:</em></p></i>

    <form action="connect.php" method="post" onsubmit="validateForm()">
    
        <div class="form-control">

            <label>First Name</label>
            <input type="text" name="FirstName" id="firstname">
            <div id="result1" class="result"></div>
        </div>

        <div class="form-control">
            <label>Last Name</label>
            <input type="text" name="LastName" id="lastname">
            <div id="result2" class="result"></div>
        </div>

        <div class="form-control">
            <label>Student ID</label>
            <input type="number" name="ID" id="studentid">
            <div id="result3" class="result"></div>
        </div>

         <div class="form-control">
            <label>Age</label>
            <input type="number" name="Age" id="Age" placeholder="should be above 18">
            <div id="result4" class="result"></div>
        </div>

        <div class="form-control">
            <label>Student Email</label>
            <input type="text" name=" Email" id="email">
            <div id="result4" class="result"></div>
        </div>
        
        

        <label>Account Type</label>
        <select>
            <option>----select account---</option>
            <option>Student</option>
            <option>Guardian</option>
        </select><br><br>
        <div class="form-control">
            <input type="submit" name="Register" value="Register">
        </div>
<br>
        <div>Already have an account?<a href="login.php">Login</a></div>
    </form>

    <p><strong>Your health, safety, and wellbeing are of our UPMOST concern. Any additional information should be shared with the trip coordinator in due time</p></strong>
    <p>for further contacting reach:</p>
    <ul>
        <em><strong>
            <li><i style="color: blue">Yeye Mwenyewe- 0718888999</li>
            <li>Yeyemwenye@kiki.com</li>
        </strong></em>
        </i> 
    </ul>
</div>
</body>
</html>
