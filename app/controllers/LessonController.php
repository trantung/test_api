<?php

use Acme\Transformers\LessonTransformer;


class LessonController extends ApiController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	protected $lessonTransformer;

	function __construct(LessonTransformer $lessonTransformer)
	{	
		$this->lessonTransformer = $lessonTransformer;
	}


	public function index()
	{
		$lessons = Lesson::all();
		return $this->respond([
						'data' =>$this->lessonTransformer->transformCollection($lessons->all()),
			]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$lesson = Lesson::find($id);
		if(!$lesson){
			return $this->respondNotFound('not exist');
		}
		return $this->respond([
						'data' =>$this->lessonTransformer->transform($lesson)
						]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
