@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tags</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2>Edit</h2>
            {!! Form::model($tag, ['method' => 'PATCH', 'route' => ['admin.tags.update', $tag->id]]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

                <div class="form-group">
                    {!! Form::label('seo_name', 'SEO Title') !!}
                    {!! Form::text('seo_name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('desc', 'SEO Description') !!}
                    {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('keywords', 'SEO Keywords') !!}
                    {!! Form::textarea('keywords', null, ['class' => 'form-control']) !!}
                </div>

            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}

            @include('admin.list')

        </div>
    </div>
@endsection