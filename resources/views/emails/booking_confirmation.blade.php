<x-mail::message>
# Booking Confirmation

Your booking details:
- Hostel: {{ $bookingInfo->hostel->name }}
- Check-in Date: {{ \App\Helpers\Helper::dateFormat($bookingInfo->check_in_date) }}
- Check-out Date: {{ \App\Helpers\Helper::dateFormat($bookingInfo->check_out_date) }}
- Room Type: {{ \App\Helpers\Helper::roomTypeByID($bookingInfo->room_type) }}
- Occupants: {{ $bookingInfo->occupants }}

<br>
Thank you for choosing our hostel!
</x-mail::message>
