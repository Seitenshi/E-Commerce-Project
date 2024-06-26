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
  var descriptions = [
      {
          title: "Le tour Chair",
          description: "This chair is made of oak wood with bits of fabrics on the top and bottom. You can also swing with it and you will not fall because of its firmness",
          btnText: "Check more to view similar products"
      },
      {
          title: "Bed",
          description: "Di ko alam check ko lang kung tama hehe.",
          btnText: "Check more to view similar products"
      },
      {
          subtitle: "Cabinet",
          title: "Cab",
          description: "Di ko alam check ko lang kung tama hehe maya na description uwu.",
          btnText: "Check more to view similar products"
      },
      {
          subtitle: "Tables",
          title: "Tab",
          description: "Boom boom shake shake maya description mo ehe.",
          btnText: "Check more to view similar products"
      },
      {
          subtitle: "Wall Furnitures",
          title: "SLMFEW",
          description: "Di na gumagana ang braincells maya na descriptions salamin salamin sa dingding nasaan ang pag ibig hihi huhuhu.",
          btnText: "Check more to view similar products"
      }
  ];

  $('.carousel-item').eq(0).addClass('active');
  updateDescription(0);
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
      $('.carousel-item').eq(prev).removeClass('active');
      $('.carousel-item').eq(next).addClass('active');
      current = next;
      updateDescription(next);
  }

  function updateDescription(index) {
      $('.carousel-item__title').text(descriptions[index].title);
      $('.carousel-item__description').text(descriptions[index].description);
      $('.carousel-item__btn').text(descriptions[index].btnText);
  }
});






