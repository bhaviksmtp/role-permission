@extends('layouts.app')

@section('content')
<div class="wrapper fadeInDown">
    <div class="container">

    
        <table class="table" id="example" width='100%'  style='border-collapse: collapse;'>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('#example').DataTable({
            dom: 'lDfrtip',
            scrollX: true,
            scrollCollapse: true,
            scroller: true,
            searching: true,
            processing: true,
            serverSide: true,
            destroy: true,
            buttons: [
                      'colvis'
            ],
            "columnDefs": [{
                    'targets': [3],
                    'orderable': false,
            }],
            ajax : { type: 'GET', url: "{{ url('pagination') }}"},
            "order": [],
            columns: [
                {data : 'id'},
                {data : 'name'},
                {data : 'email'},
            ],
            'columnDefs': [ {
                'targets': [1], // column index (start from 0)
                'orderable': false, // set orderable false for selected columns
            }],
        });
    });
</script>
@endsection