


document.querySelector("#loginForm").addEventListener("submit", function(event){
    
    // event.preventDefault();

    let ok = true;

    let elemek = [];
    for (let elem of this.elements) {
        if (elem.type != 'submit') {
            console.log(elem.value, elem);
            elemek.push(elem);
        }
    }


    //jelszó ellenőrzés
    var mediumRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
    if (!(mediumRegex.test(elemek[4].value))) {
        alert("A jelszó legalább 8 karakter kell legyen és kell tartalmazzon egy kisbetűt, egy nagybetűt és egy szám karaktert.");
        ok = false;
    }

    // a jelszó megegyezik-e
    else if (elemek[4].value != elemek[5].value) {
        alert("A két jelszó nem egyezik meg");
        ok = false;
    }

    //ha előadó akkor tényleg választott szekciót
    else if (elemek[0].checked && elemek[11].value == 'Default') {
        alert("Kérjük válaszd ki a szekciót amelyben szeretnél bemutatni!");
        ok = false;
    }

    if (!ok) {
        event.preventDefault();
    }

    return ok;
});


document.querySelector("#role").addEventListener("change", function(){

    let eloado = document.querySelector("#loginForm").querySelectorAll(".logon-form-field-presenter");

    if(this.checked) {
       
        for(let element of eloado) {
            console.log(element);
            element.style.display = "block";
        }
        
        eloado[0].required = true;
        eloado[1].required = true;
        eloado[3].required = true;
        document.getElementById("doc-container").style.display = "flex";
        document.getElementById("document").style.width = "50%";
    }
    else {
        for(let element of eloado) {
            element.style.display = "none";
            element.required = false;
         }
         document.getElementById("doc-container").style.display = "none";
    }
    
});

// window.onpopstate = function(event) {
//     if(this.checked) {
       
//         for(let element of eloado) {
//             console.log(element);
//             element.style.display = "block";
//         }
        
//         eloado[0].required = true;
//         eloado[1].required = true;
//         eloado[3].required = true;
//         document.getElementById("doc-container").style.display = "flex";
//         document.getElementById("document").style.width = "50%";
//     }
//   };

  window.addEventListener("popstate", function(){
    let eloado = this.document.querySelector("#loginForm").querySelectorAll(".logon-form-field-presenter");
    let checkbox = this.document.getElementById("role");
    if(checkbox.checked) {
       
        for(let element of eloado) {
            console.log(element);
            element.style.display = "block";
        }
        
        eloado[0].required = true;
        eloado[1].required = true;
        eloado[3].required = true;
        document.getElementById("doc-container").style.display = "flex";
        document.getElementById("document").style.width = "50%";
    }
  })