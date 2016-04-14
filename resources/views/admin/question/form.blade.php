@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Hỏi Đáp</h1>
        </div>

    </div>
  <div class="row">
      <div class="col-lg-6">
          @if (!empty($question))
          <h2>Sửa câu hỏi "{{ $question->question }}"</h2>
          {!! Form::model($question, ['method' => 'PATCH', 'route' => ['admin.questions.update', $question->id], 'files' => true]) !!}
          @else
              <h2>Thêm Hỏi Đáp</h2>
              {!! Form::model($question = new App\Question, ['route' => ['admin.questions.store'], 'files' => true]) !!}
          @endif

              <div class="form-group">
                  {!! Form::label('image', 'Ảnh đại diện cho cau hoi') !!}
                  @if ($question->image)
                      <img src="{{url('img/cache/120x120/' . $question->image)}}" />
                      <hr>
                  @endif
                  {!! Form::file('image', null, ['class' => 'form-control']) !!}
              </div>


              <div class="form-group">
              {!! Form::label('ask_person', 'Nguoi dat cau hoi') !!}
              {!! Form::text('ask_person', null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('question', 'Câu hỏi') !!}
              {!! Form::textarea('question', null, ['class' => 'form-control']) !!}
          </div>

              <div class="form-group">
                  {!! Form::label('seo_question', 'SEO Title') !!}
                  {!! Form::text('seo_question', null, ['class' => 'form-control']) !!}
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
              {!! Form::label('answer_person', 'Nguoi tra loi') !!}
              {!! Form::text('answer_person', null, ['class' => 'form-control']) !!}
          </div>


          <div class="form-group">
              {!! Form::label('answer', 'Câu trả lời') !!}
              {!! Form::textarea('answer', null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
          </div>
          {!! Form::close() !!}
          @include('errors.list')

      </div>
  </div>
@stop