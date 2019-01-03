@extends('layouts.main')

@section('content')
<main role="main" class="container">

    <div class="row mt-5">
        <div class="col-md-6">
          <h1>Customer Listing</h1>
        </div>
        <div class="col-md-6">
          <a class="btn btn-primary pull-right" href="{{ route('customer.create') }}">Add New Customer</a>
        </div>
    </div>
    <div>
      <div class="col-md-12">
        @if (Session::has('message'))
        <div class="alert alert-info">
        <p>{{ Session::get('message') }}</p>
        </div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="table-responsive">
        <table class="table">
        @if(count($Customers) > 0)
               <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email </th>
                    <th scope="col">Mobile</th>
                    <th scope="col"> Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($Customers as $Customer)
                    <tr>
                      <th scope="row"></th>
                      <td>{{ $Customer->first_name }}</td>
                      <td>{{ $Customer->last_name }}</td>
                      <td>{{ $Customer->email }}</td>
                      <td>{{ $Customer->mobile }}</td>
                      <td><a class="btn btn-info" href="{{ route('customer.edit', $Customer->id) }}">Edit</a><form method="post" action="{{ route('customer.destroy', $Customer->id) }}">
                      <input name="_method" type="hidden" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
        @else
          There is No customers added yet
        @endif
          </table>
        </div>
    </div>
</min>
@endsection