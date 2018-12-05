@extends('welcome')
@section('Content')
               <div class="form">
               <h2 style="color :black;">Donor</h2><br>
               <h3 style="color:#800000;">Create Profile</h3><br>
    @php
    $message=Session::get('message');

    if($message){
      echo $message;
      Session::put('message',null);
    }
    
    @endphp
      <form action="{{url('/ProfileCreate')}}" method="POST">
          {{csrf_field()}}
            @if($info)
            <input type="text" placeholder="Enter Your Name" name="name" value="{{ $info->uname }}" />
            <input type="text" placeholder="Enter Your Email" name="email" value="{{ $info->email }}"/>
            <input type="text" placeholder="Enter Your Phone" name="phone" />
            <input type="text" placeholder="Enter Your Address" name="address" id="searchmap" />
            <div hidden id="map"></div>
            <input type="text"  name="lat" id="lat" hidden value="23.75285200">
            <input type="text"  name="long" id="long" hidden value="90.37884320">
            <input type="text" placeholder="Enter Your Blood Group" name="bgroup"/>
            <input type="text" placeholder="Enter Your Last Donation Date" name="lastdate" />
            <input type="text" placeholder="Enter Your Weight" name="weight" />
            <input type="text" placeholder="Enter Your height" name="height" />

            @else 
              <input type="text" placeholder="Enter Your Name" name="name" value="{{ $info->uname }}" />
            <input type="text" placeholder="Enter Your Email" name="email" value="{{ $info->email }}"/>
            <input type="text" placeholder="Enter Your Phone" name="phone" value="{{ $proinfo->phone }}" />
            <input type="text" placeholder="Enter Your Address" name="address" id="searchmap" value="{{ $proinfo->address }}" />
            <div hidden id="map"></div>
            <input type="text"  name="lat" id="lat" hidden >
            <input type="text"  name="long" id="long" hidden >
            <input type="text" placeholder="Enter Your Blood Group" name="bgroup" value="{{ $proinfo->bgroup }}"/>
            <input type="text" placeholder="Enter Your Last Donation Date" name="lastdate" value="{{ $proinfo->lastdate }}"/>
            <input type="text" placeholder="Enter Your Weight" name="weight" value="{{ $proinfo->weight }}"/>
            <input type="text" placeholder="Enter Your height" name="height" value="{{ $proinfo->height }}"/>
            

            @endif
            <button type="submit">Save</button><br><br>
          </form>
      <style type="text/css">
        #map {
          height: 300px;
          width: 100%;
        }
      </style>
      <a href="{{URL::to('/EditProfile/'.$info->email)}}"><button>Edit</button></a>
      <a href="{{url('/DonorShow')}}"><button>View</button></a><br><br>
      <a href="{{url('/Donor')}}"><button>Logout</button></a><br></br>
    </div>
    <script>
    function initMap(){
      var bd = {
      lat: 23.81952496686278,
      lng: 90.41794259257813
      };

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 9,
        center: bd
      });

      var marker = new google.maps.Marker({
        position: bd,
        map: map,
        draggable: true,
      });

      var input = document.getElementById('searchmap');

      var searchBox = new google.maps.places.SearchBox(input);

      google.maps.event.addListener(searchBox,'places_changed', function() {
      var places = searchBox.getPlaces();
      var bounds = new google.maps.LatLngBounds();
      var i,place;

      for (i = 0; place = places[i]; i++) {
        bounds.extend(place.geometry.location);
        marker.setPosition(place.geometry.location);
      }
      });

      google.maps.event.addListener(marker,'position_changed', function() {
      var lat = marker.getPosition().lat();
      var long = marker.getPosition().lng();

      $('#lat').val(lat);
      $('#long').val(long);
      });
    }
    </script>


@endsection
