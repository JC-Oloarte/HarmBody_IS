<div class="container text-center">
    <div class="row">
      <div class="col">
        
      </div>
      <div class="col">
        <div class="alert alert-primary" role="alert">
            Bienvenido {{config('app.user_id')}}, ingresaste con el rol de {{config('app.user_rol')}}.
        </div>
        <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</button>
      </div>
      <div class="col">
        
      </div>
    </div>
        
  </div>


<div class=" ms-lg-auto">
    
</div>
<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
        <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">HarmBody</li>
                    <li class="list-inline-item">
                            <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="icon text-pink icon-filled icon-inline" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path
                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"/>
                            </svg>
                            Ingeniería de software
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                        Copyright &copy; 2023
                        Todos los derechos NO reservados
                    </li>
                    <li class="list-inline-item">
                        TecNM
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
