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
            app.innerHTML = ''
            let html = 
            `
            <div class="alert alert-dismissible fade show border-blue" role="alert">        
                <div class="card" style="width: 100%;">
                    <div class="card-header bg-blue text-white">
                        Resultados de la busqueda
                    </div>
                    <ul class="list-group list-group-flush link-profile">`
                        data.data.forEach(i => {
                            if(i != 0){
                                html += `
                                        <a href="${window.location}/${i.id}">
                                            <li class="list-group-item">
                                                <img src='../assets/profiles/${i.profile_avatar}' width='5%'>
                                                ${i.name} ${i.lastname_d} ${i.lastname_m} - ${i.department}
                                            </li>
                                        </a>
                                        `
                            }else{
                                html += `<li class="list-group-item">La busqueda no tuvo resultado</li>`
                            }
                        })
                    html += `</ul>
                </div>
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
    app.innerHTML = ''
}


formSearch.onkeypress = ( e ) => {
    let tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==13) return false;
}


