
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
                                <h1>Restaurant Category Listing</h1>
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
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src="images/featured1.jpg" class="img-fluid" alt="#">
                        <span class="featured-rating-orange">6.5</span>
                        <div class="featured-title-box">
                            <h6>Burger & Lobster</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>
                            <ul>
                                <li><span class="icon-location-pin"></span>
                                    <p>1301 Avenue, Brooklyn, NY 11230</p>
                                </li>
                                <li><span class="icon-screen-smartphone"></span>
                                    <p>+44 20 7336 8898</p>
                                </li>
                                <li><span class="icon-link"></span>
                                    <p>https://burgerandlobster.com</p>
                                </li>

                            </ul>
                            <div class="bottom-icons">
                                <div class="closed-now">CLOSED NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src="images/featured2.jpg" class="img-fluid" alt="#">
                        <span class="featured-rating-green">9.5</span>
                        <div class="featured-title-box">
                            <h6>Joe’s Shanghai</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>
                            <ul>
                                <li><span class="icon-location-pin"></span>
                                    <p>1301 Avenue, Brooklyn, NY 11230</p>
                                </li>
                                <li><span class="icon-screen-smartphone"></span>
                                    <p>+44 20 7336 8898</p>
                                </li>
                                <li><span class="icon-link"></span>
                                    <p>https://burgerandlobster.com</p>
                                </li>

                            </ul>
                            <div class="bottom-icons">
                                <div class="closed-now">CLOSED NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src="images/featured3.jpg" class="img-fluid" alt="#">
                        <span class="featured-rating">3.2</span>
                        <div class="featured-title-box">
                            <h6>Tasty Hand-Pulled Noodles</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>
                            <ul>
                                <li><span class="icon-location-pin"></span>
                                    <p>1301 Avenue, Brooklyn, NY 11230</p>
                                </li>
                                <li><span class="icon-screen-smartphone"></span>
                                    <p>+44 20 7336 8898</p>
                                </li>
                                <li><span class="icon-link"></span>
                                    <p>https://burgerandlobster.com</p>
                                </li>

                            </ul>
                            <div class="bottom-icons">
                                <div class="open-now">OPEN NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src="images/featured1.jpg" class="img-fluid" alt="#">
                        <span class="featured-rating-orange">6.5</span>
                        <div class="featured-title-box">
                            <h6>Burger & Lobster</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>
                            <ul>
                                <li><span class="icon-location-pin"></span>
                                    <p>1301 Avenue, Brooklyn, NY 11230</p>
                                </li>
                                <li><span class="icon-screen-smartphone"></span>
                                    <p>+44 20 7336 8898</p>
                                </li>
                                <li><span class="icon-link"></span>
                                    <p>https://burgerandlobster.com</p>
                                </li>

                            </ul>
                            <div class="bottom-icons">
                                <div class="closed-now">CLOSED NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src="images/featured2.jpg" class="img-fluid" alt="#">
                        <span class="featured-rating-green">9.5</span>
                        <div class="featured-title-box">
                            <h6>Joe’s Shanghai</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>
                            <ul>
                                <li><span class="icon-location-pin"></span>
                                    <p>1301 Avenue, Brooklyn, NY 11230</p>
                                </li>
                                <li><span class="icon-screen-smartphone"></span>
                                    <p>+44 20 7336 8898</p>
                                </li>
                                <li><span class="icon-link"></span>
                                    <p>https://burgerandlobster.com</p>
                                </li>

                            </ul>
                            <div class="bottom-icons">
                                <div class="closed-now">CLOSED NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src="images/featured3.jpg" class="img-fluid" alt="#">
                        <span class="featured-rating">3.2</span>
                        <div class="featured-title-box">
                            <h6>Tasty Hand-Pulled Noodles</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>
                            <ul>
                                <li><span class="icon-location-pin"></span>
                                    <p>1301 Avenue, Brooklyn, NY 11230</p>
                                </li>
                                <li><span class="icon-screen-smartphone"></span>
                                    <p>+44 20 7336 8898</p>
                                </li>
                                <li><span class="icon-link"></span>
                                    <p>https://burgerandlobster.com</p>
                                </li>

                            </ul>
                            <div class="bottom-icons">
                                <div class="open-now">OPEN NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src="images/featured1.jpg" class="img-fluid" alt="#">
                        <span class="featured-rating-orange">6.5</span>
                        <div class="featured-title-box">
                            <h6>Burger & Lobster</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>
                            <ul>
                                <li><span class="icon-location-pin"></span>
                                    <p>1301 Avenue, Brooklyn, NY 11230</p>
                                </li>
                                <li><span class="icon-screen-smartphone"></span>
                                    <p>+44 20 7336 8898</p>
                                </li>
                                <li><span class="icon-link"></span>
                                    <p>https://burgerandlobster.com</p>
                                </li>

                            </ul>
                            <div class="bottom-icons">
                                <div class="closed-now">CLOSED NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src="images/featured2.jpg" class="img-fluid" alt="#">
                        <span class="featured-rating-green">9.5</span>
                        <div class="featured-title-box">
                            <h6>Joe’s Shanghai</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>
                            <ul>
                                <li><span class="icon-location-pin"></span>
                                    <p>1301 Avenue, Brooklyn, NY 11230</p>
                                </li>
                                <li><span class="icon-screen-smartphone"></span>
                                    <p>+44 20 7336 8898</p>
                                </li>
                                <li><span class="icon-link"></span>
                                    <p>https://burgerandlobster.com</p>
                                </li>

                            </ul>
                            <div class="bottom-icons">
                                <div class="closed-now">CLOSED NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src="images/featured3.jpg" class="img-fluid" alt="#">
                        <span class="featured-rating">3.2</span>
                        <div class="featured-title-box">
                            <h6>Tasty Hand-Pulled Noodles</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>
                            <ul>
                                <li><span class="icon-location-pin"></span>
                                    <p>1301 Avenue, Brooklyn, NY 11230</p>
                                </li>
                                <li><span class="icon-screen-smartphone"></span>
                                    <p>+44 20 7336 8898</p>
                                </li>
                                <li><span class="icon-link"></span>
                                    <p>https://burgerandlobster.com</p>
                                </li>

                            </ul>
                            <div class="bottom-icons">
                                <div class="open-now">OPEN NOW</div>
                                <span class="ti-heart"></span>
                                <span class="ti-bookmark"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
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