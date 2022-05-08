//VALIDÁLÁS - KAPCSOLAT FORM

document.querySelector("#contactForm").addEventListener("submit", function(event){
    event.preventDefault();
    
    for (let elem of this.elements) {
        if (elem.type != 'submit') {
            console.log(elem.value);
        }
    }
});