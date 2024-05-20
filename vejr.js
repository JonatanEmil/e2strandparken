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
const todayWeatherIcon = document.querySelector('#todayWeatherIcon');

const currentHour = new Date().getHours();

function weather() {

    fetch('https://api.open-meteo.com/v1/forecast?latitude=55.7175&longitude=11.71279&hourly=temperature_2m,apparent_temperature,weather_code,wind_speed_10m&forecast_days=1')
        .then(req => req.json())
        .then(res => {
            console.log(res);
            const temp = res.hourly.temperature_2m[currentHour];
            todayTemp.innerHTML = temp;
            todayWeatherIcon.src = 'images/' + getWeatherIcon(res.hourly.weather_code[currentHour]);
        })
}

weather();

setInterval(weather, 3600000)

function getWeatherIcon(code) {
    switch (code) {
        case 0:
            return "0.png";
        case 1:
        case 2:
        case 3:
            return "1-2-3.svg";
        case 45:
        case 48:
            return "45-48.svg";
        case 51:
        case 53:
        case 55:
            return "51-53-55.svg"
        case 56:
        case 57:
            return "56-57.svg";
        case 61:
        case 63:
        case 65:
            return "61-63-65.png";
        case 66:
        case 67:
            return "66-67.svg";
        case 71:
        case 73:
        case 75:
            return "71-73-75.svg";
        case 77:
            return "77.svg";
        case 80:
        case 81:
        case 82:
            return "80-81-82.svg";
        case 85:
        case 86:
            return "85-86.svg";
        case 95:
            return "95.svg";
        case 96:
        case 99:
            return "96-99.svg";
        default:
            return "Ukendt vejrkode";
    }
}