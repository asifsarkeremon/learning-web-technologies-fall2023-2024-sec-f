<html>
<head> </head>
<body>
    <table border="1" cellspacing='0'>

        <tr>
            <td colspan="3" height="80" width="400" >
                <div style="font-size: 40px">XCompany</div>
                <div align="Right">
                    <a href="public_home.php">Home</a> |
                    <a href="login.php">Login</a> |
                    <a href="registration.php">Registration</a>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="3" height="40">

                <form method="post" action="loginCheck.php" enctype="">
                    <fieldset>
                        <legend>LOGIN</legend>
                        <table>
                            <tr>
                                <td height="40">
                                    Username
                                </td>
                                <td width="300">
                                    :<input type="text" name="username" value=""/> <br>
                                </td>
                            </tr>
                            
                            <tr>
                                <td height="40">
                                    Password
                                </td>
                                <td width="300">
                                    :<input type="password" name="password" value=""/> <br>
                                </td>
                            </tr>
                    
                            <tr>
                                <td colspan="2" height="40">
                                    <input type="radio" name="remeber me" value=""/>Remember me </br></br>
                                    <input type="submit" name="submit" value="Submit"/>
                                    <a href="ForgotPassword.php">Forgot Password?</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>

            </td>
        </tr>

        <tr>
            <td colspan="2"height="40" align="Center">
            Copyright 2017
            </td>
        </tr>
    </table>
</body>
</html>
