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
                    <a href="{{ route('outgoing.create') }}" class="btn btn-success mb-3">Add Outgoing Item</a>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @livewire('outgoing-item-table')
                    
                    {{-- <table class="table table-striped table-bordered">
                        <tr>
                            <th>NO.</th>
                            <th>ITEM CODE</th>
                            <th>EXIT DATE</th>
                            <th>ITEM NAME</th>
                            <th>TYPE</th>
                            <th>COMAPNY PHONE</th>
                            <th>SENDER</th>
                            <th>RECEIVER</th>
                            <th>COUNT</th>
                            <th>IMAGE</th>
                            <th>DESCRIPTION</th>
                            <th>ACTION</th>
                        </tr>
                        @foreach ($outgoing as $out)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $out->item_code; }}</td>
                                <td>{{ $out->exit_date; }}</td>
                                <td>{{ $out->item_name; }}</td>
                                <td>{{ $out->type; }}</td>
                                <td>{{ $out->company_phone; }}</td>
                                <td>{{ $out->sender; }}</td>
                                <td>{{ $out->receiver; }}</td>
                                <td>{{ $out->count; }}</td>
                                <td><img src="/images/{{ $out->image }}" width="100px"></td>
                                <td>{{ $out->description; }}</td>
                                <td>
                                    <form action="{{ route('outgoing.destroy', $out->id) }}" method="POST">
                                    <a href="{{ route('outgoing.show', $out->id) }}" class="btn btn-primary">View</a>
                                        
                                    <a href="{{ route('outgoing.edit', $out->id) }}" class="btn btn-warning">Edit</a>
                                    
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {!! $outgoing->links() !!} --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection