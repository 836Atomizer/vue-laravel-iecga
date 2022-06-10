<template>
  <div>
    
    <div class="border-top border-bottom py-2" style="background-color: #611a14;">
        <nav class="navbar px-4 navbar-expand-lg navbar-dark"  > 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
                <router-link active-class="active" exact :to="{ name: 'paginas.home' }" class="nav-link">Inicio</router-link>
            </li>
            <li class="nav-item">
                <router-link active-class="active" exact :to="{ name: 'paginas.identidad' }" class="nav-link">Identidad</router-link>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="nav-item-link">Noticias</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="comunicados.php">
                    <span class="nav-item-link">Comunicados</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="biblioteca.php">
                    <span class="nav-item-link">Biblioteca</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="laboratorio.php">
                    <span class="nav-item-link">Laboratorio</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galeria.php">
                    <span class="nav-item-link">Galerias</span></a>
            </li>
            </ul>
        </div>
        </nav>
    </div>
    <main class="">
        <div class="container-fluid py-3">
            <transition name="component-fade" mode="out-in">
                <router-view></router-view>
            </transition>
        </div>
    </main>
  </div>
</template>