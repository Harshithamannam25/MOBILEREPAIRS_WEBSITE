<html>
    <head>
    
        <title>Login Page</title>
        <style>
            body{
                color:rgb(20, 20, 20);
                display:grid;
                justify-content: center;
                align-items: center;
                background-color:black;
                background-image: url("Logo.jpg");
                background-repeat: no-repeat;
                background-size: 7%;
                background-position-x: 10px;
                background-position-y: 10px;
            }

            div{
                height: 400px;
                width: 400px;
                border: 3px solid red;
                
                background-color: rgb(251, 251, 255);
            }

            .btn {
                color: red;
                padding: 2px 10px;
                border: 1.5px solid rgb(250, 74, 74);
                background-color: transparent;
            }

            .btn:hover {
                background-color: red;
                color:rgb(240, 240, 253);
                border: 1.5px solid rgb(17, 17, 23);
            }


        </style>

        <script>
            function validate(){
                var name = document.Myform.name.value;
                var password = document.Myform.password.value;
                var re = /^(19|20|21|22)[A-Z]{3}\d{4}$/;

                if(!re.test(name)){
                    return false;
                    alert("Invalid name");

                }

                else if(password.length < 6){
                    return false;
                    alert("Invalid Password");
                }
            }
        </script>
    </head>
    <body>
     <img src="logo.png" align="left">
        <div>
            <h1 align="center">Login Page</h1>
            <form name="Myform" action="login.php" method="post">
                <table align="center" cellpadding="10">
                    <tr>
                        <td>
                            <label for="name">Name : </label>
                        </td>
                        <td>
                            <input type="text" id="name" name="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password : </label>
                        </td>
                        <td>
                            <input type="password" id="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btn" type="submit" id="submit" name="submit" value="Login" onclick="validate()">
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="right">
                            <button class="btn" formaction="register.php">Register now?</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>