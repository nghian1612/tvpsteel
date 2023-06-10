

const div = document.querySelector('.e-n-tab-title.e-collapse');
const p = document.querySelector('.elementor-element.e-con-boxed.e-flex.e-con.e-active')

div.addEventListener('click', () => {
    const isActive = div.classList.contains('e-active');
    div.classList.toggle('e-active', !isActive);
    div.setAttribute('aria-selected', !isActive ? 'false' : 'true');
    div.setAttribute('aria-expanded', !isActive ? 'false' : 'true');
    div.setAttribute('tabindex', !isActive ? '-1' : '0');
    p.setAttribute('style',!isActive ? 'display: block;' : 'display: none;');
    if(!isActive){
        div.classList.add('e-active');
    }else{
        div.classList.remove('e-active');
    }
    

});

