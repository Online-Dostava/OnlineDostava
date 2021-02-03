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
            <a class="nav-link" href="#">Informacije</a>
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


<div id="onama">
<h2 style="text-align: center;">Osnivači</h2>

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{url('/img/ja.jpeg')}}" alt="Filip slika" height="600px" width="280px">
    <div class="card-body">
      <h5 class="card-title">Filip Oroz</h5>
      <p class="card-text">Iz Kiseljaka, 20 god. 3. godina Računarstvo, zanima me Frontend.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Frontend</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{url('/img/andrej.jpeg')}}" alt="Andrej slika" height="600px" width="280px">
    <div class="card-body">
      <h5 class="card-title">Andrej Pejčinović</h5>
      <p class="card-text">Iz Dubrovnika, 21 god. student treće godine računarstva.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Frontend/Backend</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{url('/img/matej.jpeg')}}" alt="Matej slika" height="600px" width="280px">
    <div class="card-body">
      <h5 class="card-title">Matej Stojić</h5>
      <p class="card-text">Iz Dragićine, 21 god. student treće godine računarstva.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Backend</small>
    </div>
  </div>
</div>
</div>
<hr>
<br><br><br>

    
<div id="oprojektu">
  <div class="row">
    <div class="col-4">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><strong>TEHNOLOGIJE</strong></a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">FRONTEND</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">BACKEND</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">DIZAJN</a>
      </div>
    </div>
    <div class="col-8">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Za ovaj projekt korištene su tehnologije: HTML, CSS, Bootstrap, Laravel i phpMyAdmin</div>
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><ul>
        <li>HTML</li>
          <li>CSS</li>
          <li>JavaScript</li>
          <li>Bootstrap</li>
        </ul></div>
        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"><ul><li>PHP</li>
          <li>PHP framework Laravel</li>
          <li>phpMyAdmin</li></ul></div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><ul><li>Photoshop</li><li>Figma</li></ul></div>
      </div>
    </div>
  </div>
</div>
<br> <p>Za uspješan rad bilo kojeg restorana u današnje vrijeme neizostavan dio postala je mogućnost dostave hrane i pića. 
  Svrha našeg projekta je omogućiti korisnicima što lakšu, bržu i jednostavniju narudžbu putem naše web aplikacije. 
  Smatramo da postoji adekvatna aplikacija za naručivanje hrane na našem području i mislimo da bismo je mi uz pomoć profesora i asistenata mogli napraviti. 
  U 2020. bismo trebali moći naručiti hranu u 3 klika mobitelom, tabletom ili računalom, a ne zvati na fiksni telefon kako bismo napravili narudžbu tako da 
  ćemo mi dati sve od sebe da to i promijenimo, na bolje.</p>
<p>Ovaj predmet je do sada najzanimljiviji predmet na fakultetu budući da ima puno praktičnog rada, malo učenja teorije i odmah vidimo plodove svoga rada 
  tako da se veselimo izazovu i projektu i nadamo se da ćemo ga odraditi kako spada!</p>
<br>



   <div id="footer">
    <footer class="page-footer font-small unique-color-dark">

      <div style="background-color: #6351ce;">
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