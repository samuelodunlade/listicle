
@extends("layouts.admin")


@section("content")

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
        <a href="/admin/categories" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-eye fa-sm text-white-50"></i> View Categories</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <form action="{{ route('admin.categories.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{@old('name')}}">
               
                @error('name')
                    {{$message}}  
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">Category Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" >{{@old('description')}}</textarea>
                @error('description')
                    {{$message}}  
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="image" class="form-label">Category Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @error('image')
                    {{$message}}  
                @enderror
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
    
        </form>
    </div>

@endsection

