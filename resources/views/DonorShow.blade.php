@extends('welcome')
@section('Content')

<head>
    <title>view</title>
 
    <style type="text/css">
        .manageMember {
            width: 100%;
            margin: auto;
        }
 
    table {
            width: 100%;
            margin-top: 20px;
        }

		fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
    table tr th {
        	font-color:#000000;
          padding-top: 20px;
          font-size: 20px;
        }


    button {
        font-family: "Roboto", sans-serif;
  		text-transform: uppercase;
  		outline: 0;
 		 background: #000080;
  		width: 35%;
 		 border: 0;
  		padding: 15px;
  		color: #FFFFFF;
  		font-size: 14px;
  		-webkit-transition: all 0.3 ease;
  		transition: all 0.3 ease;
  		cursor: pointer;
}
button:hover,button:active,button:focus {
  background: #000080;
}
.mess{
  background-color: green;
  font-size: 20px;text-align: left;
}
    </style>
 
</head>
<body>
    @php
      $message=Session::get('message');
      if($message){
      echo '<div class="mess">' .$message.'</div>';
    }
    @endphp

    <table border="4" cellspacing="10" cellpadding="0">
        <thead>
            <tr>
                <th>Serial No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>		
                <th>Blood group</th>
                <th>Last Donation Date</th>
                <th>Weight</th>
                <th>Height</th>
            </tr>
        </thead>

        <tbody>
  @foreach($Showdata as $v_dat)
    <tr>
      <td style="font-size: 15px">{{$v_dat->id}}</td>
      <td style="font-size: 15px">{{$v_dat->name}}</td>
      <td style="font-size: 15px">{{$v_dat->email}}</td>
      <td style="font-size: 15px">{{$v_dat->phone}}</td>
      <td style="font-size: 15px">{{$v_dat->address}}</td>
      <td style="font-size: 15px">{{$v_dat->bgroup}}</td>
      <td style="font-size: 15px">{{$v_dat->lastdate}}</td>
      <td style="font-size: 15px">{{$v_dat->weight}}</td>
      <td style="font-size: 15px">{{$v_dat->height}}</td>
    </tr>
  @endforeach
  </tbody>
  
</table><br><br><br></br>

      <a href="{{url('/Donor')}}"><button>Logout</button></a><br></br>
</div>
</body>
@endsection