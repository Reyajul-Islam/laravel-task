<?php

namespace App\Repositories;

use App\Mail\BookingConfirmation;
use App\Models\Booking;
use App\Models\Hostel;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Log;
use Mail;

class BookingRepository implements BookingRepositoryInterface
{
    protected $booking;
    protected $hostels;

    public function __construct(Booking $booking, Hostel $hostels)
    {
         $this->booking = $booking;
         $this->hostels = $hostels;
    }

    public function bookNow($hostel)
    {
        $hostel = $this->hostels->find($hostel);
        return view('pages.book_now', compact('hostel'));
    }

    public function storeBookingInfo($attribute)
    {
        $booking = $this->booking;

        DB::beginTransaction();
        try {
            $attribute['user_id'] = Auth::user()->id;
            $data = $booking->create($attribute);

            if($attribute['email']){
                $bookingInfo = $booking->with('hostel')->find($data->id);
                Mail::to($attribute['email'])->send(new BookingConfirmation($bookingInfo));
            }

            DB::commit();
            return redirect()->route('home')->with('success','Your booking has been completed successfully');
        }
        catch (\Exception $e){
            DB::rollBack();
            Log::info("Booking error - " . $e->getMessage());
            return redirect()->back()->with('error','Something went wrong please try again.');
        }
    }

    public function bookingList()
    {
        $bookings = $this->booking->with('user', 'hostel');
            if(Auth::user()->username){
                $bookings = $bookings->where('user_id', Auth::user()->id);
            }
        $bookings = $bookings->orderBy('id', 'desc')->get();
        return view('bookings', compact('bookings'));
    }
}
