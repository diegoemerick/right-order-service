<?php
/**
 * Created by PhpStorm.
 * User: diegoemerick
 * Date: 10/11/17
 * Time: 17:03
 */

namespace App\Domain\Repository;

interface ServiceOrderRepositoryInterface
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
     * @param $id
     * @return mixed
     */
    public function delete($id);

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
     * @param $lawyerId
     * @return mixed
     */
    public function defineLaywerToOrder($id, $lawyerId);
}