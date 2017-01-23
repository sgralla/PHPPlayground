<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Test</title>
</head>
<body>
//<?php
//    if (isset($_POST['submit'])) {
//     printf('User name: %s
//        <br>Password: %s
//        <br>Gender: %s
//        <br>Color: %s
//        <br>Language(s): %s
//        <br>Comments: %s
//        <br>T&amp;C %s',
//            $_POST['name'],
//            $_POST['password'],
//            'value 3',
//            'value 4',
//            'value 5',
//            $_POST['comments'],
//            '7');
//    }
//?>
<?php echo htmlspecialchars($_POST[name]); ?>
<form method="post" action="Form.php">
    User name: <input type="text" name="name"><br>
    Password: <input type="password" name="password"><br>
    Gender:
        <input type="radio" name="gender" value="f">female
        <input type="radio" name="gender" value="m">male<br>
    Favorite color:
        <select name="color">
            <option value="#f00">red</option>
            <option value="#0f0">greed</option>
            <option value="#00f">blue</option>
        </select><br>
    Languages spoken:
    <select name="languages[]" multiple size="3">
        <option value="en">English</option>
        <option value="de">German</option>
        <option value="it">Italian</option>
    </select><br>
    Comments: <textarea name="comments"></textarea><br>
    <input type="checkbox" name="tc" value="ok">I accept the T&C<br>
    <input type="submit" name="submit" value="submit">


</form>


</body>
</html>