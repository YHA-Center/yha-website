@extends('template.backend')

@section('content')

<main>
    <div class="container-fluid p-2 p-md-4">

        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6 ">

                <a href="{{ route('Course') }}" class="text-decoration-none text-secondary"> <i
                        class="fas fa-arrow-left"></i> Back</a>

                <div class="card my-3 border-warning shadow">
                    {{-- Card Header  --}}
                    <div class="card-header border-warning">
                        <h3 class="h5 text-warning">Edit Course</h3>
                    </div>

                    <img src="{{ asset('storage/'.$data->image) }}" alt="" class="card-img-top p-3 rounded">

                    <div class="card-body">
                        {{-- Insert image  --}}
                        <form action="{{ route('course.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            {{-- Title  --}}
                            <div class="mb-3 form-group">
                                <label for="name" class="form-label h6 my-2">Course name</label>
                                <input type="text" name="name" class="form-control @error('name')
                                    is-invalid
                                @enderror" value="{{ $data->name }}" id="name" placeholder="Instructor Name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- description  --}}
                            <div class="mb-3 form-group">
                                <label for="description" class="form-label h6 my-2">Course Description</label>
                                <textarea type="text" name="description" rows="7" style="resize: none;"
                                    class="form-control @error('description') is-invalid  @enderror" id="description" placeholder="Course description">{{ $data->description }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- duration  --}}
                            <div class="mb-3 form-group">
                                <label for="duration" class="form-label h6 my-2">Duration</label>
                                <input type="number" name="duration" value="{{ $data->duration }}"
                                    class="form-control @error('duration') is-invalid  @enderror" id="duration" placeholder="Instructor duration">
                                @error('duration')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            {{-- Image  --}}
                            <div class="mb-3 form-group">
                                <label for="image" class="form-label h6 my-2">Choose New Image</label>
                                <input type="file" name="image"
                                    class="form-control @error('image') is-invalid  @enderror" id="image">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <button class="btn btn-warning mt-3 btn-sm"><i class="fas fa-download"></i> Update</button>
                            <a href="{{ route('course.delete', $data->id) }}" class="btn btn-danger mt-3 btn-sm"><i class="fas fa-trash"></i> Delete</a>

                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>

@endsection