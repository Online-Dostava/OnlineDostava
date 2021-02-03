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
            <a class="nav-link" href="#">Meni</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="infoadmin">Informacije</a>
        </li>
                                   
          <li class="nav-item">
            <a class="nav-link" href="https://drive.google.com/file/d/1ZKgPPSsHvFJ8I8zglqKkIHNbGCIM-6-z/view?usp=sharing" target="_blank">Vizija</a>
        </li>     
        </ul>
        
        <div>
            <a style="color:gray; text-decoration: none; padding-right: 10px;" href="kosarica">Košarica</a>
        </div>
        <div>
            <a style="color:gray; text-decoration: none; padding-right: 10px;" href="narudzbeadmin">Upravljanje narudžbama</a>
        </div>

<div>
            <a style="color:gray; text-decoration: none; margin-right:10px;" href="uprkor">Upravljanje korisnicima</a>
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

    <div>
<form action="narudzba" method="post">
@csrf
	<h1 style="text-align:center; font-size:7vw; background-color: black; color: white;">Meni</h1><br>
	<div class="meninaslov">Jela   <img style ="width: 120px; height: 120px; margin-bottom: 30px;" src="{{url('/img/foodicon.jpg')}}"><br></div>
	<div style="width=100%;">
    <div class="nekidiv">  
<!-------------------------------------------------------------------Hamburger---------------------------------------------------------->

	<div class = "foodpic2">
  <img src="{{url('/img/hamb1.jpg')}}" style="border-radius:50%"><br>
  <p style="font-size: 25px;">Hamburger 4KM</p><br>
  <button type="button" id = "togglehamb" onclick='togglehamb3()' style="width:150px; background-color: black; font-weight: bold;">Naruči</button>
  <button type="button" id="izmijenihamb" onclick='togglehamb3()'style="display: none; width:100px; background-color: black; font-weight: bold;">Izmijeni</button>
  <input id="inputhamb" type="number" value="0"  style="display: none;" name="inputhamb1" min="0"><br><br>
  <button type="button" id="odustanihamb" onclick='togglehamb1()'style="display: none; width:100px; background-color: red; font-weight: bold;">Odustani</button>
  <button type="button" id="potvrdihamb" onclick='togglehamb2()'style="display: none; width:100px; background-color: black; font-weight: bold;">Potvrdi</button>
</div>

<!-------------------------------------------------------------------Kebab---------------------------------------------------------->

	<div class = "foodpic2"><img src="{{url('/img/kebab1.jpg')}}" style="border-radius:50%"><br><p style="font-size: 25px;">Kebab 5KM</p><br>
  <button type="button" id = "togglekebab" onclick='togglekebab3()' style="width:150px; background-color: black; font-weight: bold;">Naruči</button>
  <button type="button" id="izmijenikebab" onclick='togglekebab3()'style="display: none; width:100px; background-color: black; font-weight: bold;">Izmijeni</button>
  <input id="inputkebab" type="number" value="0"  style="display: none;" name="inputkebab1" min="0"><br><br>
  <button type="button" id="odustanikebab" onclick='togglekebab1()'style="display: none; width:100px; background-color: red; font-weight: bold;">Odustani</button>
  <button type="button" id="potvrdikebab" onclick='togglekebab2()'style="display: none; width:100px; background-color: black; font-weight: bold;">Potvrdi</button>
</div>

<!-------------------------------------------------------------------Pizza---------------------------------------------------------->

	<div class = "foodpic2"><img src="{{url('/img/pizza.jpg')}}" style="border-radius:50%"><br><p style="font-size: 25px;">Pizza 10KM</p><br>
  <button type="button" id = "togglepizza" onclick='togglepizza3()' style="width:150px; background-color: black; font-weight: bold;">Naruči</button>
  <button type="button" id="izmijenipizza" onclick='togglepizza3()'style="display: none; width:100px; background-color: black; font-weight: bold;">Izmijeni</button>
  <input id="inputpizza" type="number" value="0"  style="display: none;" name="inputpizza1" min="0"><br><br>
  <button type="button" id="odustanipizza" onclick='togglepizza1()'style="display: none; width:100px; background-color: red; font-weight: bold;">Odustani</button>
  <button type="button" id="potvrdipizza" onclick='togglepizza2()'style="display: none; width:100px; background-color: black; font-weight: bold;">Potvrdi</button>
