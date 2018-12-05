@extends('welcome')
@section('Content')
  <style>
    #map {
      height: 500px;  /* The height is 400 pixels */
      width: 100%;  /* The width is the width of the web page */
     }
  </style>
   <div class="form">
   	<h3 style="color:#000000;">Search</h3><br>
    <form action="{{route('Search')}}" method="get">
      <input type="search" placeholder="Enter Blood Group" name="bgroup"/>
      <input type="search" placeholder="Enter Your Location" name="location"/>

      <button type="submit">Search Now</button><br><br><br></br>
    </form>
    <div id="map" style="height:400px"></div>

  </div>
  <script type="text/javascript">
  function initMap(){
    var bd = {
      lat: 23.791883,
      lng: 90.416569
    };

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: bd
    });


    var locations = [
      @foreach ($infolocation as $infolocations)
      ["{{$infolocations->name}}","{{$infolocations->email}}","{{$infolocations->phone}}","{{$infolocations->address}}","{{$infolocations->lat}}","{{$infolocations->long}}","{{$infolocations->id}}"],

      @endforeach
    ];


    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(23.81952496686278, 90.41794259257813),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][4], locations[i][5]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          var info = "<b>Name:</b> "+locations[i][0]+"<br> <b>Phone Number</b>: "+locations[i][2]+"<br> <b>Address</b>: "+locations[i][3];
          infowindow.setContent(info);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  }
  </script>

@endsection
