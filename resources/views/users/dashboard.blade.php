
@extends("layouts.users")


@section("content")

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-plus fa-sm text-white-50"></i> Update Profile</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        @if (!Auth::user()->businessListing)
            <div class="col-md-6">
                <p>You have not updated your Business Profile. You should do that: <a href="{{route('user.updatebusinessprofile')}}">Here</a></p>
            </div>
        @else
            <div class="col-md-6">
                <p>You have set up  your Business Profile. To add another business you need to pay</p>
            </div>
        @endif
        
    </div>

@endsection