
@extends("layouts.users")


@section("content")

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-plus fa-sm text-white-50"></i> Add  Business Images</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <form method="POST" action="{{route('user.savebusinessprofile')}}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Business Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->businessListing ? Auth::user()->businessListing->name : ""}}">
                @error('name')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slogan" class="form-label">Slogan</label>
                <input type="text" class="form-control" id="slogan" name="slogan" value="{{Auth::user()->businessListing ? Auth::user()->businessListing->slogan : ""}}">
                @error('slogan')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{Auth::user()->businessListing ? Auth::user()->businessListing->phone : ""}}">
                @error('phone')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{Auth::user()->businessListing ? Auth::user()->businessListing->address : "" || @old('address')}}">
                @error('address')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{Auth::user()->businessListing ? Auth::user()->businessListing->description : ""}}</textarea>
                @error('description')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" class="form-control" id="website" name="website" value="{{Auth::user()->businessListing ? Auth::user()->businessListing->website : ""}}">
                @error('website')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>

            

            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id">
                    @foreach($categories as $category)
                        @if (Auth::user()->businessListing)
                        <option value="{{ $category->id }}" @if (Auth::user()->businessListing->category_id == $category->id)
                            {{"selected"}}
                        @endif >{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                        
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover Image</label>
                <input type="file" class="form-control" id="cover_image" name="cover_image"  accept="image/*">
                @error('cover_image')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Create Business</button>
        </form>
        
    </div>

@endsection



