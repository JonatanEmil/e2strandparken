/*fetch('https://geocoding-api.open-meteo.com/v1/search?name=holb%C3%A6k&count=10&language=en&format=json')
.then(req => req.json())
.then(res => {
    console.log(res);
    console.log(res.results[0].latitude);
    console.log(res.results[0].longitude);
    const lat = res.results[0].latitude;
    const long = res.results[0].longitude;

})*/
const todayTemp = document.querySelector('#todayTemp')

fetch('https://api.open-meteo.com/v1/forecast?latitude=55.7175&longitude=11.71279&hourly=temperature_2m,apparent_temperature,weather_code,wind_speed_10m&forecast_days=1')
    .then(req => req.json())
    .then(res => {
        console.log(res);
        const temp = res.hourly.temperature_2m[12];
        todayTemp.innerHTML = temp;
    })