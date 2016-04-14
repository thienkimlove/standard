@extends('admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Setting</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List all settings.
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($settings as $setting)
                                <tr>
                                    <td>{{$setting->id}}</td>
                                    <td>{{$setting->name}}</td>
                                    <td>{!! $setting->value !!}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm edit-setting" id-attr="{{$setting->id}}"  type="button">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">

                        <div class="col-sm-6">{!! $settings->render() !!}</div>
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
            $('.edit-setting').click(function(){
                window.location.href = window.baseUrl + '/admin/settings/' + $(this).attr('id-attr') + '/edit';
            });
        });
    </script>
@endsection