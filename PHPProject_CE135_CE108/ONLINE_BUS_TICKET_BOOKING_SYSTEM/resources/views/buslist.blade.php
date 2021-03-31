<style>
       a:link,a:visited{
          background-color: blue;
          color: white;
          padding: 5px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
      }
       th,td{
      border=1px white solid;
      }

   </style>
<body bgcolor="black">
<center>
     <h1 style="color:red;"><center>Available buses</center></h1>
<table border="1">
  <tr>
      <th style="color:white;">ID</th>
      <th style="color:white;">SOURCE</th>
      <th style="color:white;">DESTINATION</th>
      <th style="color:white;">DATE</th>
      <th style="color:white;">TIME</th>
      <th style="color:white;">PRICE</th>
      <th style="color:white;">RESERVATION</th>

  </tr>

   <tr>
      <td><center><p style="color:DodgerBlue;">{{$id}}</p></center></td>
      <td><center><p style="color:DodgerBlue;">{{$source}}</p></center></td>
      <td><center><p style="color:DodgerBlue;">{{$dest}}</p></center></td>
      <td><center><p style="color:DodgerBlue;">{{$date}}</p></center></td>
      <td><center><p style="color:DodgerBlue;">{{$time}}</p></center></td>
      <td><center><p style="color:DodgerBlue;">{{$price}}</p></center></td>
      <td><a href={{"reservation".$id}}>Resevation</a></td>
   </tr>

</table>
<br><br>
      <center><a href='findbus'>BACK</a><center/><br>
</center>
</body>
