<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table      = 'items';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['name', 'rarity'];


 public function getRandomItem()
{
    // set drop rate
    $dropRates = [
        ['name' => 'Item A', 'rarity' => 'Common', 'rate' => 70],
        ['name' => 'Item B', 'rarity' => 'Rare', 'rate' => 30],
        ['name' => 'Item F', 'rarity' => 'Epic', 'rate' => 5],
        ['name' => 'Item C', 'rarity' => 'Legendary', 'rate' => 2]
    ];

    // calculate total rate
    $totalRate = array_reduce($dropRates, function($sum, $item) {
        return $sum + $item['rate'];
    }, 0);

    // generate random number between 1 and total rate
    $rand = rand(1, $totalRate);

    // find item based on drop rate
    $currentRate = 0;
    foreach ($dropRates as $item) {
        $currentRate += $item['rate'];
        if ($rand <= $currentRate) {
            $result = $this->where('rarity', $item['rarity'])->orderBy('RAND()')->findAll(1);
            if (!empty($result)) {
                return $result[0];
            }
        }
    }

    // if no item is found based on drop rate, return random item
    $count = $this->countAll();
    $offset = rand(0, $count - 1);
    $result = $this->findAll(1, $offset);
    if (!empty($result)) {
        return $result[0];
    }
    
    // if there's no item in the database, return null
    return null;
}





}
