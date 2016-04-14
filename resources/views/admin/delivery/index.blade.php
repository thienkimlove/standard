@extends('admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Deliveries</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Province</th>
                                <th>City</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($deliveries as $delivery)
                                <tr>
                                    <td>{{$delivery->id}}</td>
                                    <td>{{$delivery->name}}</td>
                                    <td>{{$delivery->address}}</td>
                                    <td>{{$delivery->province}}</td>
                                    <td>{{$delivery->city}}</td>
                                    <td>{{$delivery->phone}}</td>

                                    <td>
                                        <button id-attr="{{$delivery->id}}" class="btn btn-primary btn-sm edit-delivery" type="button">Edit</button>&nbsp;
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.deliveries.destroy', $delivery->id]]) !!}
                                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="row">

                        <div class="col-sm-6">{!!$deliveries->render()!!}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-primary add-delivery" type="button">Add</button>
                        </div>
                    </div>


                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>
@endsection
@section('footer')
    <script>
        $(function(){
            $('.add-delivery').click(function(){
                window.location.href = window.baseUrl + '/admin/deliveries/create';
            });
            $('.edit-delivery').click(function(){
                window.location.href = window.baseUrl + '/admin/deliveries/' + $(this).attr('id-attr') + '/edit';
            });
        });
    </script>
@endsection