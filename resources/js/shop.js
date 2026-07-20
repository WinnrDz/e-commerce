import "./bootstrap";
import.meta.glob(["../fonts/**"]);



/*---------------------------------------------------------------------------------------------------------------------------------------*/

/*

Selectable Buttons

example of vars

const detailBtnsCont = document.getElementById("detailBtnsCont");
const detailBtnsArray = Array.from(detailBtnsCont.children);

const sizeBtnsCont = document.getElementById("sizeBtnsCont");
const sizeBtnsArray = Array.from(sizeBtnsCont.children);

*/

const setupSelectableButtons = function (btns,styles) {
    for (let activeNum = 0;activeNum < btns.length ; activeNum++) {
    btns[activeNum].addEventListener("click", (e) => {
        /*create the circle*/
        const circle = document.createElement("div");
        circle.classList.add("absolute");

        const size = 10;

        circle.style.width = `${size}px`;
        circle.style.height = `${size}px`;

        circle.style.borderRadius = "50%";
        circle.style.backgroundColor = styles.rippleColor;
        circle.style.pointerEvents = "none";
        circle.style.opacity = "0.6";

        const x = e.offsetX;
        const y = e.offsetY;
        /*style selected buttons the ... spread the array of strings*/

        for (let i = 0; i < btns.length; i++) {
        btns[i].classList.remove(...styles.active);
        btns[i].classList.add(...styles.inactive);
        }
        btns[activeNum].classList.remove(...styles.inactive);
        btns[activeNum].classList.add(...styles.active);

        btns[activeNum].appendChild(circle);

        /*position circle*/
        circle.style.left = `${x}px`;
        circle.style.top = `${y}px`;
        circle.style.transform = "translate(-50%, -50%)";

        const rippleAnim = circle.animate(
            [
                {
                    transform: "translate(-50%, -50%) scale(1)",
                    opacity: "0.4",
                },
                {
                    transform: "translate(-50%, -50%) scale(100)",
                    opacity: "0",
                },
            ],
            {
                duration: 500,
                easing: "ease-in-out",
                fill: "forwards",
            }
        );
        rippleAnim.finished.then(() => {
            circle.remove();
        });
    });
    }
};

/* example of calling the function

    setupSelectableButtons(detailBtnsArray, {
        active: ["font-satoshim"],
        inactive: ["opacity-60","border-black/10"],
        rippleColor: "rgba(0, 0, 0, 0.08)"
    });

    setupSelectableButtons(sizeBtnsArray, {
        active: ["text-white","bg-black"],
        inactive: ["text-black/60","hover:bg-[#EAEAEA]"],
        rippleColor : "rgba(255, 255, 255, 0.3)"
    });
    */


/*------------------------------------------------------------------------------------------------------------------------------------------------*/


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

slider.appendChild(circle1);

let isDragging1 = false;

circle1.addEventListener("mousedown", () => {
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

slider.appendChild(circle2);

let isDragging2 = false;

circle2.addEventListener("mousedown", () => {
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
        left2 = Math.max(circle1.offsetLeft + 20,Math.min(x,250));
    }

    

    if (minP ) {
        left1 = Math.max(0,Math.min(minP / xPrice,circle2.offsetLeft - 20)) ;
        
    }

    if (maxP ) {
        let maxPinPixels = maxP / xPrice + 20
        left2 = Math.max(circle1.offsetLeft + 20,Math.min(maxPinPixels ,250)) ;
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
        minInput.value = Number(minPrice.innerHTML.replace("$", "")) ;
        maxInput.value = Number(maxPrice.innerHTML.replace("$", "")) ;
    }
}

document.addEventListener("mousemove", (e) => {
    updateCircles(e);
});

document.addEventListener("mouseup", () => {
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