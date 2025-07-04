window.onload = function () {
    var btn_cadastrar = document.getElementById('bnt-cadastrarImovel');
    var divForm = document.getElementById('conteudo');

    btn_cadastrar.onclick = function () {
        if (divForm.style.display === "none") {
            divForm.style.display = 'block';
            btn_cadastrar.style.display = 'none';
        } else {
            divForm.style.display = 'none';
            
        }      
    }

    
}