</div>

<!-------------------------------------------------------------------Nuggets---------------------------------------------------------->

	<div class = "foodpic2"><img src="{{url('/img/nuggets1.jpg')}}" style="border-radius:50%"><br><p style="font-size: 25px;">Nuggets 6KM</p><br>
  <button type="button" id = "togglenuggets" onclick='togglenuggets3()' style="width:150px; background-color: black; font-weight: bold;">Naruči</button>
  <button type="button" id="izmijeninuggets" onclick='togglenuggets3()'style="display: none; width:100px; background-color: black; font-weight: bold;">Izmijeni</button>
  <input id="inputnuggets" type="number" value="0"  style="display: none;" name="inputnuggets1" min="0"><br><br>
  <button type="button" id="odustaninuggets" onclick='togglenuggets1()'style="display: none; width:100px; background-color: red; font-weight: bold;">Odustani</button>
  <button type="button" id="potvrdinuggets" onclick='togglenuggets2()'style="display: none; width:100px; background-color: black; font-weight: bold;">Potvrdi</button>
</div>   

<!-------------------------------------------------------------------Cheeseburger---------------------------------------------------------->

	<div class = "foodpic2"><img src="{{url('/img/cheeseburger1.jpg')}}" style="border-radius:50%"><br><p style="font-size: 25px;">Cheeseburger 5KM</p><br>
  <button type="button" id = "togglecheeseburger" onclick='togglecheeseburger3()' style="width:150px; background-color: black; font-weight: bold;">Naruči</button>
  <button type="button" id="izmijenicheeseburger" onclick='togglecheeseburger3()'style="display: none; width:100px; background-color: black; font-weight: bold;">Izmijeni</button>
  <input id="inputcheeseburger" type="number" value="0"  style="display: none;" name="inputcheeseburger1" min="0"><br><br>
  <button type="button" id="odustanicheeseburger" onclick='togglecheeseburger1()'style="display: none; width:100px; background-color: red; font-weight: bold;">Odustani</button>
  <button type="button" id="potvrdicheeseburger" onclick='togglecheeseburger2()'style="display: none; width:100px; background-color: black; font-weight: bold;">Potvrdi</button>
</div>

<!-------------------------------------------------------------------Wings---------------------------------------------------------->

	<div class = "foodpic2"><img src="{{url('/img/wings1.jpg')}}" style="border-radius:50%"><br><p style="font-size: 25px;">Pileća krilca 6KM</p><br>
  <button type="button" id = "togglewings" onclick='togglewings3()' style="width:150px; background-color: black; font-weight: bold;">Naruči</button>
  <button type="button" id="izmijeniwings" onclick='togglewings3()'style="display: none; width:100px; background-color: black; font-weight: bold;">Izmijeni</button>
  <input id="inputwings" type="number" value="0"  style="display: none;" name="inputwings1" min="0"><br><br>
  <button type="button" id="odustaniwings" onclick='togglewings1()'style="display: none; width:100px; background-color: red; font-weight: bold;">Odustani</button>
  <button type="button" id="potvrdiwings" onclick='togglewings2()'style="display: none; width:100px; background-color: black; font-weight: bold;">Potvrdi</button>
</div>	
	</div>	
	<br><br><br>

	<div class="meninaslov">Pića   <img style ="width: 120px; height: 120px; margin-bottom: 30px;" src="{{url('/img/drinksicon.jpg')}}"><br></div>
    <div class="nekidiv">

