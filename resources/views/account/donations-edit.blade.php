@extends('layouts.account')

@section('account-content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="POST" method="{{route('account.donations.update', $donation->id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" class="form-control" rows="7" name="description" id="description" placeholder="Describe your donation here (e.g. details such author of book, publisher etc.)"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Donation Type</label>
                        <select type="text" class="form-control" name="type" id="type" placeholder="Type">
                            <option value="">--select type--</option>
                            @foreach ($types as $type)
                                <option value="{{$type}}">{{$type}}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="form-group row">
                            <label class="col-md-12 col-form-label"> Location </label>
                            <div class="col-md-6 my-3">
                                <input type="text" class="form-control" name="address_line1" id="address_line1" placeholder="Address Line 1">
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="text" class="form-control" name="address_line2" id="address_line2" placeholder="Address Line 2">
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="text" class="form-control" name="lga" id="lga" placeholder="Local Government Area">
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="text" class="form-control" name="state" id="state" placeholder="State">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
