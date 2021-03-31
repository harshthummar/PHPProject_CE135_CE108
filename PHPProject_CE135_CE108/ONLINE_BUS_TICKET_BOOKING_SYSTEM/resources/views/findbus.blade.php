<style>
     body {
     background-image: url('https://promptcharters.com/blogimages/bus-inside.jpg');
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: 100% 100%;
     }

     a:link,a:visited{
          background-color: black;
          color: blue;
          padding: 5px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
      }
    </style>


<center><h1><p style="color:red;">FINDBUS</p></h1></center><br>
<center>
   <form action="buslist" method="POST">
      @csrf
      <p style="color:DodgerBlue;">Source:<input type="text" name="source"></p>
      <p style="color:DodgerBlue;">Destination:<input type="text" name="dest"></p>
      <p style="color:DodgerBlue;">Date:<input type="date" name="date"></p>
      <p><button type="submit">SUBMIT</button></p>
      <center><a href='dashboard'>BACK</a><center/><br>
   </form>
</center>
