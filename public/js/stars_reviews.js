window.onload = function() {
    const ratingInput = document.querySelector('#review_rating');
    const formStars = document.querySelectorAll('.form-control.avis .rating i');
    const confirmButton = document.getElementById("confirmButton");
    const acceptPseudoInput = document.getElementById("accept_pseudo");
    const form = document.querySelector(".form-control.avis form");

    function updateStars(rating) {
        formStars.forEach((star, index) => {
            star.className = index < rating ? 'fas fa-star' : 'far fa-star';
        });
    }

    if (ratingInput) {
        formStars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = parseInt(star.getAttribute('data-value'), 10);
                ratingInput.value = rating.toString();
                updateStars(rating);
            });
        });

        const initialRating = parseInt(ratingInput.value, 10) || 0;
        updateStars(initialRating);
    }

    // Active le bouton de soumission après confirmation
    if (confirmButton && form) {
        confirmButton.addEventListener("click", function () {
            if (acceptPseudoInput) {
                acceptPseudoInput.value = "1";
            }
            form.submit();
            const modal = bootstrap.Modal.getInstance(document.getElementById('confirmModal'));

            modal.hide();
        });
    }
};
