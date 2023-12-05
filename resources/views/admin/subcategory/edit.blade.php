@extends('admin.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Sub Category</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="sub-category" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <form action="/admin/subcategory/{{ $subCategory->id }}/update" method="post">
                @csrf
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="category">Category</label>
                                        <select name="category" id="category" class="form-control" onchange="updateSlug()">
                                            <option value="" selected disabled>---Select category---</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" data-slug="{{ $category->slug }}"
                                                    {{ $category->id == $subCategory->category_id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Name" value="{{ old('name', $subCategory->name) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" id="slug" class="form-control"
                                            value="{{ old('slug', $subCategory->slug) }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="Active" {{ $subCategory->status == 'Active' ? 'selected' : '' }}>
                                                Stocks available
                                            </option>
                                            <option value="Block" {{ $subCategory->status == 'Block' ? 'selected' : '' }}>
                                                Out of stock
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 pt-3">
                        <button class="btn btn-primary">Update</button>
                        <a href="sub-category" class="btn btn-outline-dark ml-3">Cancel</a>
                    </div>
                </div>
            </form>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script>
        function updateSlug() {
            var select = document.getElementById('category');
            var slugInput = document.getElementById('slug');
            var selectedOption = select.options[select.selectedIndex];

            if (selectedOption) {
                slugInput.value = selectedOption.getAttribute('data-slug');
            } else {
                slugInput.value = '';
            }
        }
    </script>
@endsection
