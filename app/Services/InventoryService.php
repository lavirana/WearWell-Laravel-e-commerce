<?php

namespace App\Services;

class InventoryService
{
    protected $stock = [];

    public function __construct()
    {
        $this->stock = [
            'wallet'   => 50,
            'watch'    => 30,
            'trousers' => 20,
        ];
    }

    public function decreaseStock(string $product, int $quantity): bool
    {
        if (!isset($this->stock[$product])) {
            return false;
        }

        if ($this->stock[$product] < $quantity) {
            return false;
        }

        $this->stock[$product] -= $quantity;

        return true;
    }

    public function getStock(string $product): int
    {
        return $this->stock[$product] ?? 0;
    }
}
