let nav = document.getElementById('navbarResponsive')

document.addEventListener('click', function(e) {
    if (e.target.closest('.nav__btn')) {
        nav.classList.toggle('open')
    } else {
        nav.classList.remove('open')
    }
})



function Tabs(btn_class, container_display, active) {

    let btn_displays = document.getElementsByClassName(btn_class) //btn-display
    let container_displays = document.getElementsByClassName(container_display) //container-display
    console.log('dziala', btn_displays[0], container_displays[0])
    for (let btn of btn_displays) {


        btn.addEventListener('click', function() {



            var current = document.getElementsByClassName(active); //active-btn
            let string_act = " " + active;
            current[0].className = current[0].className.replace(string_act, "");
            this.className += string_act;

            for (let container of container_displays) {


                if (btn.getAttribute('data-btn') == container.getAttribute('data-text')) {
                    console.log('ok')
                    container.style.opacity = 1
                    container.style.visibility = "visible"
                    container.style.height = "100%"
                    container.style.transition = "opacity 0.4s ease-out"
                    container.style.padding = "81px 0"
                    container.classList.add('cont-btn')


                } else {
                    container.style.opacity = 0
                    container.style.visibility = "hidden"
                    container.style.height = "0"
                    container.style.padding = "0"
                    container.style.transition = "opacity 0.4s ease-out"

                    container.classList.remove('cont-btn')

                }


            }
        });
    }
}

Tabs('box-animation__box', 'box-animation__info', 'active')