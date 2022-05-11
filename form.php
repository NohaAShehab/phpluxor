<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <form  action="upload.php" method="POST" enctype="multipart/form-data">
        <label> First name </label>
        <input type="text" name="firstname" >

        <label> last name </label>
        <input type="text" name="lastname" >


        <label> Email </label>
        <input type="text" name="email" >


        <label> Profile picture  </label>
        <input type="file" name="image" >


        <input type="submit" >

    </form>

</body>
</html>