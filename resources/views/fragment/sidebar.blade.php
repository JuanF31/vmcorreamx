<div class="sidebar close animate__animated">
    <div class="contenedor__sidebar">
        <div class="detalles__logo">
            <i class="fa-solid fa-circle-xmark" id="btn__cerrar"></i>
        </div>

        <div class="nombre__logo mt-4">
            <a href="{{ route('inicio') }}" class="mt-2 d-flex justify-content-center align-items-center">
                <img id="img__logo" src="{{ asset('assets/icons/logo-vmc-principal.png') }}" class="animate__animated animate__fadeInLeft logo__principal" alt="Logo VMCORREA">
            </a>
        </div>
        <nav class="navegacion">
            <ul class="nav__list animate__animated animate__fadeInLeft" id="navegacion__sidebar">
                <li>
                    <a href="{{ route('inicio') }}" class="sidebar__active" id="link__home">
                        <i class="fa-solid fa-house link__active"></i>
                        <span class="links__name inicio link__active">Inicio</span>
                    </a>
                    <span class="tooltip">Inicio</span>
                </li>
                <li>
                    <a href="{{ route('nosotros') }}" class="sidebar__active" id="link__nosotros">
                        <i class="fa-solid fa-users link__active"></i>
                        <span class="links__name nosotros link__active">Nosotros</span>
                    </a>
                    <span class="tooltip">Nosotros</span>
                </li>
                <!-- Items for services -->
                <li class="responsibe__servicios">
                    <a href="#" id="btn__servicios__dropdown">
                        <div class="">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                            <span class="links__name">Servicios</span>
                        </div>
                        <i class="fa-solid fa-angle-right dropdown"></i>
                    </a>
                    <div class="sub__menu__responsive">
                        <a href="{{ route('electrico') }}">Eléctrico</a>
                        <a href="{{ route('mecanico') }}">Mecánico</a>
                        <a href="{{ route('automatizacion') }}">Automatización</a>
                        <a href="{{ route('industria') }}">Industria 4.0</a>
                        <a href="{{ route('maquinados') }}">Maquinados</a>
                        <a href="{{ route('seguridad-industrial') }}">Seguridad Industrial</a>
                        <a href="{{ route('riggin') }}">Riggin</a>
                    </div>
                </li>
                <li class="desktop__servicio">
                    <a href="" id="servicios__modal" class="sidebar__active">
                        <i class="fa-solid fa-screwdriver-wrench wrench link__active"></i>
                        <span class="links__name servicio link__active">Servicios</span>
                    </a>
                    <span class="tooltip">Servicios</span>
                </li>
                <!-- End Items for services -->
                <li>
                    <a href="{{ route('proyectos') }}" class="sidebar__active" id="link__proyectos">
                        <i class="fa-solid fa-folder-open folder link__active"></i>
                        <span class="links__name proyecto link__active">Proyectos</span>
                    </a>
                    <span class="tooltip">Proyectos</span>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="sidebar__active" id="link__mundovmc">
                        <i class="fa-solid earth fa-earth-americas link__active"></i>
                        <span class="links__name vmc link__active">Mundo VMC</span>
                    </a>
                    <span class="tooltip">Mundo VMC</span>
                </li>
                <li>
                    <a href="{{ route('contacto') }}" class="sidebar__active" id="link__contacto">
                        <i class="fa-solid book fa-address-book link__active"></i>
                        <span class="links__name contacto link__active">Contacto</span>
                    </a>
                    <span class="tooltip">Contacto</span>
                </li>
                <li>
                    <a href="{{ route('catalogos') }}" class="sidebar__active" id="link__catalogos">
                        <i class="fa-solid open__book fa-book-open link__active"></i>
                        <span class="links__name catalogo link__active">Catálogos</span>
                    </a>
                    <span class="tooltip">Catálogos</span>
                </li>
            </ul>
        </nav>
    </div>
</div>


