<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;

class ItemTable extends Component
{
    public $search = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.item-table', [
            'item' => Item::where('item_name', 'like', '%' . $this->search . '%')->paginate(7)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
