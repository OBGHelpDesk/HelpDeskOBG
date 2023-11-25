document.addEventListener("DOMContentLoaded", function() {
    let swaButton = document.getElementById("swaClick")
    let pogButton = document.getElementById("pogClick")
    let posButton = document.getElementById("posClick")
    let prgButton = document.getElementById("prgClick")

    const findInput = document.getElementById("findInput")
    let parametr = "";

    let swaOkruhy = document.getElementById("swaChoose")
    let pogOkruhy = document.getElementById("pogChoose")
    let posOkruhy = document.getElementById("posChoose")
    let prgOkruhy = document.getElementById("prgChoose")

    swaButton.addEventListener("click", function() {
        if (swaOkruhy.style.display == "block")
        {
            swaOkruhy.style.display = "none";
        }
        else
        {
            swaOkruhy.style.display = "block";
            parametr = "swaOtazky";
        }
        pogOkruhy.style.display = "none";
        posOkruhy.style.display = "none";
        prgOkruhy.style.display = "none";
    });

    pogButton.addEventListener("click", function() {
        if (pogOkruhy.style.display == "block")
        {
            pogOkruhy.style.display = "none";
        }
        else
        {
            pogOkruhy.style.display = "block";
            parametr = "pogOtazky";
        }
        swaOkruhy.style.display = "none";
        posOkruhy.style.display = "none";
        prgOkruhy.style.display = "none";
    });
    
    posButton.addEventListener("click", function() {
        if (posOkruhy.style.display == "block")
        {
            posOkruhy.style.display = "none";
        }
        else
        {
            posOkruhy.style.display = "block";
            parametr = "posOtazky";
        }
        swaOkruhy.style.display = "none";
        pogOkruhy.style.display = "none";
        prgOkruhy.style.display = "none";
    });

    prgButton.addEventListener("click", function() {
        if (prgOkruhy.style.display == "block")
        {
            prgOkruhy.style.display = "none";
        }
        else
        {
            prgOkruhy.style.display = "block";
            parametr = "prgOtazky";
        }
        swaOkruhy.style.display = "none";
        pogOkruhy.style.display = "none";
        posOkruhy.style.display = "none";
    });

    findInput.addEventListener("keyup", function() {
        Find();
    });

    function Find()
    {
        let filter, li, p, i, txtValue;
        const input = document.getElementById("findInput");
        filter = input.value.toUpperCase();
        const ul = document.getElementById(parametr);
        li = ul.getElementsByTagName("li");

        for (i = 0; i < li.length; i++){
            p = li[i].getElementsByTagName("p")[0];
            txtValue = p.textContent || p.innerText;
            if(txtValue.toUpperCase().indexOf(filter) > -1){
                li[i].style.display = "block";
            }else{
                li[i].style.display = "none";
            }
        }
    }
});

