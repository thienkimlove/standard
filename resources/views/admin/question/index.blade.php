@extends('admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Hỏi Đáp</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Danh sách hỏi đáp
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nguoi hoi</th>
                                <th>Câu hỏi</th>
                                <th>Nguoi tra loi</th>
                                <th>Câu trả lời</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{$question->id}}</td>
                                    <td>{{$question->ask_person}}</td>
                                    <td>{{str_limit($question->question, 40)}}</td>
                                    <td>{{$question->answer_person}}</td>
                                    <td>{{ str_limit($question->answer, 40) }}</td>
                                    <td>
                                        <button id-attr="{{$question->id}}" class="btn btn-primary btn-sm edit-question"  type="button">Sửa</button>
                                        <br>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.questions.destroy', $question->id]]) !!}
                                        <button type="submit" class="btn btn-danger btn-mini"> Xoa </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">

                        <div class="col-sm-6">{!! $questions->render() !!}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><button class="btn btn-primary add-question" type="button"> Thêm </button></div>
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
            $('.add-question').click(function(){
                window.location.href = window.baseUrl + '/admin/questions/create';
            });
            $('.edit-question').click(function(){
                window.location.href = window.baseUrl + '/admin/questions/' + $(this).attr('id-attr') + '/edit';
            });
        });
    </script>
@endsection