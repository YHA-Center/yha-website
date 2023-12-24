@extends('template.backend')

@section('content')
    <main>
        <div class="container-fluid p-2 p-md-4">

            {{-- Message Box  --}}
            <div class="row">
                <div class="col">
                    @if (session('success'))
                        <div class="alert-message">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span>{{ session('success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6 d-flex align-items-center">
                    <h4>Course</h4>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="{{ route('course.createPage') }}" class="btn btn-warning shadow-sm"> <i class="fas fa-book"></i> &nbsp; Add Course</a>
                </div>
            </div>

            {{-- Teacher List  --}}
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($courses as $item)
                            <tr>
                                <th scope="row" class="col-1">#{{ $item->id }}</th>
                                <td class="col-2">{{ $item->name }}</td>
                                <td class="col-4">{{ Str::of($item->description)->limit(50); }}</td>
                                <td class="col-2">{{ $item->duration }} hours</td>
                                <td class="col-2"> 
                                    <a href="{{ route('course.edit', $item->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-pen"></i></a> 
                                    <span class="mx-1"></span>
                                    <a href="{{ route('course.delete', $item->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> 
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>

            <div class="row">
                @if (count($courses) == 0)
                    <h6 class="text-center text-secondary mt-5">No Course</h6>
                @endif
            </div>

            
    </main>
@endsection
