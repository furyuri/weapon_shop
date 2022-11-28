<?php
/**
 * Created by PhpStorm.
 * User: Uri
 * Date: 1/31/2019
 * Time: 8:38 PM
 */

include_once '../app/config/config.php';
include_once 'datafetch.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weapon Shop</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<main>
    <section>
        <h1>Welcome to the Weapon Shop</h1>
        <p>Feel free to browse our selection...</p>
        <form role="form" action="weaponshop.php" method="get">
            <table>
                <tr>
                    <td>Select a weapon to see detailed information.</td>
                    <td>
                        <select name="weapon_number">
                        <?php
                        foreach ($weapon_list_short as $key => $weapon_name) {
                            echo "           <option value=" . $key . ">" . $weapon_name . "</option>\n";
                        }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </section>
</main>
</body>

</html>