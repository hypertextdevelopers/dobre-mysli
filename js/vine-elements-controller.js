window.addEventListener('load', () => {

    let vine_header = document.getElementById('vine-header');

    let header_slide = () => {

        let s = 1;

        let interval = window.setInterval( () => {

            if(s <= 0){

                vine_header.style.opacity = 1;
                vine_header.style.transform = "translateY(0)";
                vine_header.style.visibility = "visible";
                window.clearInterval(interval);
    
            }else{
    
               s--;
    
            }
    

        }, 100);
    };

    $('#arrow_down').click( () => {
        $('body, html').animate({

            scrollTop: $('#vine-text-main').offset().top + 'px'

        }, 1000);
    });

    header_slide();


}, false);