
<!DOCTYPE html>
<html>
  <head>
    <title>Buscador de escuelas</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 450px;
        width: 700px;
      }

      #floating-panel {
        position: absolute;
        width: 250px;
        top: 10px;
        left: 42%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 3px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 20px;
        padding-left: 7px;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    
  </head>
  <body>
   <?php

      require_once ($_SERVER['DOCUMENT_ROOT']."/SportNetv1.0/funciones.php");


    ?>


    <div id="floating-panel">
      <input id="address" type="textbox" placeholder="Perzonaliza tu ubicación aquí" onFocus="geolocate()" style="width: 170px;">
      <input id="setear" type="button" value="Aplicar">
    </div>
   
   <center>

    <script type="text/javascript">

     

      
      function initMap() {       

        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.4472452, lng: -70.6606296},
          zoom: 13

        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        var geocoder = new google.maps.Geocoder();

        document.getElementById('setear').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });

        function geocodeAddress(geocoder, resultsMap) {
            var address = document.getElementById('address').value;
            geocoder.geocode({'address': address}, function(results, status) {
              if (status === google.maps.GeocoderStatus.OK) {
                resultsMap.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                  map: resultsMap,
                  position: results[0].geometry.location
                });
              } else {
                alert('Error al modificar tu ubicación: ');
              }
            });
        }



            
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };


            infoWindow.setPosition(pos);
            infoWindow.setContent('Tu estas aquí');
            map.setCenter(pos);

        
            var a = <?php echo json_encode($_POST['especialidad']);?>;



              if(a=='Natacion'){
                var matriz = <?php echo json_encode(buscarEscuela($_POST['especialidad'])); ?>;


                for (var i=1; i<=1000 ;i++){          
                  for(var j=0; j<3;j++){
                      if(j==0){
                        var nombre = matriz[i][j]; 
                      }
                      else if(j==1){
                        var latitud = matriz[i][j];
                      }
                      else if(j==2){
                        var longitud = matriz[i][j];
                      }
                  }


                  var place = new google.maps.LatLng(latitud,longitud);
                  var image = { 

                  url: 'img/nata.png',
                  scaledSize: new google.maps.Size(25,25),
                  origin: new google.maps.Point(0, 0),
                  anchor: new google.maps.Point(0, 32)

                  };

                  var shape = {
                    coords: [1, 1, 1, 20, 18, 20, 18, 1],
                    type: 'poly'
                  };   

                  var marker = new google.maps.Marker({
                    position: place,
                    title: nombre,
                    map: map,
                    icon: image
                    

                    });

                  var link = '<a href="login.php">'+nombre+'</a>';
                  attachSecretMessage(marker,link);
       

                    // Attaches an info window to a marker with the provided message. When the
                    // marker is clicked, the info window will open with the secret message.
                    

                  function attachSecretMessage(marker, secretMessage) {
                    var infowindow = new google.maps.InfoWindow({
                      content: secretMessage
                    });

                    marker.addListener('click', function() {
                      infowindow.open(marker.get('map'), marker);
                    });
                  }                
                }
              }

              if(a=='Taekwondo'){
          
                var matriz = <?php echo json_encode(buscarEscuela($_POST['especialidad'])); ?>;



                for (var i=1; i<=1000 ;i++){          
                  for(var j=0; j<3;j++){
                      if(j==0){
                        var nombre = matriz[i][j]; 
                      }
                      else if(j==1){
                        var latitud = matriz[i][j];
                      }
                      else if(j==2){
                        var longitud = matriz[i][j];
                      }
                  }


                  var place = new google.maps.LatLng(latitud,longitud);
                  var image = { 

                  url: 'img/taek.png',
                  scaledSize: new google.maps.Size(25,25),
                  origin: new google.maps.Point(0, 0),
                  anchor: new google.maps.Point(0, 32)

                  };

                  var shape = {
                    coords: [1, 1, 1, 20, 18, 20, 18, 1],
                    type: 'poly'
                  };   

                  var marker = new google.maps.Marker({
                    position: place,
                    title: nombre,
                    map: map,
                    icon: image
                    

                    });

                  var link = '<a href="login.php">'+nombre+'</a>';
                  attachSecretMessage(marker,link);
     

                  // Attaches an info window to a marker with the provided message. When the
                  // marker is clicked, the info window will open with the secret message.
                  

                  function attachSecretMessage(marker, secretMessage) {
                    var infowindow = new google.maps.InfoWindow({
                      content: secretMessage
                    });

                    marker.addListener('click', function() {
                      infowindow.open(marker.get('map'), marker);
                    });
                  }               
                }
              }
              

              if(a=='Futbol'){

      
                var matriz = <?php echo json_encode(buscarEscuela($_POST['especialidad'])); ?>;


                for (var i=0; i<=1000 ;i++){          
                  for(var j=0; j<3;j++){
                      if(j==0){
                        var nombre = matriz[i][j]; 
                      }
                      else if(j==1){
                        var latitud = matriz[i][j];
                      }
                      else if(j==2){
                        var longitud = matriz[i][j];
                      }
                  }


                  var place = new google.maps.LatLng(latitud,longitud);
                  var image = { 

                  url: 'img/futbol3.png',
                  scaledSize: new google.maps.Size(25,25),
                  origin: new google.maps.Point(0, 0),
                  anchor: new google.maps.Point(0, 32)

                  };

                  var shape = {
                    coords: [1, 1, 1, 20, 18, 20, 18, 1],
                    type: 'poly'
                  };   

                  var marker = new google.maps.Marker({
                    position: place,
                    title: nombre,
                    map: map,
                    icon: image
                    

                    });
                   

                  var link = '<a href="login.php">'+nombre+'</a>';
                  attachSecretMessage(marker,link);
     

                  // Attaches an info window to a marker with the provided message. When the
                  // marker is clicked, the info window will open with the secret message.
                  

                  function attachSecretMessage(marker, secretMessage) {
                    var infowindow = new google.maps.InfoWindow({
                      content: secretMessage
                    });

                    marker.addListener('click', function() {
                      infowindow.open(marker.get('map'), marker);
                    });
                  }
                                
                }
              }
              
            

          },function() {
                handleLocationError(true, infoWindow, map.getCenter());
            } );
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

      }

      

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }


      function filtrar(){ 

            var x =document.filtro.cinco.checked;
            var y =document.filtro.diez.checked;
            var z =document.filtro.veinte.checked;
            var a =document.filtro.Natacion.checked;
            var b =document.filtro.Karate.checked;
            var c =document.filtro.Futbol.checked;
            
            
            if(a){
              document.getElementById("especialidad").value = 'Natacion';
              
            }
            if(b){
              document.getElementById("especialidad").value = 'Taekwondo';   
              
            }
            if(c){
              document.getElementById("especialidad").value = 'Futbol';
              
            }
            
            if(x){
              document.getElementById("distancia").value = 5000;
              
            }
            else if(y){
              document.getElementById("distancia").value = 10000;   
              
            }
            else if(z){
              document.getElementById("distancia").value = 20000;
              
            }
      } 

    
    </script>

    <div id="map"></div>

     <div>
     <form name="filtro" action="mapa.php" method="POST" onsubmit="filtrar()"  >

      <div class="checkbox">
        <label><input type="checkbox" name="Natacion" value="Natacion">Natación</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="Karate" value="Taekwondo">Taekwondo</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="Futbol" value="Futbol">Futbol</label>
        <input type="hidden" name="especialidad" id="especialidad">

      </div>
      <div class= "combobox">
          <label><input type="radio" id="cinco" name="cinco">5 km</label>
          <label><input type="radio" id="diez" name="diez">10 km</label>
          <label><input type="radio" id="veinte" name="veinte">20 km</label>
          <input type="hidden" id="distancia" name="distancia">

      </div>
      <input type="submit" value ="Aplicar Filtros">
      </form> 

    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb1wFH0HCVnnBa0xIA5vP2HZtKrjnya1w&signed_in=true&callback=initMap"
      async defer>
    </script>

    </center>
    
  </body>
</html>