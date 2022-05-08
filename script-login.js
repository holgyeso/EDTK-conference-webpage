document.querySelector("#loginForm").addEventListener("submit", function(event){
    let ok = true;
    
    for (let elem of this.elements) {
        if (elem.type != 'submit') {
            console.log(elem.value);
        }
    }

    if (!ok) {
        event.preventDefault();
    }

    return ok;
});
