const updateBtn = document.querySelectorAll(".update"),
    updateCloseBtn = document.getElementById("update-close"),
    deleteBtn = document.getElementById("delete"),
    insertBtn = document.getElementById("insert"),
    insertCloseBtn =document.getElementById("insert-close");


function dashboard(){
    updateBtn.forEach((item)=>{
        item.addEventListener("click", ()=>{
            document.getElementById("update-data").classList.toggle("active");
    
            const studentId = item.getAttribute('data-id');
    
            document.getElementById("update-item-3").value = studentId;
        });
    })
    updateCloseBtn.addEventListener("click", ()=>{
        document.getElementById("update-data").classList.toggle("active");
    
    });
    const updateData = document.getElementById("update-data");
    document.addEventListener("keydown", (event)=>{
        if(event.key === "Esc" || event.key === "Escape"){
            if(updateData.classList.contains("active")){
                updateData.classList.remove("active");
            }
        }
    });
    insertBtn.addEventListener("click", ()=>{
        document.getElementById("insert-data").setAttribute("class", "active");
    });
    insertCloseBtn.addEventListener("click", ()=>{
        document.getElementById("insert-data").classList.toggle("active");
    
    });

    document.getElementById('search').addEventListener('keyup', function() {
        const searchValue = this.value.toLowerCase();
        
        const filteredStudents = studentData.filter(student => 
            student.name.toLowerCase().includes(searchValue) || 
            student.email.toLowerCase().includes(searchValue) || 
            student.admissionDate.includes(searchValue) 
        );
        
        displayFilteredResults(filteredStudents);
    });
}


function confirmBox(event, id){
    event.preventDefault();

    let confirmBox = confirm("Are you sure you want to delete?");

    if(confirmBox){
        document.forms['deleteform-' + id].submit();
        console.log("runs");
    }
}




function displayFilteredResults(filteredStudents) {
    const tableBody = document.getElementById('table'); 
    let tableContent = '';
    
    filteredStudents.forEach(student => {
        tableContent += `
            <tr>
                <td>${student.id}</td>
                <td>${student.name}</td>
                <td>${student.email}</td>
                <td>${student.admissionDate}</td>
                <td>
                    <button class='update' data-id='${student.id}'>Update</button>
                    <form id='deleteform-${student.id}' onsubmit='confirmBox(event, ${student.id})' action="/phpCode/web application/dashboard.php" method='post'>
                        <input type='hidden' name='deleteId' value='${student.id}'>
                        <button class='delete'><i class='fa-solid fa-trash-can'></i></button>
                    </form>
                </td>
            </tr>
        `;
    });
    
    tableBody.innerHTML = tableContent;
}
function login(){
    const inputElement = document.querySelectorAll(".input-box input"),
        eye = document.getElementById("eye"),
        pass = document.getElementById("password");

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

    function togglePass(){
        if(pass.type !== "password"){
            pass.type = "password";
            

            eye.classList.remove("fa-eye");
            
            eye.classList.add("fa-eye-slash");

                

            eye.setAttribute("title", "Show Password");
        }else{
            pass.type = "text";

            eye.classList.add("fa-eye");

            eye.setAttribute("title", "Hide Password");

            eye.classList.remove("fa-eye-slash");

        }
    }
    eye.addEventListener("click", togglePass);
}