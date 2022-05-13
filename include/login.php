<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
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
            <h2>Login</h2> 
            <div>
            <form action= "../actions/login.php"  id="login-form" >
                ID number: 
                <input class = "form-control" type="number" name="idNumber" value="" require="required" />
                <br>
                <br>
                Password: 
                <input class = "form-control" type="password" name="password" value="" require="required"/>
                <br>
                <br>
                Status:
                <select name="status" class = "form-select">
                    <option value="candidate">Candidate</option>
                    <option value="voter">Voter</option>
                </select>
                <br>
                <br>    
                <button type="submit" classs ="btn">Login</button>
                <br>
                <br>
                <p>Don't have an account? <a href="../">Register here</a></p> 
                
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
        </html>