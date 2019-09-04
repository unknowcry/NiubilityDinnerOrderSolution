<?php
if(isset($_COOKIE["islogedin"])){
    if($_COOKIE["islogedin"]==1){
        header("./personal.php");
        exit();
    }
}
?>
<html>
    <head></head>
    <body>
        <form action="./postHolder.php" method="post">
            <input type="hidden" name="option" value="login">
            <table>
                <tr>
                    <td>account type:</td>
                    <td>
                        <select name="type">
                            <option value="0">background</option>
                            <option value="1" selected="selected">customer</option>
                            <option value="2">restaurant</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>username:</td>
                    <td>
                        <input type="text" autocomplete="off" name="username">
                    </td>
                </tr>
                <tr>
                    <td>password:</td>
                    <td>
                        <input type="password" autocomplete="off" name="passwd">
                    </td>
                </tr>
                <tr><td></td><td><input type="submit"></td></tr>
            </table>
        </form>
    </body>
</html>
