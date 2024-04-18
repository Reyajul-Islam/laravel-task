<?php

namespace App\Repositories;

use App\Models\Hostel;
use DB;
use Illuminate\Support\Facades\Log;

class HostelRepository implements HostelRepositoryInterface
{
    protected $hostels;

    public function __construct(Hostel $hostels)
    {
         $this->hostels = $hostels;
    }

    public function index()
    {
        $hostels = $this->hostels->orderBy('id', 'desc')->get();
        return view('home', compact('hostels'));
    }

    public function createHostel()
    {
        return view('pages.create_hostel');
    }

    public function storeHostel($attribute)
    {
        $hostel = $this->hostels;

        DB::beginTransaction();
        try {
            $hostel->create($attribute);

            DB::commit();
            return redirect()->route('home')->with('success','Hostel Has been inserted successfully');
        }
        catch (\Exception $e){
            DB::rollBack();
            Log::info("Hostel update error - " . $e->getMessage());
            return redirect()->back()->with('error','Something went wrong please try again.');
        }
    }

    public function findById($id)
    {
        $hostel = $this->hostels->find($id);
        return view('pages.edit_hostel', compact('hostel'));
    }

    public function updateHostel($attribute, $id)
    {
        $hostel = $this->hostels->find($id);

        DB::beginTransaction();
        try {
            $hostel->update($attribute);

            DB::commit();
            return redirect()->route('home')->with('success','Hostel Has been updated successfully');
        }
        catch (\Exception $e){
            DB::rollBack();
            Log::info("Hostel update error - " . $e->getMessage());
            return redirect()->back()->with('error','Something went wrong please try again.');
        }
    }
}
