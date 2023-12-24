@extends('template.backend')

@section('content')

<main>
    <div class="container-fluid p-2 p-md-4">

        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6 ">

                <a href="{{ route('Subject') }}" class="text-decoration-none text-secondary"> <i
                        class="fas fa-arrow-left"></i> Back</a>

                <div class="card my-3 border-warning shadow">
                    {{-- Card Header  --}}
                    <div class="card-header border-warning">
                        <h3 class="h5 text-warning">Add Subject</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('subject.update') }}" method="POST" >
                            @csrf
                            {{-- Title  --}}
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <div class="mb-3 form-group">
                                <label for="name" class="form-label h6 my-2">Subject name</label>
                                <input type="text" name="name" class="form-control @error('name')
                                    is-invalid
                                @enderror" value="{{ $data->name }}" id="name" placeholder="Enetr subject name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <button class="btn btn-sm btn-warning mt-3"><i class="fas fa-download"></i> Save</button>
                            <a href="{{ route('subject.delete', $data->id) }}" class="btn btn-sm btn-danger mt-3"><i class="fas fa-trash"></i> Delete</a>

                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>

@endsection