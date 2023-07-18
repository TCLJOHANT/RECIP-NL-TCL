//indicacion visual en menu de navegacion (indica en que seccion se encuentra el usuario)
$(function () {
    $(".nav-lateral-link").click(function () {
     $(".nav-lateral-link").removeClass("is-active");
     $(this).addClass("is-active");
    });
   });
   
   //menu lateral reducido
   $(window)
    .resize(function () {
     if ($(window).width() > 1090) {
      $(".nav-lateral").removeClass("collapse");
     } else {
      $(".nav-lateral").addClass("collapse");
     }
    })
    .resize();
 
   const todasRecetas = document.querySelectorAll(".receta");
      //al hacer hover en carta el video se pausa o reproduce
   todasRecetas.forEach((t) => {
    t.addEventListener("mouseover", () => {
     const receta = t.querySelector(".receta");
     receta.play();
    });
    t.addEventListener("mouseleave", () => {
     const receta = t.querySelector(".receta");
     receta.pause();
    });
   });
   //funcion quitar y poner clase show para mostrar una vista o otra
   $(function () {
    $(".logo, .logo-expandido, .discover").on("click", function (e) {
     $(".main-container").removeClass("show");
     $(".main-container").scrollTop(0);
    });
    $(".trending, .receta").on("click", function (e) {
     $(".main-container").addClass("show");
     $(".main-container").scrollTop(0);
     $(".nav-lateral-link").removeClass("is-active");
     $(".trending").addClass("is-active");
    });

   //enviar informacion a la otra vista
    $(".video").click(function () {
     let source = $(this).find("source").attr("src"); //link video
     let titulo = $(this).find(".video-nombre").text(); //name video
     let persona = $(this).find(".video-por").text(); //nombre autor
     let img = $(this).find(".author-img").attr("src"); //foto perfil autor
     $(".video-stream video").stop();
     $(".video-stream source").attr("src", source);
     $(".video-stream video").load();
     $(".video-p-titulo").text(titulo);
     $(".video-p-nombre").text(persona);
     $(".video-detalle .author-img").attr("src", img);
    });
   });
   