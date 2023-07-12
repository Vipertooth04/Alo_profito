function showProfe(btn){
    let query_profe = '#profe-' + btn.getAttribute("profe_id");
    console.log(query_profe);
    let profe_objeto = document.querySelector(query_profe);
    // let description = profe_objeto.querySelector('.description');
    document.querySelector('#mostrar').innerText = profe_objeto.innerText;
}

console.log("Mensaje en la consola");