<?php
/**
 * Created by PhpStorm.
 * User: diegoemerick
 * Date: 10/11/17
 * Time: 17:21
 */

namespace App\Infrastructure\Service;

use App\Domain\Model\Company;
use App\Domain\Service\CompanyServiceInterface;
use App\Domain\Service\LawyerServiceInterface;
use GuzzleHttp\Client;

class LawyerService implements LawyerServiceInterface
{
    public function getLawyer($id)
    {
        $client = new Client();
        $res = $client->get(Company::URI . '/lawyer/' . $id)
            ->getBody()->getContents();

        return json_decode($res);
    }
}