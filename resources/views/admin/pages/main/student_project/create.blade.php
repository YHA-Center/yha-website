@extends('template.backend')

@section('content')

<main>
    <div class="container-fluid p-2 p-md-4">

        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6 ">

                <a href="{{ route('Home') }}" class="text-decoration-none text-secondary"> <i
                        class="fas fa-arrow-left"></i> Back</a>

                <div class="card mt-3">
                    {{-- Card Header  --}}
                    <div class="card-header">
                        <h3 class="h3 text-primary">Add Student Project</h3>
                    </div>
                    <div class="card-body">
                        {{-- Insert image  --}}
                        <form action="{{ route('about.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- Title  --}}

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

                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>

@endsection