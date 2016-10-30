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

// This generates a warning, "Class __PHP_Incomplete_Class has no unserializer", which I believe may be
// a php 7.0 feature and not a bug, but something to be aware of because it seems unavoidable.
$filteredClasses = unserialize($evilSerialized, ["allowed_classes" => ["GoodClass"]]);

foreach ($filteredClasses as $filteredClass) {
    $className = get_class($filteredClass);
    $filteredObj = new $className();

    // We must check this or it'll throw a fatal error now
    if ($className != "__PHP_Incomplete_Class" && method_exists($filteredObj, "getData")) {
        eval($filteredObj->getData());
    }
}
