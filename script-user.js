document.querySelectorAll('.docs-doc').forEach(function (card) {
    
    // console.log(card.children[0]);
    var section = card.children[0];

    section.addEventListener('click', function(parentSection) {
        //this.classList.toggle('active');
        document.querySelectorAll('.docs-doc').forEach(function (c){
            if (c == parentSection.target.parentNode) {
                for (var child of c.children) {
                    console.log(child);
                    child.classList.toggle('active');
                }
            }
        });

    });    
});

if (document.querySelector("#logonForm")) {

document.querySelector("#logonForm").addEventListener("submit", function(event){

    let ok = true;
    // tényleg választott szekciót
    let dropdown = document.querySelector("#section");

    if (dropdown.value == 'Default') {
        alert("Kérjük válaszd ki a szekciót amelyben szeretnél bemutatni!");
        ok = false;
    }

    if (!ok) event.preventDefault();

    return ok;
});
}

if (document.querySelector("#newSectionForm")) {
    document.querySelector("#newSectionForm").addEventListener("submit", function(event){

        let ok = true;
        // tényleg választott admint
        let adminlist = document.querySelector("#section-admin");

        if(adminlist.value == 'Default') {
            alert("Kérjük válaszd ki a szekció vezetőjét!");
            ok = false;
        }

        if (!ok) event.preventDefault();

        return ok;
    });
}
