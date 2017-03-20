@section('css')
    @include('relations::layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%']) !!}

@section('scripts')
    @include('relations::layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endsection