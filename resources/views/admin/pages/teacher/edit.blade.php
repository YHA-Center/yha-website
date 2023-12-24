@extends('template.backend')

@section('content')
    <main>
        <div class="container-fluid p-2 p-md-4">

            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6 ">

                    <a href="{{ route('Teacher') }}" class="text-decoration-none text-secondary"> <i
                            class="fas fa-arrow-left"></i> Back</a>

                    <div class="card my-3 border-warning shadow">
                        {{-- Card Header  --}}
                        <div class="card-header border-warning">
                            <h3 class="h5 text-warning">Edit Instructor</h3>
                        </div>
                        <div class="card-body">
                            {{-- Insert image  --}}
                            <form action="{{ route('teacher.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <input type="hidden" name="id" value="{{ $teacher->id }}">
                                    <div class="col-12 col-md-5">
                                        {{-- Image  --}}
                                        <img src="{{ asset('storage/' . $teacher->image) }}" alt="{{ $teacher->name }}"
                                            class="card-img-top rounded-circle border">

                                    </div>
                                    <div class="col-12 col-md-7">
                                        <div class="row">
                                            <div class="col-6">
                                                {{-- Title  --}}
                                                <div class=" form-group">
                                                    <label for="name" class="form-label h6 my-2">Teacher name</label>
                                                    <input type="text" name="name"
                                                        class="form-control @error('name')
                                                is-invalid
                                                @enderror"
                                                        value="{{ $teacher->name }}" id="name"
                                                        placeholder="Instructor Name">
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                {{-- Age  --}}
                                                <div class=" form-group">
                                                    <label for="age" class="form-label h6 my-2">Age</label>
                                                    <input type="text" name="age" value="{{ $teacher->age }}"
                                                        class="form-control @error('age') is-invalid  @enderror"
                                                        id="age" placeholder="Instructor Age">
                                                    @error('age')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                {{-- Position  --}}
                                                <div class="mb-3 form-group">
                                                    <label for="position" class="form-label h6 my-2">Position</label>
                                                    <input type="text" name="position" value="{{ $teacher->position }}"
                                                        class="form-control @error('position') is-invalid  @enderror"
                                                        id="position" placeholder="Instructor Position">
                                                    @error('position')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                {{-- New image  --}}
                                                <div class="mb-3 form-group">
                                                    <label for="image" class="form-label h6 my-2">Select new
                                                        image</label>
                                                    <input type="file" name="image"
                                                        class="form-control @error('image') is-invalid  @enderror"
                                                        id="image">
                                                    @error('image')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button class="btn btn-sm btn-warning mt-3"><i class="fas fa-download"></i> Update</button>
                                        <span class="mx-1"></span>
                                        <a href="{{ route('teacher.delete', $teacher->id) }}"
                                            class="btn btn-sm btn-danger mt-3"><i class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>
@endsection
