
    @extends("layouts.site")

    @section("content")
    <!-- SLIDER -->
    <section class="slider d-flex align-items-center" style="max-height:400px !important;" >
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>Our Listings</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <form class="form-wrap mt-4">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <input type="text" placeholder="What are your looking for?" class="btn-group1">
                                        
                                        <select name="category" id="category" class="btn-group2">
                                            <option value="all">All Categories</option>
                                            <option value="Restaurant">Restaurant</option>
                                        </select>
                                        <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>SEARCH<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SLIDER -->
    <!--============================= FEATURED PLACES =============================-->
    <section class="main-block light-bg">
        <div class="container">
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
                        <a href="#" class="btn btn-danger">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END FEATURED PLACES -->
    <!--============================= FOOTER =============================-->
    @endsection