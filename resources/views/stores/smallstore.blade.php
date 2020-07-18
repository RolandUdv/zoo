

<h1>Stores</h1>

    @if(count($stores) > 0)

        @foreach($stores as $store)
        <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
            
                        <a href="{{ url('/stores') }}/{{$store->id}}"><img src="https://d1593xiyv01mio.cloudfront.net/gb/images/19693/biz_photo_153874755271.jpeg?size=750x500">
                            <span class="card-title">{{$store->store_name}}</span></a>
                    </div>
                    <div class="card-content">
                        <p class="store-category">{{$store->store_category}}</p>
                        <p class="store-location">{{$store->house_no}}, {{$store->address}}, {{$store->city}}, {{$store->postcode}}</p>
                    </div>
                    <div class="card-action">
                        <a href="#"><span class="grey-text text-darken-4" title="Add to Favorites"><i
                                    class="material-icons">bookmark</i></span></a>
                        <a href="#"><span class="grey-text text-darken-4" title="Book Appointment"><i
                                    class="material-icons">date_range</i></span></a>
                        <a href="#"><span class="grey-text text-darken-4" title="See Reviews"><i
                                    class="material-icons">star</i></span></a>
                        <a href="#"><span class="grey-text text-darken-4" title="Visit Store"><i
                                    class="material-icons">store</i></span></a>
                    </div>
                </div>
            </div>
        @endforeach
       {{$stores->links()}}
    @else

        <h4>No stores found</h4>

    @endif





