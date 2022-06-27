<style>
    .closemodal-ad{
        color: #ffffff;
        right: 2rem;
        top: 1rem;
        position: absolute;
        font-size: 2.5rem;
        transition: 0.3s;
        cursor: pointer;
    }
    .modal-ad {
        display: none;
        position: fixed;
        z-index: 1000; 
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%;
        transition: 0.3s ease-in-out;
        overflow: auto;  
    }
    .row-ad{
        height: 100vh;
    }
    .image-container img{
        object-fit: cover;
        width: 100%
    }
    @media(min-width:768px){
        .image-container img{
            width: 50%
        }
    }
    .text-container{
        overflow-x: auto;
    }
    @media(min-width:1200px){
        .closemodal-ad{
            color: #212121;
        }
    }
    .circunferencia{
        border: 0.2rem solid var(--azul__primario);
        border-radius: 50%;
        width: 6rem;
        height: 6rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .circunferencia img{
        background-color: var(--azul__primario);
        border-radius: 50%;
        width: 5rem;
        height: 5rem;
    }
    .text-justify{
        text-align: justify !important;
    }
    .depa-name{
        line-height: 1.5 !important;
    }
    .text-container::-webkit-scrollbar {display: none;}
</style>

<div id="modal-ad" class="modal-ad">
    <span class="closemodal-ad"><i class="fa-solid fa-xmark"></i></span>
    <div>
        <div class="row row-ad">
            <div class="col-xl-7 col-sm-12 col-md-12 bg-black image-container d-flex justify-content-center align-items-center">
                <img class="p-5" src="{{ asset('assets/IMG-20220623-WA0001.jpg') }}" alt="">
            </div>
            <div class="col-xl-5 col-sm-12 col-md-12 bg-white text-blue p-5 text-container">
                <div class="d-flex">
                    <div class="circunferencia">
                        <img class="p-2" src="{{asset('assets/icons-departments/icon-departamento-recursos-humanos.png')}}" alt="">
                    </div>
                    <div class="ps-3 depa-name d-flex align-items-center">
                        <div>
                            <span id="ad-department-name" class="fs-2 text">Recursos Humanos</span>
                            <br>
                            <small class="fs-5 text">24/06/2022 · 10:00 a.m.</small>
                        </div>
                    </div>
                </div>
                <h2 id="ad-title" class="pt-5"></h2>
                <p id="ad-content" class="text-justify">
                </p>
            </div>
        </div>
    </div>
</div>
