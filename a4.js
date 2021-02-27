window.addEventListener("load", init);

function init()
{
    var b = document.getElementById("background");
    b.addEventListener("click", u_bc);
    
    var c = document.getElementById("counter");
    c.addEventListener("click", uc);
    
    var backc = 0;
    function u_bc(){
        if(backc == 0)
        {
            document.body.style.backgroundColor = "#000";
            backc = 1;
        }

        else if(backc == 1)
        {
            document.body.style.backgroundColor = "#FFF";
            backc = 0;
        }
    }

    var c = 0;
    function uc(){
        this.innerHTML = "<p>Count =" + c + ".</p>";
        ++c;        
    }

    

}