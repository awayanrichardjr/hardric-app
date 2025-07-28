<nav class="navigation">
    <ul class="nav-brand">
        <li><a href="#">HARDRIC</a></li>
    </ul>
    <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Expertise</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <ul class="nav-menu" id="nav-menu">
        <li>
            <a href="#" onclick="nav_menu()">
                <span class="material-symbols-rounded">menu</span>
            </a>
        </li>
    </ul>
    <ul class="nav-sidebar" id="nav-sidebar" onclick="nav_sidebar()">
        <li>
            <a href="#">
                <span class="material-symbols-rounded">close</span>
            </a>
        </li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Expertise</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>


<script>
    // nav-sidebar
    function nav_menu() {
        document.getElementById("nav-sidebar").style.display = "block";
    }

    function nav_sidebar() {
        document.getElementById("nav-sidebar").style.display = "none";
    }
</script>
