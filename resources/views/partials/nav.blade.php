<section class="NavLateral full-width">
    <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
    <div class="NavLateral-content full-width">

        <header class="NavLateral-title full-width center-align  red">
            Servicentros
            <i class="fa fa-bars NavLateral-title-btn ShowHideMenu" aria-hidden="true"></i>
        </header>

        <figure class="full-width NavLateral-logo center-align fondo-valvoline">
            <i class="fa fa-user fa-4x" aria-hidden="true"></i>
            <figcaption class="center-align">{{ Auth::user()->username }}</figcaption>
        </figure> {{-- Fin del area intermedia para el logo del usuario admin --}}

        <div class="NavLateral-Nav">
            <ul class="full-width">
                <li>
                    <a href="{{ route('admin') }}" class="waves-effect waves-light"><i class="fa fa-home home-css" aria-hidden="true"></i> Inicio </a>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="{{ route('indexServiceCenter') }}" class="waves-effect waves-light"><i class="fa fa-car" aria-hidden="true"></i> Servicentros</a>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="{{ route('indexContact') }}" class="waves-effect waves-light"><i class="fa fa-phone" aria-hidden="true"></i> Contactos</a>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="{{ route('indexCountry') }}" class="waves-effect waves-light"><i class="fa fa-flag-checkered" aria-hidden="true"></i> Paises</a>
                </li>
                <li class="NavLateralDivider"></li>
                <li>
                    <a href="{{ route('indexProgram') }}" class="waves-effect waves-light"><i class="fa fa-cog" aria-hidden="true"></i> Programas</a>
                </li>
                {{--
                <li>
                    <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-view-web zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Sample Pages</a>
                    <ul class="full-width">
                        <li><a href="template.html" class="waves-effect waves-light">Blank Page</a></li>
                    </ul>
                </li>
                --}}
            </ul>
        </div>{{-- Fin del menu lateral --}}

    </div>
</section>