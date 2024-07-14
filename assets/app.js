import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';



console.log('coucou');
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.habitat-link').forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const habitatId = link.getAttribute('data-habitat-id');
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
                    animalsList.scrollIntoView({ behavior: 'smooth' });
                })
                .catch(error => {
                    console.error('Error fetching animals:', error);
                });
        });
    });
});

