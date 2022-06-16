
let txtSearch = document.querySelector('#searcher')
let app = document.querySelector('#app')
let formSearch = document.querySelector('#searchForm') 


const promise = (query) => {
    return new Promise((resolve, reject) => {
        fetch('http://192.168.1.67/vmcorrea/public/api/control/users/search', {
            method: "POST",
            headers: {
                "Content-type" : "application/json; charset=utf-8"
            },
            body: JSON.stringify({
                searcher: `${query}`
            })
        }).then((response) => {
            if(response.ok){
                return response.json()
            }
            reject(`No se ha podido recuperar la información ${response.status}`)
        }).then((json) => resolve(json))
        .catch((error) => reject(error));
    })
}


txtSearch.onkeyup = async( e ) => {
    e.preventDefault()
    let loader = `
        <div class="d-flex justify-content-center">
            <img  src="../assets/icons/loader.gif" alt="Loading..." width="80">
        </div>
        <div class="d-flex justify-content-center">
            <span class="text-blue">Buscando, un momento...</span>
        </div>
    `
    app.innerHTML = loader
    const search = await promise(e.target.value)
    const { data } = search
    let html = 
    `
    <div class="mt-4 m-3 alert custom-alert alert-dismissible fade show border-blue" role="alert">        
        <div class="card" style="width: 100%;">
            <div class="card-header bg-blue text-white">
                Resultados de la busqueda
            </div>
            <div class="list-group">`
                data.forEach( (iterator) => {
                    if(iterator != 0){
                        const { id, name, lastname_d, lastname_m, department, profile_avatar } = iterator
                        html += `
                        <a href="${window.location}/${id}" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col-auto p-2">
                                    <img src='../assets/profiles/${profile_avatar}' class='rounded' width='70'>
                                </div>
                                <div class="col-auto p-2">
                                    <p class="mb-1">${name} ${lastname_d} ${lastname_m}</p>
                                    <small class="text-muted">${department}</small>
                                </div>
                            </div>
                        </a>`
                    }else{
                        html += `<div class="list-group-item">La busqueda no tuvo resultado</div>`
                    }
                    })
        html += `</div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert">
        </button>
    </div>`
    app.innerHTML = html
}





