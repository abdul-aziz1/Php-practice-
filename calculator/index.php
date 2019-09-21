<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <form action="calculation.php" method="POST">
            first name: 
            <input type="text" name="value1"><br/>
            Second Value: 
            <input type="text" name="value2"><br/>
            <table>
                <tr>
                    <td><input type="radio" name="operator" value="+">+</td>
                    <td><input type="radio" name="operator" value="-">-</td>
                    <td><input type="radio" name="operator" value="*">*</td>
                    <td><input type="radio" name="operator" value="/">/</td>
                    <td><input type="radio" name="operator" value="%">%</td>
                </tr>
            </table>

            <button type="submit" name="submit">Result</button>
        </form>
        

    </body>
</html>
