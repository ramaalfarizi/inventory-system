@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Outgoing Item') }}</div>
                
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
                    <form action="{{ route('outgoing.update', $outgoing->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="item_code" class="form-label">Item code</label>
                                    <input type="text" name="item_code" class="form-control" id="item_code" value="{{ $outgoing->item_code }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="item_name" class="form-label">Item name</label>
                                    <input type="text" name="item_name" class="form-control" id="item_name" value="{{ $outgoing->item_name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exit_date" class="form-label">Exit date</label>
                                    <input type="text" name="exit_date" class="form-control" id="exit_date" value="{{ $outgoing->exit_date }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-select" name="type" id="type">
                                        <option value="">Select type</option>
                                        <option value="surat" @if($outgoing->type == "surat") selected @endif>Surat</option>
                                        <option value="paket" @if($outgoing->type == "paket") selected @endif>Paket</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="count" class="form-label">Count</label>
                                    <input type="number" name="count" class="form-control" id="count" value="{{ $outgoing->count }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="company_phone" class="form-label">Company phone</label>
                                    <input type="number" name="company_phone" class="form-control" id="company_phone" value="{{ $outgoing->company_phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="sender" class="form-label">Sender</label>
                                    <input type="text" name="sender" class="form-control" id="sender" value="{{ $outgoing->sender }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="receiver" class="form-label">Receiver</label>
                                    <input type="text" name="receiver" class="form-control" id="receiver" value="{{ $outgoing->receiver }}">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file" id="image">
                            <img src="/images/{{ $outgoing->image }}" width="300px">
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" rows="10" class="form-control" id="description">{{ $outgoing->description }}</textarea>
                        </div>
                        {{-- <input type="submit" class="btn btn-success" name="submit" value="Save"> --}}
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
