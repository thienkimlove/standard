<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\QuestionRequest;
use App\Question;

class QuestionsController extends AdminController {

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = Question::latest('updated_at')->paginate(env('ITEM_PER_PAGE'));
        return view('admin.question.index', compact('questions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.question.form');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param QuestionRequest $request
     * @return Response
     */
	public function store(QuestionRequest $request)
	{
		$data = $request->all();
		$data['image'] = ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';
		Question::create($data);
        flash('Them moi hoi dap thanh cong!', 'success');
        return redirect('admin/questions');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$question = Question::findOrFail($id);
        return view('admin.question.form', compact('question'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param QuestionRequest $request
     * @return Response
     */
	public function update($id, QuestionRequest $request)
	{
        $question =  Question::findOrFail($id);
		$data = $request->all();
		if ($request->file('image') && $request->file('image')->isValid()) {
			$data['image'] = $this->saveImage($request->file('image'), $question->image);
		}
        $question->update($data);
        flash('Sua hoi đáp thành công!', 'success');
        return redirect('admin/questions');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $question = Question::findOrFail($id);
		if (file_exists(public_path('files/images/' . $question->image))) {
			@unlink(public_path('files/images/' . $question->image));
		}
        $question->delete();

        flash('Xoa hoi dap thanh cong!');
        return redirect('admin/questions');
	}
}
