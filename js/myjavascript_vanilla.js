var request = new XMLHttpRequest();
//var xhr     = new XMLHttpRequest();
function ready(callback) {
    // in case the document is already rendered
    "use strict";
    if (document.readyState !== 'loading') callback();
    // modern browsers
    else if (document.addEventListener) document.addEventListener('DOMContentLoaded', callback);
    // IE <= 8
    else document.attachEvent('onreadystatechange', function(){
        if (document.readyState=='complete') callback();
    });
}
// execute on ready
ready(function(){
    document.getElementById("submitlocation").addEventListener('click',function ()
    {
    //AutoCompleteForm();
    getFinderData();
   // getMapData();
    });
});



function getFinderData(){
    countryName = getCityData();
    FinderUrlFinal = "index_finder.php";
    var vars = "country="+countryName;
    request.open('POST', FinderUrlFinal, true)
     // Set content type header information for sending url encoded variables in the request
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     // Access the onreadystatechange event for the XMLHttpRequest object
    request.onreadystatechange = function() {
        if(request.readyState == 4 && request.status == 200) {
            var return_data = request.responseText;
            var answer  = JSON.parse(this.response)
            //console.log(answer)
            Coords = fetchcountryData(answer);
            //document.getElementById("log").innerHTML = answer;
            //console.log(Coords)
            initMap(Coords)
            
        }
    }
     // Send the data to PHP now... and wait for response to update the status div
    request.send(vars); // Actually execute the request
    //document.getElementById("log").innerHTML = "processing..."
}
//city data function
function getCityData(){
    var countryVal = document.getElementById("country").value
    if (countryVal && countryVal !='') {
        return(countryVal);
    }else{alert('Enter a valid country Name')}
}

//forecast data fetch
function fetchcountryData (result) {
     var Latitude = result.lat,
    Longitude = result.lng,
    Country = result.countryname,
    CountryId = result.id;
    document.getElementById('countryname').innerHTML=  'Country: ' + Country ;
    document.getElementById('latitudename').innerHTML= ' Latitude: ' + Latitude ;
    document.getElementById('longitudename').innerHTML= 'Longitude: ' + Longitude;
    document.getElementById('countryid').innerHTML = 'Country ID: ' + CountryId;
    document.getElementById('templat').innerHTML= Latitude;
    document.getElementById('templong').innerHTML= Longitude;
    console.log(document.getElementById('templat').innerHTML)
    console.log(document.getElementById('templong').innerHTML)
    if(document.getElementById('mapbox').classList.contains('hide'))
    {
     document.getElementById('mapbox').classList.toggle('hide');  
    }
    return[Latitude, Longitude]
}
/////////////////////////////////////////////////
//////////////////Google Maps////////////////////////////
/////////////////////////////////////////////////////////
var map;
function initMap(Coords) {
   // console.log(Coords)
    if (!Coords){
        latitudecoord = 5.1521;
        longitudecoord = 46.1996;
    }
    else{
        latitudecoord = Number(Coords[0]);
        longitudecoord = Number(Coords[1]);
        map = new google.maps.Map(document.getElementById('MapControl'), {
            center: {lat: latitudecoord, lng: longitudecoord},
            zoom: 8
        });
    }
    
}