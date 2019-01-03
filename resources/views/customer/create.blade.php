@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ route('customer.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name">
            </div>

            <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name">
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" id="mobile" placeholder="First Mobile" name="mobile">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@endsection