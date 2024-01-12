document.addEventListener("DOMContentLoaded", function() {
    const swaButton = document.getElementById("swaClick")
    const pogButton = document.getElementById("pogClick")
    const posButton = document.getElementById("posClick")
    const prgButton = document.getElementById("prgClick")

    const predmetyButton = document.getElementById("predmetyClick")

    const findInput = document.getElementById("findInput")
    let parametr = "";

    const swaOkruhy = document.getElementById("swaChoose")
    const pogOkruhy = document.getElementById("pogChoose")
    const posOkruhy = document.getElementById("posChoose")
    const prgOkruhy = document.getElementById("prgChoose")

    // Get all elements with the class "tag"
    const tags = document.querySelectorAll('.tag');

    // Add event listeners to each tag
    tags.forEach(tag => {
    // Add hover effect
        tag.addEventListener('mouseover', () => {
            tag.classList.add('highlight');
        });

        // Remove hover effect
        tag.addEventListener('mouseout', () => {
            tag.classList.remove('highlight');
        });

        // Add click effect
        tag.addEventListener('click', (event) => {
            // Toggle the "clicked" class to remember the state
            tags.forEach(tag => {
                if(!event.target.classList.contains("clicked")){
                    tag.classList.remove("clicked");
                    tag.classList.remove("highlight");
                }
            })
            tag.classList.toggle('clicked');
        });

    });

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
        let filter, li, a, i, txtValue;
        const input = document.getElementById("findInput");
        filter = input.value.toUpperCase();
        const ul = document.getElementById(parametr);
        li = ul.getElementsByTagName("li");

        for (i = 0; i < li.length; i++){
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if(txtValue.toUpperCase().indexOf(filter) > -1){
                li[i].style.display = "block";
            }else{
                li[i].style.display = "none";
            }
        }
    }

    const input = document.getElementById("findInput");
    input.addEventListener("keypress", function(event){
        if(event.key === "Enter"){
            event.preventDefault();
        }
    });

    /*document.addEventListener("mouseover", () => {
        
    })*/

    

    WidthResize();

    function WidthResize()
    {
        let pole = document.getElementById("pole");
        let body = document.body;
        let html = document.documentElement;
        let height = Math.max(body.getBoundingClientRect().height,html.getBoundingClientRect().height) - 89;

        let levacast = document.querySelector(".levaCast");
        let levaHeight = levacast.offsetHeight;


        pole.style.height = levaHeight +"px";
        /*console.log(levaHeight);
        console.log("resized");*/
    }

    window.onresize = WidthResize;

});

