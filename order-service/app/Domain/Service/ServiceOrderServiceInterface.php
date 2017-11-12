<?php
/**
 * Created by PhpStorm.
 * User: diegoemerick
 * Date: 10/11/17
 * Time: 17:04
 */

namespace App\Domain\Service;

interface ServiceOrderServiceInterface
{
    /**
     * @param $serviceOrder
     * @return mixed
     */
    public function create($serviceOrder);

    /**
     * @param $serviceOrder
     * @param $id
     * @return mixed
     */
    public function update($serviceOrder, $id);

    /**
     * @return mixed
     */
    public function index();

    /**
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $id
     * @param $lawyerId
     * @return mixed
     */
    public function defineLawyerResponseToOrder($id, $lawyerId);
}