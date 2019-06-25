var stopscroll = false;
document.addEventListener('wheel', function() {
    if(event.deltaY > 0 && !stopscroll) {
        stopscroll = true;
        window.location.replace('http://localhost:8001/questions/0')
    }
})