<link href="style.css" rel="stylesheet" type="text/css"/>
<?php
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $item1 = $_POST['item1'];
        $item1Total = $item1*3;
        $item2 = $_POST['item2'];
        $item2Total = $item2*4;
        $item3 = $_POST['item3'];
        $item3Total = $item3*2.5;
        $item4 = $_POST['item4'];
        $item4Total = $item4*2;
        $ship = $_POST['ship'];
        $shipCost = 0;
        if($ship == "Express"){
                $shipCost = 50;
        }
        else if($ship=="Three Day"){
                $shipCost =5;
        }
        $total = $shipCost+$item1Total+$item2Total+$item3Total+$item4Total;
        echo"<h2>Welcome $user!</h2>";
        echo"<p class='recipet'>Password: $pass</p>";
        echo"<p class='recipet'> Here is a recipet of your purchase: </p>";
        echo"<table>
                <tr>
                        <td></td>
                        <td>Quanity</td>
                        <td>Cost Per Item</td>
                        <td>Sub Total</td>
                </tr>
                <tr>
                        <td>Item 1</td>
                        <td class='inner'>$item1</td>
                        <td class='inner'>$3.00</td>
                        <td class='inner'>$$item1Total</td>
                </tr>
                <tr>
                        <td>Item 2</td>
                        <td class='inner'>$item2</td>
                        <td class='inner'>$4.00</td>
                        <td class='inner'>$$item2Total</td>

                </tr>
                <tr>
                        <td>Item 3</td>
                        <td class='inner'>$item3</td>
                        <td class='inner'>$2.50</td>
                        <td class='inner'>$$item3Total</td>

                </tr>
                <tr>
                        <td>Item 4</td>
                        <td class='inner'>$item4</td>
                        <td class='inner'>$2.00</td>
                        <td class='inner'>$$item4Total</td>

                </tr>
                <tr>
                        <td>Shipping</td>
                        <td class='inner'>$ship</td>
                        <td class='inner'></td>
                        <td class='inner'>$$shipCost</td>
                </tr>
                <tr>
                        <td>Total Cost</td>
                        <td></td>
                        <td></td>
                        <td>$$total</td>
                </tr>
        </table>";
?>
