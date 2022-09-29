@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Outgoing Item') }}</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ route('outgoing.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="item_code" class="form-label">Item code</label>
                                    <input type="text" name="item_code" class="form-control" id="item_code" placeholder="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="item_name" class="form-label">Item name</label>
                                    <input type="text" name="item_name" class="form-control" id="item_name" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exit_date" class="form-label">Exit date</label>
                                    <input type="date" name="exit_date" class="form-control" id="exit_date" placeholder="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-select" name="type" id="type">
                                        <option value="">Select type</option>
                                        <option value="surat">Surat</option>
                                        <option value="paket">Paket</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="count" class="form-label">Count</label>
                                    <input type="number" name="count" class="form-control" id="count" placeholder="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="company_phone" class="form-label">Company phone</label>
                                    <input type="number" name="company_phone" class="form-control" id="company_phone" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="sender" class="form-label">Sender</label>
                                    <input type="text" name="sender" class="form-control" id="sender" placeholder="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="receiver" class="form-label">Receiver</label>
                                    <input type="text" name="receiver" class="form-control" id="receiver" placeholder="">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file" id="image">
                        </div> --}}
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file" id="image">
                            {{-- <img src="/images/{{ $outgoing->image }}" width="300px"> --}}
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" rows="10" class="form-control" id="description"></textarea>
                        </div>
                        {{-- <input type="submit" class="btn btn-success" name="submit" value="Save"> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
