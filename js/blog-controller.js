window.addEventListener('load', () => {

    let blog_header = document.getElementById('blog-header');
    let blog_bg = document.getElementById('blog-wrapper');

    let header_slide = () => {

        let s = 1;

        let interval = window.setInterval( () => {

            if(s <= 0){

                blog_header.style.opacity = 1;
                blog_header.style.transform = "translateY(0)";
                blog_header.style.visibility = "visible";
                window.clearInterval(interval);
    
            }else{
    
               s--;
    
            }
    

        }, 100);
    };

    $('#arrow_down').click( () => {
        $('body, html').animate({

            scrollTop: $('#blog-text-main').offset().top + 'px'

        }, 1000);
    });

    header_slide();


}, false);