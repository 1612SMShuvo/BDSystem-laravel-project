@extends('welcome')
@section('Content')
             <div class="form">
             <h2 style="color :black;">Donor</h2><br>
             <h3 style="color:#800000;">Edit Profile</h3><br>
              <form action="{{url('/updateProfile/'.$Showdata->id)}}" method="POST">
                  {{csrf_field()}}

                    <input type="text" placeholder="Enter Your Name" name="name" value= "{{$Showdata->name}}"/>
                    <input type="text" placeholder="Enter Your Email" name="email" value="{{$Showdata->email}}"/>
                    <input type="text" placeholder="Enter Your Phone" name="phone" value="{{$Showdata->phone}}"/>
                    <input type="text" placeholder="Enter Your Address" name="address" value="{{$Showdata->address}}"/>
                    <input type="text" placeholder="Enter Your Blood Group" name="bgroup" value="{{$Showdata->bgroup}}"/>
                    <input type="text" placeholder="Enter Your Last Donation Date" name="lastdate" value="{{$Showdata->lastdate}}"/>
                    <input type="text" placeholder="Enter Your Weight" name="weight" value="{{$Showdata->weight}}"/>
                    <button type="submit">Save Change</button><br><br><button>Logout</button><br></br>                    
              </form>
            </div>


@endsection