<?php
    echo '<pre>';
    print_r($_POST);
?>

<!-- <!DOCTYPE html>
<html>
<head>
<title>

</title>
</head>
<body>
    <form action='' method='POST'>
        <table align="center">
            <tr>
                <td>Name:</td>
                <td><input type='text' name="name" value="" placeholder="Name"></td>
            </tr>
            <tr>
                <td>number</td>
                <td><input type="text" name="number" Value="" placeholder="Number"></td>
            </tr>
            <tr>
                <td><button type="submit" value="Submit">Submit</button></td>
            </tr>

        </table>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
<title>
    get-post
</title>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td>First Number</td>
                <td><input type="text" name="first_valu"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="second_valu"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btn" value="+">
                    <input type="submit" name="btn" value="-">
                    <input type="submit" name="btn" value="*">
                    <input type="submit" name="btn" value="/">
                    <input type="submit" name="btn" value="%">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>