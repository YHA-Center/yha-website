@extends('template.backend')

@section('content')
    <main>
        <div class="container-fluid p-2 p-md-4">

            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6 ">

                    <a href="{{ route('Home') }}" class="text-decoration-none text-secondary"> <i
                            class="fas fa-arrow-left"></i> Back</a>

                    <div class="card mt-3">
                        {{-- Header  --}}
                        <div class="card-header">
                            <h3 class="h3 text-primary">Edit Image</h3>
                        </div>
                        {{-- Card Image  --}}
                        <img src="{{ asset('storage/'.$welcome->image) }}" alt="" class="card-img-top">
                        {{-- Card body  --}}
                        <div class="card-body">
                            {{-- Insert image  --}}
                            <form action="{{ route('home.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    {{-- hidden Image Id  --}}
                                    <input type="hidden" name="id" value="{{ $welcome->id }}">
                                    <label for="image" class="form-label h5 mb-2">Choose new image</label>
                                    <input type="file" name="image"
                                        class="form-control @error('image') is-invalid  @enderror" id="image">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary btn-sm " type="submit">Update</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>
@endsection
