@extends('layouts.app')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('INCOMING ITEMS') }}</div> --}}

                <div class="card-body">
                    <a href="{{ route('incoming.create') }}" class="btn btn-success mb-3">Add Incoming Item</a>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @livewire('incoming-item-table')
                    
                    {{-- <table class="table table-striped table-bordered">
                        <tr>
                            <th>NO.</th>
                            <th>ITEM CODE</th>
                            <th>ENTRY DATE</th>
                            <th>ITEM NAME</th>
                            <th>TYPE</th>
                            <th>SENDER PHONE</th>
                            <th>IMAGE</th>
                            <th>COUNT</th>
                            <th>SENDER</th>
                            <th>RECEIVER</th>
                            <th>DESCRIPTION</th>
                            <th>ACTION</th>
                        </tr>
                        @foreach ($incoming as $in)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $in->item_code; }}</td>
                                <td>{{ $in->entry_date; }}</td>
                                <td>{{ $in->item_name; }}</td>
                                <td>{{ $in->type; }}</td>
                                <td>{{ $in->sender_phone; }}</td>
                                <td><img src="/images/{{ $in->image }}" width="100px"></td>
                                <td>{{ $in->count; }}</td>
                                <td>{{ $in->sender; }}</td>
                                <td>{{ $in->receiver; }}</td>
                                <td>{{ $in->description; }}</td>
                                <td>
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
                    {!! $incoming->links() !!} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection