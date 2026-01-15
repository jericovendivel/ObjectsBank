<?php

class Account {
    private $accountNumber;
    private $accountType;
    private $balance;

    public function __construct($accountNumber, $accountType, $balance) {
        $this->accountNumber = $accountNumber;
        $this->accountType = $accountType;
        $this->balance = $balance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getAccountType() {
        return $this->accountType;
    }

    public function getBalance() {
        return $this->balance;
    }
}
