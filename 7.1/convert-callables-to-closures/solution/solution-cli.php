<?php
class MyCollection
{
    private $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    /**
     * Returns $this->items excluding those failed by closure $rejector
     *
     * @param $rejector
     * @return array
     */
    public function reject($rejector)
    {
        $newItems = array();

        foreach ($this->items as $item) {
            if ($rejector($item)) {
                $newItems[] = $item;
            }
        }

        return $newItems;
    }
}

$myCollection = new MyCollection(['bro','brah','brew','breee','hi',5]);

$newItems = $myCollection->reject(Closure::fromCallable('is_string'));

var_dump($newItems);