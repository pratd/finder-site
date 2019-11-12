const finderMapKey = config,
MapcastUrl = 'https://www.google.com/maps/embed/v1/Place?';

var request = new XMLHttpRequest();
var q="";
function ready(callback){
    // in case the document is already rendered
    if (document.readyState!='loading') callback();
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
    getFinderData();
    //getMapData();
     
    });
});
// execute different functions based on elements
/*
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("submitweather").addEventListener('click',function ()
    {
     getWeatherData();
    }); 
});*/

function getMapData(){
    countryName = getCityData();
    FinderUrlFinal = MapcastUrl + "key=" + finderMapKey + "&q=" + countryName;
    request.open('GET', FinderUrlFinal, true)
    request.onload = function() {
        var data = JSON.parse(this.response)
        if (request.status >= 200 && request.status < 400) {
            answer = createData(data);
            //fetchweatherData(answer[0], answer[1], answer[2], answer[3], answer[4], answer[5], answer[6]);
        } else {
          console.log('error')
        } 
      }
    request.send();

}
function getFinderData(){
    countryName = getCityData();
    FinderUrlFinal = "index_finder.php";
    request.open('GET', FinderUrlFinal, true)
    request.onload = function() {
        var data = JSON.parse(this.response)
        if (request.status >= 200 && request.status < 400) {
            //answer = createData(data);
            //fetchweatherData(answer[0], answer[1], answer[2], answer[3], answer[4], answer[5], answer[6]);
            console.log("a")
        } else {
          console.log('error')
        } 
      }
    request.send();

}
//city data function
function getCityData(){
    var countryVal = document.getElementById("country").value
    if (countryVal && countryVal !='') {
        return(countryVal);
    }else{alert('Enter a valid country Name')}
}
//get weather json objects
function createData(result){
    weathertype = result.weather[0].main;
    countrytype = result.sys.country;
    weatherdesc = result.weather[0].description;
    temp        = result.main.temp;
    tempmin     = result.main.temp_min;
    tempmax     = result.main.temp_max;
    windspeed   = result.wind.speed;
    winddeg     = result.wind.deg;
    icontype    = result.weather[0].icon ;
    cloudcover  = result.clouds.all;
    latd        = result.coord.lat;
    longt       = result.coord.lon;
    return[weatherdesc, temp, tempmin, tempmax, windspeed, icontype, cloudcover, latd, longt]
}

//forecast data fetch
function fetchcountryData (result) {
    let html = '',
    cityName = forecast.city.name,
    country = forecast.city.country
    html += '<h3> Weather Forecast for '+ cityName+',' + country + '</h3>'
    forecast.list.forEach(function(forecastEntry){
        html += '<p>' + forecastEntry.dt_txt + ': ' + forecastEntry.main.temp + '</p>'
    })
    document.getElementById('log').innerHTMl = html
    console.log(document.getElementById('log'))
    if(document.getElementById('log').style.display=='none')
    {
       
        document.getElementById('log').style.display='block';  
    }
}
