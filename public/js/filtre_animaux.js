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
                        animalDiv.className = 'col-lg-4';
                        animalDiv.innerHTML = `
                            <div class="card m-4 cadre">
                                <div class="card-body">
                                    <h3 class="card-title">${animal.name}</h3>
                                    <img src="/uploads/images/${animal.image}" class="card-img-top" alt="${animal.name}" width="100">
                                    <h4>Rapports Vétérinaires</h4>
                                    ${animal.veterinary_reports.map(report => `
                                        <div>
                                            <p><strong>État de santé:</strong> ${report.health_status}</p>
                                            <p><strong>Nourriture:</strong> ${report.food}</p>
                                            <p><strong>Poids de la nourriture:</strong> ${report.food_weight} kg</p>
                                            <p><strong>Date du rapport:</strong> ${report.report_date}</p>
                                            <p><strong>Détail:</strong> ${report.detail}</p>
                                        </div>
                                    `).join('')}
                                </div>
                            </div>
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