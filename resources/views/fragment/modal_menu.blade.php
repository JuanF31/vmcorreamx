<!-- Modal menu -->
<div id="myModal" class="menu__modal">
    <div class="menu__modal__content">
        <div class="menu__modal__header">
            <span class="close__modal">&times;</span>
            <h2 class="title__modal display-5">Servicios</h2>
            <span class="line1"></span>
            <span class="line2"></span>
        </div>
        <div class="modal__body mt-0 m-2 row">
            <div class="col-3 d-flex justify-content-center align-items-center p-0">
                <div class="image__container d-flex justify-content-center align-items-center">
                    <img id="img__default" src="{{ asset('assets/icons/servicios.png') }}" width="60%" alt="Icono Servicios" class="animate__zoomIn animate__animated">
                    <img id="ico__electrico" src="{{ asset('assets/icons/electrico.png') }}" width="60%" alt="Icono Eléctrico" class="d-none animate__zoomIn animate__animated">
                    <img id="ico__mecanico" src="{{ asset('assets/icons/mecanico.png') }}" width="60%" alt="Icono Mecánico" class="d-none animate__zoomIn animate__animated">
                    <img id="ico__automatizacion" src="{{ asset('assets/icons/automatizacion-tiny.png') }}" width="60%" alt="Icono Automatización" class="d-none animate__zoomIn animate__animated">
                    <img id="ico__industrial" src="{{ asset('assets/icons/industrial-tiny.png') }}" width="60%" alt="Icono Industria 4.0" class="d-none animate__zoomIn animate__animated">
                    <img id="ico__maquinados" src="{{ asset('assets/icons/maquinados-tiny.png') }}" width="60%" alt="Icono Maquinados" class="d-none animate__zoomIn animate__animated">
                    <img id="ico__seguridad" src="{{ asset('assets/icons/seguridad-tiny.png') }}" width="60%" alt="Icono Seguridad Industrial" class="d-none animate__zoomIn animate__animated">
                    <img id="ico__riggin" src="{{ asset('assets/icons/Riggin-tiny.png') }}" width="60%" alt="Icono Riggin" class="d-none animate__zoomIn animate__animated">
                </div>
            </div>
            <div class="col-4 p-0">
                <ul class="sub__menu">
                    <li><a class="mega__link" href="{{route('electrico') }}">Eléctrico</a></li>
                    <li><a class="mega__link" href="{{route ('mecanico') }}">Mecánico</a></li>
                    <li><a class="mega__link" href="{{route('automatizacion') }}">Automatización</a></li>
                    <li><a class="mega__link" href="{{route('industria') }}">Industria 4.0</a></li>
                    <li><a class="mega__link" href="{{route('maquinados') }}">Maquinados</a></li>
                    <li><a class="mega__link" href="{{route('seguridad-industrial') }}">Seguridad Industrial</a></li>
                    <li><a class="mega__link" href="{{route('riggin') }}">Riggin</a></li>
                </ul>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center p-0">
                <div class="image__container d-flex justify-content-center align-items-center">
                    <img id="ico__default" src="{{ asset('assets/img/img-servicios.png') }}" width="40%" alt="Imagen Servicios" class="animate__zoomIn animate__animated">
                    <img id="img__electrico" src="{{ asset('assets/img/electrico.png') }}" width="40%" alt="Imagen alusiva al servicio Riggin" class="d-none animate__zoomIn animate__animated">
                    <img id="img__mecanico" src="{{ asset('assets/img/mecanico.png') }}" width="60%" alt="Imagen alusiva al servicio Automatización" class="d-none animate__zoomIn animate__animated">
                    <img id="img__automatizacion" src="{{ asset('assets/img/img-automatizacion.png') }}" width="60%" alt="Imagen alusiva al servicio Automatización" class="d-none animate__zoomIn animate__animated">
                    <img id="img__industrial" src="{{ asset('assets/img/img-industria.png') }}" width="70%" alt="Imagen alusiva al servicio Industria 4.0" class="d-none animate__zoomIn animate__animated">
                    <img id="img__maquinados" src="{{ asset('assets/img/img-maquinados.png') }}" width="25%" alt="Imagen alusiva al servicio Maquinados" class="d-none animate__zoomIn animate__animated">
                    <img id="img__seguridad" src="{{ asset('assets/img/img-seguridad.png') }}" width="60%" alt="Imagen alusiva al servicio Seguridad Industrial" class="d-none animate__zoomIn animate__animated">
                    <img id="img__riggin" src="{{ asset('assets/img/img-riggin.png') }}" width="60%" alt="Imagen alusiva al servicio Riggin" class="d-none animate__zoomIn animate__animated">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal menu -->