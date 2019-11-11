$(document).ready(function() {
    $('#dropdown-menu').hide();
    let productsMenuOpen = false;
    let existingMenuOpen = false;

    $('#navbarDropdown').click((e) => {
        if (!productsMenuOpen) 
        {
            $('#dropdown-menu').slideDown();
            productsMenuOpen = !productsMenuOpen;
        }
        else{
            $('#dropdown-menu').slideUp();
            productsMenuOpen = !productsMenuOpen;
        }
    });

    $('#existingDropdown').click((e) => {
       
        if (!existingMenuOpen) 
        {
            $('#existingMenu').slideDown();
            existingMenuOpen = !existingMenuOpen;
        }
        else{
            $('#existingMenu').slideUp();
            existingMenuOpen = !existingMenuOpen;
        }
    })
    //Hover effect for cards
    $(".card").hover(
        function() {
            $(this).addClass('shadow-lg');
        },
        function() {
            $(this).removeClass('shadow-lg');
        }
    );

    //Carousel loops
    $('.carousel .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {

            next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');

        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));

        }
    });



    // document ready  
});