<?php

class AirtimePurchase{

private $wallet;
public $airtimeBalance=20;


public function fundWallet($money){
    $this->wallet += $money;
    return $this;
}

public function buyAirtime($airtimeAmount){
    if ($this->wallet >= $airtimeAmount) {
        $this-> airtimeBalance +=$airtimeAmount;
    }
    else {
        echo "Fund inside wallet is " . $this->wallet . " and it is not up to " . $airtimeAmount . ", The airtime amount you are trying to buy" ;
    }
    return $this;
}

public function walletBalance(){
        return $this->wallet;
}

public function makeCall($callTime){
    $amountSpent = $callTime*10;
    $this-> airtimeBalance -= ($amountSpent);
    return $this;
}

}

$mtn = new AirtimePurchase();
$airtimeBalance = $mtn -> fundWallet(300) -> buyAirtime(250) -> makeCall(10) -> airtimeBalance;

//Note: Call is #10 per minute

echo "Your airtime balance is: " . $airtimeBalance;

//NOTE: Chaining method links methods together, it ensures methods are dependent on each other and arguments 
//passed into the methods are also beneficial to eachother. 