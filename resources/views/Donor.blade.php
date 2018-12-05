@extends('welcome')
@section('Content')
     <div class="form">
      <form action="{{url('donorlogin')}}" method="POST">
      	{{ csrf_field() }}
      	@if(session()->has('Message'))
          <div style="background-color: red; padding: 25px; color:black; font-size:18px">{{ session()->get('Message') }}</div><br>
        @endif
           <h3 style="color:black;">Donor</h3><br>
            <input type="text" placeholder="username" name="uname"/>
            <input type="password" placeholder="password" name="password"/>
            <button>login</button><br><br><br></br>
      </form>
    </div>
    <style=color:"black">Not registered? <a href="{{URL::to('/Registration')}}">Create an account</a></br></br></style>
@endsection
