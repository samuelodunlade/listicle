
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
                <input type="text" class="form-control" id="name" name="name" value="{{@old('name')}}">
                @error('name')
                   <p class="text-danger my-2 ml-2"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slogan" class="form-label">Slogan</label>
                <input type="text" class="form-control" id="slogan" name="slogan" value="{{@old('slogan')}}">
                @error('slogan')
                   <p class="text-danger my-2 ml-2"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{@old('phone')}}">
                @error('phone')
                   <p class="text-danger my-2 ml-2"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{@old('address')}}">
                @error('address')
                   <p class="text-danger my-2 ml-2"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{@old('description')}}</textarea>
                @error('description')
                   <p class="text-danger my-2 ml-2"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" class="form-control" id="website" name="website" value="{{@old('website')}}">
                @error('website')
                   <p class="text-danger my-2 ml-2"> {{$message}}</p>
                @enderror
            </div>

            

            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id">
                    @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>    
                    @endforeach
                </select>
                @error('category_id')
                   <p class="text-danger my-2 ml-2"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover Image</label>
                <input type="file" class="form-control" id="cover_image" name="cover_image" value="{{@old('cover_image')}}"  accept="image/*">
                @error('cover_image')
                   <p class="text-danger my-2 ml-2"> {{$message}}</p>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Create Business</button>
        </form>
        
    </div>

@endsection



