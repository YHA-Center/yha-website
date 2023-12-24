@extends('template.backend')

@section('content')
    <main>
        <div class="container-fluid p-2 p-md-4 bg-secondary">

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

            {{-- Welcome Page Section  --}}
            <div class="row shadow mx-5 p-3 mb-5 rounded bg-light">
                <div class="col-12">
                    {{-- Title Section  --}}
                    <span class="text-center mb-3 fs-3">Welcome Page</span>
                    {{-- Image Section  --}}
                    <div class="row align-items-start justify-content-center d-flex mb-3">
                        <?php $i = 1; ?>
                        @foreach ($welcome as $item)
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card rounded mb-3 shadow">
                                    <div class="card-header">
                                        <b>Slider {{ $i }} </b>
                                    </div>
                                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="">
                                    <div class="card-footer text-end">
                                        <a href="{{ route('home.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i
                                                class="fas fa-pen"></i>
                                            &nbsp; Edit</a>
                                        <a href="{{ route('home.delete', $item->id) }}" class="btn btn-sm btn-danger"> <i
                                                class="fas fa-trash"></i> &nbsp; Delete</a>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; ?>
                        @endforeach
                        @if ($welcome->count() == 0)
                            <p class="text-danger h5 text-center my-5"> <i class="fa fa-exclamation-triangle"></i> No Image!
                            </p>
                        @endif
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-end py-4">
                        <a href="{{ route('home.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i>Add Image</a>
                        <h6 class="mt-3"> Total: <span class="text-primary"> {{ $welcome->total() }} </span></h6>
                    </div>
                    {{-- Pagniation Button  --}}
                    {{ $welcome->appends(request()->query())->links() }}
                </div>
            </div>
            {{-- END OF WELCOME PAGE SECTION  --}}

            {{-- Break Line  --}}
            {{-- <hr class="my-5"> --}}

            {{-- About Page Section  --}}
            <div class="row shadow mx-5 p-3 mb-5 rounded bg-light">
                <div class="col-12">
                    {{-- Title  --}}
                    <span class="text-center mb-3 fs-3">About Page</span>
                    {{-- Image Section --}}
                    <div class="row align-items-start justify-content-center d-flex mb-3">
                        @foreach ($about as $item)
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card rounded mb-3 shadow">
                                    <div class="card-header">
                                        <b>Picture</b>
                                    </div>
                                    @if (empty($item))
                                        <img src="{{ asset('image/no-image.jpg') }}" class="card-img-top" alt="">
                                    @else
                                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="">
                                    @endif
                                    <div class="card-footer text-end">
                                        <a href="{{ route('about.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i> &nbsp;
                                            Edit</a>
                                        <a href="{{ route('about.delete', $item->id) }}" class="btn btn-sm btn-danger"> <i
                                                class="fas fa-trash"></i> &nbsp; Delete</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @if (!count($about))
                            <p class="text-danger h5 text-center my-5"> <i class="fa fa-exclamation-triangle"></i> No About
                            Image!</p>
                        @endif
                        @if (count($about) < 3)
                            <div class="d-flex align-items-center justify-content-center py-4">
                                <a href="{{ route('about.home') }}" class="btn btn-primary"> <i class="fas fa-plus"></i>
                                    Add Image</a>
                            </div>
                        @endif
                    </div>
                    
                    {{-- End of Image Section  --}}
                    {{-- About Description --}}
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-7">
                            <div class="card shadow">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="text-center my-3">About Description</h5>
                                    <a href="{{ route('about.desc.edit', $about_desc->id) }}" class="btn btn-warning text-end"> <i class="fas fa-pen"></i> Edit</a>
                                </div>
                                <div class="card-body">
                                    <textarea style="resize: none;" class="form-control" rows="5" readonly>{{ $about_desc->desc }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END OF ABOUT PAGE SECTION  --}}

            {{-- Break Line  --}}
            {{-- <hr class="my-5"> --}}

            {{-- Student Project Section  --}}
            <div class="row shadow mx-5 p-3 mb-5 rounded bg-light">
                <div class="col-12">
                    {{-- Title  --}}
                    <span class="text-center mb-5 fs-3">Student Project Page</span>

                    @if (!count($projects))
                        <p class="text-danger h5 text-center my-5"> <i class="fa fa-exclamation-triangle"></i> No Student Project!</p>
                    @endif

                    {{-- Image Section  --}}
                    
                    <div class="row align-items-start  justify-content-center d-flex mb-3">
                        @foreach ($projects as $item)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3>{{ $item->title }}</h3>
                                        <div class="d-flex align-items-center">
                                            @if ($item->github != null)
                                            <a href="{{ $item->github }}" target="_blank">
                                                <i class="fab fa-github p-2 bg-secondary text-light rounded-circle"></i>
                                            </a>
                                            @endif
                                            <div class="mx-1"></div>
                                            @if ($item->demo != null)
                                            <a href="{{ $item->demo }}" target="_blank">
                                                <i class="fas fa-globe p-2 bg-secondary text-light rounded-circle"></i>
                                            </a>
                                            @endif                                            
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    {{-- Description  --}}
                                    <p>
                                        {{ $item->desc }}
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
                                        <a href="{{ route('student_project.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i></a>
                                        <a href="{{ route('student_project.delete', $item->id) }}" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{-- End of Image Section  --}}

                    {{-- Add button  --}}
                    <div class="row mb-3">
                        <div class="col-12 text-center">
                            <a href="{{ route('student_project.home') }}" class="btn  btn-primary"> <i class="fas fa-plus"></i> &nbsp; Add Project</a>
                            <h6 class="mt-3"> Total: <span class="text-primary"> {{ $projects->total() }} </span></h6>
                        </div>
                        {{-- Pagniation Button  --}}
                        {{ $projects->appends(request()->query())->links() }}
                    </div>
                    
                </div>
            </div>
            {{-- END OF PROJECT PAGE SECTOIN  --}}

            {{-- Break Line  --}}
            {{-- <hr class="my-5"> --}}

            {{-- Teacher Section  --}}
            {{-- <div class="row">
                <div class="col-12"> --}}
                    {{-- Title  --}}
                    {{-- <h3 class="text-center mb-3">Teacher Page</h3> --}}
                    
                    {{-- Image Section  --}}
                    {{-- <div class="row align-items-center justify-content-center d-flex mb-3">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header">
                                    <b>Name: </b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    {{-- Description  --}}
                                    {{-- <ul class="list-unstyled">
                                        <li>Age: </li>
                                        <li>Position: </li>
                                    </ul>
                                    <div class="text-end">
                                        <button class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i> &nbsp;
                                            Edit</button>
                                        <button class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> &nbsp;
                                            Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header">
                                    <b>Name: </b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body"> --}}
                                    {{-- Description  --}}
                                    {{-- <ul class="list-unstyled">
                                        <li>Age: </li>
                                        <li>Position: </li>
                                    </ul>
                                    <div class="text-end">
                                        <button class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i> &nbsp;
                                            Edit</button>
                                        <button class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> &nbsp;
                                            Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header">
                                    <b>Name: </b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body"> --}}
                                    {{-- Description  --}}
                                    {{-- <ul class="list-unstyled">
                                        <li>Age: </li>
                                        <li>Position: </li>
                                    </ul>
                                    <div class="text-end">
                                        <button class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i> &nbsp;
                                            Edit</button>
                                        <button class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> &nbsp;
                                            Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- End of Image Section  --}}
                </div>

                {{-- Add button  --}}
                {{-- <div class="row mb-3">
                    <div class="col-12 text-center">
                        <a href="{{ route('teacher_profile.home') }}" class="btn  btn-primary"> <i class="fas fa-plus"></i> &nbsp; Add Teacher</a>
                        <h6 class="mt-3"> Total: <span class="text-primary"> {{ $projects->total() }} </span></h6>
                    </div> --}}
                    {{-- Pagniation Button  --}}
                    {{-- {{ $projects->appends(request()->query())->links() }}
                </div> --}}
            </div>
            {{-- END OF TEACHER PAGE SECTION  --}}

        </div>
    </main>
@endsection
