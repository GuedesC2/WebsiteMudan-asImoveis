window.onload = function (){
    const Login = document.getElementById('login');
    const modal = document.getElementById('dialog');
    const btnFecharLogin = document.getElementById('btn-login-fechar');
    
    
    Login.onclick = function (){
        modal.showModal();
        
    }
    
    btnFecharLogin.onclick = function (){
        modal.close();   
    } 
}