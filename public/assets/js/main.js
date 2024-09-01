(function ($) {
    "use strict";

    // Dropdown on mouse hover
    const showMenu = (toggleId, navId) =>{
        const toggle = document.getElementById(toggleId),
              nav = document.getElementById(navId)

        toggle.addEventListener('click', () =>{
            // Add show-menu class to nav menu
            nav.classList.toggle('show-menu')
            // Add show-icon to show and hide menu icon
            toggle.classList.toggle('show-icon')
        })
     }

     showMenu('nav-toggle','nav-menu')

     /*=============== SHOW DROPDOWN MENU ===============*/
     const dropdownItems = document.querySelectorAll('.dropdown__item')

     // 1. Select each dropdown item
     dropdownItems.forEach((item) =>{
         const dropdownButton = item.querySelector('.dropdown__button')

         // 2. Select each button click
         dropdownButton.addEventListener('click', () =>{
             // 7. Select the current show-dropdown class
             const showDropdown = document.querySelector('.show-dropdown')

             // 5. Call the toggleItem function
             toggleItem(item)

             // 8. Remove the show-dropdown class from other items
             if(showDropdown && showDropdown!== item){
                 toggleItem(showDropdown)
             }
         })
     })

     // 3. Create a function to display the dropdown
     const toggleItem = (item) =>{
         // 3.1. Select each dropdown content
         const dropdownContainer = item.querySelector('.dropdown__container')

         // 6. If the same item contains the show-dropdown class, remove
         if(item.classList.contains('show-dropdown')){
             dropdownContainer.removeAttribute('style')
             item.classList.remove('show-dropdown')
         } else{
             // 4. Add the maximum height to the dropdown content and add the show-dropdown class
             dropdownContainer.style.height = dropdownContainer.scrollHeight + 'px'
             item.classList.add('show-dropdown')
         }
     }

     /*=============== DELETE DROPDOWN STYLES ===============*/
     const mediaQuery = matchMedia('(min-width: 1118px)'),
           dropdownContainer = document.querySelectorAll('.dropdown__container')

     // Function to remove dropdown styles in mobile mode when browser resizes
     const removeStyle = () =>{
         // Validate if the media query reaches 1118px
         if(mediaQuery.matches){
             // Remove the dropdown container height style
             dropdownContainer.forEach((e) =>{
                 e.removeAttribute('style')
             })

             // Remove the show-dropdown class from dropdown item
             dropdownItems.forEach((e) =>{
                 e.classList.remove('show-dropdown')
             })
         }
     }

     addEventListener('resize', removeStyle)


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:3
            },
            768:{
                items:4
            },
            992:{
                items:5
            },
            1200:{
                items:6
            }
        }
    });


    // Related carousel
    $('.related-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            }
        }
    });


    // Product Quantity
    $('.quantity button').on('click', function () {
        var button = $(this);
        var oldValue = button.parent().parent().find('input').val();
        if (button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find('input').val(newVal);
    });

})(jQuery);

