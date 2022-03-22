
<!DOCTYPE html>
<html>
<head>
    <title> Ecommerce Site </title>
</head>
<body>
<h1> This is test page.</h1>
<form action="/save" method="post",>
    @csrf
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"> <br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>
    <input type="submit" value="save">
</form>
</body>
</html>


