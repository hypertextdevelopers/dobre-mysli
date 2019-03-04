window.addEventListener('load', () => {

    document.getElementById('inp_name').value="";
    document.getElementById('inp_lastname').value="";
    document.getElementById('inp_email').value="";
    document.getElementById('textarea').value="";

    let btn_send = document.getElementById("message_button");

    btn_send.addEventListener('click', () => {
        
        let inp_name_value = document.getElementById('inp_name');
        let inp_lastname_value = document.getElementById('inp_lastname');
        let inp_email_value = document.getElementById('inp_email');
        let textarea_value = document.getElementById('textarea');

        if(inp_name_value.value === ""){
            
            inp_name_value.style.border = "2px solid #d9534f";

        }else{

            inp_name_value.style.border = "2px solid #ffffff";

        }

        if(inp_lastname_value.value === ""){
            
            inp_lastname_value.style.border = "2px solid #d9534f";

        }else{

            inp_lastname_value.style.border = "2px solid #ffffff";

        }

        if(inp_email_value.value === ""){
            
            inp_email_value.style.border = "2px solid #d9534f";

        }else{

            inp_email_value.style.border = "2px solid #ffffff";

        }

        if(textarea_value.value === ""){
            
            textarea_value.style.border = "2px solid #d9534f";

        }else{

            textarea_value.style.border = "2px solid #ffffff";

        }

        if(inp_name_value.value != "" && inp_lastname_value.value != "" && inp_email_value.value != "" && textarea_value.value != ""){

            $.ajax({

                type: "POST",
                url: '../php/mail.php',
                data: {

                    name: inp_name_value.value, 
                    last_name: inp_lastname_value.value, 
                    email: inp_email_value.value, 
                    text_area: textarea_value.value

                },
                success: (res) => {

                    let inputs = document.getElementById("inputs");
                    let alert = document.getElementById('alert');

                    inputs.style.opacity = 0;
                    inputs.style.visibility = "hidden";

                    btn_send.style.opacity = 0;
                    btn_send.style.visibility = 'hidden';

                    textarea_value.style.opacity = 0;
                    textarea_value.style.visibility = "hidden";

                    alert.style.opacity = 1;
                    alert.style.visibility = "visible";

                }

            });

        }

    }, false);


}, false);