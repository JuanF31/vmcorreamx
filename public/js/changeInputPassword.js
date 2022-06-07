let btnPassword = document.querySelector('#btnPassword')
let cambio = document.querySelector('#password')
let iconPassword = document.querySelector('#iconPassword')

btnPassword.onclick = ( e ) => {
    e.preventDefault()
    if(cambio.type == 'password'){
        cambio.type = 'text'
        iconPassword.classList.remove('fa-eye')
        iconPassword.classList.add('fa-eye-slash')
    }else{
        cambio.type = 'password'
        iconPassword.classList.remove('fa-eye-slash')
        iconPassword.classList.add('fa-eye')
    }
}