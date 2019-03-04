window.addEventListener('load', () => {

    let file_inp = document.getElementById('file');

    file_inp.addEventListener('change', () => {

        let src = file_inp.files;

        let new_src = Array.from(src);
        let src_box = document.getElementById('src');

        new_src.forEach( (item) => {

            src_box.innerHTML = `<p>${ item.name }</p>`;
            console.log(src);

        });

    }, false);

}, false);