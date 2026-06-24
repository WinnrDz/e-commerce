import './bootstrap';
import.meta.glob([
    '../fonts/**',
]);

window.leftArrow = function () {
    
}



window.rightArrow = async function () {
    const parent = document.getElementById("customersParent");
    const children = Array.from(parent.children);

    const first = parent.firstElementChild
    const last = parent.lastElementChild
    
    children.forEach((v,i) => {
        if (i == 0) v.classList.remove("blur-[1.75px]"); 
        if (i == 3) v.classList.add("transition-transform","duration-300","ease-in-out", "blur-[1.75px]"); 
        if (i != 4) {
        v.classList.add("transition-transform","duration-300","ease-in-out");
        v.style.transform = v.style.transform + `translatex(106%)`;
        } else {
            v.classList.add("transition-transform","duration-300","ease-in-out" , "blur-[1.75px]");
            v.style.transform = `translatex(-425%)`;
        }
    })
    
    await new Promise(r => setTimeout(r, 300));

    parent.insertBefore(last, first);
    
    children.forEach((v,i) => {
        v.classList.remove("transition-transform","duration-300","ease-in-out");
        v.style.transform = "";
    })


    
}