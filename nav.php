 <div class="navigation">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#aboutSection" onclick="toggleAboutSection()">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Services</a></li>
                <li>
                    <form action="loginForm.php">
                    <button id="donateBtn" onclick="showForm()" style="margin-top: -10px; margin-left: 800px;">Login</button>
                    </form>  
                </li>

            </ul>
        </div>
<style type="text/css">
    .navigation{
    background-color: black;
    height: 50px;
    width: 102;
}
.navigation ul{
    margin: auto;
    display: flex;
    list-style: none;
    justify-content: center;

}
.navigation ul li{
    position: relative;
    margin: 15px ;


}
.navigation ul ul {
    padding: 0;
}
.navigation ul li a{
    text-decoration: none;
    color: whitesmoke;
}
.navigation ul li a:hover{
    background-color: rosybrown;
}
button {
  padding: 12px;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: darkred;
  border: none;
  border-radius: 30%;
  box-shadow: 0 8px #999;
}

button:hover {background-color: red;}

button:active {
  background-color: red;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
       
</style>
<script type="text/javascript">
    document.getElementById("donateBtn").addEventListener("click", function() {
    var formContainer = document.getElementById("container");
    if (formContainer.style.display === "none" || formContainer.style.display === "") {
        formContainer.style.display = "block";
    } else {
        formContainer.style.display = "none";
    }
});
</script>