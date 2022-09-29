<div>
    <div class="mb-3">
        <input type="text" class="form-control" wire:model="search" placeholder="Search outgoing items">
    </div>
    <table class="table table-hover table-bordered">
        <tr class="table-primary text-center">
            <th>NO.</th>
            <th>ITEM CODE</th>
            <th>EXIT DATE</th>
            <th>ITEM NAME</th>
            {{-- <th>TYPE</th> --}}
            {{-- <th>COMAPNY PHONE</th> --}}
            <th>SENDER</th>
            <th>RECEIVER</th>
            <th>COUNT</th>
            <th>IMAGE</th>
            {{-- <th>DESCRIPTION</th> --}}
            <th>ACTION</th>
        </tr>
        @foreach ($outgoing as $out)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $out->item_code; }}</td>
                <td class="text-center">{{ $out->exit_date; }}</td>
                <td>{{ $out->item_name; }}</td>
                {{-- <td>{{ $out->type; }}</td> --}}
                {{-- <td>{{ $out->company_phone; }}</td> --}}
                <td>{{ $out->sender; }}</td>
                <td>{{ $out->receiver; }}</td>
                <td class="text-center">{{ $out->count; }}</td>
                <td><img src="/images/{{ $out->image }}" width="100px"></td>
                {{-- <td>{{ $out->description; }}</td> --}}
                <td class="text-center">
                    <form action="{{ route('outgoing.destroy', $out->id) }}" method="POST">
                    <a href="{{ route('outgoing.show', $out->id) }}" class="btn btn-primary">View</a>
                        
                    <a href="{{ route('outgoing.edit', $out->id) }}" class="btn btn-warning">Edit</a>
                    
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $outgoing->links() !!}
</div>
