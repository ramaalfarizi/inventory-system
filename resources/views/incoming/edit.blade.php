@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Incoming Item') }}</div>
                
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
                    <form action="{{ route('incoming.update', $incoming->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="item_code" class="form-label">Item code</label>
                                    <input type="text" name="item_code" class="form-control" id="item_code" value="{{ $incoming->item_code }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="item_name" class="form-label">Item name</label>
                                    <input type="text" name="item_name" class="form-control" id="item_name" value="{{ $incoming->item_name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="entry_date" class="form-label">Entry date</label>
                                    <input type="text" name="entry_date" class="form-control" id="entry_date" value="{{ $incoming->entry_date }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-select" name="type" id="type">
                                        <option value="">Select type</option>
                                        <option value="surat" @if($incoming->type == "surat") selected @endif>Surat</option>
                                        <option value="paket" @if($incoming->type == "paket") selected @endif>Paket</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="count" class="form-label">Count</label>
                                    <input type="number" name="count" class="form-control" id="count" value="{{ $incoming->count }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="sender_phone" class="form-label">Sender phone</label>
                                    <input type="number" name="sender_phone" class="form-control" id="sender_phone" value="{{ $incoming->sender_phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="sender" class="form-label">Sender</label>
                                    <input type="text" name="sender" class="form-control" id="sender" value="{{ $incoming->sender }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="receiver" class="form-label">Receiver</label>
                                    <input type="text" name="receiver" class="form-control" id="receiver" value="{{ $incoming->receiver }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file" id="image">
                            <img src="/images/{{ $incoming->image }}" width="300px">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" rows="10" class="form-control" id="description">{{ $incoming->description }}</textarea>
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
