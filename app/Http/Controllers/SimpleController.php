<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
use Carbon\Carbon;
session_start();

class SimpleController extends Controller
{
    public function adminpage(){
    	return view('Admin');
    }
    public function showpage(){
        $profile=DB::table('tbl_profile')->get();

        return view('DonorShow')->with('Showdata',$profile);
    }
    public function donorpage(){
    	return view('Donor');
    }
    public function searchpage(Request $request){
      $bgroup =$request->get('bgroup');
      $location =$request->get('location');

      if ($bgroup && $location) {
        $infolocation=DB::table('tbl_profile')
                    ->where('bgroup','like','%'.$bgroup.'%')
                    ->where('address','like','%'.$location.'%')
                    ->get();
        return view('Search',compact('infolocation'));
      }
      elseif ($bgroup || $location) {
        $infolocation=DB::table('tbl_profile')
                    ->where('bgroup','like','%'.$bgroup.'%')
                    ->where('address','like','%'.$location.'%')
                    ->get();
        return view('Search',compact('infolocation'));
      }
      else {
        $infolocation=DB::table('tbl_profile')->get();
        return view('Search',compact('infolocation'));
      }
    }
    public function registrationpage(){
    	return view('Registration');
    }
    public function profilepageview()
    {
              
        if(session()->has('user_email')){
            $email=session()->get('user_email');
            $info=DB::table('tbl_donor')->where('email',$email)->first();
            $proinfo=DB::table('tbl_profile')->where('email',$email)->first();
            if ($info && $proinfo ) {
                return view('Profile',compact('info','proinfo'));
            }else if($info){
                return view('Profile',compact('info'));
            }
           
        }
        
    }

    public function donorshowpage(){
        $profile=DB::table('tbl_profile')->get();

        return view('DonorShow')->with('Showdata',$profile);
    }
    public function donorlogin(Request $request)
    {
      $username=$request->uname;
      $password=$request->password;

      $info=DB::table('tbl_donor')->where('uname',$username)
                                  ->where('password',$password)
                                  ->first();
      if ($info) {
            session()->put('user_email',$info->email);
          return redirect('/profile');
      }else{
          session()->flash('Message','Invalid Donor Username or Password');
          return redirect('/Donor');
      }
    }
    // Show donors is here
    public function adminshowpage(Request $request){

        $username=$request->uname;
        $password=$request->password;

        if ($username=="Admin" && $password=="root") {
            $profile=DB::table('tbl_profile')->get();
            return view('Show')->with('Showdata',$profile);
        }else{
            session()->flash('Message','Invalid Username or Password');
            return redirect('/Admin');
        }

    }
    // Create new account Here
    public function Create(Request $request)
    {
        $data=array();
        $data['uname']=$request->uname;
        $data['email']=$request->email;
        $data['password']=$request->password;

        DB::table('tbl_donor')->insert($data);

        Session::put('message','Account Created successfully');
        return Redirect::to('/Donor');

    }
//Create donor Profile
    public function ProfileCreate(Request $request)
    {
        $height=$request->get('height');
        $weight=$request->get('weight');
        $bmi=($weight/(($height*0.3048)*($height*0.3048)));
        if(($bmi>20)){
        $prfl=array();
        $prfl['name']=$request->name;
        $prfl['email']=$request->email;
        $prfl['phone']=$request->phone;
        $prfl['address']=$request->address;
        $prfl['lat']=$request->lat;
        $prfl['long']=$request->long;
        $prfl['bgroup']=$request->bgroup;
        $prfl['lastdate']=$request->lastdate;
        $prfl['weight']=$request->weight;
        $prfl['height']=$request->height;
        $prfl['created_at']=Carbon::now('Asia/Dhaka');
        $prfl['updated_at']=Carbon::now('Asia/Dhaka');


        DB::table('tbl_profile')->insert($prfl);

        Session::put('message','Value added successfully');
        return Redirect::to('/DonorShow');
    }
    else {
        return view('Profile');
    }

    }
    //Donor profile edit page
    public function Editprofile($email)
    {
        $info=DB::table('tbl_donor')->where('email',$email)->first();
        $proinfo=DB::table('tbl_profile')->where('email',$email)->first();

        return view('Profile',compact('info','proinfo'));
        return redirect::to('updateProfile');


    }
//Donor update profile
    public function updateProfile(Request $request,$email)
    {
        $prfl=array();
        $prfl['name']=$request->name;
        $prfl['email']=$request->email;
        $prfl['phone']=$request->phone;
        $prfl['address']=$request->address;
        $prfl['lat']=$request->lat;
        $prfl['long']=$request->long;
        $prfl['bgroup']=$request->bgroup;
        $prfl['lastdate']=$request->lastdate;
        $prfl['weight']=$request->weight;

        $prfl['created_at']=Carbon::now('Asia/Dhaka');
        $prfl['updated_at']=Carbon::now('Asia/Dhaka');
        $prfl['height']=$request->height;

        DB::table('tbl_profile')->where('email',$email)->update($prfl);

        Session::flash('message','Information Update successfully');
        return Redirect::to('/DonorShow');
    }
//Admin profile edit page
    public function ProfileEdit($id)
    {
        $datainfo=DB::table('tbl_profile')->where('id',$id)->first();


       return view('ProfileEdit')->with('Showdata',$datainfo);
       return redirect::to('/Show');


    }
//Admin update profile
    public function updateProfileinfo(Request $request,$id)
    {
        $prfl=array();
        $prfl['name']=$request->name;
        $prfl['email']=$request->email;
        $prfl['phone']=$request->phone;
        $prfl['address']=$request->address;
        $prfl['bgroup']=$request->bgroup;
        $prfl['lastdate']=$request->lastdate;
        $prfl['weight']=$request->weight;
        $prfl['created_at']=Carbon::now('Asia/Dhaka');
        $prfl['updated_at']=Carbon::now('Asia/Dhaka');

        DB::table('tbl_profile')->where('id',$id)->update($prfl);

        Session::flash('message','Information Update successfully');
        return Redirect::to('/Show');
    }

//Search show page
public function searchshow(Request $request){

            // Sets the parameters from the get request to the variables.
        $bgroup =$request->get('bgroup');
        $location =$request->get('location');

        //$hasCoffeeMachine = Request::get('hasCoffeeMachine');

        // Perform the query using Query Builder

        $profile=DB::table('tbl_profile')
                    ->where('bgroup','like','%'.$bgroup.'%')
                    ->where('address','like','%'.$location.'%')
                    ->get();
        //$profile=DB::table('tbl_profile')->where('bgroup',$bgroup)->get();

        return view('Searchshow')->with('Showdata',$profile);

}


}
?>
