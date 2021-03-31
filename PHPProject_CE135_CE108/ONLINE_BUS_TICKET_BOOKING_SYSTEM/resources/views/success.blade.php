<style>
     a:link,a:visited{
          background-color: blue;
          color: white;
          padding: 5px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
      }
</style>
<body bgcolor="black">


  <h1 style="color:green;"><center>Your payment is successfully done!</center></h1><br><br>
  <center>
        <h1 style="color:red;"><center>Print</center></h1>
     <table border="1">
         <tr><td><p style="color:DodgerBlue;">Name:: {{$name}}</p></td></tr>
         <tr><td><p style="color:DodgerBlue;">Age:: {{$age}}</p></td></tr>
         <tr><td><p style="color:DodgerBlue;">Email:: {{$email}}</p></td></tr>
         <tr><td><p style="color:DodgerBlue;">Mob:: {{$mob}}</p></td></tr>
         <tr><td><p style="color:DodgerBlue;">Source:: {{$data[0]->Source}}</p></td></tr>
         <tr><td><p style="color:DodgerBlue;">Destination:: {{$data[0]->Destination}}</p></td></tr>
         <tr><td><p style="color:DodgerBlue;">Date:: {{$data[0]->Date}}</p></td></tr>
         <tr><td><<p style="color:DodgerBlue;">Time:: {{$data[0]->Time}}</p></td></tr>
         <tr><td><p style="color:DodgerBlue;">Price:: {{$data[0]->Price}}</p></td></tr>
         <tr><td><p style="color:DodgerBlue;">Nos:: {{$nos}}</p></td></tr>
         <tr><td><p style="color:DodgerBlue;">Cost:: {{$nos*$data[0]->Price}}</p></td></tr>
     </table>
          <br><br>
         <center><a href={{"reservation".$data[0]->id}}>BACK</a><center/><br>

 </center>
</body>
