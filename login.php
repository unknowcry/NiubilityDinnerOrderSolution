<?php
if(isset($_POST["type"])){
    switch($_POST["type"]){
        case "restaurant":{
            break;
        }
        case "":{
            break;
        }
        case "background":{
            break;
        }
    }
}
?>
<html>
    <head></head>
    <body>
        <form action="" medthod="post">
            <table>
                <tr>
                    <td>account type:</td>
                    <td>
                        <select name="type">
                            <option value="restaurant">restaurant</option>
                            <option value="cus">cus</option>
                            <option value="background">background</option>
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
                        <input type="password" autocomplete="off" name="password">
                    </td>
                </tr>
                <tr><td></td><td><input type="submit"></td></tr>
            </table>
        </form>
    </body>
</html>
