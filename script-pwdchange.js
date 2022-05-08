if (document.querySelector("#pwdChangeForm")) {

document.querySelector("#pwdChangeForm").addEventListener("submit", function(event){

    let ok = true;

    let elemek = [];
    for (let elem of this.elements) {
        if (elem.type != 'submit') {
            console.log(elem.value);
            elemek.push(elem);
        }
    }

        //jelszó ellenőrzés
        var mediumRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
        if (!(mediumRegex.test(elemek[2].value))) {
            alert("A jelszó legalább 8 karakter kell legyen és kell tartalmazzon egy kisbetűt, egy nagybetűt és egy szám karaktert.");
            ok = false;
        }
    
        // a jelszó megegyezik-e
        else if (elemek[1].value != elemek[2].value) {
            alert("A két jelszó nem egyezik meg");
            ok = false;
        }

        
        if (!ok) {
            event.preventDefault();
        }

        return ok;

});
}

if (document.querySelector("#pwd-forgotten")) {

    document.querySelector("#pwd-forgotten").addEventListener("submit", function(event){

        let ok = true;

        let pwd1 = document.querySelector("#pwd1");
        let pwd2 = document.querySelector("#pwd2");

        console.log(pwd1);
        console.log(pwd2);

        var mediumRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
        if (!(mediumRegex.test(pwd1.value))) {
            alert("A jelszó legalább 8 karakter kell legyen és kell tartalmazzon egy kisbetűt, egy nagybetűt és egy szám karaktert.");
            ok = false;
        }

        // a jelszó megegyezik-e
        else if (pwd1.value != pwd2.value) {
            alert("A két jelszó nem egyezik meg");
            ok = false;
        }


        if (!ok) {
            event.preventDefault();
        }

        return ok;


    });
}