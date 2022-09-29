<div>
    <div class="mb-3">
        <input type="text" class="form-control" wire:model="search" placeholder="Search incoming items">
    </div>
    <table class="table table-hover table-bordered">
        <tr class="table-primary text-center">
            <th>NO.</th>
            <th>ITEM CODE</th>
            <th>ENTRY DATE</th>
            <th>ITEM NAME</th>
            {{-- <th>TYPE</th> --}}
            {{-- <th>SENDER PHONE</th> --}}
            <th>IMAGE</th>
            <th>COUNT</th>
            <th>SENDER</th>
            <th>RECEIVER</th>
            {{-- <th>DESCRIPTION</th> --}}
            <th>ACTION</th>
        </tr>
        @foreach ($incoming as $in)
            <tr>
                {{-- <td>{{ ++$i }}</td> --}}
                <td class="text-center">{{ $loop->iteration }}</td>

                <td class="text-center">{{ $in->item_code; }}</td>
                <td class="text-center">{{ $in->entry_date; }}</td>
                <td>{{ $in->item_name; }}</td>
                {{-- <td>{{ $in->type; }}</td> --}}
                {{-- <td>{{ $in->sender_phone; }}</td> --}}
                <td><img src="/images/{{ $in->image }}" width="100px"></td>
                <td class="text-center">{{ $in->count; }}</td>
                <td>{{ $in->sender; }}</td>
                <td>{{ $in->receiver; }}</td>
                {{-- <td>{{ $in->description; }}</td> --}}
                <td class="text-center">
                    <form action="{{ route('incoming.destroy', $in->id) }}" method="POST">

                    <a href="{{ route('incoming.show', $in->id) }}" class="btn btn-primary">View</a>

                    <a href="{{ route('incoming.edit', $in->id) }}" class="btn btn-warning">Edit</a>

                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $incoming->links() !!}
</div>
