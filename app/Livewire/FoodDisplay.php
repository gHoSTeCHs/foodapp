<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Collection;

class FoodDisplay extends Component
{

    public $categories;
    public $selectedCategory;
    public $foodProducts;

    public function mount(): void
    {
        $productItems = Product::with('category')
            ->get();
        $groupedProducts = $productItems->groupBy(function ($item) {
            return $item->category ? $item->category->title : 'Uncategorized';
        })->all();

        $this->categories = $groupedProducts;

        $this->selectedCategory = ProductCategory::first()->title;

        $this->foodProducts = $this->categories[$this->selectedCategory] ?? collect();
//        $this->products = $productItems->where()
    }

    public function selectCategory($category): void
    {
        // Set the selected category
        $this->selectedCategory = $category;
        // Load products under the selected category
        $this->foodProducts = $this->categories[$category] ?? collect();
    }

    public function render()
    {
        return view('livewire.food-display');
    }
}
