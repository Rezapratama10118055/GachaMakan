<?php namespace App\Controllers;

use App\Models\ItemModel;

class Gacha extends BaseController
{
    public function index()
    {
        $data['title'] = 'Gacha';
        $data['items'] = [];
        return view('gacha/tgacha', $data);
    }

    public function roll()
    {
        $itemModel = new ItemModel();
        $item = $itemModel->getRandomItem();
        $data['title'] = 'Hasil Gacha';
        $data['items'] = [$item];
        return view('gacha/rgacha', $data);
        
    }
}
