/**
 * Created by George on 6/15/2015.
 */
$(document).ready(function(){
    var currentCity = 'Eagan';
    var $whichCity = $('#whichcity');
    var geoCoder = new google.maps.Geocoder();
    function howsTheWeather(temp, description) {
        var $weatherToday = $('#weatherToday');
        $weatherToday.empty();
        if (temp >= 60 && temp <= 80)
        {
            var $greatWeather = $("<div>The weather is great. Get the hell out,  the temp is " + temp + " F and " + description+".<i class=\"fa fa-smile-o fa-2x\"></i></div>");
            $weatherToday.append($greatWeather);
        }
        else if (temp <= 32)
        {
            var $crappyWeather = $("<div>The weather is crappy! You might want to stay in the temp is " + temp + " F and " + description+".<i class=\"fa fa-frown-o fa-2x\"></i></div>");
            $weatherToday.append($crappyWeather);
        } else if (temp > 80)
        {
            var $hotCrappyWeather = $("<div>The weather is not good! You might want to stay cool the temp is " + temp + " F and " + description+".<i class=\"fa fa-frown-o fa-2x\"></i></div>");
            $weatherToday.append($hotCrappyWeather);
        }
        else
        {
            var $usualWeather = $("<div>Just the usual. Today the temp is " + temp + " F and " + description +".<i class=\"fa fa-meh-o fa-2x\"></i></div>");
            $weatherToday.append($usualWeather);
        }
    }
    function cantFindThatCity(message) {
        var $weatherToday = $('#weatherToday');
        $weatherToday.empty();
        var $cityNotFound = $("<div>" + message + ".<i class=\"fa fa-frown-o fa-2x\"></i></div>");
        $weatherToday.append($cityNotFound);
    };
    function convertKelvinToFarenheit(degreeKelvin) {
        return Math.round((9 * (degreeKelvin - 273) / 5) + 32);
    }
    function getWeather(city) {
        var $button1 = $('#button1');
        $button1.addClass('btn-success');
        $button1.find('.fa').addClass('fa-spinner fa-spin');
        if(city) {
            $.getJSON('http://api.openweathermap.org/data/2.5/weather?q='+ city,'{}').done(function(data){
                if(data)
                {
                    var message = data.message;
                    if(message && message.indexOf("Error")>= 0)
                    {
                        cantFindThatCity(message);
                    }
                    else
                    {
                        var temp = convertKelvinToFarenheit(data.main.temp);
                        var description = data.weather[0].description;
                        howsTheWeather(temp, description);
                        decodeLatLang(data.coord.lat, data.coord.lon);
                    }
                }
            }).always(function(){
                $button1.removeClass('btn-success');
                $button1.find('.fa').removeClass('fa-spinner fa-spin');
            });
        }else{
            $button1.removeClass('btn-success');
            $button1.find('.fa').removeClass('fa-spinner fa-spin');
        }
    }
    function decodeLatLang(lat,lng){
        var latlng = new google.maps.LatLng(lat, lng);
        geoCoder.geocode({'latLng': latlng}, function(results, status) {
            var state = '';
            var city = '';
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[1]) {
                    //find country name
                    for (var i=0; i<results[0].address_components.length; i++) {
                        for (var b=0;b<results[0].address_components[i].types.length;b++) {
                            //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                            if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
                                //this is the object you are looking for
                                state= results[0].address_components[i];
                            }
                            if (results[0].address_components[i].types[b] == "locality") {
                                //this is the object you are looking for
                                city= results[0].address_components[i];
                            }
                        }
                    }
                    //city data
                    currentCity = (city.long_name ? city.long_name:'') + (state.long_name ? ' '+state.long_name:'');
                    $whichCity.val(currentCity);
                }
            }
        });
    }
    function successGeoCodeFunction(position){
        if(position)
        {
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;
            decodeLatLang(lat, lng)
        }
    }
    function getLocation () {
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successGeoCodeFunction);
        }
    }
    function getWeatherForInputCity () {
        var city = $whichCity.val();
        if (city) {
            getWeather(city);
        }
    }
    $('#button1').on("click",function () {
        getWeatherForInputCity();
    });

    $whichCity.keypress(function(event){
        if ( event.which === 13 ) {
            getWeatherForInputCity();
        }
    });
    getLocation();
    getWeather(currentCity);
});