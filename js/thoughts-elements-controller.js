window.addEventListener('load', () => {

    let thoughts_header = document.getElementById('thoughts-header');

    let header_slide = () => {

        let s = 1;

        let interval = window.setInterval( () => {

            if(s <= 0){

                thoughts_header.style.opacity = 1;
                thoughts_header.style.transform = "translateY(0)";
                thoughts_header.style.visibility = "visible";
                window.clearInterval(interval);
    
            }else{
    
               s--;
    
            }
    

        }, 100);
    };

    $('#arrow_down').click( () => {
        $('body, html').animate({

            scrollTop: $('#thoughts-text-main').offset().top + 'px'

        }, 1000);
    });

    header_slide();


}, false);