<?php
/**
 * Created by PhpStorm.
 * User: Bruno Moura
 * Date: 09/05/2017
 * Time: 15:56
 */

namespace Delivery\Services;

use Delivery\Repositories\ClientRepository;
use Delivery\Repositories\UserRepository;

class ClientService {
    private $clientRepository;
    private $userRepository;

    public function __construct(ClientRepository $clientRepository, UserRepository $userRepository){
        $this->clientRepository = $clientRepository;
        $this->userRepository = $userRepository;
    }

    public function update($data, $id){
        if($client = $this->clientRepository->update($data, $id)){
            $this->userRepository->update($data['user'], $client->user->id);
        }
    }

    public function create($data){
        $data['name'] = $data['user']['name'];
        $data['email'] = $data['user']['email'];
        $data['password'] = bcrypt('123456');
        if($user = $this->userRepository->create($data)){
            $user->client()->create($data);
        }
    }
}