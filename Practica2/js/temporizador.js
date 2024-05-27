function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    var interval = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            clearInterval(interval);
            // Aquí puedes colocar la acción a realizar cuando el tiempo se agote
            alert("El tiempo se ha agotado");
            // Ejemplo de acción: ejecutar una función
            realizarAccion();
        }
    }, 1000);
}

function realizarAccion() {
    console.log("Ejecutando acción al finalizar el temporizador");
    window.location.href = 'forgetPass.php'; 
}

window.onload = function () {
    var threeMinutes = 60 * 3, // 3 minutos en segundos
        display = document.querySelector('#time');
    startTimer(threeMinutes, display);
};