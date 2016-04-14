@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Categories</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($category))
            <h2>Edit</h2>
            {!! Form::model($category, ['method' => 'PATCH', 'route' => ['admin.categories.update', $category->id]]) !!}
            @else
                <h2>Add</h2>
                {!! Form::model($category = new App\Category, ['route' => ['admin.categories.store']]) !!}
            @endif

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
                {!! Form::label('Parent', 'Parent') !!}
                {!! Form::select('parent_id', $parents, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}

            @include('admin.list')

        </div>
    </div>
@endsection