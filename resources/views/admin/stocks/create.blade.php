@extends('admin.app')
@section('title') Stocks @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-line-chart"></i>&nbsp;Stocks</h1>
            <p>Add Stocks</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <stock-form><stock-form />
        </div>
        
    </div>

@endsection
@push('scripts')
    {{-- <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script> --}}
@endpush
