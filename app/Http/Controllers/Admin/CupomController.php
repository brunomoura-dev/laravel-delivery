<?php

namespace Delivery\Http\Controllers\Admin;

use Delivery\Http\Controllers\Controller;
use Delivery\Http\Requests\AdminCupomRequest;
use Delivery\Repositories\CupomRepository;

class CupomController extends Controller {
    /**
     * @var CupomRepository
     */
    private $repository;

    function __construct(CupomRepository $repository){
        $this->repository = $repository;
    }

    public function index(){
        $cupoms = $this->repository->paginate();

        return view('admin.cupom.index', compact('cupoms'));
    }

    public function edit($id){
        $cupom = $this->repository->find($id);
        
        return view('admin.cupom.update', compact('cupom'));
    }

    public function create(){
        return view('admin.cupom.create');
    }

    public function store(AdminCupomRequest $request){
        $this->repository->create($request->all());

        return redirect()->route('admin.cupom.index');
    }

    public function update(AdminCupomRequest $request, $id){
        $this->repository->update($request->all(), $id);

        return redirect()->route('admin.cupom.index');
    }

    public function destroy($id){
        $this->repository->delete($id);
        return redirect()->route('admin.cupom.index');
    }
}
