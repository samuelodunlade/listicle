
@extends("layouts.admin")


@section("content")

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Categories</h1>
        <a href="{{Route('admin.categories.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-plus fa-sm text-white-50"></i> Add New Category</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        @if($category->image)
                        <img src="{{ asset('images/categories/' . $category->image) }}" alt="Category Image"
                            style="max-width: 50px; max-height: 50px;">
                        @else
                        No Image
                        @endif
                    </td>
                    <td>
                        <!-- Add edit and delete buttons or links here -->
                        <!-- Example: -->
                        <a href="/admin/categories/{{$category->id}}/edit" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection