@extends('template.backend')

@section('content')

<main>
    <div class="container-fluid p-2 p-md-4">

        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6 ">

                <a href="{{ route('Home') }}" class="text-decoration-none text-secondary"> <i
                        class="fas fa-arrow-left"></i> Back</a>

                <div class="card my-3">
                    {{-- Card Header  --}}
                    <div class="card-header">
                        <h3 class="h5 text-primary">Add Student Project</h3>
                    </div>
                    <div class="card-body">
                        {{-- Insert image  --}}
                        <form action="{{ route('student_project.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- Title  --}}
                            <div class="mb-3 form-group">
                                <label for="title" class="form-label h6 my-2">Project Title</label>
                                <input type="text" name="title" class="form-control @error('title')
                                    is-invalid
                                @enderror" value="{{ old('title') }}" id="title" placeholder="Enter Project Title">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Description  --}}
                            <div class="mb-3 form-group">
                                <label for="desc" class="form-label h6 my-2">Project Description</label>
                                <textarea type="text" name="desc" class="form-control @error('desc')
                                    is-invalid
                                @enderror" id="desc" value="" style="resize: none;" rows="5" placeholder="Enter Project Description">{{ old('desc') }}</textarea>
                                @error('desc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Image  --}}
                            <div class="mb-3 form-group">
                                <label for="image" class="form-label h6 my-2">Select Image</label>
                                <input type="file" name="image"
                                    class="form-control @error('image') is-invalid  @enderror" id="image">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Link and Demo  --}}
                            <div class="row">
                                <label for="" class="form-label h6 my-2">Link</label>
                                <div class="col-12 col-md-6">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping">
                                            <i class="fab fa-github"></i>
                                        </span>
                                        <input type="text" class="form-control" value="{{ old('github') }}" name="github" placeholder="GitHub" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping">
                                            <i class="fas fa-globe"></i>
                                        </span>
                                        <input type="text" class="form-control" value="{{ old('demo') }}" name="demo" placeholder="Demo" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary mt-4"><i class="fas fa-pen"></i> Save</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>

@endsection