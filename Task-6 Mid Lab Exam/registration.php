<html>
<head> </head>
<body>
    <table border="1" cellspacing='0'>

        <tr>
            <td colspan="3" height="80" width="400" >
                <div style="font-size: 40px" align="center">Yahoo</div>
            </td>
        </tr>

        <tr>
            <td colspan="3" height="40">

                <form method="post" action="regcheck.php" enctype="">
                    <fieldset style="width: 400;">
                        <legend><b>REGISTRATION</b></legend>
                        <table>

                            <tr>
                                <td width="200">
                                    First Name
                                </td>
                                <td width="300">
                                    :<input type="text" name="fname" value=""/> <br>
                                </td>
                            </tr>

                            <tr>
                                <td width="200">
                                    Last Name
                                </td>
                                <td width="300">
                                    :<input type="text" name="lname" value=""/> <br>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <legend>Date of Birth</legend>
                                    <input type="text" name="dd" value="" style="width: 30px;"/>
                                    /<input type="text" name="mm" value="" style="width: 30px;"/>
                                    /<input type="text" name="yyyy" value="" style="width: 50px;"/> (dd/mm/yyyy)
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male"/>Male
                                        <input type="radio" name="gender" value="Female"/>Female
                                        <input type="radio" name="gender" value="Other"/>Other
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Phone
                                </td>
                                <td width="300">
                                    :<input type="text" name="phone" value=""/> <br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    EmailID
                                </td>
                                <td width="300">
                                    :<input type="text" name="email" value=""/> <br>
                                </td>
                            </tr>
                
                            <tr>
                                <td>
                                    Password
                                </td>
                                <td width="300">
                                    :<input type="password" name="password" value=""/> <br>
                                </td>
                            </tr>
                
                            <tr>
                                <td>
                                    Confim Password
                                </td>
                                <td width="300">
                                    :<input type="password" name="cpassword" value=""/> <br>
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
        
        
    </table>
</body>
</html>
