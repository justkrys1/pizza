<?php

print_r($_GET);
$quantity = $_GET["qty"];
$ids = $_GET["id"];
echo 'QTY: ' . $qty . 'END';
echo 'IDS: ' . $ids . 'END';
print_r($quantity);
print_r($ids);

$form = <<<End_Of_Form
    <form method="post" action="">
        Full Name:<input type="text" name="name" /><br/>
        Phone:<input type="tel" name="phone" /><br/>
        Address:<input type="text" name="address"/><br/>
        Card Number:<input type="text" pattern="[0-9]{13,16}" name="cardnum" /><br/>
        Expiration:<input type="date" name="date" /><br/>
        <input type="submit" name="submit" value="Submit" /><br/>
    </form>

End_Of_Form;

echo json_encode($form);
