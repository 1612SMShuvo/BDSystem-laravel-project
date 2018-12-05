@extends('welcome')
@section('Content')
               <div class="form">
               <h2 style="color :black;">Donor</h2><br>
               <h3 style="color:#800000;">Edit Profile</h3><br>
                <form action="{{url('/ProfileEdit')}}" method="POST">
                    {{csrf_field()}}

                      <input type="text" placeholder="Enter Your Name" name="name"/>
                      <input type="text" placeholder="Enter Your Email" name="email"/>
                      <input type="text" placeholder="Enter Your Phone" name="phone"/>
                      <input type="text" placeholder="Enter Your Address" name="address"/>
                      <input type="text" placeholder="Enter Your Blood Group" name="bgroup"/>
                      <input type="text" placeholder="Enter Your Last Donation Date" name="lastdate"/>
                      <input type="text" placeholder="Enter Your Weight" name="weight"/>
                      <button type="submit">Save</button><br><br><button>Edit</button><button>Logout</button><br></br>

                      
                </form>
              </div>


@endsection