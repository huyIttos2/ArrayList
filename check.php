<?php
include_once "ArrayList.php";
class SomePojo
{
    private $field;

    public function __construct($field)
    {
        $this->setField($field);
    }

    public function setField($field)
    {
        $this->field = $field;
    }

    public function getField()
    {
        return $this->field;
    }
}
$list = new ArrayList("Somepojo");
$list->add(new SomePojo(5));
$list->add(new SomePojo(3));
$list->add(new SomePojo(8));
$list->add(new SomePojo(4));
$list->add(new SomePojo(9));
$list->removeRange(2,3);
print_r($list);

