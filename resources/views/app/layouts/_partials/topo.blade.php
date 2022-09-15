<header><!--Barra de menu responsivo-->
    <nav id="topo">
        <div class="nav-wrapper">
            <div id="logo" class="brand-logo">
                <a href="#" >Faetec</a>
            </div>
            <a href="#" data-activates="mobile-demo" class="button-collapse">
            <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">   
            <li><a id="home" href="{{route ('site.home')}}">Home</a></li>
            <li><a id="sobre" href="{{route ('site.sobre')}}">Sobre</a></li>
            <li><a id="unidade" href="{{route ('site.unidade')}}">Unidade</a></li>
            <li>
                <a class="waves-effect waves-light modal-trigger" href="#modal3">Logado</a>
            </li>
            </ul>
            <ul class="side-nav" id="mobile-demo" style="background-color: teal;">
                <li>
                    <div class="user-view center-align">
                        <div class="background">
                            <img src="img/back.jpg">
                        </div>
                        <a href="#!user"><img class="circle" src="img/img_avatar4.png"></a>
                        <a href="#!name"><span class="white-text name">John Doe</span></a>
                        <a href="#!email"><span class="white-text email">johndoe@gmail.com</span></a>
                    </div>
                </li>
                <li><div class="divider"></div></li>
                <li><a class="white-text" id="sobre" href="{{route ('site.sobre')}}"><i class="material-icons white-text">web</i>Sobre</a></li>
                <li><a class="white-text" id="unidade" href="{{route ('site.unidade')}}"><i class="material-icons white-text">school</i>Unidade</a></li>
                <li>
                    <a class="waves-effect waves-light modal-trigger white-text" href="#modal1"><i class="material-icons white-text">person_pin</i>Logout</a>
                </li>
                <li><div class="divider"></div></li>
            </ul>
        </div>
    </nav>
</header><!--Final da barra de menu-->