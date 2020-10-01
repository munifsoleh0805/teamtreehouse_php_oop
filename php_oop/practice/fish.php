<?php

class Fish
{
    public $common_name;
    public $flavor;
    public $record_weight;

    public function getInfo() {
        return "A {$this->common_name} is an {$this->flavor} flavored fish. The world record weight is{$this->record_weight}.";
    }

    public function __construct($name, $flavor, $record)
    {
        $this->common_name =$name;
        $this->flavor =$flavor;
        $this->record_weight =$record;
    }
}

$bass = new Fish("Largemouth Bass", "Excellent", "22 pounds 5 ounces");
echo $bass->getInfo();