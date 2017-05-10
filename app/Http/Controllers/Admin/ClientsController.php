<?php

namespace Delivery\Http\Controllers\Admin;

use Delivery\Http\Controllers\Controller;
use Delivery\Http\Requests\AdminClientRequest;
use Delivery\Repositories\ClientRepository;
use Delivery\Services\ClientService;

class ClientsController extends Controller {
    /**
     * @var ClientRepository
     */
    private $repository;
    /**
     * @var ClientService
     */
    private $clientService;

    function __construct(ClientRepository $repository, ClientService $clientService){
        $this->repository = $repository;
        $this->clientService = $clientService;
    }

    public function index(){
        $clients = $this->repository->paginate();

        return view('admin.client.index', compact('clients'));
    }

    public function edit($id){
        $client = $this->repository->find($id);

        return view('admin.client.update', compact('client'));
    }

    public function create(){
        return view('admin.client.create');
    }

    public function store(AdminClientRequest $request){
        $this->clientService->create($request->all());

        return redirect()->route('admin.client.index');
    }

    public function update(AdminClientRequest $request, $id){
        $this->clientService->update($request->all(), $id);

        return redirect()->route('admin.client.index');
    }

    public function destroy($id){
        $this->repository->delete($id);

        return redirect()->route('admin.client.index');
    }
}
