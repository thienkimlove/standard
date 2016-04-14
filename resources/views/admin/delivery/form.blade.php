@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Deliveries</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($delivery))
            <h2>Edit</h2>
            {!! Form::model($delivery, ['method' => 'PATCH', 'route' => ['admin.deliveries.update', $delivery->id]]) !!}
            @else
                <h2>Add</h2>
                {!! Form::model($delivery = new App\Delivery, ['route' => ['admin.deliveries.store']]) !!}
            @endif

            <div class="form-group">
                {!! Form::label('name', 'Name Nha Thuoc') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

                <div class="form-group">
                    {!! Form::label('city', 'Thanh Pho') !!}
                    {!! Form::text('city', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('province', 'Quan Huyen') !!}
                    {!! Form::text('province', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('phone', 'Phone') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('address', 'Address') !!}
                    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
                </div>


            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}

            @include('admin.list')

        </div>
    </div>
@endsection