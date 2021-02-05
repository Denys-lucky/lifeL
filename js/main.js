$(document).ready(function() {
    $('.slider').slick({
        arrows:true,
        dots: true,

        responsive: [
            {
                breakpoint : 992,
                settings: {
                    arrows: false,
                }
            }
        ]
    });
});


const scrollBtn =  document.querySelector('.show__btn')
window.onscroll = () => {
    if(window.scrollY > 0) {
        scrollBtn.classList.remove('hide__btn')
    } else if (window.scrollY < 0) {
        scrollBtn.classList.add('hide__btn')
    }
    scrollBtn.onclick = () => {
        window.scrollTo(0, 0)
    }
};

window.onload = () => {
	let poiskTv = document.querySelector('#poisk-tv');

	poiskTv.oninput = function() {
		let value = this.value.trim();
		let list = document.querySelectorAll('.ul li');

		value
			? list.forEach(elem => {
					elem.innerText.search(value) == -1
						? elem.classList.add('hide')
						: elem.classList.remove('hide');
			  })
			: list.forEach(elem => {
					elem.classList.remove('hide');
			  });
	};
};


window.onscroll = function showHeaderAdapt() {
    let headerAdapt = document.querySelector('.header');

    if(window.pageYOffset > 0){
        headerAdapt.classList.add('header-fixed-adapt');
    } else {
        headerAdapt.classList.remove('header-fixed-adapt');
    }

    let header = document.querySelector('.menu__list');

    if(window.pageYOffset > 0){
        header.classList.add('header-fixed');
    } else {
        header.classList.remove('header-fixed');
    }
}

const menuIcon = document.querySelector('.menu-icon');
const sidebar = document.querySelector('.top-header-mobile');

const sidebarToggleBtn = document.querySelector('.menu-icon-wrapper');


sidebarToggleBtn.onclick = function () {
  menuIcon.classList.toggle('menu-icon-active');
  sidebar.classList.toggle('top-header-mobile-active');
}

let popupsToggle = document.querySelectorAll('.connect-tv .call-num .call-num-footer .call-num-mobile');
let popupClose = document.querySelectorAll('.close');

    popupsToggle.forEach(function(item) {
        item.addEventListener('click', function() {
            let popupName = item.getAttribute('data-popup');
            document.getElementById(popupName).style.display = "block"
        })
    })

    popupClose.forEach(function(item) {
        item.addEventListener('click', function() {
            var popup = item.closest('.popup');
            popup.style.display = "none"
        })
    })
