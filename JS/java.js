function slide(div, h){
    if(div.style.display === 'none') {
            div.style.display = 'block';
            h.textContent = 'ᐱ'
    }
    else{
        div.style.display = 'none';
        h.textContent = 'ᐯ'
    }
}

let currTheme
window.onload= function (){
    currTheme=localStorage.getItem("curent");
    change(currTheme);
}


function change(theme){
    localStorage.setItem("curent",theme);

    let colorb = 'white'
    let colorf = 'black'
    switch(theme) {
        case 'sepia': {
            colorb = "burlywood";
            colorf = "black"
            break;
        }
        case 'black': {
        colorb = 'black'
            colorf='white'

            break;
        }
    }
    document.body.style.backgroundColor = colorb;
    document.body.style.color = colorf;
}

let scrollToTopBtn = document.getElementById("TopBtn")
let rootElement = document.documentElement

scrollToTopBtn.addEventListener("click", scrollToTop)
function scrollToTop() {
    rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
    })
}