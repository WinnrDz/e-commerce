import "./bootstrap";
import.meta.glob(["../fonts/**"]);

window.leftArrow = async function () {
    const parent = document.getElementById("customersParent");
    const children = Array.from(parent.children);

    const first = parent.firstElementChild;
    const last = parent.lastElementChild;

    children.forEach((v, i) => {
        if (i == 4) v.classList.remove("blur-[1.75px]");
        if (i == 1)
            v.classList.add(
                "transition-transform",
                "duration-300",
                "ease-in-out",
                "blur-[1.75px]",
            );
        if (i != 0) {
            v.classList.add(
                "transition-transform",
                "duration-300",
                "ease-in-out",
            );
            v.style.transform = v.style.transform + `translatex(-106%)`;
        } else {
            v.classList.add(
                "transition-transform",
                "duration-300",
                "ease-in-out",
                "blur-[1.75px]",
            );
            v.style.transform = `translatex(425%)`;
        }
    });

    await new Promise((r) => setTimeout(r, 300));

    parent.insertBefore(first, last.nextSibling);

    children.forEach((v, i) => {
        v.classList.remove(
            "transition-transform",
            "duration-300",
            "ease-in-out",
        );
        v.style.transform = "";
    });
};

window.rightArrow = async function () {
    const parent = document.getElementById("customersParent");
    const children = Array.from(parent.children);

    const first = parent.firstElementChild;
    const last = parent.lastElementChild;

    children.forEach((v, i) => {
        if (i == 0) v.classList.remove("blur-[1.75px]");
        if (i == 3)
            v.classList.add(
                "transition-transform",
                "duration-300",
                "ease-in-out",
                "blur-[1.75px]",
            );
        if (i != 4) {
            v.classList.add(
                "transition-transform",
                "duration-300",
                "ease-in-out",
            );
            v.style.transform = v.style.transform + `translatex(106%)`;
        } else {
            v.classList.add(
                "transition-transform",
                "duration-300",
                "ease-in-out",
                "blur-[1.75px]",
            );
            v.style.transform = `translatex(-425%)`;
        }
    });

    await new Promise((r) => setTimeout(r, 300));

    parent.insertBefore(last, first);

    children.forEach((v, i) => {
        v.classList.remove(
            "transition-transform",
            "duration-300",
            "ease-in-out",
        );
        v.style.transform = "";
    });
};

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

const btnCont = document.getElementById("btnCont");
const btnsArray = Array.from(btnCont.children);

const selectBtn = function (num) {
    for (let i = 0; i < 3; i++) {
        btnsArray[i].classList.remove("font-satoshim");
        btnsArray[i].classList.add("opacity-60", "border-black/10");
    }
    btnsArray[num].classList.remove("border-black/10", "opacity-60");
    btnsArray[num].classList.add("font-satoshim");
};

/*----------------------------------------------------------------------------------------------------------------------------------------------------*/



/*ripple effect*/

let running = false;


    for (let i = 0; i < 3; i++) {
        

        /*create the circle*/
        const circle = document.createElement("div");
        circle.classList.add("absolute");

        let size = 10;

        circle.style.width = `${size}px`;
        circle.style.height = `${size}px`;

        circle.style.borderRadius = "50%";
        circle.style.backgroundColor = "rgba(0, 0, 0, 0.08)";
        circle.style.pointerEvents = "none";
        circle.style.opacity = "60%";



        btnsArray[i].addEventListener("mousemove", (e) => {
            const x = e.offsetX;
            const y = e.offsetY;

            console.log(x, y);

        window.clicked = function (num) {
            selectBtn(num);
            if (!running) {
                running = true;
                btnsArray[i].appendChild(circle);

                circle.style.left = `${x - size / 2}px`;
                circle.style.top = `${y - size / 2}px`;

                const rippleAnim = circle.animate(
                    [
                        {
                            width: `${size}px`,
                            height: `${size}px`,
                        },
                        {
                            width: "1000px",
                            height: "1000px",
                            left: `${x - 1000 / 2}px`,
                            top: `${y - 1000 / 2}px`,
                            opacity: "0%",
                        },
                    ],
                    {
                        duration: 500,
                        easing: "ease-in-out",
                        fill: "none",
                        //iterations: ...
                    },
                );
                rippleAnim.finished.then(() => {
                    running = false;
                    circle.remove();
                });
            }
        };
    })
    };
