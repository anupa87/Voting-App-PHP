<?php include('../actions/connect.php');
include("../actions/logging.php") 
?>

<html>
<head>
    <link rel="stylesheet" href="../index.css">
    <title>PHP Login App</title>
</head>
<body>
    <header>
        <div class="header">
            <h1>Login System</h1>
        </div>
    </header>
    <main>
        <div class="form">
            <h2>Login</h2> 
            <div>
            <form action= "<?= $_SERVER['PHP_SELF'] ?>" id="login-form" method="POST">
                ID number: 
                <input  type="number" name="idNumber" value="" require="required" />
                <br>
                <br>
                Password: 
                <input  type="password" name="password" value="" require="required" >
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
                <button type="submit" name="login" classs ="btn">Login</button>
                <br>
                <br>
                <p>Don't have an account? <a href="../">Register here</a></p> 
                
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