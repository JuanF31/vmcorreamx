let modalbox = document.querySelector('#myModalbox')

let img = document.querySelectorAll('#myImg')
let modalImg = document.querySelector('#img01')
let modalPdf = document.querySelector('#pdf01')
let captionText = document.querySelector('#captionbox')


img.forEach(btn => btn.onclick = ( e ) => {
    e.preventDefault()
    modalbox.style.display = "block"
    if(e.target.dataset.type === 'image'){
        modalImg.style.display = "block"
        modalImg.src = e.target.dataset.link
        modalPdf.style.display = "none"
    }else{
        modalPdf.style.display = "block"
        modalPdf.src = e.target.dataset.link
        modalImg.style.display = "none"
    }
    captionText.innerHTML = e.target.title
})

let boxClose = document.querySelector('.closemodalbox')
boxClose.onclick = () =>{
    modalbox.style.display = "none";
}
document.onkeydown = (e) =>{
    if(e.keyCode === 27) modalbox.style.display = "none";
}