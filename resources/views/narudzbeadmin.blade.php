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
            <a class="nav-link" href="admin">Home <span class="sr-only">(current)</span></a>
          </li>
	<li class="nav-item">
            <a class="nav-link" href="meniadmin">Meni</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="infoadmin">Informacije</a>
        </li>
                                   
          <li class="nav-item">
            <a class="nav-link" href="https://drive.google.com/file/d/1ZKgPPSsHvFJ8I8zglqKkIHNbGCIM-6-z/view?usp=sharing" target="_blank">Vizija</a>
        </li>     
        </ul>
        
        <div>
            <a style="color:gray; text-decoration: none; padding-right: 10px;" href="kosaricaadmin">Košarica</a>
        </div> 

        <div>
            <a style="color:gray; text-decoration: none; padding-right: 10px;" href="narudzbeadmin">Upravljanje narudžbama</a>
        </div>

        <div>
            <a style="color:gray; text-decoration: none; padding-right: 10px;" href="uprkor">Upravljanje korisnicima</a>
        </div>
<div>
            <a style="color:gray; text-decoration: none;" href="profiladmin">Profil</a>
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


  
 </nav>


<div style="overflow:auto; height:700px; font-size: 20px;"> 
@foreach ($grupaKorisnici1 as $id1 => $korisnici1)

<div style="margin-bottom: 10%; max-width:50%; margin-left: auto; min-width:350px;
margin-right: auto;">
<table class="narudzbe-tablica">
<tr>
<td class="header3">Jelo/Pice</td>
<td class="header3">Kolicina</td>
<td class="header3">Cijena</td>
</tr>
@foreach ($korisnici1 as $korisnik1)
<form method="post" action='izvrsiNar'>
@csrf
<tr>
<td class="header3">{{ $korisnik1->naziv }}</td>
<td class="header3">{{ $korisnik1->kolicina }}</td>
<td class="header3">{{ $korisnik1->cijena }} KM</td>
</tr>

@endforeach
<tr>
<td class="header4">ID Narudžbe</td>
<td class="header4">Adresa</td>
<td class="header4">Ukupna cijena</td>
</tr>
<tr>
<td class="header4">{{ $korisnik1 -> id}}</td>
<td class="header4">{{ $korisnik1 -> adresa}}</td>
@foreach($suma1 as $suma2)

@php $id1 = $suma2->id; $id = $korisnik1->id; @endphp
@if($id1==$id)

<td class="header4">{{ $suma2->sum }} KM</td>

@endif
@endforeach

</tr>
</table><br>
<input type="hidden" id= "custId3" name= "custId3" value="{{ $korisnik1->id }}"></input>
<input type="submit" style="background-color:green; border: solid 2px black; color:white;" value="Izvrši narudžbu" name="deleteNar"></input>
</form>
</div>

@endforeach

</div><br><br>




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