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

const slider = document.getElementById("slider");

const circle1 = document.createElement("div");

circle1.style.width = "20px";
circle1.style.opacity = "0.5";
circle1.style.left = "40px"
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
circle2.style.opacity = "0.5";
circle2.style.left = "210px"
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
const xPrice = 1;


document.addEventListener("mousemove", (e) => {
    const rect = slider.getBoundingClientRect();
    const x = e.clientX - rect.left;

    const left1 = Math.max(-10,Math.min(x,circle2.offsetLeft - 20));
    const left2 = Math.max(circle1.offsetLeft + 20,Math.min(x,250));

    
    

    

    if (isDragging1) {

        circle1.style.left = left1 + "px";
        circle1.style.transform = "translate(-50%, -50%)";
        Rectangle.style.left = left1 + "px";
        
        
        document.body.style.userSelect = "none";
        
        minPrice.style.left = left1 + 'px';
        minPrice.innerHTML = (circle1.offsetLeft + 10) * xPrice + "$";
    }

    if (isDragging2) {
        maxPrice.style.left = left2 + 'px';

        circle2.style.left = left2 + "px";
        circle2.style.transform = "translate(-50%, -50%)";

        document.body.style.userSelect = "none";

        maxPrice.style.left = left2 + 'px';
        maxPrice.innerHTML = (circle2.offsetLeft - 10) * xPrice + "$";
    }

    const width = circle2.offsetLeft - circle1.offsetLeft;
    Rectangle.style.width = width + "px";

    
});

document.addEventListener("mouseup", () => {
    isDragging2 = false;
    isDragging1 = false;
    
    document.body.style.userSelect = "auto";
});