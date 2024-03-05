
document.addEventListener('DOMContentLoaded', function () {
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    const items = document.querySelectorAll('.slider .list .item');

    let currentIndex = 0;

    const showItem = (index) => {
        items.forEach((item, i) => {
            item.classList.remove('active');
            if (i === index) {
                item.classList.add('active');
            }
        });
    };

    prevButton.addEventListener('click', function () {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        showItem(currentIndex);
    });

    nextButton.addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % items.length;
        showItem(currentIndex);
    });

    // Function for automatic slide change every 20 seconds
    const autoChangeSlide = () => {
        currentIndex = (currentIndex + 1) % items.length;
        showItem(currentIndex);
    };

    // Set interval for automatic slide change
    const intervalId = setInterval(autoChangeSlide, 20000);

    // Stop the interval when the page is unloaded (optional)
    window.addEventListener('beforeunload', function () {
        clearInterval(intervalId);
    });
});



