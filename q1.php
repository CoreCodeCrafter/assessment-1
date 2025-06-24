<?php


public function calculatePrice($items)
{

    $total = 0;
    foreach ($items as $i) {

        $dis = isset($i['discount']) && $i['discount'] !== null ? $i['discount'] : 0;
        // $total += ($i['price'] - ($i['price'] * $dis / 100)) * $i['qty'];
        // Take Common $i['price']
        // $total += $i['price'](1-$dis / 100)* $i['qty'];
        $total += $i['price'] * $i['qty'] * (1 - $dis / 100);
    }
    return $total;
}


// Used isset() to safely check for discount.
// Removed if-else for cleaner code.
// Used correct discount formula:
// price × qty × (1 - discount%)
// Fixed bug with wrong multiplication sequence.