document.getElementById('weather-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const city = document.getElementById('city-input').value;
    getWeather(city);
});

async function getWeather(city) {
    const apiKey = '351a9308fc8332b507525c1ec876ef61'; // Your actual API key
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();
        displayWeather(data);
    } catch (error) {
        console.error('Error fetching weather data:', error);
        document.getElementById('weather-result').innerHTML = 'Error fetching weather data.';
    }
}

function displayWeather(data) {
    if (data.cod === '404') {
        document.getElementById('weather-result').innerHTML = 'City not found.';
        return;
    }
    const { name, main, weather } = data;
    const weatherIcon = `http://openweathermap.org/img/wn/${weather[0].icon}@2x.png`;
    const weatherHtml = `
        <div class="weather-card">
            <h2>${name}</h2>
            <img class="weather-icon" src="${weatherIcon}" alt="${weather[0].description}">
            <div class="weather-details">
                <p>${weather[0].description}</p>
                <p>Temperature: ${main.temp}°C</p>
                <p>Humidity: ${main.humidity}%</p>
                <p>Pressure: ${main.pressure} hPa</p>
            </div>
        </div>
    `;
    document.getElementById('weather-result').innerHTML = weatherHtml;
}
