<?php

class Customer {
    private $firstName;
    private $lastName;
    private $accounts; // array of Account objects

    public function __construct($firstName, $lastName, $accounts) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->accounts = $accounts;
    }

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }

    public function getAccounts() {
        return $this->accounts;
    }
}
