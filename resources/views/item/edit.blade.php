{{-- <h1>Edit Data Items</h1>

<form action="/item/{{ $item->id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="item_code" placeholder="Item code" value="{{ $item->item_code }}"><br>
    <input type="text" name="item_name" placeholder="Item name" value="{{ $item->item_name }}"><br>
    <input type="number" name="count" placeholder="Count" value="{{ $item->count }}"><br>
    <input type="submit" name="submit" value="Save">
</form> --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Items') }}</div>

                <div class="card-body">
                    <form action="/item/{{ $item->id }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="item_code" class="form-label">Item code</label>
                            <input type="text" name="item_code" class="form-control" id="item_code" value="{{ $item->item_code }}">
                        </div>
                        <div class="mb-3">
                            <label for="item_name" class="form-label">Item name</label>
                            <input type="text" name="item_name" class="form-control" id="item_name" value="{{ $item->item_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="count" class="form-label">Count</label>
                            <input type="number" name="count" class="form-control" id="count" value="{{ $item->count }}">
                        </div>

                        {{-- <input type="text" name="item_code" placeholder="Item code"><br>
                        <input type="text" name="item_name" placeholder="Item name"><br>
                        <input type="number" name="count" placeholder="Count"><br> --}}

                        <input type="submit" class="btn btn-success" name="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
