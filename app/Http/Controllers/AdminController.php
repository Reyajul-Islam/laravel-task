<?php

namespace App\Http\Controllers;

use App\Http\Requests\HostelRequest;
use App\Services\BookingService;
use App\Services\HostelService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $hostelService;
    protected $bookingService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        HostelService $hostelService,
        BookingService $bookingService)
    {
        $this->middleware('auth');

        $this->hostelService = $hostelService;
        $this->bookingService = $bookingService;;
    }

    /**
     * Show the application hostel list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function hostelList()
    {
        return $this->hostelService->index();
    }

    /**
     * update the application hostel.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createHostel()
    {
        return $this->hostelService->createHostel();
    }

    /**
     * update the application hostel.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function storeHostel(HostelRequest $request)
    {
        return $this->hostelService->storeHostel($request->validated());
    }

    /**
     * edit the application hostel.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function manageHostel($id)
    {
        return $this->hostelService->manageHostel($id);
    }

    /**
     * update the application hostel.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateHostel(HostelRequest $request, $id)
    {
        return $this->hostelService->updateHostel($request->validated(), $id);
    }

    /**
     * Show the application booking list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function bookingList()
    {
        return $this->bookingService->bookingList();
    }
}
