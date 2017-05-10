<?php
/**
 * Created by PhpStorm.
 * User: Bruno Moura
 * Date: 09/05/2017
 * Time: 15:56
 */

namespace Delivery\Services;

class OrderStatusService {
    /** @var array  */
    private $status = [
        0 => 'pendente',
        1 => 'encaminhado',
        2 => 'entregue',
        3 => 'cancelado',
    ];

    /**
     * Retorna descrição de status de acordo com o número
     * @param $number
     * @return mixed|string
     */
    public function get($number){
        return $this->status[$number] ?? 'Status inválido';
    }

    /**
     * Retorna todos os Status
     * @return array
     */
    public function getStatus(){
        return $this->status;
    }
}