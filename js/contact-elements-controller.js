window.addEventListener('load', () => {

    let contact_header = document.getElementById('contact-header');

    let header_slide = () => {

        let s = 1;

        let interval = window.setInterval( () => {

            if(s <= 0){

                contact_header.style.opacity = 1;
                contact_header.style.transform = "translateY(0)";
                contact_header.style.visibility = "visible";
                window.clearInterval(interval);
    
            }else{
    
               s--;
    
            }
    

        }, 100);
    };

    $('#arrow_down').click( () => {
        $('body, html').animate({

            scrollTop: $('#contact-text-main').offset().top + 'px'

        }, 1000);
    });

    header_slide();


}, false);