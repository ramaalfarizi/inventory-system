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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ITEM') }}</div> --}}

                <div class="card-body">
                    <a href="/item/create" class="btn btn-success mb-3">Add Item</a>
                    @livewire('item-table')

                    {{-- <table class="table table-striped table-bordered">
                        <tr>
                            <th>NO.</th>
                            <th>ITEM CODE</th>
                            <th>ITEM NAME</th>
                            <th>COUNT</th>
                            <th>ACTION</th>
                        </tr>
                        @foreach ($item as $i)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $i->item_code; }}</td>
                                <td>{{ $i->item_name; }}</td>
                                <td>{{ $i->count; }}</td>
                                <td>
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
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection