<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buses;
class mycontroller extends Controller
{
    //
    function addbus(Request $req)
    {
        $bus=new Buses;
        $bus->Source=$req->input('source');
        $bus->Destination=$req->input('destination');
        $bus->Date=$req->input('date');
        $bus->Time=$req->input('time');
        $bus->Price=$req->input('price');
        $bus->save();
        echo "<h1><center>your bus is successfully add</center></h1>";
        echo "<center><a href='admin'>Back</a></center>";
    }



    function findbus()
    {
       return view('findbus');
    }




    function buslist(Request $req)
    {

       $data_s=$req->get('source');
       $data_d=$req->get('dest');
       $data_date=$req->get('date');

        $users=Buses::all();
        $count=0;
        foreach($users as $user)
        {
           if($user->Source==$data_s && $user->Destination==$data_d && $user->Date==$data_date)
           {
              //$data=array('source'=>$user->Source,'dest'=>$user->Destination,'date'=>$user->Date,'time'=>$user->Time);
              //return $data;
              $count++;
              return view('buslist')->with('id',$user->id)->with('source',$user->Source)->with('dest',$user->Destination)->with('date',$user->Date)->with('time',$user->Time)->with('price',$user->Price);
           }
         }
         if($count==0)
         {
            echo "<h1><center>sorry,bus is not available</center></h1>";
            echo "<center><a href='findbus'>Back</a></center>";
         }

    }



    function reservation($id)
    {
       $data=Buses::where('id',$id)->get();
       return view('reservation',['data'=>$data]);
    }





    function success(Request $req,$id)
    {
       $data=Buses::where('id',$id)->get();
       $data_name=$req->get('name');
       $data_age=$req->get('age');
       $data_email=$req->get('email');
       $data_mob=$req->get('mob');
       $data_nos=$req->get('nos');
      // $data_cost=$req->get('cost');
       return view('success',['data'=>$data])->with('name',$data_name)->with('age',$data_age)->with('email',$data_email)->with('mob',$data_mob)->with('nos',$data_nos);

    }
}
