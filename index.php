<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>country</title>
    <link rel="stylesheet" href="./index.css">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>
    <div class="top">

        <div class="name">
            <h1 class="country_name countryname flag" id="country_name"></h1>
        </div>


    </div>



   <div class="nav">  
            
        <div class="left">
            <h1 id="title_name">Ocean Of Country</h1>
        </div>
        <div class="right">
            <input type="text" id="searchcountry" placeholder="Enter The Country Name" value="India">
            <button class="btn bg-info " id="searchcountrybtn">Search</button>

            <button class="btn bg-info" onclick="allcountry()">Select</button>
            
        </div>
        <div class="all_country">
            <div class="all d" >
                
                <ul id="all">
                  
                </ul>
            </div>
           
            <div class="d" >
                
                <ul id="papular">
                    
                </ul>
            </div>
        </div>
       
    </div>      

    <div class="location">
        <div class="google_map ">

            <a href=""class="map_navigate" target="_blank"> <img class="googlemap"
                    src=""
                    frameborder="0"></img></a>
            <h5>Google Map</h5>
        </div>
        <div class="open_street_map">
            <div class="contenar">
                <div class="top_contenar">
                    <div class="icon" id="weather_icon"><span class="weatherstatus">rain</span></div>
                </div>

                <div class="cloud_contenar">
                    <div class="cloud_1"></div>
                    <div class="cloud_2"></div>
                    <div class="data_contenar">
                        <div class="addres">
                            <i class="fas fa-street-view"></i>
                            <h1 id="city" class="countryname"></h1>
                        </div>
                        <div class="day">
                            <style>
                                .date{
                                    font-size: 1vw;
                                    
                                }
                                .curtemp {
                                    font-size: 3vw;
                                }
                                .deg{
                                    font-size: 3vw;
                                }
                                .mintemp{
                                    font-size: 2vw;
                                }
                                .maxtemp{
                                    font-size: 2vw;
                                }
                                .min_max_temp p{
                                    font-size: 2vw;
                                }
                                @media only screen and (max-width: 800px){
                                    .date{
                                    font-size: 3vw;
                                    
                                }
                                .curtemp {
                                    font-size: 6vw;
                                }
                                .deg{
                                    font-size: 6vw;
                                }
                                .mintemp{
                                    font-size: 4vw;
                                }
                                .maxtemp{
                                    font-size: 4vw;
                                }
                                .min_max_temp p{
                                    font-size: 4vw;
                                }
                                .weatherstatus{
                                    font-size: 4vw;
                                    color:aqua;
                                }
                                }

                            </style>
                            <p id="date" class="date"> WED | OCT 9 | 12:45</p>
                        </div>
                        <div class="temp">
                            <h1 ><span class="curtemp"></span><span class="deg">&deg;C</span></h1>
                        </div>
                        <div class="min_max_temp">
                            <p>Min<span class="mintemp"></span>&deg;C | Max <span class="maxtemp"></span>&deg;C</p>
                        </div>
                    </div>
                    

                </div>
            </div>

            <h5>Weather</h5>
        </div>
    </div>
    <div>
       
    </div>
    <div class="detail  w-100" >
        <h1>Other Details</h1>
        <div class="flex">
            <div class="left_detail ">
                <table class="table table-success table-striped m-auto">
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Name</td>
                            <td class="countryname"></td>
                           
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Flag</td>
                            <td ><img src=""class="flag" width="50px" alt=""></td>
                          
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td >location (Lat,Lng)</td>
                            <td class="loc"></td>
                           
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td >Language</td>
                            <td class="lang"></td>
                           
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td >Currencies</td>
                            <td class="cur"></td>
                           
                        </tr>
                    </tbody>
                </table>
            </div>
    
            <div class="right_detail ">
                     <img src="" class="coatOfArms" alt="">
            </div>
            

        </div>
      
        
    </div>

    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbNLbCaDQ4z4hlDkKArrWmHpzzAz_OqDE&libraries=places&callback=initMap">
</script>
<script>
    function initMap(){
      
      console.log(google.maps.places.PlacesService);
    }
    function createPhotoMarker(place) {
  var photos = place.photos;

  if (!photos) {
    return;
  }

  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location,
    title: place.name,
    icon: photos[0].getUrl({maxWidth: 35, maxHeight: 35})
  });
}
console.log(map.PlacePhoto.getUrl());
</script>
    <!-- Optional theme
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    -->
<script src="./index.js"></script>
</body>

</html>