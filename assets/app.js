import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
        function (position) {
            let userLocation = {
                lat: position.coords.latitude,
                lon: position.coords.longitude,
            };

            let map = L.map("map").setView(
                [userLocation.lat, userLocation.lon],
                15
            );

            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: "© OpenStreetMap contributors",
            }).addTo(map);

            let marker = L.marker([userLocation.lat, userLocation.lon]).addTo(map);

            const lieuPrecis = {
                //lat: 44.06083394756448,
                //lon: 4.640552376126123,
                lat: 48.018993,
                lon: -2.184843
            };

            let distance = calculerDistance(
                userLocation.lat,
                userLocation.lon,
                lieuPrecis.lat,
                lieuPrecis.lon
            );

            console.log(
                "Distance par rapport au lieu précis : " + distance + " km"
            );
            alert("Distance par rapport au lieu précis : " + distance + "km");

            // Ajouter l'itinéraire
            let control = L.Routing.control({
                waypoints: [
                    L.latLng(userLocation.lat, userLocation.lon),
                    L.latLng(lieuPrecis.lat, lieuPrecis.lon),
                ],
            }).addTo(map);
        },
        function (error) {
            console.error("Erreur de géolocalisation : " + error.message);
            alert("Erreur de géolocalisation : " + error.message);
        }
    );
} else {
    console.error("La géolocalisation n'est pas prise en charge par ce navigateur");
    alert("La géolocalisation n'est pas prise en charge par ce navigateur");
}

function calculerDistance(lat1, lon1, lat2, lon2) {
    let R = 6371; // Rayon moyen de la Terre en kilomètres
    let dLat = degToRad(lat2 - lat1);
    let dLon = degToRad(lat2 - lon1);
    let a =
        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos(degToRad(lat1)) *
        Math.cos(degToRad(lat2)) *
        Math.sin(dLon / 2) *
        Math.sin(dLon / 2);
    let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    let distance = R * c; // Distance en kilomètres
    return distance;
}

function degToRad(deg) {
    return deg * (Math.PI / 180);
}

console.log('coucou');
document.querySelectorAll('.habitat-button').forEach(button => {
    button.addEventListener('click', () => {
        const habitatId = button.getAttribute('data-habitat-id');
        console.log('Fetching animals for habitat:', habitatId);

        fetch(`/habitat/${habitatId}/animals`)
            .then(response => {
                console.log('Response:', response);
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log('Data:', data);
                const animalsList = document.getElementById('animals-list');
                animalsList.innerHTML = '';

                data.forEach(animal => {
                    const animalDiv = document.createElement('div');
                    animalDiv.innerHTML = `
                                <h3>${animal.name}</h3>
                                <img src="/uploads/images/${animal.image}" alt="${animal.name}" width="100">
                                <h4>Rapports Vétérinaires</h4>
                                ${animal.veterinary_reports.map(report => `
                                    <div>
                                        <p>État de santé: ${report.health_status}</p>
                                        <p>Nourriture: ${report.food}</p>
                                        <p>Poids de la nourriture: ${report.food_weight}</p>
                                        <p>Date du rapport: ${report.report_date}</p>
                                        <p>Détail: ${report.detail}</p>
                                    </div>
                                `).join('')}
                            `;
                    animalsList.appendChild(animalDiv);
                });
            })
            .catch(error => {
                console.error('Error fetching animals:', error);
            });
    });
});
