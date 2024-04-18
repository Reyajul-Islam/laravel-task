<?php

namespace App\Repositories;

interface HostelRepositoryInterface
{
    public function index();
    public function createHostel();
    public function storeHostel($attribute);
    public function findById($id);
    public function updateHostel($attribute, $id);
}
