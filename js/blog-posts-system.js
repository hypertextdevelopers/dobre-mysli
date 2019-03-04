window.addEventListener('load', () => {

    let posts_ul = document.getElementById("posts-ul");

    $.ajax({

        type: "POST",
        url: '../php/posts-show.php',
        success: (res) => {

            posts_ul.innerHTML += res;

        }

    });

}, false);