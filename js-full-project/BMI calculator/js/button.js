
const buttons = document.querySelectorAll('.bt01');

buttons.forEach(btn => {
    btn.addEventListener('click', function () {

        // sab buttons ko reset karo
        buttons.forEach(b => {
            b.classList.remove('bt01');
            b.style.backgroundColor = "transparent";   
            b.style.outline = "none";      
        });
        this.classList.add('bt01');
        this.style.backgroundColor = "lightcyan";  
        this.style.outline = "none";  
    });
});
const button2 = document.querySelectorAll('.bt02');

button2.forEach(btn => {
    btn.addEventListener('click', function () {

        // sab buttons ko reset karo
        button2.forEach(b => {
            b.classList.remove('bt02');
            b.style.backgroundColor = "transparent";   
            b.style.outline = "none";      
        });
        this.classList.add('bt02');
        this.style.backgroundColor = "lightcyan";  
        this.style.outline = "none";  
    });
});
