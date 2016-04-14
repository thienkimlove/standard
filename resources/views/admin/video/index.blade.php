@extends('admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Media</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Danh sách Media
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tiêu đề </th>
                                <th>URL</th>
                                <th>Is Video?</th>
                                <th>Image</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($videos as $video)
                                <tr>
                                    <td>{{$video->id}}</td>
                                    <td>{{$video->title}}</td>
                                    <td>{{$video->url}}</td>
                                    <td>{{($video->is_video) ? 'Yes' : 'No'}}</td>
                                    <td><img src="{{url('t/110x70', $video->image)}}" /></td>
                                    <td>
                                        <button id-attr="{{$video->id}}" class="btn btn-primary btn-sm edit-video"  type="button">Sửa</button>
                                        <br>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.videos.destroy', $video->id]]) !!}
                                        <button type="submit" class="btn btn-danger btn-mini"> Xoa </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-sm-6"><button class="btn btn-primary add-video" type="button"> Thêm </button></div>
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
            $('.add-video').click(function(){
                window.location.href = window.baseUrl + '/admin/videos/create';
            });
            $('.edit-video').click(function(){
                window.location.href = window.baseUrl + '/admin/videos/' + $(this).attr('id-attr') + '/edit';
            });
        });
    </script>
@endsection