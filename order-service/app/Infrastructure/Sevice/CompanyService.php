<?php
/**
 * Created by PhpStorm.
 * User: diegoemerick
 * Date: 10/11/17
 * Time: 17:21
 */

namespace App\Infrastructure\Service;


use App\Domain\Company;
use App\Domain\Service\CompanyServiceInterface;
use GuzzleHttp\Client;

class CompanyService implements CompanyServiceInterface
{
    public function getCompany($id)
    {
        $client = new Client();
        $res = $client->get(Company::URI . '/company/' . $id)
            ->getBody()->getContents();

        return json_decode($res);
    }
}