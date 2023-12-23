@extends('template.backend')

@section('content')
    <main>
        <div class="container-fluid p-2 p-md-4">

            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6 ">

                    <a href="{{ route('Home') }}" class="text-decoration-none text-secondary"> <i
                            class="fas fa-arrow-left"></i> Back</a>

                    <form action="{{ route('about.desc.update') }}" method="POST">
                        @csrf
                        <div class="card mt-3">
                            {{-- Header  --}}
                            <div class="card-header">
                                <h3 class="h3 text-primary">Edit About Description</h3>
                            </div>
                            {{-- Card body  --}}
                            <div class="card-body">
                                <input type="text" value="{{ $data->id }}" name="id" hidden>
                                <textarea style="resize: none;" class="form-control" rows="10" name="desc">{{ $data->desc }}</textarea>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>
@endsection
