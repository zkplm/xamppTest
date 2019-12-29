<?php
    require "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Signup Test
    </title>
</head>
<body>
    <h1>Sign-up</h1>
    <form action="sign-up.php" method="POST">
        <table>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Repeat password: </td>
                <td><input type="password" name="passwordRepeat" required></td>
            </tr>
            <td>
                <td><input type="submit" value="Submit" name='signup-submit'></td>
            </tr>
        </table>
    </form>
    <h1>Upload Image</h1>
    <form action="postimg.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div>
            <input type="file" name="image">
        </div>
        <div>
        <textarea 
            id="text" 
            cols="40" 
            rows="4" 
            name="image_text" 
            placeholder="Say something about this image..."></textarea>
        </div>
        <div>
            <button type="submit" name="upload">POST</button>
        </div>
    </form>
</body>
</html>

<?php
    require "footer.php";
?>