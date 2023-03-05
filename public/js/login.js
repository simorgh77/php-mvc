

document.getElementById("submit_button").addEventListener("click",()=>{
    const email=document.getElementById("email").value;
    const password=document.getElementById("password").value;
fetch("/app/controllers/LoginController.php",{
    header: "Content-type: application/x-www-form-urlencoded",
    method:"POST",
    body:JSON.stringify({email,password})
})();

})
