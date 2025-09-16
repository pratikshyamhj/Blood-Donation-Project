const dropdown = document.getElementById("dropdown")
const adminLogin = document.getElementById("admin")
const donerLogin = document.getElementById("doner")
const userLogin = document.getElementById("user")

adminLogin.style.display = "block"
        donerLogin.style.display = "none"
        userLogin.style.display = "none"

dropdown.onchange = ((event) => {
    console.log(event.target.value)

    if (event.target.value == "admin") {
        adminLogin.style.display = "block"
        donerLogin.style.display = "none"
        userLogin.style.display = "none"
    }

    else if (event.target.value == "doner") {
        adminLogin.style.display = "none"
        donerLogin.style.display = "block"
        userLogin.style.display = "none"
    }

    else if (event.target.value == "user") {
        donerLogin.style.display = "none"
        adminLogin.style.display = "none"
        userLogin.style.display = "block"
    }
})
function func(){
   alert("Thank you!! :)")
   
}