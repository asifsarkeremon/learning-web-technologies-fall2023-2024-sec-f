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

                <form method="post" action="regcheck.php" enctype="">
                    <fieldset style="width: 400;">
                        <legend><b>REGISTRATION</b></legend>
                        <table>

                            <tr>
                                <td height="40" width="200">
                                    Name
                                </td>
                                <td width="300">
                                    :<input type="text" name="name" value=""/> <br>
                                </td>
                            </tr>
                
                            <tr>
                                <td height="40">
                                    Email
                                </td>
                                <td width="300">
                                    :<input type="text" name="email" value=""/> <br>
                                </td>
                            </tr>
                
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
                                <td height="40">
                                    Confim Password
                                </td>
                                <td width="300">
                                    :<input type="password" name="password" value=""/> <br>
                                </td>
                            </tr>
                
                            <tr>
                                <td colspan="2"height="80">
                                    <legend>Gender</legend>
                                        <input type="radio" name="gender" value=""/>Male
                                        <input type="radio" name="gender" value=""/>Female
                                        <input type="radio" name="gender" value=""/>Other
                                </td>
                            </tr>
                
                            <tr>
                                <td colspan="2" height="80">
                                    <legend>Date of Birth</legend>
                                    <input type="text" name="dd" value="" style="width: 30px;"/>
                                    /<input type="text" name="mm" value="" style="width: 30px;"/>
                                    /<input type="text" name="yyyy" value="" style="width: 50px;"/> (dd/mm/yyyy)
                                </td>
                            </tr>
                
                            <tr>
                                <td colspan="2" height="40">
                                    <input type="submit" name="submit" value="Submit"/>
                                    <input type="button" name="reset" value="Reset"/>
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
