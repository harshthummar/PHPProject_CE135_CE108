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
<center>
  <h1 style="color:red;"><center>Reservation</center></h1>
   <center><p style="color:DodgerBlue;">Id:: {{$data[0]->id}}</p></center>
   <center><p style="color:DodgerBlue;">Source:: {{$data[0]->Source}}</p></center>
   <center><p style="color:DodgerBlue;">Destination:: {{$data[0]->Destination}}</p></center>
   <center><p style="color:DodgerBlue;">Date:: {{$data[0]->Date}}</p></center>
   <center><p style="color:DodgerBlue;">Time:: {{$data[0]->Time}}</p></center>
   <center><p style="color:DodgerBlue;">Price:: {{$data[0]->Price}}</p></center>
   <form action={{"success".$data[0]->id}} method="POST">
   @csrf
   <center><p style="color:DodgerBlue;">Name::<input type="text" name="name" required></p></center>
   <center><p style="color:DodgerBlue;">Age::<input type="number" name="age" required></p></center>
   <center><p style="color:DodgerBlue;">Email_Id::<input type="email" name="email" required></p></center>
   <center><p style="color:DodgerBlue;">Mob::<input type="number" min="1000000000" maxlength="9999999999" placeholder="10 digit number" name="mob" required></p></center>
   <center><p style="color:DodgerBlue;">Nos::<input type="number" min="1" max="32" name="nos" required></p></center>
  {{-- <center><p style="color:DodgerBlue;">Cost::<input type="text" name="cost" required></p></center> --}}


               <h1 style="color:red;"><center>Payment</center></h1>

           <p style="color:DodgerBlue;">Card Number</p>
     		<input type="number" name="card_num" min="100000000000" max="999999999999" placeholder="12 digit number"  required><br><br>
           <p style="color:DodgerBlue;">Expiry Date</p>
     		<select name="month" required>
     			<option value="">Month</option>
     			<option value="Jan(01)">Jan(01)</option>
     			<option value="Feb(02)">Feb(02)</option>
     			<option value="Mar(03)">Mar(03)</option>
     			<option value="Apr(04)">Apr(04)</option>
     			<option value="May(05)">May(05)</option>
     			<option value="Jun(06)">June(06)</option>
     			<option value="Jul(07)">July(07)</option>
     			<option value="Aug(08)">Aug(08)</option>
     			<option value="Sept(09)">Sep(09)</option>
     			<option value="Oct(10)">Oct(10)</option>
     			<option value="Nov(11)">Nov(11)</option>
     			<option value="Dec(12)">Dec(12)</option>
     		</select>
     		<select name="year" required>
     			<option value="">Year</option>
     			<option value="2021">2021</option>
     			<option value="2022">2022</option>
     			<option value="2023">2023</option>
     			<option value="2024">2024</option>
     			<option value="2025">2025</option>
     			<option value="2026">2026</option>
     			<option value="2027">2027</option>
     			<option value="2028">2028</option>
     			<option value="2029">2029</option>
     			<option value="2030">2030</option>
     		</select>
     		<br><br>
           <p style="color:DodgerBlue;">CVV</p>
     		<input type="number" name="cvv" min="100" max="999" placeholder="***" required><br><br>
              <br>
        <input type="submit" name="submit" value="Pay" style="color:blue;"><br>
  </form>
     <center><a href="findbus">BACK</a><center/><br>
</center>
</body>
