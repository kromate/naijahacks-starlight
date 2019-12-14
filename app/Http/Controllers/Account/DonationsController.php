<?php

namespace App\Http\Controllers\Account;

use App\Donation;
use App\Donor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pageTitle' => 'My Donations',
            'donations' => Donor::findOrFail(Auth::user()->id)->donations,
        ];

        return view('account.donations', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'pageTitle' => 'Create New Donation',
            'types' => Donation::DONATION_TYPE,
        ];
        return view('account.donations-create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'description' => 'required|string',
            'type' => 'in:' . implode(',', Donation::DONATION_TYPE),
            'quantity' => 'required|string',
            'status' => 'in:' . Donation::AVAILABLE_DONATION . ',' . Donation::UNAVAILABLE_DONATION,
            'state' => 'required|string',
            'lga' => 'required|string',
            'address_line1' => 'required|string',
            'address_line2' => 'required|string',
        ];

        // $this->validate($request, $rules);

        $data = $request->except(['state', 'address_line1', 'address_line2', 'lga']);
        $data['status'] = $request->status ?: Donation::AVAILABLE_DONATION;
        $data['location'] = [
            'state' => $request->state,
            'address_line1' => $request->address_line1,
            'address_line2' => $request->address_line2,
            'lga' => $request->lga,
        ];

        $data['donor_id'] = Auth::user()->id;

        Donation::create($data);
        return redirect()->route('account.donations.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Donation $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        $data = [
            'pageTitle' => 'Edit Donation',
            'donation' => $donation,
            'types' => Donation::DONATION_TYPE,
        ];
        return view('account.donations-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Donation $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        $rules = [
            'type' => 'in:' . implode(',', Donation::DONATION_TYPE),
            'status' => 'required|in:' . Donation::AVAILABLE_DONATION . ',' . Donation::UNAVAILABLE_DONATION,
        ];

        // $this->validate($request, $rules);

        $fillable = [
            'name',
            'description',
            'type',
            'image',
            'attachments',
            'quantity',
            'location',
            'status',
        ];

        $data = [];

        foreach ($fillable as $key) {
            if ($request->has($key)) {
                $data[$key] = $request->input($key);
            }
        }
        $data['location'] = [
            'address_line1' => $request->has('address_line1') ? $request->address_line1 : $donation->location['address_line1'],
            'address_line2' => $request->has('address_line2') ? $request->address_line2 : $donation->location['address_line2'],
            'state' => $request->has('state') ? $request->state : $donation->location['state'],
            'lga' => $request->has('lga') ? $request->lga : $donation->location['lga'],
        ];

        $donation->save($data);
        return redirect()->route('account.donations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Donation $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('account.donations.index');
    }
}
