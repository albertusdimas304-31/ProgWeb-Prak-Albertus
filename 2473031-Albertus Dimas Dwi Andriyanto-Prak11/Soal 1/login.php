<!DOCTYPE html>
<html>
<head>
    <title>Login Praktikum</title>
</head>
<body style="margin: 20px; font-family: serif;">
    <div style="width: 320px; border: 1px solid #000; background-color: #fff;">
        <div style="background-color: #00008B; color: white; text-align: center; padding: 15px 0;">
            <h1 style="margin: 0; font-size: 40px; font-weight: normal;">Login</h1>
        </div>

        <div style="padding: 15px;">
            <form action="proses.php" method="POST">
                <table border="0" cellpadding="3">
                    <tr>
                        <td style="font-size: 18px;">Username</td>
                        <td><input type="text" name="username" style="width: 150px;" required></td>
                    </tr>
                    <tr>
                        <td style="font-size: 18px;">Password</td>
                        <td><input type="password" name="password" style="width: 150px;" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="login" style="margin-top: 5px; cursor: pointer;">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div style="border-top: 1px solid #ccc; padding: 10px 15px; font-size: 16px; line-height: 1.2;">
            @UKM2014<br>
            Name-NRP&copy;
        </div>
    </div>
</body>
</html>