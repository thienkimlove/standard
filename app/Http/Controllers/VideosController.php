<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\VideoRequest;
use App\Video;

class VideosController extends AdminController {	

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$videos = Video::all();
		return view('admin.video.index', compact('videos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{		
		return view('admin.video.form');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param QuestionRequest $request
	 * @return Response
	 */
	public function store(VideoRequest $request)
	{
		$data = $request->all();
		$data['image'] = ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';		
		Video::create($data);
		flash('Them moi media thanh cong!', 'success');
		return redirect('admin/videos');
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
		$video = Video::findOrFail($id);
		return view('admin.video.form', compact('video'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 * @param QuestionRequest $request
	 * @return Response
	 */
	public function update($id, VideoRequest $request)
	{
		$video =  Video::findOrFail($id);
		$data = $request->all();
		if ($request->file('image') && $request->file('image')->isValid()) {
			$data['image'] = $this->saveImage($request->file('image'), $video->image);
		}		
		$video->update($data);
		flash('Sua media thành công!', 'success');
		return redirect('admin/videos');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$video = Video::findOrFail($id);
		if (file_exists(public_path('files/images/' . $video->image))) {
			@unlink(public_path('files/images/' . $video->image));
		}
		$video->delete();

		flash('Xoa media thanh cong!');
		return redirect('admin/videos');
	}
}
