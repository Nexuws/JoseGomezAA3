function suma() {
    let cant1 = document.getElementById('caja1').value;
    let cant2 = document.getElementById('caja2').value;

    if (cant1 == '' && cant2 == '') {
        alert("No ha ingresado Datos");
    }
    if (cant1 != '' && cant2 != '') {
        let r = parseFloat(cant1) + parseFloat(cant2);
        alert("Resultado: " + r);
    }
}

function resta() {
    let cant1 = document.getElementById('caja1').value;
    let cant2 = document.getElementById('caja2').value;

    if (cant1 == '' && cant2 == '') {
        alert("No ha ingresado Datos");
    }
    if (cant1 != '' && cant2 != '') {
        let r = parseFloat(cant1) - parseFloat(cant2);
        alert("Resultado: " + r);
    }
}

function multiplicacion() {
    let cant1 = document.getElementById('caja1').value;
    let cant2 = document.getElementById('caja2').value;

    if (cant1 == '' && cant2 == '') {
        alert("No ha ingresado Datos");
    }
    if (cant1 != '' && cant2 != '') {
        let r = parseFloat(cant1) * parseFloat(cant2);
        alert("Resultado: " + r);
    }
}

function division() {
    let cant1 = document.getElementById('caja1').value;
    let cant2 = document.getElementById('caja2').value;

    if (cant1 == '' && cant2 == '') {
        alert("No ha ingresado Datos");
    }
    if (cant1 != '' && cant2 != '') {
        let r = parseFloat(cant1) / parseFloat(cant2);
        alert("Resultado: " + r);
    }
}