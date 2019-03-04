window.addEventListener('load', () => {

    let textarea_box = document.getElementById('review-text');
    let review_btn = document.getElementById('review-btn');
    let review_ul = document.getElementById('review-ul');

    textarea_box.value = '';
    
    review_btn.addEventListener('click', () => {

        if(textarea_box.value === ''){
            
            textarea_box.style.transition = "all .1s linear";
            textarea_box.style.borderBottom = "1px solid #dc3545";

        }else{

            textarea_box.style.transition = "all .1s linear";
            textarea_box.style.borderBottom = "1px solid #ffffff";
            
            $.ajax({

                type: 'POST',
                url: '../php/review_add.php',
                data: { content: textarea_box.value },
                success: (response) => {

                    textarea_box.value = '';
                    review_ul.innerHTML += response;

                }

            });

        }

    }, false);

    $.ajax({

        type: 'POST',
        url: '../php/review_show.php',
        success: (response) => {

            textarea_box.value = '';
            review_ul.innerHTML += response;

        }

    });

}, false);