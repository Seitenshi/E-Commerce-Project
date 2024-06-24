// scroll break

window.addEventListener('scroll', () => {
    document.body.style.setProperty('--scroll',window.pageYOffset / (document.body.offsetHeight - window.innerHeight));
  }, false);
  
  
  
  const kalinaw = document.querySelector('.kalinaw');
  const kalinawL = document.querySelector('.kalinawL');
  const kalinawR = document.querySelector('.kalinawR');
  
  
  
  // Create the observer, same as before:
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      
      if (entry.isIntersecting) {
        
        kalinaw.classList.add('kalinaw-transition');
              kalinawL.classList.add('kalinawL-transition');
        kalinawR.classList.add('kalinawR-transition');
  
        return;
      }
  
      kalinaw.classList.remove('kalinaw-transition');
      kalinawL.classList.remove('kalinawL-transition');
      kalinawR.classList.remove('kalinawR-transition');
  
    });
  });
  
  // var observer = new IntersectionObserver(callback, options);
  // observer.observe(kalinaw);
  
  observer.observe(document.querySelector('.kalinaw'));
  observer.observe(document.querySelector('.kalinawL'));
  observer.observe(document.querySelector('.kalinawR'));

// end of scroll break


// PRODUCT HIGHLIGHTS
$(function() {
  $('.carousel-item').eq(0).addClass('active');
  var total = $('.carousel-item').length;
  var current = 0;

  $('#moveRight').on('click', function() {
    var next = current + 1;
    if (next >= total) {
      next = 0;
    }
    setSlide(current, next);
  });

  $('#moveLeft').on('click', function() {
    var prev = current - 1;
    if (prev < 0) {
      prev = total - 1;
    }
    setSlide(current, prev);
  });

  function setSlide(prev, next) {
    // Ensure the descriptions are visible for the active slide
    $('.carousel-item').eq(prev).removeClass('active');
    $('.carousel-item').eq(next).addClass('active');
    current = next;
  }
});