<!-------------------------------------------------------------------Cola---------------------------------------------------------->

	<div class = "foodpic2"><img src="{{url('/img/cola1.jpg')}}" style="border-radius:50%"><br><p style="font-size: 25px;">Coca-Cola 2KM</p><br>
  <button type="button" id = "togglecola" onclick='togglecola3()' style="width:150px; background-color: black; font-weight: bold;">Naruči</button>
  <button type="button" id="izmijenicola" onclick='togglecola3()'style="display: none; width:100px; background-color: black; font-weight: bold;">Izmijeni</button>
  <input id="inputcola" type="number" value="0"  style="display: none;" name="inputcola1" min="0"><br><br>
  <button type="button" id="odustanicola" onclick='togglecola1()'style="display: none; width:100px; background-color: red; font-weight: bold;">Odustani</button>
  <button type="button" id="potvrdicola" onclick='togglecola2()'style="display: none; width:100px; background-color: black; font-weight: bold;">Potvrdi</button>
</div>

<!-------------------------------------------------------------------Sprite---------------------------------------------------------->

	<div class = "foodpic2"><img src="{{url('/img/sprite1.jpg')}}" style="border-radius:50%"><br><p style="font-size: 25px;">Sprite 2KM</p><br>
  <button type="button" id = "togglesprite" onclick='togglesprite3()' style="width:150px; background-color: black; font-weight: bold;">Naruči</button>
  <button type="button" id="izmijenisprite" onclick='togglesprite3()'style="display: none; width:100px; background-color: black; font-weight: bold;">Izmijeni</button>
  <input id="inputsprite" type="number" value="0"  style="display: none;" name="inputsprite1" min="0"><br><br>
  <button type="button" id="odustanisprite" onclick='togglesprite1()'style="display: none; width:100px; background-color: red; font-weight: bold;">Odustani</button>
  <button type="button" id="potvrdisprite" onclick='togglesprite2()'style="display: none; width:100px; background-color: black; font-weight: bold;">Potvrdi</button>
</div>

<!-------------------------------------------------------------------Fanta---------------------------------------------------------->

	<div class = "foodpic2"><img src="{{url('/img/fanta1.jpg')}}" style="border-radius:50%"><br><p style="font-size: 25px;">Fanta 2KM</p><br>
  <button type="button" id = "togglefanta" onclick='togglefanta3()' style="width:150px; background-color: black; font-weight: bold;">Naruči</button>
  <button type="button" id="izmijenifanta" onclick='togglefanta3()'style="display: none; width:100px; background-color: black; font-weight: bold;">Izmijeni</button>
  <input id="inputfanta" type="number" value="0"  style="display: none;" name="inputfanta1" min="0"><br><br>
  <button type="button" id="odustanifanta" onclick='togglefanta1()'style="display: none; width:100px; background-color: red; font-weight: bold;">Odustani</button>
  <button type="button" id="potvrdifanta" onclick='togglefanta2()'style="display: none; width:100px; background-color: black; font-weight: bold;">Potvrdi</button>
</div>

<!-------------------------------------------------------------------Cedevita---------------------------------------------------------->

	<div class = "foodpic2"><img src="{{url('/img/cedevita1.jpg')}}" style="border-radius:50%"><br><p style="font-size: 25px;">Cedevita 1.5KM</p><br>
  <button type="button" id = "togglecedevita" onclick='togglecedevita3()' style="width:150px; background-color: black; font-weight: bold;">Naruči</button>
  <button type="button" id="izmijenicedevita" onclick='togglecedevita3()'style="display: none; width:100px; background-color: black; font-weight: bold;">Izmijeni</button>
  <input id="inputcedevita" type="number" value="0"  style="display: none;" name="inputcedevita1" min="0"><br><br>
  <button type="button" id="odustanicedevita" onclick='togglecedevita1()'style="display: none; width:100px; background-color: red; font-weight: bold;">Odustani</button>
  <button type="button" id="potvrdicedevita" onclick='togglecedevita2()'style="display: none; width:100px; background-color: black; font-weight: bold;">Potvrdi</button>
