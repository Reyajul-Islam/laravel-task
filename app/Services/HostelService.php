<?php

namespace App\Services;
use App\Repositories\HostelRepository;

class HostelService
{
    protected $hostelRepository;

    public function __construct(HostelRepository $hostelRepository)
    {
        $this->hostelRepository = $hostelRepository;
    }

    /**
     * Show the application hostel list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $this->hostelRepository->index();
    }

    /**
     * insert new hostel.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createHostel()
    {
        return $this->hostelRepository->createHostel();
    }

    /**
     * insert new hostel.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function storeHostel($attribute)
    {
        return $this->hostelRepository->storeHostel($attribute);
    }

    /**
     * manage the application hostels.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function manageHostel($id)
    {
        return $this->hostelRepository->findById($id);
    }

    /**
     * update the application hostels.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateHostel($attribute, $id)
    {
        return $this->hostelRepository->updateHostel($attribute, $id);
    }
}
