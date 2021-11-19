<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubCategory extends Component
{
    public $categories;
    public $categoryId;
    public $sub_categories;
    public $subCategoryId;

    public function mount($categories)
    {
        $this->categories = $categories;

        if ($this->categoryId != '') {
            $this->sub_categories = $this->categories->find($this->categoryId)?->sub_categories ?? [];
        } else {
            $this->sub_categories = [];
        }
    }

    public function updatedCategoryId()
    {

        $this->sub_categories = $this->categories->find($this->categoryId)?->sub_categories ?? [];
    }

    public function render()
    {
        return view('livewire.sub-category');
    }
}
