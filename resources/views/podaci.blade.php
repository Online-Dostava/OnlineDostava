<!doctype html>



<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <!-- Font Awesome -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css">
    <title> 
        Online dostava 
    </title> 
      <link rel = "icon" href =  "https://www.eart.hr/wp/wp-content/uploads/2016/11/besplatna-dostava.jpg?x10208" 
        type = "image/x-icon"> 
  </head>

  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">DOSTAVA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="indexkorisnik">Home <span class="sr-only">(current)</span></a>
          </li>
	<li class="nav-item">
            <a class="nav-link" href="menipr">Meni</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="info">Informacije</a>
        </li>
                                   
          <li class="nav-item">
            <a class="nav-link" href="https://drive.google.com/file/d/1ZKgPPSsHvFJ8I8zglqKkIHNbGCIM-6-z/view?usp=sharing" target="_blank">Vizija</a>
        </li>     
        </ul>
  
        <div>
            <a style="color:gray; text-decoration: none; padding-right: 10px;" href="kosarica">Košarica</a>
        </div>     

<div>
            <a style="color:gray; text-decoration: none;" href="profil">Profil</a>
        </div>


<div class="text-center">
<form action="logout" method="post">
  @csrf
  <button class="btn btn-default btn-rounded my-3" name="logout">
    Odjava</button>
</form>
</div>
      </div>
    </nav>
<br><br>
<div style="display: flex;
  justify-content: center;">
 <form action="podaciupdate" method="post">
 @csrf
  <label for="ime">Ime:</label>
  <input type="text" id="ime" name="ime" required><br><br>
  <label for="prezime">Prezime:</label>
  <input type="text" id="prezime" name="prezime" required><br><br>
  <label for="brojtel">Broj telefona:</label>
  <input type="text" id="brojtel" name="brojtel" required><br><br>
  <label for="adresa">Adresa:</label>
  <input type="text" id="adresa" name="adresa" required><br><br>
  <input type="submit" value="Submit">
</form> 
</div>
<br><br>



   <div id="footer">
    <footer class="page-footer font-small unique-color-dark">

      <div style="background-color: orange;">
        <div class="container">
      <div class="row py-4 d-flex align-items-center">
          </div>
        </div>
      </div>
      
    
      <div class="container text-center text-md-left mt-5">

        <div class="row mt-3">
 
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <h6 class="text-uppercase font-weight-bold">Credits</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>Filip Oroz</p>
            <p> Andrej Pejčinović </p>
            <p> Matej Stojić </p>
           </div>

           <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <h6 class="text-uppercase font-weight-bold">Kontakt</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">
           
             <p> <i class="fas fa-envelope mr-3"></i>filip.oroz@student.fsre.ba</p>
                 <p> <i class="fas fa-envelope mr-3"></i>andrej.pejcinovic@student.fsre.ba</p>
              <p>
                <p>
                  <i class="fas fa-envelope mr-3"></i> matej.stojic@student.fsre.ba</p>
                <p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
    
            <h6 class="text-uppercase font-weight-bold">Korisni linkovi</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 120px;">
            <p>
              <a href="https://www.w3schools.com/" target="_blank">w3schools</a>
            </p>
            <p>
              <a href="https://www.udemy.com/" target="_blank">Udemy</a>
            </p>
            <p>
              <a href="https://www.youtube.com/" target="_blank">YouTube</a>
            </p>
  
          </div>
       
        
        
    
        </div>
      
    
      </div>
    
    
    <hr>
    <div id="copy">
      <div class="footer-copyright text-center py-3">© 2020 FSRE
        <p> RWA</p>
      </div>
    </div>
    
    </footer>
  </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>