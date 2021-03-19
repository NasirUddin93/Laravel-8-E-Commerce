<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ShopComponent extends Component
{
	use WithPagination;
    public function render()
    {
		$product = Product::paginate(12);
        return view('livewire.shop-component',['products'=>$product])->layout("layouts.base");
    }
}
