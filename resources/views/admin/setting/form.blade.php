@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Setting</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
                <h2>Edit</h2>
                {!! Form::model($setting, ['method' => 'PATCH', 'route' => ['admin.settings.update', $setting->id]]) !!}



            <div class="form-group">
                {!! Form::label('value', 'Value') !!}
                {!! Form::textarea('value', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}


            @include('admin.list')

        </div>
    </div>
@stop