<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class SubCategory extends Component
{
    public $categories;
    public $categoryId;
    public $sub_categories;
    public $subCategoryId;

    public function mount($data = null)
    {
        $this->categories = Category::all();
        if (request()->url() == route('tickets.edit', [$data?->id??0])) {
            $this->subCategoryId = $data->sub_category_id;
            $this->categoryId = $data->sub_category->category_id;
        }


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
