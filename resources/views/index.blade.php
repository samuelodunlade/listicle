
    @extends("layouts.site")

    @section("content")
    <!-- SLIDER -->
    <section class="slider d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>Business Listing For Lagosians</h1>
                                    <h5>Let's uncover the best places to eat, drink, and shop nearest to you.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <form class="form-wrap mt-4">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <input type="text" placeholder="What are your looking for?" class="btn-group1">
                                        <input type="text" placeholder="New york" class="btn-group2">
                                        <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>SEARCH<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                                <div class="slider-link">
                                    <a href="#">Browse Popular</a><span>or</span> <a href="#">Recently Added</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SLIDER -->
    <!--//END HEADER -->
    <!--============================= FEATURED PLACES =============================-->
    <section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Featured Places</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($lists as $list)
                    
                    <div class="col-md-4 featured-responsive">
                        <div class="featured-place-wrap">
                            <a href="/listings/{{$list->id}}/detail">
                                <img src="{{asset('images/categories/' . $list->cover_image) }}" class="img-fluid" alt="#">
                                <span class="featured-rating-orange">6.5</span>
                                <div class="featured-title-box">
                                    <h6>{{$list->name}} </h6>
                                    <p>{{$list->category->name}} </p> <span>• </span>
                                    
                                    <ul>
                                        <li><span class="icon-location-pin"></span>
                                            <p>{{$list->address}}</p>
                                        </li>
                                        <li><span class="icon-screen-smartphone"></span>
                                            <p>{{$list->phone}}</p>
                                        </li>
                                        <li><span class="icon-link"></span>
                                            <p{{$list->website}}</p>
                                        </li>

                                    </ul>
                                    <div class="bottom-icons">
                                        <div class="closed-now">Action: </div>
                                        <span class="ti-heart"></span>
                                        <span class="ti-bookmark"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                @endforeach

            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="/listings" class="btn btn-danger">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END FEATURED PLACES -->
    <!--============================= CATEGORIES =============================-->
    <section class="main-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Browse Categories</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($categories as $cat)
                   <div class="col-md-3 category-responsive">
                        <a href="#" class="category-wrap">
                            <div class="category-block">
                            
                                <h6>{{$cat->name}}</h6>
                            </div>
                        </a>
                        <img src="{{ asset('images/categories/' . $cat->image) }}" alt="" height="512px">
                    </div> 
                @endforeach
            </div>
        </div>
    </section>
    <!--//END CATEGORIES -->
    <!--============================= ADD LISTING =============================-->
    <section class="main-block light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="add-listing-wrap">
                        <h2>Reach millions of People</h2>
                        <p>Add your Business infront of millions and earn 3x profits from our listing</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="#" class="btn btn-danger"><span class="ti-plus"></span> ADD LISTING</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END ADD LISTING -->
   @endsection