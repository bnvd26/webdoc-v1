setTimeout(() => {
  let partOne = document.getElementById('partOne');
  let itemOne = document.getElementById('itemOne');
  
  let partTwo = document.getElementById('partTwo');
  let itemTwo = document.getElementById('itemTwo');
  
  let partThree = document.getElementById('partThree');
  let itemThree = document.getElementById('itemThree');
  
  let partFour = document.getElementById('partFour');
  let itemFour = document.getElementById('itemFour');

  var popup = document.getElementById('popup');
  var infos = document.getElementById('infos');
  var items = document.querySelectorAll('.item');
  var titles = document.querySelectorAll('.item--title');
  var svgsC = document.querySelectorAll('.center');
  var svgsS = document.querySelectorAll('.nav--stroke');
  var basis = document.querySelector('.basis');
  var hovered = document.querySelector('.hovered');
  var menu = document.querySelector('.menu');
  var first = document.querySelector('.first--arrow');
  var second = document.querySelector('.second--arrow');
  var next = document.querySelector('.next__chapter');
  var popup = document.getElementById('popup');
  var infos = document.getElementById('infos');
  var items = document.querySelectorAll('.item');
  var titles = document.querySelectorAll('.item--title');
  var svgsC = document.querySelectorAll('.center');
  var svgsS = document.querySelectorAll('.stroke');
  var basis = document.querySelector('.basis');
  var hovered = document.querySelector('.hovered');
  var menu = document.querySelector('.menu');
  var first = document.querySelector('.first--arrow');
  var second = document.querySelector('.second--arrow');
  var next = document.querySelector('.next__chapter');
  var circleIntros = document.querySelectorAll('.element__text');
  var colorchangesstrokes = document.querySelectorAll('.stroke');
  var circleHs = document.querySelectorAll('.circleH');
  var hovers = document.querySelectorAll('.hover');
  var popup = document.getElementById('popup');
  var infos = document.getElementById('infos');
  var items = document.querySelectorAll('.item');
  var titles = document.querySelectorAll('.item--title');
  var svgsC = document.querySelectorAll('.center');
  var svgsS = document.querySelectorAll('.stroke');
  var basis = document.querySelector('.basis');
  var hovered = document.querySelector('.hovered');
  var menu = document.querySelector('.menu');
  var first = document.querySelector('.first--arrow');
  var second = document.querySelector('.second--arrow');
  var next = document.querySelector('.next__chapter');
  
  partOne.onmouseover = function () {
    itemOne.style.opacity = '1';
  };
  
  partOne.onmouseleave = function () {
    itemOne.style.opacity = '0';
  };
  
  partTwo.onmouseover = function () {
    itemTwo.style.opacity = '1';
  };
  
  partTwo.onmouseleave = function () {
    itemTwo.style.opacity = '0';
  };
  
  partThree.onmouseover = function () {
    itemThree.style.opacity = '1';
  };
  
  partThree.onmouseleave = function () {
    itemThree.style.opacity = '0';
  };
  
  
  partFour.onmouseover = function () {
    itemFour.style.opacity = '1';
  };
  
  partFour.onmouseleave = function () {
    itemFour.style.opacity = '0';
  };


 
 
  
  menu.addEventListener('mouseover', function () {
    menu.classList.add('div--hover');
    basis.classList.add('hidden');
    hovered.classList.add('test');
    titles[0].classList.add('visible');
  })
  
  menu.addEventListener('mouseout', function () {
    menu.classList.remove('div--hover');
    basis.classList.remove('hidden');
    hovered.classList.remove('test');
    titles[0].classList.remove('visible');
  })
  
  next.addEventListener('mouseover', function () {
    next.classList.add('div--hover');
    first.classList.add('first');
    second.classList.add('second');
    titles[5].classList.add('visible')
  })
  
  next.addEventListener('mouseout', function () {
    next.classList.remove('div--hover');
    first.classList.remove('first');
    second.classList.remove('second');
    titles[5].classList.remove('visible')
  })
  
  
  for (let i = 0; i < items.length; i++) {
    let item = items[i];
    let title = titles[i + 1];
    let svgC = svgsC[i];
    let svgS = svgsS[i];
  
    item.addEventListener('mouseover', function () {
      title.classList.add('visible');
      item.classList.add('div--hover')
      svgC.classList.add('circle--hover')
      svgS.classList.add('stroke--hover')
    })
  
    item.addEventListener('mouseout', function () {
      title.classList.remove('visible')
      item.classList.remove('div--hover')
      svgC.classList.remove('circle--hover')
      svgS.classList.remove('stroke--hover')
    })
  }
  
  var opened = false;
  infos.addEventListener('click', function () {
    if (opened == false) {
      popup.classList.add('clicked');
      setTimeout(() => {
        opened = true;
      }, 100);
    }
  
  
  });
  
  document.addEventListener('click', function () {
    if (opened == true) {
      popup.classList.remove('clicked');
      opened = false
    }
  
  })
  
  
  // Intro
  
  
  
  
  for(let i = 0; i < circleIntros.length; i++) {
    let circleIntro = circleIntros[i];
    let colorchangesstroke = colorchangesstrokes[i];
    let circleH = circleHs[i];
    let hover = hovers[i]
    console.log(hover)
  
    circleIntro.addEventListener('mouseover', function () {
      circleH.classList.add('circle--intro-ishover');
      colorchangesstroke.classList.add('stroke--intro-ishover')
      hover.classList.add('opacity')
    })
  
    circleIntro.addEventListener('mouseout', function() {
      circleH.classList.remove('circle--intro-ishover');
      colorchangesstroke.classList.remove('stroke--intro-ishover')
      hover.classList.remove('opacity')
    })
  }







menu.addEventListener('mouseover', function () {
  menu.classList.add('div--hover');
  basis.classList.add('hidden');
  hovered.classList.add('test');
  titles[0].classList.add('visible');
})

menu.addEventListener('mouseout', function () {
  menu.classList.remove('div--hover');
  basis.classList.remove('hidden');
  hovered.classList.remove('test');
  titles[0].classList.remove('visible');
})

next.addEventListener('mouseover', function () {
  next.classList.add('div--hover');
  first.classList.add('first');
  second.classList.add('second');
  titles[5].classList.add('visible')
})

next.addEventListener('mouseout', function () {
  next.classList.remove('div--hover');
  first.classList.remove('first');
  second.classList.remove('second');
  titles[5].classList.remove('visible')
})


for (let i = 0; i < items.length; i++) {
  let item = items[i];
  let title = titles[i + 1];
  let svgC = svgsC[i];
  let svgS = svgsS[i];

  item.addEventListener('mouseover', function () {
    title.classList.add('visible');
    item.classList.add('div--hover')
    svgC.classList.add('circle--hover')
    svgS.classList.add('stroke--hover')
  })

  item.addEventListener('mouseout', function () {
    title.classList.remove('visible')
    item.classList.remove('div--hover')
    svgC.classList.remove('circle--hover')
    svgS.classList.remove('stroke--hover')
  })
}

var opened = false;
infos.addEventListener('click', function () {
  if (opened == false) {
    popup.classList.add('clicked');
    setTimeout(() => {
      opened = true;
    }, 100);
  }


});

document.addEventListener('click', function () {
  if (opened == true) {
    popup.classList.remove('clicked');
    opened = false
  }

})


menu.addEventListener('mouseover', function () {
  menu.classList.add('div--hover');
  basis.classList.add('hidden');
  hovered.classList.add('test');
  titles[0].classList.add('visible');
})

menu.addEventListener('mouseout', function () {
  menu.classList.remove('div--hover');
  basis.classList.remove('hidden');
  hovered.classList.remove('test');
  titles[0].classList.remove('visible');
})

next.addEventListener('mouseover', function () {
  next.classList.add('div--hover');
  first.classList.add('first');
  second.classList.add('second');
  titles[5].classList.add('visible')
})

next.addEventListener('mouseout', function () {
  next.classList.remove('div--hover');
  first.classList.remove('first');
  second.classList.remove('second');
  titles[5].classList.remove('visible')
})


for (let i = 0; i < items.length; i++) {
  let item = items[i];
  let title = titles[i + 1];
  let svgC = svgsC[i];
  let svgS = svgsS[i];

  item.addEventListener('mouseover', function () {
    title.classList.add('visible');
    item.classList.add('div--hover')
    svgC.classList.add('circle--hover')
    svgS.classList.add('stroke--hover')
  })

  item.addEventListener('mouseout', function () {
    title.classList.remove('visible')
    item.classList.remove('div--hover')
    svgC.classList.remove('circle--hover')
    svgS.classList.remove('stroke--hover')
  })
}

var opened = false;
infos.addEventListener('click', function () {
  if (opened == false) {
    popup.classList.add('clicked');
    setTimeout(() => {
      opened = true;
    }, 100);
  }


});

document.addEventListener('click', function () {
  if (opened == true) {
    popup.classList.remove('clicked');
    opened = false
  }

})
  

  

}, 0);



