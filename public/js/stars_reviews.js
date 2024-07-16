document.addEventListener('DOMContentLoaded', function() {
    const ratingInput = document.querySelector('#review_rating');
    const stars = document.querySelectorAll('.rating i');

    function updateStars(rating) {
        stars.forEach((star, index) => {
            star.className = index < rating ? 'fas fa-star' : 'far fa-star';
        });
    }

    if (ratingInput) {
        stars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = parseInt(star.getAttribute('data-value'), 10);
                ratingInput.value = rating;
                updateStars(rating);
            });
        });

        const initialRating = parseInt(ratingInput.value, 10) || 0;
        updateStars(initialRating);
    }
});
