<?php

namespace App\Http\Livewire;

use App\Models\OutgoingItem;
use Livewire\Component;
use Livewire\WithPagination;

class OutgoingItemTable extends Component
{
    public $search = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.outgoing-item-table', [
            'outgoing' => OutgoingItem::where('item_name', 'like', '%' . $this->search . '%')->paginate(5)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
