/**
 * Created by sobhaneskandari on 5/14/17.
 */
// Docs at http://simpleweatherjs.com
$(document).ready(function() {
    $.simpleWeather({
        location: 'Rasht',
        woeid: '',
        unit: 'c',
        success: function(weather) {
            html = weather.temp;

            $("#weather").html(html);
            console.log(weather.temp);
        },
        error: function(error) {
            $("#weather").html('<p>'+error+'</p>');
        }
    });

});
