<?php

namespace App\Http\Livewire;

use App\Models\IncomingItem;
use Livewire\Component;
use Livewire\WithPagination;

class IncomingItemTable extends Component
{
    public $search = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.incoming-item-table', [
            'incoming' => IncomingItem::where('item_name', 'like', '%' . $this->search . '%')->paginate(5)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
