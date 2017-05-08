<?php

namespace Delivery\Http\Controllers\Admin;

use Delivery\Http\Controllers\Controller;
use Delivery\Http\Requests\AdminCategoryRequest;
use Delivery\Repositories\CategoryRepository;

class CategoriesController extends Controller {
    /**
     * @var CategoryRepository
     */
    private $repository;

    function __construct(CategoryRepository $repository){
        $this->repository = $repository;
    }

    public function index(){
        $categories = $this->repository->paginate();

        return view('admin.category.index', compact('categories'));
    }

    public function edit($id){
        $category = $this->repository->find($id);

        return view('admin.category.update', compact('category'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(AdminCategoryRequest $request){
        $this->repository->create($request->all());

        return redirect()->route('admin.category.index');
    }

    public function update(AdminCategoryRequest $request, $id){
        $this->repository->update($request->all(), $id);

        return redirect()->route('admin.category.index');
    }

    public function destroy($id){
        $this->repository->delete($id);
        return redirect()->route('admin.category.index');
    }
}
