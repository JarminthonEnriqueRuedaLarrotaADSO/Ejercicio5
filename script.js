const input = document.getElementById('nombre')
const form = document.getElementById('form')
const btnEnviar =document.getElementById('enviar');
const checkBoxes = document.getElementsByName('genero')

const soloLetras = (e) => {
    //consoLe.log(e)
    const key = e.keyCode || e.which;
    const tecla = String.fromCharCode(key).toLowerCase(); 
    const letras = "áéíóúabcdefghijklmnnopqrstuvwxyz"; 
    const especiales = ['8', '32', '37', '39', '46'];
    let tecla_especial = false

    for (const i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        e.preventDefault()
    }
}
const enviarFormulario = form => {
    form.submit()
}
    const validacion = (e) => {
        e.preventDefault();
        if (input.value == null || input.value == '') {
            alert('Ingrese un nombre');
            return
        }
        let checkeado = false;
        for (var i = 0; i < checkBoxes.length; i++) {
            if (checkBoxes[i].checked) {
                checkeado = true;
                console.log(checkeado);
                break;
            }
        }    
        if (!checkeado) {
            alert('Seleccione al menos un género');
            return
        }    
        enviarFormulario(form);
    };    
input.addEventListener('keypress',soloLetras);
btnEnviar.addEventListener('click',validacion)