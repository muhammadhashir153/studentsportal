
    
    
    const inputElement = document.querySelectorAll(".input-box input"),
        toggleBtn = document.getElementById("check"),
        toggleIcon = document.querySelector("#toggle-mode i"),
        toggleText = document.querySelector("#toggle-mode span"),
        form = document.querySelector("form"),
        label = document.querySelectorAll(".input-box label"),
        inputBox = document.querySelectorAll("form input"),
        heading = document.querySelector("h1"),
        eye = document.getElementById("eye"),
        check_mark = document.getElementById("check-box"),
        confirmPass = document.getElementById("c_pass"),
        pass = document.getElementById("password"),
        submitButton = document.querySelector("button"),
        toggleIconBtn = document.querySelector(".button i"),
        body = document.querySelector("body");
    ;

    inputElement.forEach(input=>{
        input.addEventListener("focus", ()=>{
            input.parentElement.querySelector("label").classList.add("focused");
        });
        
        input.addEventListener("blur", ()=>{
            if(input.value === ""){
                input.parentElement.querySelector("label").classList.remove("focused");
            }
        });
    });


    confirmPass.addEventListener("keyup", ()=>{
        if(confirmPass.value === ""){

            check_mark.style.opacity = 0;

            
        }else{

            check_mark.style.opacity = 1;

            if(confirmPass.value === pass.value){

                check_mark.classList.add("fa-circle-check");

                check_mark.style.color = "green";

                check_mark.classList.remove("fa-circle-xmark");

                btn.style.right = "0px";

            }else{
                check_mark.classList.remove("fa-circle-check");

                check_mark.classList.add("fa-circle-xmark");
                
                check_mark.style.color = "red";
                
                
                
            }
        }
    });

    var btn = document.getElementById("btn");
    var btnDiv = document.getElementById("btn-div");

                btnDiv.addEventListener("mouseenter", ()=>{
                    if(confirmPass.value === pass.value){
                        btn.style.right = 0;
                    }else{
                        if(btn.style.right == 0){
                            btn.style.right = "50%";
                        }else if(btn.style.right = "50%"){
                            btn.style.right = "100%";
                        }
                        // else if(btn.style.right = "50px"){
                        //     btn.style.right = 0;
                        // }
                    }
                })






    function togglePass(){
        if(pass.type !== "password"){
            pass.type = "password";

            confirmPass.type = "password";

            eye.classList.remove("fa-eye");
            
            eye.classList.add("fa-eye-slash");

                if(toggleBtn.checked){
                    eye.style.color = "#ffffff80";
                }else{
                    eye.style.color = "#00000080";
                }

            eye.setAttribute("title", "Show Password");
        }else{
            pass.type = "text";

            confirmPass.type = "text";

            eye.classList.add("fa-eye");

            eye.setAttribute("title", "Hide Password");

            eye.classList.remove("fa-eye-slash");

        }
    }


    function switchMode(){
        if(toggleBtn.checked){
            toggleText.innerHTML = "Light Mode";

            body.classList.add("dark");
            
            form.classList.add("dark");
            
            label.forEach(label=>{
                label.classList.add("dark");
            });

            inputBox.forEach(input=>{
                input.classList.add("dark");
            });

            heading.classList.add("dark");
            
            eye.style.color = "#ffffff80";
            
            submitButton.classList.add("dark");

            toggleIconBtn.classList.add("fa-sun");

            toggleIconBtn.style.color = "yellow";
            
            toggleIconBtn.classList.remove("fa-moon");
        }else{
            toggleText.innerHTML = "Dark Mode";
            
            body.classList.remove("dark");
            
            form.classList.remove("dark");
            
            label.forEach(label=>{
                label.classList.remove("dark");
            });
            
            inputBox.forEach(input=>{
                input.classList.remove("dark");
            });
            
            heading.classList.remove("dark");
            
            eye.style.color = "#00000080 ";
            
            submitButton.classList.remove("dark");
            
            toggleIconBtn.classList.remove("fa-sun");
            
            toggleIconBtn.style.color = "#00000080";

            toggleIconBtn.classList.add("fa-moon");
        }
    }

    eye.addEventListener("click", togglePass);
    toggleBtn.addEventListener("click", switchMode);

    