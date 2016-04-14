@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Media</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-6">
            @if (!empty($video))
                <h2>Sửa media "{{ $video->title }}"</h2>
                {!! Form::model($video, ['method' => 'PATCH', 'route' => ['admin.videos.update', $video->id], 'files' => true]) !!}
            @else
                <h2>Thêm Media</h2>
                {!! Form::model($video = new App\Video, ['route' => ['admin.videos.store'], 'files' => true]) !!}
            @endif

            <div class="form-group">
                {!! Form::label('image', 'Ảnh đại diện cho Video') !!}
                @if ($video->image)
                    <img src="{{url('img/cache/120x120/' . $video->image)}}"/>
                    <hr>
                @endif
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('title', 'Tiêu đề') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

                <div class="form-group">
                        {!! Form::label('url', 'Media URL') !!}
                        {!! Form::text('url', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('desc', 'Mo ta Media') !!}
                    {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
                </div>



                <div class="form-group">
                    {!! Form::label('is_video', 'Is Hot?') !!}
                    {!! Form::checkbox('is_video', null, null) !!}
                </div>

            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}
            @include('errors.list')

        </div>
    </div>
@stop