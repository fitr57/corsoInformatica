<?php

namespace Cls;

abstract class Worker implements Person {

    protected $company;

    public function getCompany() {
        return $this->company;
    }

    private function setCompany($company) {
        $this->company = $company;
    }
    
}


