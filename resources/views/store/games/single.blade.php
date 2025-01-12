@section('title') 
{{$game->nombre}}
@endsection 
@extends('layouts.main')
@section('style')
<!-- Slick css -->
<link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">                
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="product-slider-box product-box-for">
                                <div class="product-preview">
                                    <img src="{{$game->imagen}}" class="img-fluid" alt="Product">
                                    {{-- <p><span class="badge badge-success font-14">25% off</span></p> --}}
                                </div>
                                {{-- <div class="product-preview">
                                        <img src="{{asset('assets/images/ecommerce/product_img_02.jpg')}}" class="img-fluid" alt="Product">
                                        <p><span class="badge badge-primary font-14">New</span></p>
                                    </div>
                                    <div class="product-preview">
                                        <img src="{{asset('assets/images/ecommerce/product_img_03.jpg')}}" class="img-fluid" alt="Product">
                                        <p><span class="badge badge-danger font-14">Price Drop</span></p>
                                    </div>
                                    <div class="product-preview">
                                        <img src="{{asset('assets/images/ecommerce/product_img_04.jpg')}}" class="img-fluid" alt="Product">
                                        <p><span class="badge badge-success font-14">Sale</span></p>
                                    </div>
                                    <div class="product-preview">
                                        <img src="{{asset('assets/images/ecommerce/product_img_05.jpg')}}" class="img-fluid" alt="Product">
                                        <p><span class="badge badge-warning font-14">Trending</span></p>
                                    </div>
                                    <div class="product-preview">
                                        <img src="{{asset('assets/images/ecommerce/product_img_06.jpg')}}" class="img-fluid" alt="Product">
                                        <p><span class="badge badge-info font-14">Popular</span></p>
                                    </div> --}}
                            </div>
                            {{-- <div class="product-slider-box product-box-nav">
                                <div class="product-preview">
                                    <img src="{{asset('assets/images/ecommerce/product_img_01.jpg')}}" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="{{asset('assets/images/ecommerce/product_img_02.jpg')}}" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="{{asset('assets/images/ecommerce/product_img_03.jpg')}}" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="{{asset('assets/images/ecommerce/product_img_04.jpg')}}" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="{{asset('assets/images/ecommerce/product_img_05.jpg')}}" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="{{asset('assets/images/ecommerce/product_img_06.jpg')}}" class="img-fluid" alt="Product">
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <p><span class="badge badge-light font-16">Pupular</span></p>
                            <h2 class="font-22">{{$game->nombre}}</h2>
                            <p>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star"></i>
                                <i class="feather icon-star"></i>
                                <span class="ml-2">{{$comments->count()}} Opiniones</span>
                            </p>
                            <p class="text-primary font-26 f-w-7 my-3">$ {{ number_format($game->price, 0, ',', '.')}}</p>
                            <p class="mb-4">{{$game->descripcion}}</p>
                            <div class="mt-3">
                                <span class="badge badge-secondary-inverse mr-2">{{$game->consola->nombre}}</span>
                            </div>
                            <div class="button-list mt-5 mb-3">
                                @if (Auth::check())
                                    <button type="button" class="btn btn-danger-rgba font-18"><i class="feather icon-heart"></i></button>
                                @endif
                                <button type="button" class="btn btn-primary-rgba font-18"><i class="feather icon-shopping-bag mr-2"></i>Añadir al carro</button>
                                <button type="button" class="btn btn-success font-17">Comprar ahora</button>
                            </div>
                            <div class="button-list">
                                <h6 class="mb-3">¡Comparte este producto!</h6>
                                <a href="#" class="btn btn-info-rgba font-18"><i class="feather icon-phone"></i></a>
                                {{-- <a href="#" class="btn btn-info-rgba font-18"><i class="feather icon-twitter"></i></a> --}}
                                {{-- <a href="#" class="btn btn-danger-rgba font-18"><i class="feather icon-instagram"></i></a> --}}
                                {{-- <a href="#" class="btn btn-warning-rgba font-18"><i class="feather icon-linkedin"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Detalles del producto</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs custom-tab-line mb-3" id="defaultTabLine" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab-line" data-toggle="tab" href="#description-line" role="tab" aria-controls="description-line" aria-selected="true"><i class="feather icon-file-text mr-2"></i>Descripción</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab-line" data-toggle="tab" href="#review-line" role="tab" aria-controls="review-line" aria-selected="false"><i class="feather icon-star mr-2"></i>Opiniones</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" id="guide-tab-line" data-toggle="tab" href="#guide-line" role="tab" aria-controls="guide-line" aria-selected="false"><i class="feather icon-book-open mr-2"></i>Guide</a>
                        </li> --}}
                    </ul>
                    <div class="tab-content" id="defaultTabContentLine">
                        <div class="tab-pane fade show active" id="description-line" role="tabpanel" aria-labelledby="description-tab-line">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                        <div class="tab-pane fade" id="review-line" role="tabpanel" aria-labelledby="review-tab-line">
                            <ul class="list-unstyled">
                                @if ($comments)
                                    @foreach ($comments as $comment)
                                        <li class="media my-4">
                                            <img src="{{asset('assets/images/users/boy.svg')}}" class="img-fluid mr-3" alt="user">
                                            <div class="media-body">
                                                <h5 class="font-16 mt-0 mb-1">{{$comment->user->name}}</h5>
                                                <p class="text-muted font-14">
                                                    <i class="feather icon-star text-success"></i>
                                                    <i class="feather icon-star text-success"></i>
                                                    <i class="feather icon-star text-success"></i>
                                                    <i class="feather icon-star text-success"></i>
                                                    <i class="feather icon-star"></i>
                                                </p>
                                                <p class="mb-0">{{$comment->comment}}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        {{-- <div class="tab-pane fade" id="guide-line" role="tabpanel" aria-labelledby="guide-tab-line">
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>                    
        <!-- End col -->
    </div>
    <!-- End row -->
    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Productos relacionados</h5>
                </div>
                <div class="card-body">
                    <!-- Start row -->
                    <div class="row">                                    
                        <!-- Start col -->
                        @foreach ($games as $gameRelation)
                            <div class="col-lg-4 col-xl-2">
                                <div class="product-bar m-b-30">
                                    <div class="product-head">
                                        <a href="{{url('/store/games/single/'.$gameRelation->id)}}"><img src="{{ $gameRelation->imagen }}" class="img-fluid" alt="product"></a>
                                    </div>
                                    <div class="product-body py-3">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="d-inline-block">
                                                    <span class="text-uppercase font-12 f-w-6">{{ $gameRelation->consola->nombre }}</span>
                                                </div>
                                                <div class="d-inline-block float-right">
                                                    <i class="feather icon-star text-warning"></i>
                                                    <i class="feather icon-star text-warning"></i>
                                                    <i class="feather icon-star text-warning"></i>
                                                    <i class="feather icon-star"></i>
                                                    <i class="feather icon-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <h6 class="mt-1 mb-3">{{ $gameRelation->nombre }}</h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <div class="text-left">
                                                    <h5 class="f-w-7 mb-0">$ {{ number_format($gameRelation->price, 0, ',', '.')}}</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" class="btn btn-primary-rgba font-18"><i class="feather icon-shopping-bag"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End col -->
                    </div>                    
                    <!-- End row -->
                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-ecommerce-single-product.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-tagsinput/typeahead.bundle.js') }}"></script>
@endsection 