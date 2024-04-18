<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Services\BookingService;
use App\Services\HostelService;

class HomeController extends Controller
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
    public function index()
    {
        return $this->hostelService->index();
    }

    /**
     * Show the application hostel list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function bookNow($hostel)
    {
        return $this->bookingService->bookNow($hostel);
    }

    /**
     * @param HostelRequest $request
     * @return HostelResource
     */
    public function storeBookingInfo(BookingRequest $request)
    {
        return $this->bookingService->storeBookingInfo($request->validated());
    }
}
