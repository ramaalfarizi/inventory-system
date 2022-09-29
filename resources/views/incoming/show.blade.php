@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Incoming Item') }}</div>

                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Item Code</th>
                            <td>: {{ $incoming->item_code }}</td>
                        </tr>
                        <tr>
                            <th>Entry Date</th>
                            <td>: {{ $incoming->entry_date }}</td>
                        </tr>
                        <tr>
                            <th>Item Name</th>
                            <td>: {{ $incoming->item_name }}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>: {{ $incoming->type }}</td>
                        </tr>
                        <tr>
                            <th>Sender Phone</th>
                            <td>: {{ $incoming->sender_phone }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>: 
                                <img src="/images/{{ $incoming->image }}" width="300px">
                            </td>
                        </tr>
                        <tr>
                            <th>Count</th>
                            <td>: {{ $incoming->count }}</td>
                        </tr>
                        <tr>
                            <th>Receiver</th>
                            <td>: {{ $incoming->receiver }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>: {{ $incoming->description }}</td>
                        </tr>
                    </table>
                    <a href="/incoming" class="btn btn-success">Back</a>

                    {{-- <div class="">
                        <strong>Item Code : </strong>
                        {{ $incoming->item_code }}
                    </div>
                    <div class="">
                        <strong>Entry Date : </strong>
                        {{ $incoming->entry_date }}
                    </div>
                    <div class="">
                        <strong>Item Name : </strong>
                        {{ $incoming->item_name }}
                    </div>
                    <div class="">
                        <strong>Type : </strong>
                        {{ $incoming->type }}
                    </div>
                    <div class="">
                        <strong>Sender Phone : </strong>
                        {{ $incoming->sender_phone }}
                    </div>
                    <div class="">
                        <strong>Image : </strong>
                        <img src="/images/{{ $incoming->image }}" width="300px">
                    </div>
                    <div class="">
                        <strong>Count : </strong>
                        {{ $incoming->count }}
                    </div>
                    <div class="">
                        <strong>Sender : </strong>
                        {{ $incoming->sender }}
                    </div>
                    <div class="">
                        <strong>Receiver : </strong>
                        {{ $incoming->receiver }}
                    </div>
                    <div class="">
                        <strong>Receiver : </strong>
                        {{ $incoming->description }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
