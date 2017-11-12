<?php
/**
 * Created by PhpStorm.
 * User: diegoemerick
 * Date: 10/11/17
 * Time: 17:21
 */

namespace App\Infrastructure\Service;

use App\Domain\Model\Lawyer;
use App\Domain\Service\LawyerServiceInterface;
use GuzzleHttp\Client;

class LawyerService implements LawyerServiceInterface
{
    public function getLawyer($id)
    {
        $client = new Client();
        $res = $client->get(Lawyer::URI . '/lawyer/' . $id)
            ->getBody()->getContents();

        return json_decode($res);
    }
}