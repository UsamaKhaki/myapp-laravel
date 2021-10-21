</div>

<!--Footer-->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/ionicons/ionicons.js') }}"></script>
<script src="{{ asset('plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('plugins/multipleselect/multiple-select.js') }}"></script>
<script src="{{ asset('plugins/multipleselect/multi-select.js') }}"></script>
<script src="{{ asset('plugins/sidebar/sidebar.js') }}"></script>
<script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/sticky.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('plugins/switcher/switcher.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function () {
        navbarActive('{{ url() ->current() }}')
    })
</script>
@stack('plugin-js')
@stack('footer-js')
<!--End Footer-->
</body>
</html>
