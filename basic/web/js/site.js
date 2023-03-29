window.addEventListener('scroll', function() {
    if (pageYOffset > 70) {
        document.querySelector('.fixed-top').classList.add('nav-active')
    } else {
        document.querySelector('.fixed-top').classList.remove('nav-active')
    }
})