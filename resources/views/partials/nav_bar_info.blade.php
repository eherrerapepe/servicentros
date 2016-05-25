<div class="ContentPage-Nav full-width">
    <ul class="full-width">
        <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
        <li><figure><img src="{{ asset('assets/materialize/img/user.png') }}" alt="UserImage"></figure></li>
        <li style="padding:0 5px;">{{ Auth::user()->username }}</li>
        <li><a href="{{ route('logoutGet') }}" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Cerrar Sesion"><i class="fa fa-power-off" aria-hidden="true"></i></a></li> {{-- agregar la clase btn-ExitSystem --}}
        {{--<li><a href="#" class="tooltipped waves-effect waves-light btn-Search" data-position="bottom" data-delay="50" data-tooltip="Buscar"><i class="fa fa-search" aria-hidden="true"></i></a></li>--}}
        {{--
        <li>
            <a href="#" class="tooltipped waves-effect waves-light btn-Notification" data-position="bottom" data-delay="50" data-tooltip="Notificaciones">
                <i class="fa fa-bell" aria-hidden="true"></i>
                <span class="ContentPage-Nav-indicator bg-danger">2</span>
            </a>
        </li>
        --}}
    </ul>
</div>