</div><br><br>

<button type="submit" style="width:30%; height: 100px; background-color: orange; font-size: 35px; font-weight: bold;" name="narudzba">Završi narudžbu</button>
</form>
  <br><br><br><br><br><br><br><br>
    </div>
</div>  
</div>
</div>



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


    <script type='text/javascript'>
//-------------------------------------------------------------------Hamburger----------------------------------------------------------

function togglehamb3(){

document.getElementById("togglehamb").style.display="none";
document.getElementById("izmijenihamb").style.display="none";
document.getElementById("odustanihamb").style.display="inline-block";
document.getElementById("potvrdihamb").style.display="inline-block";
document.getElementById("inputhamb").style.display="inline-block";
document.getElementById("inputhamb").style.width="206px";

}

function togglehamb1(){

document.getElementById("inputhamb").value = 0;
document.getElementById("odustanihamb").style.display="none";
document.getElementById("inputhamb").style.display="none";
document.getElementById("potvrdihamb").style.display="none";
document.getElementById("togglehamb").style.display="inline-block";

}

function togglehamb2(){
document.getElementById("odustanihamb").style.display="none";
document.getElementById("potvrdihamb").style.display="none";
document.getElementById("izmijenihamb").style.display="inline-block";
document.getElementById("inputhamb").style.display="inline-block";
document.getElementById("inputhamb").style.width="50px";
document.getElementById("inputhamb").style.height="50px";

}

//-------------------------------------------------------------------Kebab----------------------------------------------------------

function togglekebab3(){

document.getElementById("togglekebab").style.display="none";
document.getElementById("izmijenikebab").style.display="none";
document.getElementById("odustanikebab").style.display="inline-block";
document.getElementById("potvrdikebab").style.display="inline-block";
document.getElementById("inputkebab").style.display="inline-block";
document.getElementById("inputkebab").style.width="206px";

}

function togglekebab1(){

document.getElementById("inputkebab").value = 0;
document.getElementById("odustanikebab").style.display="none";
document.getElementById("inputkebab").style.display="none";
document.getElementById("potvrdikebab").style.display="none";
document.getElementById("togglekebab").style.display="inline-block";

}

function togglekebab2(){
document.getElementById("odustanikebab").style.display="none";
document.getElementById("potvrdikebab").style.display="none";
document.getElementById("izmijenikebab").style.display="inline-block";
document.getElementById("inputkebab").style.display="inline-block";
document.getElementById("inputkebab").style.width="50px";
document.getElementById("inputkebab").style.height="50px";

}

//-------------------------------------------------------------------pizza----------------------------------------------------------

function togglepizza3(){

document.getElementById("togglepizza").style.display="none";
document.getElementById("izmijenipizza").style.display="none";
document.getElementById("odustanipizza").style.display="inline-block";
document.getElementById("potvrdipizza").style.display="inline-block";
document.getElementById("inputpizza").style.display="inline-block";
document.getElementById("inputpizza").style.width="206px";

}

function togglepizza1(){

document.getElementById("inputpizza").value = 0;  
document.getElementById("odustanipizza").style.display="none";
document.getElementById("inputpizza").style.display="none";
document.getElementById("potvrdipizza").style.display="none";
document.getElementById("togglepizza").style.display="inline-block";

}

function togglepizza2(){
document.getElementById("odustanipizza").style.display="none";
document.getElementById("potvrdipizza").style.display="none";
document.getElementById("izmijenipizza").style.display="inline-block";
document.getElementById("inputpizza").style.display="inline-block";
document.getElementById("inputpizza").style.width="50px";
document.getElementById("inputpizza").style.height="50px";

}

//-------------------------------------------------------------------Nuggets----------------------------------------------------------

