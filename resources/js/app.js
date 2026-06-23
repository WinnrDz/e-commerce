import './bootstrap';
import.meta.glob([
    '../fonts/**',
]);

window.leftArrow = function () {
    
}



window.rightArrow = function () {
    const parent = document.getElementById("customersParent");
    const children = Array.from(parent.children);

    const last = parent.lastElementChild;
    const first = parent.firstElementChild;

    parent.insertBefore(last, first);
    
    
    children.forEach((v,i) => {
        v.style.transform = v.style.transform + `translatex(520px)`;
    })
    


    
}