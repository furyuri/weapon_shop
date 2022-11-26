<?php
/**
 * Created by PhpStorm.
 * User: Uri
 * Date: 1/31/2019
 * Time: 8:38 PM
 */

include_once 'datafetch.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weapon Shop</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
<main>
    <section>
        <h1>Detailed Weapon Information</h1>
        <p>Here are the details of the weapon you selected:</p>
        <h2><?php echo $weapon_choice[WEAPON]; ?></h2>

        <ul>
<?php
    $weapon_attr_list = $weapon_choice;
    array_shift($weapon_attr_list);
    foreach ($weapon_attr_list as $weapon_attribute => $detail) {
        $weapon_attribute = str_replace("_", " ", $weapon_attribute); // remove underscores
        $weapon_attribute = ucwords($weapon_attribute);// capitalize
        echo "            <li><span class='weapon-attribute'>" . $weapon_attribute . ":</span>" . $detail . "</li>\n";
    }
?>
        </ul>
    </section>
    <hr>
    <section>
        <h3>Would you like to see something else?</h3>
        <form role="form" action="weaponshop.php" method="get">
            <table>
                <tr>
                    <td>Select a weapon to see detailed information.</td>
                    <td>
                        <select name="weapon_number">
<?php
    foreach ($weapon_list_short as $key => $weapon_name) {
        echo "                           <option value='" . $key  . "'". ($weapon_choice[WEAPON] == $weapon_name ? 'selected' : ''). ">" . $weapon_name . "</option>\n";
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