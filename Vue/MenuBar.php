<style>
/* Add a sky blue background color to the body background */


ul#menu {
    /* set the position of the navigation bar*/

    margin: 30px;
    padding-top: 15px;

    padding-bottom: 25px;
    /* Adding some padding */
    background: #fff;
    /* Add a white background color to the top navigation */
    display: flex;
    /* flex Set navigation bar horizontally using the  display tag*/
    border-radius: 10px;
    /* add the border radius */
    box-shadow: 0 10px 30px rgba(0, 0, 0, .3)
}

/* Style the links inside the navigation bar */
ul#menu li {
    list-style: none;
    text-align: center;
    display: block;
    border-right: 1px solid rgba(0, 0, 0, 0.2);
}

ul#menu li:last-child {
    border-right: none;
}

ul#menu li a {
    text-decoration: none;
    padding: 0 50px;
    display: block;
}

/* Style the icon inside the navigation bar */


ul#menu li a .name {
    position: relative;
    height: 20px;
    width: 100%;
    display: block;
    /*make ul li a .name overflow is hidden*/
}

/*style the font size and set transition of the navigation menu*/
ul#menu li a .name span {
    display: block;
    position: relative;
    color: #000;
    font-size: 18px;
    /* changing font size */
    line-height: 20px;
    transition: 0.5s;
    /* adding the transition to make it more attractive */

}

/*set and change position, top, width, left, height color of the 'class'.name span:before*/
ul#menu li a .name span:before {
    content: attr(data-text);
    position: absolute;
    top: -100%;
    width: 100%;
    left: 0;
    height: 1005;
    color: black;

}

/*style hover effect of ul li a .name span */

ul#menu li:hover {
    transform: translateY(-6px);
}

ul#menu li a:hover {
    filter: invert(38%) sepia(88%) saturate(310%) hue-rotate(159deg) brightness(95%) contrast(81%);
}

.logos {

    /* changing the width of the icon */
    height: 24px;
    /* changing the height of the icon */

    overflow: hidden;
    margin: 0 auto 10px;

}
</style>
<ul id="menu">
    <!--starting ul tag to create unordered lists.-->
    <li>
        <!--The HTML li element is used to represent an item in a list. ... In menus and unordered lists-->
        <!--the a tag defines a hyperlink, which is used to link from one page to another-->

        <a href="Home">
            <!-- this anchor text for link your home to another page -->
            <img src="img/home.svg" class="logos" />
            <div class="name"><span>Acceuil</span></div>
            <!-- we are create first menu item name home -->
        </a>
    </li>

    <li>
        <a href="showPresentationDeLecole">
            <!-- this anchor text for link your home to another page -->
            <img src="img/presentation.svg" class="logos" />
            <div class="name"><span>Présentation</span></div>
            <!-- we are create first menu item name home -->
        </a>
    </li>
    <li>
        <a href="showPrimaire">
            <!-- this anchor text for link your home to another page -->
            <img src="img/primaire.svg" class="logos" />
            <div class="name"><span>Primaire</span></div>
            <!-- we are create first menu item name home -->
        </a>
    </li>
    <li>
        <a href="showMoyen">
            <!-- this anchor text for link your home to another page -->
            <img src="img/cem.svg" class="logos" />
            <div class="name"><span>Moyen</span></div>
            <!-- we are create first menu item name home -->
        </a>
    </li>
    <li>
        <a href="showSecondaire">
            <!-- this anchor text for link your home to another page -->
            <img src="img/home.svg" class="logos" />
            <div class="name"><span>Secondaire</span></div>
            <!-- we are create first menu item name home -->
        </a>
    </li>
    <li>
        <a href="espaceEtudiant">
            <!-- this anchor text for link your home to another page -->
            <img src="img/student.svg" class="logos" />
            <div class="name"><span>Espace élève</div>
            <!-- we are create first menu item name home -->
        </a>
    </li>
    <li>
        <a href="espaceParent">
            <!-- this anchor text for link your home to another page -->
            <img src="img/parent.svg" class="logos" />
            <div class="name"><span>Espace Parent</span></div>
            <!-- we are create first menu item name home -->
        </a>
    </li>
    <li>
        <a href="showContactDetails">
            <!-- this anchor text for link your home to another page -->
            <img src="img/contact.svg" class="logos" />
            <div class="name"><span>Contact</span></div>
            <!-- we are create first menu item name home -->
        </a>
    </li>
</ul>