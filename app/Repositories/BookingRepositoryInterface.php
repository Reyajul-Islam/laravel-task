<?php

namespace App\Repositories;

interface BookingRepositoryInterface
{
    public function bookNow($attribute);
    public function storeBookingInfo($attribute);
}