function togglenuggets3(){

document.getElementById("togglenuggets").style.display="none";
document.getElementById("izmijeninuggets").style.display="none";
document.getElementById("odustaninuggets").style.display="inline-block";
document.getElementById("potvrdinuggets").style.display="inline-block";
document.getElementById("inputnuggets").style.display="inline-block";
document.getElementById("inputnuggets").style.width="206px";

}

function togglenuggets1(){

document.getElementById("inputnuggets").value = 0;
document.getElementById("odustaninuggets").style.display="none";
document.getElementById("inputnuggets").style.display="none";
document.getElementById("potvrdinuggets").style.display="none";
document.getElementById("togglenuggets").style.display="inline-block";

}

function togglenuggets2(){
document.getElementById("odustaninuggets").style.display="none";
document.getElementById("potvrdinuggets").style.display="none";
document.getElementById("izmijeninuggets").style.display="inline-block";
document.getElementById("inputnuggets").style.display="inline-block";
document.getElementById("inputnuggets").style.width="50px";
document.getElementById("inputnuggets").style.height="50px";

}

//-------------------------------------------------------------------Cheeseburger----------------------------------------------------------

function togglecheeseburger3(){

document.getElementById("togglecheeseburger").style.display="none";
document.getElementById("izmijenicheeseburger").style.display="none";
document.getElementById("odustanicheeseburger").style.display="inline-block";
document.getElementById("potvrdicheeseburger").style.display="inline-block";
document.getElementById("inputcheeseburger").style.display="inline-block";
document.getElementById("inputcheeseburger").style.width="206px";

}

function togglecheeseburger1(){

document.getElementById("inputcheeseburger").value = 0;
document.getElementById("odustanicheeseburger").style.display="none";
document.getElementById("inputcheeseburger").style.display="none";
document.getElementById("potvrdicheeseburger").style.display="none";
document.getElementById("togglecheeseburger").style.display="inline-block";

}

function togglecheeseburger2(){
document.getElementById("odustanicheeseburger").style.display="none";
document.getElementById("potvrdicheeseburger").style.display="none";
document.getElementById("izmijenicheeseburger").style.display="inline-block";
document.getElementById("inputcheeseburger").style.display="inline-block";
document.getElementById("inputcheeseburger").style.width="50px";
document.getElementById("inputcheeseburger").style.height="50px";

}

//-------------------------------------------------------------------Wings----------------------------------------------------------

function togglewings3(){

document.getElementById("togglewings").style.display="none";
document.getElementById("izmijeniwings").style.display="none";
document.getElementById("odustaniwings").style.display="inline-block";
document.getElementById("potvrdiwings").style.display="inline-block";
document.getElementById("inputwings").style.display="inline-block";
document.getElementById("inputwings").style.width="206px";

}

function togglewings1(){

document.getElementById("inputwings").value = 0;
document.getElementById("odustaniwings").style.display="none";
document.getElementById("inputwings").style.display="none";
document.getElementById("potvrdiwings").style.display="none";
document.getElementById("togglewings").style.display="inline-block";

}

function togglewings2(){
document.getElementById("odustaniwings").style.display="none";
document.getElementById("potvrdiwings").style.display="none";
document.getElementById("izmijeniwings").style.display="inline-block";
document.getElementById("inputwings").style.display="inline-block";
document.getElementById("inputwings").style.width="50px";
document.getElementById("inputwings").style.height="50px";

}

//-------------------------------------------------------------------Cola----------------------------------------------------------

function togglecola3(){

document.getElementById("togglecola").style.display="none";
document.getElementById("izmijenicola").style.display="none";
document.getElementById("odustanicola").style.display="inline-block";
document.getElementById("potvrdicola").style.display="inline-block";
document.getElementById("inputcola").style.display="inline-block";
document.getElementById("inputcola").style.width="206px";

}

