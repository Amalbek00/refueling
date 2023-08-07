<?php
namespace App\Services;

use App\Models\Client;

class ClientService
{
    public function getAllClients()
    {
        return Client::paginate(10);
    }
    public function createClient(array $data)
    {
        return Client::create($data);
    }

    public function updateClient(Client $client, array $data)
    {
        $client->update($data);
    }

}
