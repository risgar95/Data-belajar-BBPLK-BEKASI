<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
  <?php
  $nama1 = "John";
  $email1 = "lenon@xample.com";
  $coment1 = "Lorem hijau abu-abu";
  $nama2 = "Mary";
  $email2 = "manroe@xample.com";
  $coment2 = "Lorem Lapetr";
  $nama3 = "July";
  $email3 = "agustus@xample.com";
  $coment3 = "Lorem.........";

  ?>
  <div class= "container-fluid">
   <div class="row">
    <div class= "col-12 bg-primary text-light" style="min-height:100px" ><h1 align="center">Person</h1>       
      <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="tampilanmobile.html" id="itemtampilanmobile">Navigation</a>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="tampilanmobile.html" id="itemtampilanmobile">Home</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="tablefacilities.html" id="itemtablefacilities">Facilities</a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="guestbook.html" id="itemguestbook">Guest Book</a>
           </li>    
         </ul>
         <form class="form-inline my-2 my-lg-0 ">
          <input class="form-control mr-sm-2" type="text" placeholder="Search"> 
          <button class="btn btn-success my-2 my-sm-0" type="button">Search</button>
        </form>
      </div>  
    </nav>
  </div>

  <div class="col-12 col-md-8 col-lg-10 bg-warning text-light" style="min-height:650px; margin-top:10px;">
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Komentar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $nama1;?></td>
          <td><?php echo $email1;?></td>
          <td><?php echo $coment1?></td>
        </tr>
        <tr>
          <td><?php echo $nama2;?></td>
          <td><?php echo $email2;?></td>
          <td><?php echo $coment2?></td>
        </tr>
        <tr>
          <td><?php echo $nama3;?></td>
          <td><?php echo $email3;?></td>
          <td><?php echo $coment3?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-12 col-md-4 col-lg-2 bg-danger text-light">Banner</div>
  <div class="col-12 bg-info text-light">Footer</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>