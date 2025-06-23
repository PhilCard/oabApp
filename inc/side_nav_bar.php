<?php
    if(isset($_GET['action']) && $_GET['action'] == "logout"){
        //echo '<p> olaola </p>';
    }
?>
<nav class="navbar">
    <div class="user-menu" id="userMenu">
        <button class="user-button" onclick="toggleMenu()">
            <i class="fas fa-user-circle"></i> Admin
            <i class="fas fa-chevron-down"></i>
        </button>
        <div class="dropdown" id="dropdownMenu">
            <a href="#"><i class="fas fa-user"></i> Perfil: Admin</a>
            <a href="index.php?action=logout"><i class="fas fa-sign-out-alt"></i> Sair</a>
        </div>
    </div>
</nav>