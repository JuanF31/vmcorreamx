let txtSearch = document.querySelector('#searcher')
let app = document.querySelector('#app')
let formSearch = document.querySelector('#searchForm')

const search = (query) => {
    fetch('http://192.168.1.67/vmcorrea/public/api/control/users/search', {
        method: 'POST',
        body: query
    })
        .then(response => response.json())
        .then(data => {
            let html = 
            `
            <div class="mt-4 m-3 alert alert-dismissible fade show border-blue" role="alert">        
                <div class="card" style="width: 100%;">
                    <div class="card-header bg-blue text-white">
                        Resultados de la busqueda
                    </div>
                    <div class="list-group">`
                        data.data.forEach(i => {
                            if(i != 0){
                                html += `
                                <a href="${window.location}/${i.id}" class="list-group-item list-group-item-action">
                                    <div class="row">
                                        <div class="col-auto p-2">
                                            <img src='../assets/profiles/${i.profile_avatar}' class='rounded' width='70'>
                                        </div>
                                        <div class="col-auto p-2">
                                            <p class="mb-1">${i.name} ${i.lastname_d} ${i.lastname_m}</p>
                                            <small class="text-muted">${i.department}</small>
                                        </div>
                                    </div>
                                </a>`
                            }else{
                                html += `<div class="list-group-item">La busqueda no tuvo resultado</div>`
                            }
                        });
                        html += `</div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert">
                </button>
            </div>`
            app.innerHTML = html
        }).catch(error => console.error(error))
}

txtSearch.onkeyup = ( e ) => {
    e.preventDefault()
    form = new FormData(searchForm)    
    search(form)
}


formSearch.onkeypress = ( e ) => {
    let tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==13) return false;
}


