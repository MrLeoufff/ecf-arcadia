document.addEventListener('DOMContentLoaded', function () {
    console.log('DOM chargé complètement');

    const filterForm = document.getElementById('filter-form');
    const filterButton = document.getElementById('filter-button');
    const startDateElement = document.getElementById('veterinary_report_filter_start_date');
    const endDateElement = document.getElementById('veterinary_report_filter_end_date');
    const animalElement = document.getElementById('veterinary_report_filter_animal');
    //console.log('Élément de date de début:', startDateElement);
    //console.log('Élément de date de fin:', endDateElement);
    //console.log('Élément animal:', animalElement);

    if (filterButton && (startDateElement || endDateElement || animalElement)) {
        filterButton.addEventListener('click', function () {
            const startDate = startDateElement ? startDateElement.value : null;
            const endDate = endDateElement ? endDateElement.value : null;
            const animal = animalElement ? animalElement.value : null;
            //console.log('Date de début:', startDate);
            //console.log('Date de fin:', endDate);
            //console.log('Animal:', animal);
            const url = filterForm.getAttribute('data-filter-url');

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                },
                body: JSON.stringify({ start_date: startDate, end_date: endDate, animal: animal }),
            })
                .then(response => {
                    if (!response.ok) {
                        return response.text().then(text => { throw new Error(text) });
                    }
                    return response.json();
                })
                .then(data => {
                    //console.log('Données reçues:', data);
                    const reportList = document.getElementById('veterinary-reports-list');
                    reportList.innerHTML = '';

                    if (data.reports.length > 0) {
                        data.reports.forEach(report => {
                            const listItem = document.createElement('li');
                            listItem.classList.add('list-group-item');
                            listItem.innerHTML = `
                                <strong>Date:</strong> ${report.reportDate}<br>
                                <strong>Animal:</strong> ${report.animal.name}<br>
                                <strong>État de santé:</strong> ${report.healthStatus}<br>
                                <strong>Détails:</strong> ${report.detail}
                            `;
                            reportList.appendChild(listItem);
                        });
                    } else {
                        const listItem = document.createElement('li');
                        listItem.classList.add('list-group-item');
                        listItem.textContent = 'Aucun rapport trouvé pour cette période ou cet animal.';
                        reportList.appendChild(listItem);
                    }
                })
                .catch(error => {
                    //console.error('Erreur:', error);
                });
        });
    } else {
        //console.error('Les éléments requis sont manquants dans le DOM');
    }
});
