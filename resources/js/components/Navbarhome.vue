<template>
<div>
  
    <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top my-0" id="myNav">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="" width="40px">Pocong<sub>Lari</sub></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <router-link :to="{ name: 'homepageposts' }" >Home</router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'about' }" >About</router-link>
          </li>
          <li class="nav-item">
            <a href="#contact" >Contact</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
    
    
</div>
</template>