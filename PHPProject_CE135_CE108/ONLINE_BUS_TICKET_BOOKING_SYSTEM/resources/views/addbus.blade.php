<style>

     a:link,a:visited{
          background-color: blue;
          color: black;
          padding: 5px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
      }
</style>


<body bgcolor="black">
<center><h1 style="color:red;">Add Bus</h1></center>
<center>
<form action="addbus" method="POST">
   @csrf
    <center><p style="color:DodgerBlue;">Source: <input type="text" name="source" required></p></center>
    <center><p style="color:DodgerBlue;">Destination: <input type="text" name="destination" required></p></center>
    <center><p style="color:DodgerBlue;">Date: <input type="date" name="date" required></p></center>
    <center><p style="color:DodgerBlue;">Time: <input type="time" name="time" required></p></center>
    <center><p style="color:DodgerBlue;">Price: <input type="text" name="price" required></p></center>
    <br>
   <input type="submit" name="submit" value="Add Bus"><br>
</form>
    <a href='admin'>Back</a>
</center>
</body>
