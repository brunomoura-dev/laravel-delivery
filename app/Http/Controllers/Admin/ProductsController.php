<?php

namespace Delivery\Http\Controllers\Admin;

use Delivery\Http\Controllers\Controller;
use Delivery\Http\Requests\AdminProductRequest;
use Delivery\Repositories\CategoryRepository;
use Delivery\Repositories\productRepository;

class ProductsController extends Controller {
    /**
     * @var ProductRepository
     */
    private $repository;
    private $categoryRepository;

    function __construct(ProductRepository $repository, CategoryRepository $categoryRepository){
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(){
        $products = $this->repository->paginate();

        return view('admin.product.index', compact('products'));
    }

    public function edit($id){
        $product = $this->repository->find($id);
        $categories = $this->categoryRepository->all()->pluck('name','id');

        return view('admin.product.update', compact('product', 'categories'));
    }

    public function create(){
        $categories = $this->categoryRepository->all()->pluck('name','id');
        return view('admin.product.create', compact('categories'));
    }

    public function store(AdminProductRequest $request){
        $this->repository->create($request->all());

        return redirect()->route('admin.product.index');
    }

    public function update(AdminProductRequest $request, $id){
        $this->repository->update($request->all(), $id);

        return redirect()->route('admin.product.index');
    }

    public function destroy($id){
        $this->repository->delete($id);
        return redirect()->route('admin.product.index');
    }
}