function togglecola1(){

document.getElementById("inputcola").value = 0;
document.getElementById("odustanicola").style.display="none";
document.getElementById("inputcola").style.display="none";
document.getElementById("potvrdicola").style.display="none";
document.getElementById("togglecola").style.display="inline-block";

}

function togglecola2(){
document.getElementById("odustanicola").style.display="none";
document.getElementById("potvrdicola").style.display="none";
document.getElementById("izmijenicola").style.display="inline-block";
document.getElementById("inputcola").style.display="inline-block";
document.getElementById("inputcola").style.width="50px";
document.getElementById("inputcola").style.height="50px";

}


//-------------------------------------------------------------------Sprite----------------------------------------------------------

function togglesprite3(){

document.getElementById("togglesprite").style.display="none";
document.getElementById("izmijenisprite").style.display="none";
document.getElementById("odustanisprite").style.display="inline-block";
document.getElementById("potvrdisprite").style.display="inline-block";
document.getElementById("inputsprite").style.display="inline-block";
document.getElementById("inputsprite").style.width="206px";

}

function togglesprite1(){

document.getElementById("inputsprite").value = 0;
document.getElementById("odustanisprite").style.display="none";
document.getElementById("inputsprite").style.display="none";
document.getElementById("potvrdisprite").style.display="none";
document.getElementById("togglesprite").style.display="inline-block";

}

function togglesprite2(){
document.getElementById("odustanisprite").style.display="none";
document.getElementById("potvrdisprite").style.display="none";
document.getElementById("izmijenisprite").style.display="inline-block";
document.getElementById("inputsprite").style.display="inline-block";
document.getElementById("inputsprite").style.width="50px";
document.getElementById("inputsprite").style.height="50px";

}

//-------------------------------------------------------------------Fanta----------------------------------------------------------

function togglefanta3(){

document.getElementById("togglefanta").style.display="none";
document.getElementById("izmijenifanta").style.display="none";
document.getElementById("odustanifanta").style.display="inline-block";
document.getElementById("potvrdifanta").style.display="inline-block";
document.getElementById("inputfanta").style.display="inline-block";
document.getElementById("inputfanta").style.width="206px";

}

function togglefanta1(){

document.getElementById("inputfanta").value = 0;
document.getElementById("odustanifanta").style.display="none";
document.getElementById("inputfanta").style.display="none";
document.getElementById("potvrdifanta").style.display="none";
document.getElementById("togglefanta").style.display="inline-block";

}

function togglefanta2(){
document.getElementById("odustanifanta").style.display="none";
document.getElementById("potvrdifanta").style.display="none";
document.getElementById("izmijenifanta").style.display="inline-block";
document.getElementById("inputfanta").style.display="inline-block";
document.getElementById("inputfanta").style.width="50px";
document.getElementById("inputfanta").style.height="50px";

}


//-------------------------------------------------------------------Cedevita----------------------------------------------------------

function togglecedevita3(){

document.getElementById("togglecedevita").style.display="none";
document.getElementById("izmijenicedevita").style.display="none";
document.getElementById("odustanicedevita").style.display="inline-block";
document.getElementById("potvrdicedevita").style.display="inline-block";
document.getElementById("inputcedevita").style.display="inline-block";
document.getElementById("inputcedevita").style.width="206px";

}

function togglecedevita1(){

document.getElementById("inputcedevita").value = 0;
document.getElementById("odustanicedevita").style.display="none";
document.getElementById("inputcedevita").style.display="none";
document.getElementById("potvrdicedevita").style.display="none";
document.getElementById("togglecedevita").style.display="inline-block";

}

function togglecedevita2(){
document.getElementById("odustanicedevita").style.display="none";
document.getElementById("potvrdicedevita").style.display="none";
document.getElementById("izmijenicedevita").style.display="inline-block";
document.getElementById("inputcedevita").style.display="inline-block";
document.getElementById("inputcedevita").style.width="50px";
document.getElementById("inputcedevita").style.height="50px";

}


</script>
  </body>
</html>