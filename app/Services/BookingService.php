<?php

namespace App\Services;
use App\Repositories\BookingRepository;

class BookingService
{
    protected $bookingRepository;

    public function __construct(BookingRepository $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }

    /**
     * Show the application hostel list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function bookNow($hostel)
    {
        return $this->bookingRepository->bookNow($hostel);
    }

    /**
     * @param array $attribute
     * @return mixed
     */
    public function storeBookingInfo($attribute)
    {
        return $this->bookingRepository->storeBookingInfo($attribute);
    }

    /**
     * Show the application booking list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function bookingList()
    {
        return $this->bookingRepository->bookingList();
    }
}
