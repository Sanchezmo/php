<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">

    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Noticiero Deportivo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <a class="nav-link " href="#">Futbol</a>
                <a class="nav-link " href="#">Baloncesto</a>
                <a class="nav-link " href="#">Tenis</a>
                <a class="nav-link " id="time" href="#"></a>
                <a class="nav-link px-8 text-white " href="loginadmin.php">Administrador</a>
                <!--<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
                
                <script>
                    var fechaHora = new Date();
                var fecha = ('0' + fechaHora.getDate()).slice(-2) + '/' + ('0' + (fechaHora.getMonth() + 1)).slice(-2) +
                    '/' + fechaHora.getFullYear();
                var hora = ('0' + fechaHora.getHours()).slice(-2) + ':' + ('0' + fechaHora.getMinutes()).slice(-2) +
                    ':' + ('0' + fechaHora.getSeconds()).slice(-2);
                document.getElementById('time').innerHTML = fecha + "  " + hora;
                
                   
                    setInterval(() => {
                        var fechaHora = new Date();
                var fecha = ('0' + fechaHora.getDate()).slice(-2) + '/' + ('0' + (fechaHora.getMonth() + 1)).slice(-2) +
                    '/' + fechaHora.getFullYear();
                var hora = ('0' + fechaHora.getHours()).slice(-2) + ':' + ('0' + fechaHora.getMinutes()).slice(-2) +
                    ':' + ('0' + fechaHora.getSeconds()).slice(-2);
                document.getElementById('time').innerHTML = fecha + "  " + hora;
                
                    }, 1000);
                
                
                </script>
            </div>
        </div>
    </div>
</nav>