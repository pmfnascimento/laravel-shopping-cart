<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    /**
     * Method __construct Inicializa os valores do carrinho de compras
     *
     * @param $oldCart $oldCart Items existentes no carrinho
     *
     * @return void
     */
    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    /**
     * Method add
     *
     * @param $item Is just a product
     * @param $id is a value of associativa array of the cart
     *
     * @return void
     */
    public function add($item, $id)
    {
        $storeItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];

        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storeItem = $this->items[$id];
                $this->totalQty = $this->totalQty;
            }
        }
        $storeItem['qty']++;
        $storeItem['price'] = $item->price * $storeItem['qty'];
        $this->items[$id] = $storeItem;
        $this->totalQty += 1;
        $this->totalPrice += $item->price;
    }
}
