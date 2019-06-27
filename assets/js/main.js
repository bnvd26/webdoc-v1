setTimeout(() => {
  let partOne = document.getElementById('partOne');
  let itemOne = document.getElementById('itemOne');
  
  let partTwo = document.getElementById('partTwo');
  let itemTwo = document.getElementById('itemTwo');
  
  let partThree = document.getElementById('partThree');
  let itemThree = document.getElementById('itemThree');
  
  let partFour = document.getElementById('partFour');
  let itemFour = document.getElementById('itemFour');

  if(partOne)
  {
    partOne.onmouseover = function () {
      itemOne.style.opacity = '1';
    };
    
    partOne.onmouseleave = function () {
      itemOne.style.opacity = '0';
    };
  }
  
  
  if(partTwo)
  {
  partTwo.onmouseover = function () {
    itemTwo.style.opacity = '1';
  };
  
  partTwo.onmouseleave = function () {
    itemTwo.style.opacity = '0';
  };

}

if(partThree)

{
  partThree.onmouseover = function () {
    itemThree.style.opacity = '1';
  };
  
  partThree.onmouseleave = function () {
    itemThree.style.opacity = '0';
  };
}
  
 
  if(partFour)
  {
    partFour.onmouseover = function () {
    itemFour.style.opacity = '1';
  };
  
  partFour.onmouseleave = function () {
    itemFour.style.opacity = '0';
  };

  }



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
  
  var circleIntros = document.querySelectorAll('.element__text');
  var colorchangesstrokes = document.querySelectorAll('.stroke');
  var circleHs = document.querySelectorAll('.circleH');
  var hovers = document.querySelectorAll('.hover')
  console.log(hovers)
  
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


  // Brain
var brainCircles = document.querySelectorAll('.brain--center');
var brainStrokes = document.querySelectorAll('.brain--stroke')
var brainSvgs = document.querySelectorAll('.circle')
var brainHiddens = document.querySelectorAll('.brain--hidden');
var zones = document.querySelectorAll('.zone');
var altZones = document.querySelectorAll('.hover__zone')

for(let i = 0; i < brainSvgs.length; i++) {
  let brainSvg = brainSvgs[i]
  let brainCircle = brainCircles[i];
  let brainStroke = brainStrokes[i];
  let brainHidden = brainHiddens[i];
  let zone = zones[i];


  brainSvg.addEventListener('mouseover', function() {
    brainCircle.classList.add('circle--hovered');
    brainStroke.classList.add('stroke--hovered');
    brainHidden.classList.add('brain--opacity');
    zone.classList.add('zone--visible');

  })

  brainSvg.addEventListener('mouseout', function() {
    brainCircle.classList.remove('circle--hovered');
    brainStroke.classList.remove('stroke--hovered');
    brainHidden.classList.remove('brain--opacity');
    zone.classList.remove('zone--visible');

  })
}

for(let i = 4; i < brainSvgs.length; i++) {
  let brainSvg = brainSvgs[i]
  let altzone = altZones[i-4]

  brainSvg.addEventListener('mouseover', function() { 
    altzone.classList.add('hover__zone--visible')
  })

  brainSvg.addEventListener('mouseout', function() { 
    altzone.classList.remove('hover__zone--visible');
  })
}






var stopscroll = true;

setTimeout(() => {
  stopscroll = false;
}, 1000);

var href = window.location.href
var test = href.substring(href.length-12, href.length-1)
console.log(test)
var id = href[33];


if(test === 'chapterOne/') {
  document.addEventListener('wheel', function (event) {

    if ((event.deltaY > 150) && !stopscroll) {
      id++;
      var url = href.substring(0, href-1) + id
  
      stopscroll = true;
      setTimeout(() => {
        window.location.replace(url)
      }, 500);
    }
  
    else if ((event.deltaY < -150) && !stopscroll) {
      id--;
      var url = href.substring(0, href-1) + id
  
      stopscroll = true;
      setTimeout(() => {
        window.location.replace(url)
      }, 500);
    }
  })
  
  document.body.addEventListener('keydown', function (event) {
    
    let keycode = event.key
    if (keycode === 'ArrowDown' && !stopscroll) {
      id++;
      var url = href.substring(0, href-1) + id
  
      setTimeout(() => {
        window.location.replace(url)
      }, 500);
      
    }
    else if (keycode === 'ArrowUp' && !stopscroll) {
      id--;
      var url = href.substring(0, href-1) + id
  
      setTimeout(() => {
        window.location.replace(url)
      }, 500);
    }
  })
}  else if (test === 'http://localhost:8001') {
  document.body.addEventListener('keydown', function (event) {
    
    let keycode = event.key
    if (keycode === 'ArrowDown' && !stopscroll) {
      var url = 'http://localhost:8001/questions/0'
  
      setTimeout(() => {
        window.location.replace(url)
      }, 500);
      
    }
  })

  document.addEventListener('wheel', function (event) {

    if ((event.deltaY > 150) && !stopscroll) {
      var url = 'http://localhost:8001/questions/0'
  
      stopscroll = true;
      setTimeout(() => {
        window.location.replace(url)
      }, 500);
    }
  })
}








  
  
}, 0);



