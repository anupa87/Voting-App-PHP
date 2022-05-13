<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PHP voting app</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <h1>Online Voting System</h1>
        </div>
    </header>
    <main>
        <div class="wrapper login">
            <h2>Registration</h2> 
            <div>
            <form action= "./actions/register.php" method= "POST" enctype ="multipart/form-data" login-form" >
                Full name:
                <input class = "form-control" type="text" name="fullname" placeholder = "Enter full name" value="" require="required" />
                <br>
                <br>
                Mobile number:
                <input class = "form-control" type="text" name="mobile" placeholder = "Enter mobile number" value="" require="required" />
                <br>
                <br>          
                ID number:
                <input class = "form-control" type="text" name="idNumber" placeholder = "Enter ID number" value="" require="required" />
                <br>
                <br>
                Password:
                <input class = "form-control" type="password" name="password" placeholder="Enter password" require="required"/>
                <br>
                <br> 
                Confirm password:   
                <input class = "form-control" type="password" name="cpassword" placeholder="Confirm password" require="required"/>
                <br>
                <br> 
               
                Status:
                <select name="user_status" class = "form-select">
                    <option value="choose" selected="selected">Choose</option>
                    <option value="candidate">Candidate</option>
                    <option value="voter">Voter</option>
                </select>
                <br>
                <br>    
                <button type="submit" classs ="btn">Register</button>
                <br>
                <br>
                <p>Already have an account? <a href="./include/login.php">Login here</a></p> 
            </form>
            </div>  
        </div>
    </main>
    <footer>
        <div class="wrapper">
            <p>&copy; Popular choice 2022</p>
        </div>
    </footer>
        </body>
        </html>n