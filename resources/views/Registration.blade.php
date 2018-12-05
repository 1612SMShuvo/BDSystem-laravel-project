@extends('welcome')
@section('Content')
               <div class="form">
               	<h2 style="color :black;">Available Blood Donors</h2><br>
               <h3 style="color:#800000;">Create Account</h3><br>
<?php
$message=Session::get('message');
if($message){
  echo $message;
  Session::put('message',null);
}
?>
    @endphp
                <form action="{{url('/Create')}}" method="POST">
                    {{csrf_field()}}
                      <input type="text" placeholder="Enter Your Username" name="uname"/>
                      <input type="text" placeholder="Enter Your Email" name="email"/>
                      <input type="password" placeholder="Enter Your Password" name="password"/>
                      <button type="submit">Create Now</button><br><br><br></br>
                </form>
              </div>


                    
@endsection