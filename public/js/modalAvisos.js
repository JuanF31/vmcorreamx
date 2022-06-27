let modalboxAd = document.querySelector('#modal-ad')

let more = document.querySelectorAll('#btn_more')
let closeAd = document.querySelector('.closemodal-ad')

more.forEach(btn => btn.onclick = ( e ) => {
    e.preventDefault()
    modalboxAd.style.display = "block"
    body.classList.add('block-scroll')
    const ad = document.querySelector(`#card-ad-${e.target.dataset.id}`)
    console.log(ad.children[0].src)
    document.querySelector('#ad-title').innerHTML = ad.children[1].children[0].textContent
    document.querySelector('#ad-department-name').innerHTML = ad.children[1].children[1].textContent
    console.log(ad.children[1].children[1].dataset.image)
    console.log(ad.children[1].children[2].textContent)
    document.querySelector('#ad-content').innerHTML = ad.children[1].children[3].textContent
})

closeAd.onclick = ( e ) => {
    e.preventDefault()
    body.classList.remove('block-scroll')
    modalboxAd.style.display = "none"
}
document.onkeydown = (e) =>{
    body.classList.remove('block-scroll')
    if(e.keyCode === 27) modalboxAd.style.display = "none";
}