@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($product))
            <h2>Edit</h2>
            {!! Form::model($product, [
                'method' => 'PATCH',
                'route' => ['admin.products.update', $product->id],
                'files' => true
             ]) !!}
            @else
                <h2>Add</h2>
                {!! Form::model($product = new App\Product, ['route' => ['admin.products.store'], 'files' => true]) !!}
            @endif

            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('seo_title', 'SEO Title') !!}
                {!! Form::text('seo_title', null, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('desc', 'Short Description') !!}
                {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('keywords', 'SEO Keywords') !!}
                {!! Form::textarea('keywords', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content_tab1', 'Thông tin sản phẩm') !!}
                {!! Form::textarea('content_tab1', null, ['class' => 'form-control ckeditor']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content_tab2', 'NHẬN BIẾT BAO BÌ') !!}
                {!! Form::textarea('content_tab2', null, ['class' => 'form-control ckeditor']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content_tab3', 'Hướng dẫn sử dụng') !!}
                {!! Form::textarea('content_tab3', null, ['class' => 'form-control ckeditor']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('image', 'Image') !!}
                @if ($post->image)
                    <img src="{{url('img/cache/120x120/' . $product->image)}}" />
                    <hr>
                @endif
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('tag_list', 'Tags') !!}
                {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}

            @include('admin.list')

        </div>
    </div>
@stop

@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder : 'choose or add new tag',
            tags : true //allow to add new tag which not in list.
        });
    </script>
@endsection