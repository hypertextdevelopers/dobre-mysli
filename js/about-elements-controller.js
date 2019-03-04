window.addEventListener('load', () => {

    let about_header = document.getElementById('about-header');

    let header_slide = () => {

        let s = 1;

        let interval = window.setInterval( () => {

            if(s <= 0){

                about_header.style.opacity = 1;
                about_header.style.transform = "translateY(0)";
                about_header.style.visibility = "visible";
                window.clearInterval(interval);
    
            }else{
    
               s--;
    
            }
    

        }, 100);
    };

    $('#arrow_down').click( () => {
        $('body, html').animate({

            scrollTop: $('#about-text-main').offset().top + 'px'

        }, 1000);
    });

    header_slide();


}, false);