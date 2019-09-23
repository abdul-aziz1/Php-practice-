<?php
echo'<pre>';
print_r($_POST);
if(isset($_POST['btn'])){
    $starting_number=$_POST['starting_number'];
    $ending_number=$_POST['ending_number'];
    $res='';
    for($i=$starting_number;$i<=$ending_number;$i++){
       // echo $i;
       $res.=$i;
    }
}


?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Starting Number</td>
                <td><input type="number" name="starting_number" value="<?php if(isset($_POST['starting_number'])){echo $_POST['starting_number'];}?>"></td>
            </tr>
            <tr>
                <td>Ending Number</td>
                <td><input type="number" name="ending_number" value="<?php if(isset($_POST['ending_number'])){echo $_POST['ending_number'];}?>"></td>
            </tr>
            <tr>
                <td>Result</td>
                <td><input type="number" value="<?php if(isset($res)){echo $res;}?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" value="submit"></td>
            </tr>

        </table>
    </form>
</body>
</html>