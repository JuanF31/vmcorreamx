<style>
    .cotainer-compuesto{
        z-index: 2 !important;
    }
    .back, .menu{
        margin: 1rem;
        background-color: var(--azul__primario);
        color: white;
        font-weight: 500;
        font-size: 2rem;
        border-radius: .5rem;
        cursor: pointer;
    }
    .back{
        padding: 1rem
    }
    .menu{
        padding: 0 1rem;
    }
</style>
<div class="fixed-top cotainer-compuesto">
    <nav class="navbar">
        <div class="container-fluid p-0 m-0">
        <div>
            <div class="menu" id="btn__abrir">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="d-flex back" onclick="history.back()">
            <i class="fa-solid fa-arrow-left"></i>
        </div>
        </div>
    </nav>
</div>
