<div>
    <div class="mb-3">
        <input type="text" class="form-control" wire:model="search" placeholder="Search items">
    </div>
    <table class="table table-hover table-bordered">
        <tr class="table-primary text-center">
            <th>NO.</th>
            <th>ITEM CODE</th>
            <th>ITEM NAME</th>
            <th>COUNT</th>
            <th>ACTION</th>
        </tr>
        @foreach ($item as $index => $i)
            <tr>
                <td class="text-center">{{ $item->firstItem() + $index }}</td>
                <td class="text-center">{{ $i->item_code; }}</td>
                <td>{{ $i->item_name; }}</td>
                <td class="text-center">{{ $i->count; }}</td>
                <td class="text-center">
                    <form action="/item/{{ $i->id; }}" method="POST">
                    <a href="/item/{{ $i->id; }}/show" class="btn btn-primary">View</a>
                    <a href="/item/{{ $i->id; }}/edit" class="btn btn-warning">Edit</a>
                    
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $item->links() }}
</div>
