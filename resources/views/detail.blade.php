    @extends("layouts.site")

    @section("content")
    <!--============================= BOOKING =============================-->
    <div class="bg-primary" style="min-height: 40vh; padding-top: 20vh;>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
    <!--//END BOOKING -->
    <!--============================= RESERVE A SEAT =============================-->
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5> {{$listing->name}} </h5>
                   
                    <p class="reserve-description">{{$listing->slogan}}</p>
                </div>
               
            </div>
        </div>
    </section>
    <!--//END RESERVE A SEAT -->
    <!--============================= BOOKING DETAILS =============================-->
    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                            <p>
                                {{$listing->description}}
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 responsive-wrap">
                    <div class="contact-info">
                        <img src="{{asset('images/categories/' . $listing->cover_image) }}" class="img-fluid" alt="#">
                        <div class="address">
                            <span class="icon-location-pin"></span>
                            <p> 
                                {{$listing->address}}
                            </p>
                        </div>
                        <div class="address">
                            <span class="icon-screen-smartphone"></span>
                            <p> {{$listing->phone}}</p>
                        </div>
                        <div class="address">
                            <span class="icon-link"></span>
                            <p>{{$listing->website}}</p>
                        </div>
                        <a href="#" class="btn btn-outline-danger btn-contact">Log Complaint</a>
                    </div>
                    <div class="follow">
                        <div class="follow-img">
                            <h5>Listed By</h5>
                            <h6>{{$listing->user->name}}</h6>
                            <span>{{$listing->user->email}}</span>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END BOOKING DETAILS -->
    <!--============================= FOOTER =============================-->
  @endsection