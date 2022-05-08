<header class="header">
            <div class="header-logo">
                <a href="Homepage.php"><img src="image/logo.png" alt="MTDK logo"></a>
            </div>
        <ul class="header-list" id="headerList">
            <li class="header-item"> 
                <a href="Sections.php">
                    Általános tudnivalók
                </a>
            </li>
            <li class="header-item"> 
                <a href="News.php">
                    Hírek
                </a>
            </li>
            <li class="header-item"> 
                <a href="FAQ.php">
                    GYIK
                </a>
            </li>
            <li class="header-item"> 
                <a href="Contact.php">
                    Kapcsolat
                </a>
            </li>
            <li class='header-item' id='login'>
                <?php
                    if (isset($_SESSION["email"])) {
                        $initials = mb_substr($_SESSION["fname"], 0, 1) . mb_substr($_SESSION["lname"], 0, 1);
                        echo '<a href="User.php" class="login-button" id="login-button-initials">' .
                                $initials .
                                '</a>';            
                    }
                    else {
                        echo '<a href="Login.php" class="login-button">
                              Bejelentkezés
                              </a>';
                    }
                
                ?>
            </li>
            <li class="header-item" id="searchBarText"> 
                <input type="text" placeholder="Keresés">
            </li>
            <li class="header-item" id="searchBar"> 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
            </li>

        </ul>
        <button class="header-hamburger" type="button" id="headerHamburger">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
        </button>
</header>

<script src="script-header.js"></script>