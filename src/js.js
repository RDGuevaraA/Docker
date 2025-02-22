
function show(){
    const pasword = document.querySelector('.contra')

    if(pasword.type === "password"){
        pasword.type = "text"

    }else{
        pasword.type = "password"
    }
}


        function lanzarConfeti() {
            confetti({
                particleCount: 200,
                spread: 100,
                origin: { y: 0.6 }
            });
        }


