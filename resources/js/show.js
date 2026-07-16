import "./bootstrap";
import.meta.glob(["../fonts/**"]);


/*---------------------------------------------------------------------------------------------------------------------------------------*/

const previewCont = document.getElementById("previewCont");


const previewArray = Array.from(previewCont.children);
const previewImage = document.getElementById("previewImage");

window.preview = function (num) {
    for (let i = 0; i < 3; i++) {
        previewArray[i].classList.remove("border", "black");
    }
    previewArray[num].classList.add("border", "black");

    previewImage.src = previewArray[num].firstElementChild.src;
    zoomedImage.src = previewArray[num].firstElementChild.src;
};

/*---------------------------------------------------------------------------------------------------------------------------------------*/

const zoomable = document.getElementById("zoomable");
const square = document.getElementById("square");
const zoomed = document.getElementById("zoomed");
const buyContent = document.getElementById("buyContent");
const zoomedImage = document.getElementById("zoomedImage");

zoomable.addEventListener("mousemove", (e) => {
    square.classList.remove("hidden");
    square.classList.add("block");

    zoomed.classList.add("block");
    zoomed.classList.remove("hidden");

    buyContent.classList.add("hidden");

    const rect = zoomable.getBoundingClientRect();

    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const left = Math.max(0, Math.min(210, x - 120));
    const top = Math.max(0, Math.min(280, y - 140));

    square.style.left = `${left}px`;
    square.style.top = `${top}px`;

    let invLeft = -(left - 210);
    let infTop = -(top - 280);

    zoomedImage.style.left = `${invLeft}px`;
    zoomedImage.style.top = `${infTop}px`;

    console.log(left, top);
});

zoomable.addEventListener("mouseleave", () => {
    square.classList.remove("block");
    square.classList.add("hidden");

    zoomed.classList.add("hidden");
    zoomed.classList.remove("block");

    buyContent.classList.add("block");
    buyContent.classList.remove("hidden");
});

/*---------------------------------------------------------------------------------------------------------------------------------------*/

const detailBtnsCont = document.getElementById("detailBtnsCont");
const detailBtnsArray = Array.from(detailBtnsCont.children);

const sizeBtnsCont = document.getElementById("sizeBtnsCont");
const sizeBtnsArray = Array.from(sizeBtnsCont.children);


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
    


/*------------------------------------------------------------------------------------------------------------------------------------------------*/
