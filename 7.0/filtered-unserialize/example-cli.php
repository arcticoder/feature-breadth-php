<?php

class EvilClass implements Serializable
{
    private $data;

    public function __construct()
    {
        $this->data = "echo 'Doing evil\\n';";
    }

    public function serialize() {
        return serialize($this->data);
    }

    public function unserialize($data) {
        $this->data = unserialize($data);
    }

    public function getData() {
        return $this->data;
    }
}

class GoodClass implements Serializable
{
    private $data;

    public function __construct()
    {
        $this->data = "echo 'Doing good\\n';";
    }

    public function serialize() {
        return serialize($this->data);
    }

    public function unserialize($data) {
        $this->data = unserialize($data);
    }

    public function getData() {
        return $this->data;
    }
}

$evilSerialized = serialize([new EvilClass(), new GoodClass()]);

// Convert this unserialize call to only allow GoodClass through
$unfilteredClasses = unserialize($evilSerialized);

foreach ($unfilteredClasses as $unfilteredClass) {
    $className = get_class($unfilteredClass);
    $unfilteredObj = new $className();
    eval($unfilteredObj->getData());
}
