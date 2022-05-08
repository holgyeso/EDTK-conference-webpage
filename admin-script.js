
let section =  document.getElementById("section-choose");
console.log(section)

section.addEventListener("change", function() {

    option = section.value;
    console.log(option);

    let papers = document.querySelectorAll(".papers-container-per-section");

    if (option == "Default") {
        
        document.getElementById("header").style.display = "none";

        papers.forEach(paper => {
            paper.style.display = "none";
        });
    
    }
    else {

        document.getElementById("header").style.display = "grid";

        papers.forEach(paper => {
            console.log(paper.id);
            if (paper.id == option) {
                paper.style.display = "grid";
            }
            else {
                paper.style.display = "none";
            }
        });
    }  

});