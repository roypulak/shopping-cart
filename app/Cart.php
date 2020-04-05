<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items ?? $this->items;
            $this->totalQty = $oldCart->totalQty ?? $this->totalQty;
            $this->totalPrice = $oldCart->totalPrice ?? $this->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $pickedItem = $this->extractItemDetails($item, $id);
        $pickedItem['qty']++;
        $pickedItem['price'] = $item->price * $pickedItem['qty'];
        $this->items[$id] = $pickedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    private function extractItemDetails($item, int $id):array
    {
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                return $this->items[$id];
            }
        }
        return ['qty' => 0, 'price' => $item->price, 'item' => $item];
    }

    public function reduceByOne($id) {
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['price'];

        if ($this->items[$id]['qty'] <= 0){
            unset($this->items[$id]);
        }
    }
}