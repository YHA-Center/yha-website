@extends('template.backend')

@section('content')

    <main>
        <div class="container-fluid p-2 p-md-4">

            <div class="row">
                <div class="col">
                    @if (session('success'))
                        <div class="alert-message">
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Welcome Page Section  --}}
            <div class="row">
                <div class="col-12">
                    {{-- Title Section  --}}
                    <h3 class="text-center mb-3">Welcome Page</h3>
                    {{-- Add button  --}}
                    <div class="row mb-3">
                        <div class="col-12 text-center">
                            <a href="{{ route('CreateWelcome') }}" class="btn btn-sm btn-secondary"> <i
                                    class="fas fa-plus"></i> &nbsp; Add</a>
                        </div>
                    </div>
                    {{-- Image Section  --}}
                    <div class="row align-items-center justify-content-center d-flex mb-3">
                            <?php $i = 1; ?>
                            @foreach ($welcome as $item)
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card rounded mb-3 shadow-sm">
                                        <div class="card-header">
                                            <b>Slider {{ $i }} </b>
                                        </div>
                                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top"
                                            alt="">
                                        <div class="card-body text-end">
                                            <a href="" class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i>
                                                &nbsp; Edit</a>
                                            <button href="" class="btn btn-sm btn-danger"> <i
                                                    class="fas fa-trash"></i> &nbsp; Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; ?>
                            @endforeach
                        @if($welcome->count() == 0)
                            <p class="text-danger h1 text-center"> <i class="fa fa-exclamation-triangle"></i> No Image!</p>
                        @endif
                    </div>
                    <div class="d-flex align-items-center justify-content-between py-4">
                        <h4 class=""> Total: <span class="text-primary"> {{ $welcome->total() }} </span></h4>
                        <a href="{{ route('CreateWelcome') }}" class="btn btn-sm btn-secondary"> <i class="fas fa-plus"></i>
                            &nbsp; Add</a>
                    </div>
                    {{-- Pagniation Button  --}}
                    {{ $welcome->appends(request()->query())->links() }}
                </div>
            </div>

            <hr class="my-5">

            {{-- About Page Section  --}}
            <div class="row">
                <div class="col-12">
                    {{-- Title  --}}
                    <h3 class="text-center mb-3">About Page</h3>
                    {{-- Add button  --}}
                    <div class="row mb-3">
                        <div class="col-12 text-center">
                            <a href="" class="btn btn-sm btn-secondary"> <i class="fas fa-plus"></i> &nbsp; Add</a>
                        </div>
                    </div>
                    {{-- Image Section  --}}
                    <div class="row align-items-center justify-content-center d-flex mb-3">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header">
                                    <b>Slider One</b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body text-end">
                                    <button class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i> &nbsp; Edit</button>
                                    <button class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> &nbsp;
                                        Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header text-end">
                                    <b>Slider Two</b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body text-end">
                                    <button class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i> &nbsp; Edit</button>
                                    <button class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> &nbsp;
                                        Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header text-end">
                                    <b>Slider Three</b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body text-end">
                                    <button class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i> &nbsp; Edit</button>
                                    <button class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> &nbsp;
                                        Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End of Image Section  --}}
                    {{-- Text --}}
                    <div class="d-flex flex-column align-items-center justify-content-center mb-5">
                        <h2 class="text-center mb-3">About Description</h2>
                        <div class="d-flex">
                            <textarea name="" class="text-justify" id="" cols="100%" style="resize: none;" rows="5">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, aperiam.
                            </textarea>
                            <button class="btn btn-sm btn-warning">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            {{-- Student Project Section  --}}
            <div class="row">
                <div class="col-12">
                    {{-- Title  --}}
                    <h3 class="text-center mb-3">Student Project Page</h3>
                    {{-- Add button  --}}
                    <div class="row mb-3">
                        <div class="col-12 text-center">
                            <a href="" class="btn btn-sm btn-secondary"> <i class="fas fa-plus"></i> &nbsp; Add</a>
                        </div>
                    </div>
                    {{-- Image Section  --}}
                    <div class="row align-items-center justify-content-center d-flex mb-3">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header">
                                    <b>Project One</b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    {{-- Description  --}}
                                    <h3>Heading</h3>
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, magnam!
                                    </p>
                                    <div class="text-end">
                                        <button class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i> &nbsp;
                                            Edit</button>
                                        <button class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> &nbsp;
                                            Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header">
                                    <b>Project Two</b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    {{-- Description  --}}
                                    <h3>Heading</h3>
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, magnam!
                                    </p>
                                    <div class="text-end">
                                        <button class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i> &nbsp;
                                            Edit</button>
                                        <button class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> &nbsp;
                                            Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header">
                                    <b>Project Three</b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    {{-- Description  --}}
                                    <h3>Heading</h3>
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, magnam!
                                    </p>
                                    <div class="text-end">
                                        <button class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i> &nbsp;
                                            Edit</button>
                                        <button class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> &nbsp;
                                            Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header">
                                    <b>Project Four</b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    {{-- Description  --}}
                                    <h3>Heading</h3>
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, magnam!
                                    </p>
                                    <div class="text-end">
                                        <button class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i> &nbsp;
                                            Edit</button>
                                        <button class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> &nbsp;
                                            Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End of Image Section  --}}
                </div>
            </div>

            <hr class="my-5">

            {{-- Teacher Section  --}}
            <div class="row">
                <div class="col-12">
                    {{-- Title  --}}
                    <h3 class="text-center mb-3">Teacher Page</h3>
                    {{-- Add button  --}}
                    <div class="row mb-3">
                        <div class="col-12 text-center">
                            <a href="" class="btn btn-sm btn-secondary"> <i class="fas fa-plus"></i> &nbsp;
                                Add</a>
                        </div>
                    </div>
                    {{-- Image Section  --}}
                    <div class="row align-items-center justify-content-center d-flex mb-3">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header">
                                    <b>Name: </b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    {{-- Description  --}}
                                    <ul class="list-unstyled">
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
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header">
                                    <b>Name: </b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    {{-- Description  --}}
                                    <ul class="list-unstyled">
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
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card rounded mb-3 shadow-sm">
                                <div class="card-header">
                                    <b>Name: </b>
                                </div>
                                <img src="{{ asset('image/pic/01.jpg') }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    {{-- Description  --}}
                                    <ul class="list-unstyled">
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
                    </div>
                    {{-- End of Image Section  --}}
                </div>
            </div>

        </div>
    </main>

@endsection
