window.addEventListener('load', () => {

    let main_bg = document.getElementById('main-wrapper');
    let buttons = {
        btn_home: document.getElementById('btn-home'),
        btn_about: document.getElementById('btn-about'),
        btn_terapy: document.getElementById('btn-terapy'),
        btn_thoughts: document.getElementById('btn-thoughts'),
        btn_vine: document.getElementById('btn-vine'),
        btn_blog: document.getElementById('btn-blog'),
        btn_gallery: document.getElementById('btn-gallery'),
        btn_contact: document.getElementById('btn-contact')
    }

    if(window.innerWidth >= 1200){

        main_bg.style.transition="all 3s linear";
        main_bg.style.backgroundSize = "110% 110%";

    }

    let vine_show = () => {

        let s = 0;

        let new_interval = window.setInterval( () => {

            if(s <= 0){
                
                buttons.btn_vine.style.opacity = 1;
                buttons.btn_vine.style.transform = "translateY(0)";
                buttons.btn_vine.style.visibility = "visible";
                window.clearInterval(new_interval);
            
            }else{

                s--;

            }

        }, 100);

    }

    let contact_show = () => {

        let s = 1.5;

        let new_interval = window.setInterval( () => {

            if(s <= 0){
                
                buttons.btn_contact.style.opacity = 1;
                buttons.btn_contact.style.transform = "translateY(0)";
                buttons.btn_contact.style.visibility = "visible";
                window.clearInterval(new_interval);
            
            }else{

                s--;

            }

        }, 100);

    }

    let blog_show = () => {

        let s = 3;

        let new_interval = window.setInterval( () => {

            if(s <= 0){
                
                buttons.btn_blog.style.opacity = 1;
                buttons.btn_blog.style.transform = "translateY(0)";
                buttons.btn_blog.style.visibility = "visible";
                window.clearInterval(new_interval);
            
            }else{

                s--;

            }

        }, 100);

    }

    let terapy_show = () => {

        let s = 4.5;

        let new_interval = window.setInterval( () => {

            if(s <= 0){
                
                buttons.btn_terapy.style.opacity = 1;
                buttons.btn_terapy.style.transform = "translateY(0)";
                buttons.btn_terapy.style.visibility = "visible";
                window.clearInterval(new_interval);
            
            }else{

                s--;

            }

        }, 100);

    }

    let about_show = () => {

        let s = 6;

        let new_interval = window.setInterval( () => {

            if(s <= 0){
                
                buttons.btn_about.style.opacity = 1;
                buttons.btn_about.style.transform = "translateY(0)";
                buttons.btn_about.style.visibility = "visible";
                window.clearInterval(new_interval);
            
            }else{

                s--;

            }

        }, 100);

    }

    let gallery_show = () => {

        let s = 7.5;

        let new_interval = window.setInterval( () => {

            if(s <= 0){
                
                buttons.btn_gallery.style.opacity = 1;
                buttons.btn_gallery.style.transform = "translateY(0)";
                buttons.btn_gallery.style.visibility = "visible";
                window.clearInterval(new_interval);
            
            }else{

                s--;

            }

        }, 100);

    }

    let thoughts_show = () => {

        let s = 9;

        let new_interval = window.setInterval( () => {

            if(s <= 0){
                
                buttons.btn_thoughts.style.opacity = 1;
                buttons.btn_thoughts.style.transform = "translateY(0)";
                buttons.btn_thoughts.style.visibility = "visible";
                window.clearInterval(new_interval);
            
            }else{

                s--;

            }

        }, 100);

    }

    let home_show = () => {

        let s = 10.5;

        let new_interval = window.setInterval( () => {

            if(s <= 0){
                
                buttons.btn_home.style.opacity = 1;
                buttons.btn_home.style.transform = "translateY(0)";
                buttons.btn_home.style.visibility = "visible";
                window.clearInterval(new_interval);
            
            }else{

                s--;

            }

        }, 100);

    }

    vine_show();
    contact_show();
    blog_show();
    terapy_show();
    about_show();
    gallery_show();
    thoughts_show();
    home_show();

}, false);

window.addEventListener('resize', () => {

    let main_bg = document.getElementById('main-wrapper');

    if(window.innerWidth >= 1200){

        main_bg.style.transition="all 3s linear";
        main_bg.style.backgroundSize = "110% 110%";

    }

}, false);