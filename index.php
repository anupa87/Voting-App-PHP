<html>
<head>
    <link rel="stylesheet" href="index.css">
    <title>PHP Login app</title>
</head>
<body>
    <header>
        <div class="header">
            <h1>Login System</h1>
        </div>
    </header>
    <main>
        <div class="form registration-form">
            <h2>Registration</h2> 
            <div>
            <form action= "./actions/register.php" method= "POST" name= "login-form" >
                Full name:
                <input  type="text" name="fullname" placeholder = "Enter full name" value="" require="required" />
                <br>
                <br>
                Mobile number:
                <input  type="text" name="mobile" placeholder = "Enter mobile number" value="" require="required" />
                <br>
                <br>          
                ID number:
                <input  type="text" name="idNumber" placeholder = "Enter ID number" value="" require="required" />
                <br>
                <br>
                Password:
                <input  type="password" name="password" placeholder="Enter password" require="required" autocomplete="on"/>
                <br>
                <br> 
                Confirm password:   
                <input  type="password" name="cpassword" placeholder="Confirm password" require="required" autocomplete="on"/>
                <br>
                <br> 
               
                Status:
                <select name="user_status" class = "form-select">
                    <option value="choose" selected="selected">Choose</option>
                    <option value="Candidate">Candidate</option>
                    <option value="Voter">Voter</option>
                </select>
                <br>
                <br>    
                <button type="submit" classs ="btn">Register</button>
                <br>
                
                <p>Already have an account? <a href="./include/login.php">Login here</a></p> 
            </form>
            </div>  
        </div>
    </main>
    <footer>
        <div class="copyright">
            <p>&copy; Popular choice 2022</p>
        </div>
    </footer>
        </body>
        </html>