window.addEventListener('load', () => {

    let terapy_header = document.getElementById('terapy-header');
    let terapy_bg = document.getElementById('terapy-wrapper');

    let header_slide = () => {

        let s = 1;

        let interval = window.setInterval( () => {

            if(s <= 0){

                terapy_header.style.opacity = 1;
                terapy_header.style.transform = "translateY(0)";
                terapy_header.style.visibility = "visible";
                window.clearInterval(interval);
    
            }else{
    
               s--;
    
            }
    

        }, 100);
    };

    $('#arrow_down').click( () => {
        $('body, html').animate({

            scrollTop: $('#terapy-text-main').offset().top + 'px'

        }, 1000);
    });

    header_slide();


}, false);