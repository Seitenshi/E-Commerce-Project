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
document.addEventListener('DOMContentLoaded', function () {
  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
});
