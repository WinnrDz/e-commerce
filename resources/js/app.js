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


/*---------------------------------------------------------------------------------------------------------------------------------------*/

const zoomable = document.getElementById("zoomable");
const square = document.getElementById("square");


zoomable.addEventListener("mousemove", (e) => {
    square.classList.remove("hidden");
    square.classList.add("block");

/*
    const left = Math.max(535, Math.min(e.clientX - square.offsetWidth / 2, 740));
    const top = Math.max(215, Math.min(e.clientY - square.offsetHeight / 2, 500));
    */

    const rect = zoomable.getBoundingClientRect();

    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;


    

   const left = Math.max(0 ,Math.min(210 ,x - 120));
   const top = Math.max(0 ,Math.min(280 ,y - 140));
     
    square.style.left = `${left}px`;
    square.style.top = `${top}px`;


    console.log(left,top);

});

zoomable.addEventListener("mouseleave", () => {
    square.classList.remove("block");
    square.classList.add("hidden");
});

