import "./bootstrap";
import.meta.glob(["../fonts/**"]);
import { setupSelectableButtons } from './app.js';

/*

Selectable Buttons

example of vars

const detailBtnsCont = document.getElementById("detailBtnsCont");
const detailBtnsArray = Array.from(detailBtnsCont.children);

const sizeBtnsCont = document.getElementById("sizeBtnsCont");
const sizeBtnsArray = Array.from(sizeBtnsCont.children);

example of calling the function

    setupSelectableButtons(detailBtnsArray, {
        active: ["font-satoshim"],
        inactive: ["opacity-60","border-black/10"],
        rippleColor: "rgba(0, 0, 0, 0.08)",
        ripple: true
    });

    setupSelectableButtons(sizeBtnsArray, {
        active: ["text-white","bg-black"],
        inactive: ["text-black/60","hover:bg-[#EAEAEA]"],
        rippleColor : "rgba(255, 255, 255, 0.3)",
        ripple: true
    });
    */

const sizeBtnsCont = document.getElementById("sizeBtnsCont");
const sizeBtnsArray = Array.from(sizeBtnsCont.children);



setupSelectableButtons(sizeBtnsArray, {
        active: ["text-white","bg-black"],
        inactive: ["text-black/60","hover:bg-[#EAEAEA]"],
        rippleColor : "rgba(255, 255, 255, 0.3)",
        ripple: false
    });







function isColliding(el1, el2) {
    const rect1 = el1.getBoundingClientRect();
    const rect2 = el2.getBoundingClientRect();

    return !(
        rect1.right < rect2.left ||
        rect1.left > rect2.right ||
        rect1.bottom < rect2.top ||
        rect1.top > rect2.bottom
    );
}




const slider = document.getElementById("slider");

const circle1 = document.createElement("div");

circle1.style.width = "20px";
circle1.style.left = "50px"
circle1.style.height = "20px";
circle1.style.backgroundColor = "black";
circle1.style.borderRadius = "50%";
circle1.style.cursor = "pointer";
circle1.style.position = "absolute";
circle1.style.top = "50%";
circle1.style.transform = "translate(-50%, -50%)";
circle1.style.zIndex = "3"
circle1.classList.add("touch-none");


slider.appendChild(circle1);

let isDragging1 = false;

circle1.addEventListener("pointerdown", () => {
    isDragging1 = true;
});


const circle2 = document.createElement("div");

circle2.style.width = "20px";
circle2.style.left = "220px"
circle2.style.height = "20px";
circle2.style.backgroundColor = "black";
circle2.style.borderRadius = "50%";
circle2.style.cursor = "pointer";
circle2.style.position = "absolute";
circle2.style.top = "50%";
circle2.style.transform = "translate(-50%, -50%)";
circle2.style.zIndex = "3"
circle2.classList.add("touch-none");

slider.appendChild(circle2);

let isDragging2 = false;

circle2.addEventListener("pointerdown", () => {
    isDragging2 = true;
});


const Rectangle = document.createElement("div");

Rectangle.style.height = "6px";
Rectangle.style.backgroundColor = "black";
Rectangle.style.position = "absolute";
Rectangle.style.top = "50%";
Rectangle.style.transform = "translateY(-50%)";
Rectangle.style.width = circle2.offsetLeft - circle1.offsetLeft + "px";
Rectangle.style.left = circle1.offsetLeft + "px";
Rectangle.style.zIndex = "0"
Rectangle.style.userSelect = "none";

slider.appendChild(Rectangle);


const minPrice = document.getElementById("minPrice");
const maxPrice = document.getElementById("maxPrice");
const xPrice = 2;
const collisionPrice = document.getElementById("collisionPrice");
const maxInput = document.getElementById("maxInput");
const minInput = document.getElementById("minInput");


