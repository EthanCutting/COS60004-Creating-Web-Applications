/*
   Master Of Cyber Security
    cos6004-Creating Web Applications
    Ethan PP Cutting
    100942775
*/

// adding start slide show function
function startSlideshow() 
{
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    // addomg show slide function 
    function showSlide(index) 
    {
      slides[currentSlide].classList.remove('active');
      slides[index].classList.add('active');
      currentSlide = index;
    }
    
    // adding next slide function
    function nextSlide() 
    {
      const nextIndex = (currentSlide + 1) % slides.length;
      showSlide(nextIndex);
    }
  
    setInterval(() => 
    {
      nextSlide();
    }, 2000);
  }
  // adding a event listener to listen to start slide show function
  document.addEventListener('DOMContentLoaded', startSlideshow);
  
// making a function called header color change that will change h1 color
function headercolorchange()
{
    // calling h1 from ID
    const h1sideshow = document.querySelector('.h1slideshow');
    // adding the color to red
    h1sideshow.style.color = 'red';
  }
  // adding a event listener so it will calll headercolorchange function
  document.addEventListener('DOMContentLoaded', headercolorchange);
  



  