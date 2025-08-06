// Placeholder for header JS

// headerのスクロール
const header = document.querySelector('.site-header');
window.addEventListener('scroll', function(){
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        header.classList.add('scroll');
    } else {
        header.classList.remove('scroll');
    }
});

// navのクリック
const navmenus = document.querySelectorAll('.menu');
navmenus.forEach((navmenu) => {
    navmenu.addEventListener('click', () => {
        document.querySelectorAll('.current').forEach(element => {
            element.classList.remove('current');
        });        
        navmenu.classList.add('current');
    });
});

// navのスクロール
const toggleActive = (target) => {
    const currentActive = document.querySelector('.current');
    if (currentActive !== null) {
        currentActive.classList.remove('current');
    }
    target.classList.add('current');
};
const watch = (id) => {
    const section = document.getElementById(id);
    const navMenu = document.getElementById(`${id}-menu`);
    if (!section || !navMenu)
        return;
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                toggleActive(navMenu);
            }
        });
    },{
        root: null,
        rootMargin: '-50% 0px',
        threshold: 0,
    });
    observer.observe(section);
};
["top", "ichisere", "nicoren"].forEach(watch);

// バーガーメニュー
const hambtn = document.querySelector('.hamburger');
const hamnav = document.querySelector('.ham-nav');
hambtn.addEventListener('click', () => {
    hambtn.classList.toggle('active');
    hamnav.classList.toggle('open');
});

// バーガーメニュー内のリンクのクリック
const hamnavLink = document.querySelector('.ham-nav nav ul');
hamnavLink.addEventListener('click', () => {
    hambtn.classList.remove('active');
    hamnav.classList.remove('open');
});

// logoのリンクのクリック
const logo = document.querySelector('.logo');
logo.addEventListener('click', () => {
    hambtn.classList.remove('active');
    hamnav.classList.remove('open');
});