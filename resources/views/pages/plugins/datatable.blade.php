@push('plugin-css')
    <link href="{{ asset('plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('plugin-js')
    <script src="{{ asset('plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
@endpush