function updateCircles(e,minP,maxP,inputElement) {
    let left1 ;
    let left2;
    let rect ;
    let x ;

    if (e) {
        rect = slider.getBoundingClientRect();
        x = e.clientX - rect.left;

        left1 = Math.max(0,Math.min(x,circle2.offsetLeft - 20));
        left2 = Math.max(circle1.offsetLeft + 20,Math.min(x,270));
    }

    

    if (minP ) {
        left1 = Math.max(0,Math.min(minP / xPrice,circle2.offsetLeft - 20)) ;
        
    }

    if (maxP ) {
        let maxPinPixels = maxP / xPrice + 20
        left2 = Math.max(circle1.offsetLeft + 20,Math.min(maxPinPixels ,270)) ;
    }

    if (isDragging1 || minP) {
            

            circle1.style.left = left1 + "px";
            circle1.style.transform = "translate(-50%, -50%)";
            Rectangle.style.left = left1 + "px";
            
            
            document.body.style.userSelect = "none";
            
            minPrice.style.left = left1 + 'px';
            if (minP) {
                minPrice.innerHTML = minP + "$";
            }else {
                minPrice.innerHTML = (circle1.offsetLeft) * xPrice + "$";
            }
            
        
    }

    if (isDragging2 || maxP) {


        circle2.style.left = left2 + "px";
        circle2.style.transform = "translate(-50%, -50%)";

        document.body.style.userSelect = "none";

        maxPrice.style.left = left2 + 'px';

        if (maxP) {
                maxPrice.innerHTML = maxP  + "$";
            }else {
                maxPrice.innerHTML = (circle2.offsetLeft - 20) * xPrice + "$";
            }
    }

    

    const width = circle2.offsetLeft - circle1.offsetLeft;
    Rectangle.style.width = width + "px";

    if (isDragging1 || isDragging2 || minP || maxP) {
        if (isColliding(maxPrice,minPrice) || minPrice.innerHTML == maxPrice.innerHTML) {
            maxPrice.style.visibility = "hidden";
            minPrice.style.visibility = "hidden";
            
            collisionPrice.style.display = "inline";
            collisionPrice.style.left = circle1.offsetLeft + width / 2 + 'px';

            collisionPrice.innerHTML = minPrice.innerHTML + " - " + maxPrice.innerHTML;
            if (minPrice.innerHTML == maxPrice.innerHTML) { 
                collisionPrice.innerHTML = minPrice.innerHTML;   
            }

        } else {
            maxPrice.style.visibility = "";
            minPrice.style.visibility = "";
            collisionPrice.style.display = "none";
        }

        if (!inputElement) {
            minInput.value = Number(minPrice.innerHTML.replace("$", "")) ;
            minInput.dispatchEvent(new Event('input', { bubbles: true }));
            maxInput.value = Number(maxPrice.innerHTML.replace("$", "")) ;
            maxInput.dispatchEvent(new Event('input', { bubbles: true }));
        }
    }
}

document.addEventListener("pointermove", (e) => {
    updateCircles(e);
});

document.addEventListener("pointerup", () => {
    isDragging2 = false;
    isDragging1 = false;
    
    document.body.style.userSelect = "auto";
});


minInput.addEventListener("input", () => {
    if (!isDragging1) updateCircles(null,minInput.value,null,minInput);
});

maxInput.addEventListener("input", () => {
    if (!isDragging2) updateCircles(null,null,maxInput.value,maxInput);
});







/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/


const filtersBtn = document.getElementById("filtersBtn");
const filters = document.getElementById("filters");
const burgerSvg = document.getElementById("burgerSvg");
const xSvg = document.getElementById("xSvg");

filtersBtn.addEventListener("click", () => {
        filters.classList.add(
            "fixed",
            "top-15",
            "left-0",
            "w-full",
            "h-screen",
            "max-w-sm",
            "z-50",
            "bg-white"
        );
        filters.classList.remove(
            "hidden",
        );

        burgerSvg.classList.add("hidden");
        xSvg.classList.remove("hidden");
})


xSvg.addEventListener("click", () => {
        filters.classList.remove(
            "fixed",
            "top-15",
            "left-0",
            "w-full",
            "h-screen",
            "max-w-sm",
            "z-50",
            "bg-white"
        );
        filters.classList.add(
            "hidden",
        );

        burgerSvg.classList.remove("hidden");
        xSvg.classList.add("hidden");
})
