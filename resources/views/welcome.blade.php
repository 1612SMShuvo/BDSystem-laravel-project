<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="{{asset('styleH.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0r-HvZQQdQBMop6LVVWA0T8DZ7lS54a0&libraries=places&callback=initMap"
async defer></script>
<style>
  .mess{
  background-color: green;
  font-size: 20px;text-align: left;
}
</style>
</head>
<body>
  <center>
  <img src="DIUlogo.png" alt="Trulli" width="800" height="200">
<h1>DIU MCT & SWE Department</h1>
  <div id="header">
                <h2>
                    Donate Blood To Save Life
                </h2>

                <div id="menu">
                    <a href="{{URL::to('/')}}">Home</a>
                    <a href="{{URL::to('/Admin')}}">Admin</a>
                    <a href="{{URL::to('/Donor')}}">Donor</a>
                    <a href="{{URL::to('/Search')}}">Search</a>

                </div>
              </div> </br><br>
@yield('Content')
  </center>


</body>
