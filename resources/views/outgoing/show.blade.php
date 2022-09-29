@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Outgoing Item') }}</div>
                <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>Item Code</th>
                        <td>: {{ $outgoing->item_code }}</td>
                    </tr>
                    <tr>
                        <th>Exit Date</th>
                        <td>: {{ $outgoing->exit_date }}</td>
                    </tr>
                    <tr>
                        <th>Item Name</th>
                        <td>: {{ $outgoing->item_name }}</td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>: {{ $outgoing->type }}</td>
                    </tr>
                    <tr>
                        <th>Company Phone</th>
                        <td>: {{ $outgoing->company_phone }}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>: 
                            <img src="/images/{{ $outgoing->image }}" width="300px">
                        </td>
                    </tr>
                    <tr>
                        <th>Count</th>
                        <td>: {{ $outgoing->count }}</td>
                    </tr>
                    <tr>
                        <th>Receiver</th>
                        <td>: {{ $outgoing->receiver }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>: {{ $outgoing->description }}</td>
                    </tr>
                </table>
                <a href="/outgoing" class="btn btn-success">Back</a>

                
                    {{-- <div class="">
                        <strong>Item Code : </strong>
                        {{ $outgoing->item_code }}
                    </div>
                    <div class="">
                        <strong>Exit Date : </strong>
                        {{ $outgoing->exit_date }}
                    </div>
                    <div class="">
                        <strong>Item Name : </strong>
                        {{ $outgoing->item_name }}
                    </div>
                    <div class="">
                        <strong>Type : </strong>
                        {{ $outgoing->type }}
                    </div>
                    <div class="">
                        <strong>Comapny Phone : </strong>
                        {{ $outgoing->company_phone }}
                    </div>
                    <div class="">
                        <strong>Sender : </strong>
                        {{ $outgoing->sender }}
                    </div>
                    <div class="">
                        <strong>Receiver : </strong>
                        {{ $outgoing->receiver }}
                    </div>
                    <div class="">
                        <strong>Count : </strong>
                        {{ $outgoing->count }}
                    </div>
                    <div class="">
                        <strong>Image : </strong>
                        <img src="/images/{{ $outgoing->image }}" width="300px">
                    </div>
                    <div class="">
                        <strong>Description : </strong>
                        {{ $outgoing->description }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
