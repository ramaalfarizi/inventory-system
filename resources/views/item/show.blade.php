@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Item') }}</div>

                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Item Code</th>
                            <td>: {{ $item->item_code }}</td>
                        </tr>
                        <tr>
                            <th>Item Name</th>
                            <td>: {{ $item->item_name }}</td>
                        </tr>
                        <tr>
                            <th>Count</th>
                            <td>: {{ $item->count }}</td>
                        </tr>
                    </table>
                    <a href="/item" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
