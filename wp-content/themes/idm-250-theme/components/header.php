<!-- <div class="header-back"></div> -->
<header> 
    <a href="<?php echo '$home'?>"> <p> Excel CPR </p> </a>
    <nav>
        
        <?php
        wp_nav_menu (['theme_location' => 'primary-menu']);
        $menu = wp_get_nav_menu_items('primary-menu');
        ?>
    
    <!-- nav menu for responsive -->
       <div class="menu-entire">
            <a href="#home" class="active"></a>
            <div id="navitems">
                <a href="<?php echo '$home'?>">Home</a>
                <a href="<?php echo '$courses'?>" >Courses</a>
                <a href="<?php echo '$about'?>">About</a>
                <a href="<?php echo '$contact'?>">Contact</a>

            </div>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">  
                <div class="hamburger-menu" onclick="myFunction(this)">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>    
            </a>
        </div>
    </nav>
</header>
<div class=wrapper>
<main>
    <div class="top-space"></div>