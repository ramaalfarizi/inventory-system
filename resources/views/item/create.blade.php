@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Items') }}</div>

                <div class="card-body">
                    <form action="/item/store" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="item_code" class="form-label">Item code</label>
                            <input type="text" name="item_code" class="form-control" id="item_code" placeholder="A40BCD2XYZ">
                        </div>
                        <div class="mb-3">
                            <label for="item_name" class="form-label">Item name</label>
                            <input type="text" name="item_name" class="form-control" id="item_name" placeholder="Surat Permohohan Kerja Praktek">
                        </div>
                        <div class="mb-3">
                            <label for="count" class="form-label">Count</label>
                            <input type="number" name="count" class="form-control" id="count" placeholder="565">
                        </div>

                        {{-- <input type="text" name="item_code" placeholder="Item code"><br>
                        <input type="text" name="item_name" placeholder="Item name"><br>
                        <input type="number" name="count" placeholder="Count"><br> --}}

                        <input type="submit" class="btn btn-success" name="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
