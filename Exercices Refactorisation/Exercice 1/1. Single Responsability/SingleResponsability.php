<?php

// TODO refactoriser le code pour respecter le principe Single Responsability de la programmation SOLID


class NoBalanceAvailableException extends \Exception {}

class Product {
    public function getValue() {}
}

class Account 
{
    public function getBalance() {}
    public function setBalance() {}
        
    public function haveBalanceAvailable(Customer $customer, $value)
    {
        return $this->getBalance() >= $value;
    }

}

class Customer 
{
    public function getAccount() {}
}

class Sale
{
    private $account;
    private $customer;
    public function __construct(Account $account, Customer $customer) {
        $this->account = $account;
        $this->customer = $customer;
    }

    public function getValue() {}
    public function setValue() {}
    
    public function sell(array $products)
    {
        $value = $this->calculateTotalValue($products);
        
        if (!$this->account->haveBalanceAvailable($this->customer, $value)) {
            throw new NoBalanceAvailableException();
        }

        /*..... something.....*/
        
        $this->setValue($value);
        $this->calculateBalance($this->customer);
    }

    public function calculateBalance()
    {
        $this->account->setBalance($this->account->getBalance() - $this->getValue());
    }
    
    private function calculateTotalValue(array $products)
    {
        $value = 0;
    
        foreach ($products as $product) {
            $value += $product->getValue();
        }
    
        return $value;
    }
}