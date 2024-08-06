
$(document).ready(function(){
    $('.burger-toggle').click(function(){
        $('.menu-list-main').toggleClass('open');
    });



    let currentIndex = 0;
    const items = $('.carousel-item');
    const itemCount = items.length;
    const pagination = $('.carousel-pagination');
    const autoSlideInterval = 5000; // 5 seconds

    // Create pagination dots
    for (let i = 0; i < itemCount; i++) {
        pagination.append('<span class="dot"></span>');
    }

    const dots = $('.dot');
    dots.eq(currentIndex).addClass('active');

    // Function to navigate to a specific slide
    function goToSlide(index) {
        if (index >= itemCount) index = 0;
        if (index < 0) index = itemCount - 1;
        currentIndex = index;
        const newTransform = -100 * index;
        $('.carousel').css('transform', `translateX(${newTransform}%)`);
        dots.removeClass('active');
        dots.eq(index).addClass('active');
    }

    // Auto slide functionality
    let autoSlide = setInterval(() => {
        goToSlide(currentIndex + 1);
    }, autoSlideInterval);

    // Pause auto slide on mouse enter
    $('.carousel-container').hover(
        function() {
            clearInterval(autoSlide);
        },
        function() {
            autoSlide = setInterval(() => {
                goToSlide(currentIndex + 1);
            }, autoSlideInterval);
        }
    );

    // Navigate to slide on dot click
    dots.on('click', function() {
        const index = $(this).index();
        goToSlide(index);
    });

    // Previous and Next navigation
    $('.prev').on('click', function() {
        goToSlide(currentIndex - 1);
    });

    $('.next').on('click', function() {
        goToSlide(currentIndex + 1);
    });
});