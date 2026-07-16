import "./bootstrap";
import.meta.glob(["../fonts/**"]);

if (document.getElementById('welcome')) {
    import('./welcome.js');
}

if (document.getElementById('show')) {
    import('./show.js');
}

if (document.getElementById('shop')) {
    import('./shop.js');
}