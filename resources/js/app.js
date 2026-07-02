import './bootstrap';
import.meta.glob([
    '../fonts/**',
]);

window.leftArrow = async function () {
   const parent = document.getElementById("customersParent");
    const children = Array.from(parent.children);

    const first = parent.firstElementChild
    const last = parent.lastElementChild
    
    children.forEach((v,i) => {
        if (i == 4) v.classList.remove("blur-[1.75px]"); 
        if (i == 1) v.classList.add("transition-transform","duration-300","ease-in-out", "blur-[1.75px]"); 
        if (i != 0) {
        v.classList.add("transition-transform","duration-300","ease-in-out");
        v.style.transform = v.style.transform + `translatex(-106%)`;
        } else {
            v.classList.add("transition-transform","duration-300","ease-in-out" , "blur-[1.75px]");
            v.style.transform = `translatex(425%)`;
        }
    })
    
    await new Promise(r => setTimeout(r, 300));

    parent.insertBefore(first, last.nextSibling);
    
    children.forEach((v,i) => {
        v.classList.remove("transition-transform","duration-300","ease-in-out");
        v.style.transform = "";
    })


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

/*---------------------------------------------------------------------------------------------------------------------------------------*/


const previewCont = document.getElementById("previewCont");
const previewArray = Array.from(previewCont.children);
const previewImage = document.getElementById("previewImage");

window.preview = function (num) {
    for (let i = 0; i < 3; i++) {
        previewArray[i].classList.remove("border" ,"black");
    }
    previewArray[num].classList.add("border" ,"black");

    console.log(previewArray[num].firstElementChild.src);

    previewImage.src = previewArray[num].firstElementChild.src
}