@extends('layouts.master')
@section('title')
<title>{{ config('app.name') }} · Aviso de Privacidad</title>
@endsection

@section('content')
    @include('fragment.sidebar')

    <!-- Home section -->
    <div class="seccion__body">

        <!-- header -->
        <header class="header__container">
            <div class="barra">
                <div class="btn__menu" id="btn__abrir">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="slider__hero">

            </div>
        </header>
        <!-- End header -->

        <!-- Main section or body -->
        <div class="body__container">
            <section class="main mb__mobile">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="" data-aos="fade-up">
                                <div class="section-title mb-4">
                                    <h5 class="position-relative d-inline-block text-uppercase heading">
                                        Aviso de Privacidad
                                        <span class="sub__line1"></span>
                                        <span class="sub__line2"></span>
                                    </h5>
                                </div>
                                    <p class="p">
                                        El presente Aviso de Privacidad establece los términos en que VMCORREA EXPERTOS EN INSTALACIONES ELECTROMECANICAS S. de R.L de C.V., usa y protege la información proporcionada por los usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios respetando su privacidad y cumpliendo con cualquier ley o regulación aplicable respecto a la información personal recopilada en el sitio web, según el nivel de seguridad adecuado al riesgo de los datos recogidos. 
                                    </p>
                                    <p class="p">
                                        Este aviso entra en vigencia a partir del 28 de abril de 2022 y se actualizo por última vez el 28 de abril de 2022. El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales; de nuestras propias necesidades por los productos o servicios que ofrecemos; de nuestras prácticas de privacidad; de cambios en nuestro modelo de negocio, o por otras causas. Nos comprometemos a mantener actualizado este aviso de privacidad sobre los cambios que pueda sufrir y siempre podrá consultar las actualizaciones que existan en el sitio web.
                                    </p>
                                <div class="accordion accordion-flush pt-5 pb-5" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed  accordion-custom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                Registro de Datos de Caracter Personal
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <p class="p">
                                                    En cumplimiento de lo establecido, le informamos que los datos personales recabados por VMCORREA, mediante los formularios extendidos en sus páginas quedarán incorporados y serán tratados en nuestro ﬁchero con el ﬁn de poder facilitar, agilizar y cumplir los compromisos establecidos entre VMCORREA y el Usuario o el mantenimiento de la relación que se establezca en los formularios que este rellene, o para atender una solicitud o consulta del mismo.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed accordion-custom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Principios aplicables al tratamiento de los datos personales
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse " aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <p class="p">
                                                    El tratamiento de los datos personales del Usuario se someterá a los siguientes principios de Protección de Datos Personales y garantía de los derechos digitales:
                                                </p>
                                                <ul class="p">
                                                    <li>
                                                        Principio de licitud, lealtad y transparencia: se requerirá en todo momento el consentimiento del Usuario previa información completamente transparente de los ﬁnes para los cuales se recogen los datos personales.
                                                    </li>
                                                    <li>
                                                        Principio de limitación de la ﬁnalidad: los datos personales serán recogidos con ﬁnes determinados, explícitos y legítimos.
                                                    </li>
                                                    <li>
                                                        Principio de minimización de datos: los datos personales recogidos serán únicamente los estrictamente necesarios en relación con los ﬁnes para los que son tratados.
                                                    </li>
                                                    <li>
                                                        Principio de exactitud: los datos personales deben ser exactos y estar siempre actualizados. 
                                                    </li>
                                                    <li>
                                                        Principio de limitación del plazo de conservación: los datos personales solo serán mantenidos de forma que se permita la identiﬁcación del Usuario durante el tiempo necesario para los ﬁnes de su tratamiento.
                                                    </li>
                                                    <li>
                                                        Principio de integridad y conﬁdencialidad: los datos personales serán tratados de manera que se garantice su seguridad y conﬁdencialidad.
                                                    </li>
                                                    <li>
                                                        Principio de responsabilidad proactiva: el Responsable del tratamiento será responsable de asegurar que los principios anteriores se cumplen.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed accordion-custom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                Fines del tratamiento a que se destinan los datos personales
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <p class="p">
                                                    Los datos personales son recabados y gestionados por VMCORREA con la ﬁnalidad de poder facilitar, agilizar y cumplir los compromisos establecidos entre el Sitio Web y el Usuario o el mantenimiento de la relación que se establezca en los formularios que este último rellene o para atender una solicitud o consulta.
                                                </p>
                                                <p class="p">
                                                    Igualmente, los datos podrán ser utilizados con una ﬁnalidad comercial de personalización, operativa y estadística, y actividades propias del objeto social de VMCORREA, así como para la extracción, almacenamiento de datos y estudios de marketing para adecuar el Contenido ofertado al Usuario, así como mejorar la calidad, funcionamiento y navegación por el Sitio Web.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingFour">
                                            <button class="accordion-button collapsed accordion-custom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Períodos de retención de los datos personales
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse " aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <p class="p">
                                                    Los datos personales solo serán retenidos durante el tiempo mínimo necesario para los ﬁnes de su tratamiento. Este periodo de tiempo puede depender de las finalidades con las que se está utilizando su información, de acuerdo con este aviso de privacidad. En caso de que esta información ya no sea necesaria, se eliminara o convertirá en anónima eliminando los detalles que lo identifican. Sin embargo, de ser necesario, podemos conservar su información personal para cumplir con una obligación legal, contable o de informes para fines de archivo en interés público, fines de investigación científica o fines estadísticos.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingFive">
                                            <button class="accordion-button collapsed accordion-custom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                                Información que recopilamos
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse " aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <p class="p">
                                                    Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, solo recopilamos información personal necesaria entre los que se encuentran los siguientes datos personales:
                                                </p>
                                                <ul>
                                                    <li>
                                                        Datos de identificación y contacto 
                                                    </li>
                                                    <li>
                                                        Datos laborales 
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingSix">
                                            <button class="accordion-button collapsed accordion-custom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                                Destinatarios de los datos personales
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse " aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <p class="p">
                                                    Los datos personales del Usuario no serán compartidos con terceros. Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingSeven">
                                            <button class="accordion-button collapsed accordion-custom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                                Secreto y seguridad de los datos personales
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSeven" class="accordion-collapse collapse " aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <p class="p">
                                                    VMCORREA se compromete a adoptar las medidas técnicas y organizativas necesarias, según el nivel de seguridad adecuado al riesgo de los datos recogidos, de forma que se garantice la seguridad de los datos de carácter personal y se evite la destrucción, pérdida o alteración accidental o ilícita de datos personales transmitidos, conservados o tratados de otra forma, o la comunicación o acceso no autorizados a dichos datos.
                                                </p>
                                                <p class="p">
                                                    El Sitio Web cuenta con un certiﬁcado SSL (Secure Socket Layer), que asegura que los datos personales se transmiten de forma segura y conﬁdencial, al ser la transmisión de los datos entre el servidor y el Usuario, y en retroalimentación, totalmente cifrada o encriptada.
                                                </p>
                                                <p class="p">
                                                    Sin embargo, debido a que VMCORREA no puede garantizar la inexpugnabilidad de internet ni la ausencia total de hackers u otros que accedan de modo fraudulento a los datos personales, se compromete a comunicar al Usuario sin dilación indebida cuando ocurra una violación de la seguridad de los datos personales que sea probable que entrañe un alto riesgo para los derechos y libertades de las personas físicas. 
                                                </p>
                                                <p class="p">
                                                    Los datos personales serán tratados como conﬁdenciales por el Responsable del tratamiento, quien se compromete a informar de y a garantizar por medio de una obligación legal o contractual que dicha conﬁdencialidad sea respetada por sus empleados, asociados, y toda persona a la cual le haga accesible la información.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingEight">
                                            <button class="accordion-button collapsed accordion-custom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                                Derechos derivados del tratamiento de los datos personales
                                            </button>
                                        </h2>
                                        <div id="flush-collapseEight" class="accordion-collapse collapse " aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <p class="p">
                                                    El Usuario tiene sobre VMCORREA y podrá, por tanto, ejercer frente al Responsable del tratamiento los siguientes derechos de Protección de Datos Personales y garantía de los derechos digitales:
                                                </p>
                                                <ul class="p">
                                                    <li>
                                                        Derecho de acceso: Es el derecho del Usuario a obtener conﬁrmación de si VMCORREA está tratando o no sus datos personales y, en caso aﬁrmativo, obtener información sobre sus datos concretos de carácter personal y del tratamiento que VMCORREA haya realizado o realice.
                                                    </li>
                                                    <li>
                                                        Derecho de rectiﬁcación: Es el derecho del Usuario a que se modiﬁquen sus datos personales que resulten ser inexactos o, teniendo en cuenta los ﬁnes del tratamiento, incompletos.
                                                    </li>
                                                    <li>
                                                        Derecho de supresión: Es el derecho del Usuario, siempre que la legislación vigente no establezca lo contrario, a obtener la supresión de sus datos personales cuando estos ya no sean necesarios para los ﬁnes para los cuales fueron recogidos o tratados.
                                                    </li>
                                                    <li>
                                                        Derecho a la limitación del tratamiento: Es el derecho del Usuario a limitar el tratamiento de sus datos personales. El Usuario tiene derecho a obtener la limitación del tratamiento cuando impugne la exactitud de sus datos personales o el tratamiento sea ilícito.
                                                    </li>
                                                    <li>
                                                        Derecho a la portabilidad de los datos: En caso de que el tratamiento se efectúe por medios automatizados, el Usuario tendrá derecho a recibir del Responsable del tratamiento sus datos personales en un formato estructurado, de uso común y lectura mecánica, y a transmitirlos a otro responsable del tratamiento. Siempre que sea técnicamente posible, el Responsable del tratamiento transmitirá directamente los datos a ese otro responsable.
                                                    </li>
                                                    <li>
                                                        Derecho de oposición: Es el derecho del Usuario a que no se lleve a cabo el tratamiento de sus datos de carácter personal o se cese el tratamiento de los mismos por parte de VMCORREA.
                                                    </li>
                                                    <li>
                                                        Derecho a no ser objeto de una decisión basada únicamente en el tratamiento automatizado, incluida la elaboración de perﬁles: Es el derecho del Usuario a no ser objeto de una decisión individualizada basada únicamente en el tratamiento automatizado de sus datos personales, incluida la elaboración de perﬁles, existente salvo que la legislación vigente establezca lo contrario.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingNine">
                                            <button class="accordion-button collapsed accordion-custom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                                Enlaces a sitios web de terceros
                                            </button>
                                        </h2>
                                        <div id="flush-collapseNine" class="accordion-collapse collapse " aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <p class="p">
                                                    El Sitio Web puede incluir hipervínculos o enlaces que permiten acceder a páginas web de terceros distintos de VMCORREA, y que por tanto no son operados por VMCORREA. Los titulares de dichos sitios web dispondrán de sus propios avisos de protección de datos, siendo ellos mismos, en cada caso, responsables de sus propios ﬁcheros y de sus propias prácticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End body -->
        @include('fragment.modal_menu')
        @include('fragment.footer')
    </div>
    <!-- End Home section -->

    
@endsection