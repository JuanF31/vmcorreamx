let more = document.querySelectorAll('#btn_more')

more.forEach(btn => btn.onclick = ( e ) => {
    e.preventDefault()
    const ad = document.querySelector(`#card-ad-${e.target.dataset.id}`)
    console.log(ad.children[0].src)
    console.log(ad.children[1].children[0].textContent)
    console.log(ad.children[1].children[1].textContent)
    console.log(ad.children[1].children[1].dataset.image)
    console.log(ad.children[1].children[2].textContent)
    console.log(ad.children[1].children[3].textContent)
})