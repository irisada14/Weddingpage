<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #876e37;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {/*
  padding: 8px;
  margin-bottom: 7px;
  background-color: #876e37;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);*/
}

.menu li:hover {
  background-color: #a58855;
}

.aside {
  background-color: #a58855;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: pink;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body onload="invitados()">
<button></button>
<div class="header">
  <h1>Invitados #RickandSteph</h1>
</div>

<div class="row">
  <div class="col-3 menu" >

    <ul id="invitados">
    <li style="padding: 8px; margin-bottom: 7px;background-color: #876e37;color: #ffffff; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">Nombre</li>
    </ul>
  </div>


  <div class="col-6">

  </div>


</div>

<div class="footer">
  <p></p>
</div>

</body>
</html>
<script type="text/javascript">
  
  function invitados(){
$.ajax({
       data: {},
       url:"getinvitados.php",
       // async: false,
       method:"POST",
       dataType:"json",
       success:function(data) {
          for(var count=0; count<data.length; count++) {
            if(data[count].nombre==""){}else{

          html_data = '<li>'+data[count].nombre+'          '+data[count].mail+'</li>';  
          $('#invitados').append(html_data);

      
        }
          }
       }
    });
  }
</script>
