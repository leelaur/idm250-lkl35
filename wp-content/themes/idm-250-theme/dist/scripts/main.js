const courses = document.querySelector ("#menu-item-32");
const submenu = document.querySelector (".sub-menu");
const hamburger = document.querySelector ("#hamburger");


  //hover on course nav item
  courses.addEventListener('mouseenter', () => {
    submenu.style.display="block";
  })

   //hover off course nav item
   courses.addEventListener('mouseleave', () => {
    submenu.style.display="none";
    
  })
  //keep sub items open if hovered on 
  submenu.addEventListener('mouseenter', () => {
    submenu.style.display="block";
    
  })

// hamburger 

hamburger.addEventListener('onClick', () => {
  hamburger.classList.toggle("open");
  
})

  function myFunction(x) {
    x.classList.toggle("change");

    var x = document.getElementById("navitems");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
