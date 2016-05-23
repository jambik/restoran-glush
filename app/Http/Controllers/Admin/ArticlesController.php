<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;

class ArticlesController extends BackendController
{
    protected $resourceName = null;

    protected $model = null;

    public function __construct()
    {
        $this->resourceName = 'articles';
        $this->model = new Article();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $items = $this->model->sorted()->get();

        return view('admin.'.$this->resourceName.'.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $tags = $this->model->existingTags()->pluck('name');

        return view('admin.'.$this->resourceName.'.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $item = $this->model->create($request->all());

        $request->tags ? $item->tag(explode(',', $request->tags)) : null;

        return redirect(route('admin.'.$this->resourceName.'.index'));
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
        $item = $this->model->findOrFail($id);
        $tags = $this->model->existingTags()->pluck('name');

        return view('admin.'.$this->resourceName.'.edit', compact('item', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required|unique:' . $this->model->getTable() . ',slug,'.$id,
        ]);

        $item = $this->model->findOrFail($id);

        $item->update($request->all());

        $request->tags ? $item->retag(explode(',', $request->tags)) : $item->untag();

        return redirect(route('admin.'.$this->resourceName.'.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->model->destroy($id);

        return redirect(route('admin.'.$this->resourceName.'.index'));
    }
}
