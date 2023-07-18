<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>  <!--box icons (web de iconos)-->
        <!--styles-->
         <link rel="stylesheet" href="{{asset ('css/estilos-RECIP/extras/precargado.css')}}"> <!--stile carga de pagina (cortesia: https://loading.io/css/ --> 
        <link rel="stylesheet" href="{{ asset('css/estilos-RECIP/extras/normalize.css')}}"> 
        <link rel="stylesheet" href="{{ asset('css/estilos-RECIP/loguin.css')}}"> 
        <link rel="stylesheet" href="{{asset('css/estilos-RECIP/index/index.css')}}"> <!--index de sass-->
        <!--icono-->
         <link rel="shortcut icon" href="{{asset ('img/logo_recip.png')}}" type="image/x-icon">
        <title>Recip-NL</title>

    </head>
    <body  class="hidden" id="styleLoguin">
         <div class="centrado" id="cargar">
            <div class="lds-facebook"><div></div><div></div><div></div></div>  <!-- sacado de:https://loading.io/css/  -->
        </div>  
        <div class="contenido-web">
            <!-- nav lateral -->
            @include('plantillas/nav_lateral')
            <div class="contenido-principal" id="cont-p">
                <!-- BARRA DE BUSQUEDA, USUARIO, NOTIFICACIONES -->
                @include('plantillas/header')
             <!-- main container-->
                <main class="main-container" id="main-web">
                <h1 class="descubrir animacion" style="--delay: 0s">Receta segun tus ingredientes</h1>
                <div class="descubrir-cartas">
                   
                        <div class="descubrir-carta animacion" style="--delay: .1s">
                            <h2 class="descubrir-carta__titulo">"Encuentra una receta unicamente con tus ingredientes disponibles"</h2>
                            <form action="" class="form__ingredientes">
                                
                                <p>Ingredientes <i class='bx bxl-flask' ></i></p> 
                                <textarea name="" id="" cols="30" rows="10" placeholder="Escribe ingredientes">
                                   
                                </textarea>
                                <button>Buscar Receta</button>
                            </form>
    
                            
                        </div>
                        <div class="descubrir-carta animacion" style="--delay: .2s">
                            <div class="">
                               <button>Publicar receta</button>
                            </div>
                        </div>
    
                </div>
                <!-- mas visto -->
                <h3 class="recetas-mas-visto animacion" style="--delay: .3s">Más visto</h3>
                <div class="recetas">
                        <div class="receta animacion" style="--delay: .4s">
                            <p class="receta-tiempo">8 min</p>
                            <div class="receta-top">
                                <video muted="">
                                    <source src="{{asset('img/Lasaña.mp4')}}" type="video/mp4">
                                </video>
                                <div class="author-img__envoltura receta-autor-img">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <path d="M20 6L9 17l-5-5" />
                                    </svg>
                                    <img class="author-img" src="https://images.pexels.com/photos/1680172/pexels-photo-1680172.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                                </div>
                            </div>
                            <div class="receta-buttom">
                                <p class="receta-autor offline">Andy William</p>
                                <p class="receta-nombre">Básico cómo hacer una lazaña</p>
                                <p class="receta-vistas">54K views<span class="seperate video-seperate"></span>1 week ago</p>
                            </div>
                        </div>
                        <div class="receta animacion" style="--delay: .5s">
                            <div class="receta-tiempo">5 min</div>
                            <div class="receta-top">
                               
                                    <img class="imagen-receta" src="https://cdn.pixabay.com/photo/2020/02/02/15/07/meat-4813261_960_720.jpg" alt="">
                               
                                <div class="author-img__envoltura receta-autor-img">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <path d="M20 6L9 17l-5-5" />
                                    </svg>
                                    <img class="author-img" src="https://images.pexels.com/photos/3370021/pexels-photo-3370021.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                                </div>
                            </div>
                            <div class="receta-buttom">
                                <p class="receta-autor offline">Gerard Bind</p>
                                <p class="receta-nombre">Carne de res a la plancha</p>
                                <p class="receta-vista">42K views<span class="seperate video-seperate"></span>1 week ago</p>
                            </div>
                        </div>
                        <div class="receta animacion" style="--delay: .6s">
                            <div class="receta-tiempo">7 min</div>
                            <div class="receta-top">
                               <img src="https://cdn.pixabay.com/photo/2017/10/13/19/00/potato-casserole-2848605_960_720.jpg" alt="" class="imagen-receta">
                                <div class="author-img__envoltura receta-autor-img">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <path d="M20 6L9 17l-5-5" />
                                    </svg>
                                    <img class="author-img" src="https://images.pexels.com/photos/1870163/pexels-photo-1870163.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                                </div>
                            </div>
                            <div class="receta-buttom">
                                <p class="receta-autor offline">John Wise</p>
                                <p class="receta-nombre">lazaña </p>
                                <p class="receta-vista">64K views<span class="seperate video-seperate"></span>1 week ago</p>
                            </div>
                        </div>
                        <div class="receta animacion" style="--delay: .7s">
                            <div class="receta-tiempo">6 min</div>
                            <div class="receta-top">
                                <img src="https://cdn.pixabay.com/photo/2012/02/29/12/14/fried-18967_960_720.jpg" alt="" class="imagen-receta">
                                <div class="author-img__envoltura receta-autor-img">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <path d="M20 6L9 17l-5-5" />
                                    </svg>
                                    <img class="author-img" src="https://images.pexels.com/photos/2889942/pexels-photo-2889942.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                                </div>
                            </div>
                            <div class="receta-buttom">
                                <p class="receta-autor offline">Budi Hakim</p>
                                <p class="receta-nombre">huevo frito</p>
                                <p class="receta-vista">50K views<span class="seperate video-seperate"></span>1 week ago</p>
                            </div>
                        </div>
                        <div class="receta animacion" style="--delay: .8s">
                            <div class="receta-tiempo">6 min</div>
                            <div class="receta-top">
                                <img src="https://cdn.pixabay.com/photo/2012/02/29/12/14/fried-18967_960_720.jpg" alt="" class="imagen-receta">
                                <div class="author-img__envoltura receta-autor-img">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <path d="M20 6L9 17l-5-5" />
                                    </svg>
                                    <img class="author-img" src="https://images.pexels.com/photos/2889942/pexels-photo-2889942.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                                </div>
                            </div>
                            <div class="receta-buttom">
                                <p class="receta-autor offline">Budi Hakim</p>
                                <p class="receta-nombre">huevo frito</p>
                                <p class="receta-vista">50K views<span class="seperate video-seperate"></span>1 week ago</p>
                            </div>
                        </div>                  
                </div>
        
                <!--DETALLES COMPLETOS DEL VIDEO O CARTA-->
                <div class="stream-area">
                        <div class="video-stream">
                            <video id="my_video_1" class="video-js vjs-default-skin anim" controls preload="none" poster='https://okdiario.com/img/2020/10/10/lasana-de-cordero-cocinado-a-baja-temperatura-655x368.jpg' >
                                <source src="{{asset('img/Lasaña.mp4')}}" type="video/mp4">
                            </video>
                            <div class="video-detalle">
                                <div class="video-contenido">
                                    <div class="video-p-envoltura anim" style="--delay: .1s">
                                        <div class="author-img__envoltura video-author video-p">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                            <path d="M20 6L9 17l-5-5" />
                                            </svg>
                                            <img class="author-img" src="https://images.pexels.com/photos/1680172/pexels-photo-1680172.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                                        </div>
                                        <div class="video-p-detalle">
                                            <div class="video-p-nombre">Andy </div>
                                            <div class="video-p-seguidores">1,980,893 seguidores</div>
                                        </div>
                                        <div class="button-envoltura">
                                            <button class="like">
                                            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.435 2.582a1.933 1.933 0 00-1.93-.503L3.408 6.759a1.92 1.92 0 00-1.384 1.522c-.142.75.355 1.704 1.003 2.102l5.033 3.094a1.304 1.304 0 001.61-.194l5.763-5.799a.734.734 0 011.06 0c.29.292.29.765 0 1.067l-5.773 5.8c-.428.43-.508 1.1-.193 1.62l3.075 5.083c.36.604.98.946 1.66.946.08 0 .17 0 .251-.01.78-.1 1.4-.634 1.63-1.39l4.773-16.075c.21-.685.02-1.43-.48-1.943z" />
                                            </svg>
                                            Compartir
                                            </button>
                                            <button class="like red">
                                            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.5c.63 0 1.26.09 1.86.29 3.69 1.2 5.02 5.25 3.91 8.79a12.728 12.728 0 01-3.01 4.81 38.456 38.456 0 01-6.33 4.96l-.25.15-.26-.16a38.093 38.093 0 01-6.37-4.96 12.933 12.933 0 01-3.01-4.8c-1.13-3.54.2-7.59 3.93-8.81.29-.1.59-.17.89-.21h.12c.28-.04.56-.06.84-.06h.11c.63.02 1.24.13 1.83.33h.06c.04.02.07.04.09.06.22.07.43.15.63.26l.38.17c.092.05.195.125.284.19.056.04.107.077.146.1l.05.03c.085.05.175.102.25.16a6.263 6.263 0 013.85-1.3zm2.66 7.2c.41-.01.76-.34.79-.76v-.12a3.3 3.3 0 00-2.11-3.16.8.8 0 00-1.01.5c-.14.42.08.88.5 1.03.64.24 1.07.87 1.07 1.57v.03a.86.86 0 00.19.62c.14.17.35.27.57.29z" />
                                            </svg>
                                            Me Gusta
                                            </button>
                                        </div>
                                    </div>
                                    <div class="video-p-titulo animacion" style="--delay: .2s">Básico cómo preparar lazaña</div>
                                    <div class="video-p-subtitulo animacion" style="--delay: .3s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus illum tempora consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis earum velit accusantium maiores qui sit quas, laborum voluptatibus vero quidem tempore facilis voluptate tempora deserunt! </div>
                                    <div class="video-p-subtitulo animacion" style="--delay: .4s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus laborum qui dolorum fugiat eius accusantium repellendus illum tempora consequuntur. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- CHAT-->
                        <div class="chat-stream">
                            <div class="chat">
                                <div class="chat-header animacion">Comentarios<span><svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.212 7.762c0 2.644-2.163 4.763-4.863 4.763-2.698 0-4.863-2.119-4.863-4.763C4.486 5.12 6.651 3 9.35 3c2.7 0 4.863 2.119 4.863 4.762zM2 17.917c0-2.447 3.386-3.06 7.35-3.06 3.985 0 7.349.634 7.349 3.083 0 2.448-3.386 3.06-7.35 3.06C5.364 21 2 20.367 2 17.917zM16.173 7.85a6.368 6.368 0 01-1.137 3.646c-.075.107-.008.252.123.275.182.03.369.048.56.052 1.898.048 3.601-1.148 4.072-2.95.697-2.675-1.35-5.077-3.957-5.077a4.16 4.16 0 00-.818.082c-.036.008-.075.025-.095.055-.025.04-.007.09.019.124a6.414 6.414 0 011.233 3.793zm3.144 5.853c1.276.245 2.115.742 2.462 1.467a2.107 2.107 0 010 1.878c-.531 1.123-2.245 1.485-2.912 1.578a.207.207 0 01-.234-.232c.34-3.113-2.367-4.588-3.067-4.927-.03-.017-.036-.04-.034-.055.002-.01.015-.025.038-.028 1.515-.028 3.145.176 3.747.32z" />
                                </svg>
                                15,988 C
                                </span>
                                </div>
                                <div class="mensajes-contenido">
                                    <div class="mensaje animacion" style="--delay: .1s">
                                        <div class="author-img__envoltura video-author video-p">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                            <path d="M20 6L9 17l-5-5" />
                                            </svg>
                                            <img class="author-img" src="https://images.unsplash.com/photo-1560941001-d4b52ad00ecc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" />
                                        </div>
                                        <div class="autor-msg-envoltura">
                                            <div class="autor-msg__nombre video-p-name"> Wijaya Adabi</div>
                                            <div class="autor-msg__contenido video-p-sub"> Lorem ipsum clor sit, ame conse quae debitis</div>
                                        </div>
                                    </div>
                                    <div class="mensaje animacion" style="--delay: .2s">
                                        <div class="author-img__envoltura video-author video-p">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                            <path d="M20 6L9 17l-5-5" />
                                            </svg>
                                            <img class="author-img" src="https://images.pexels.com/photos/2889942/pexels-photo-2889942.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                                        </div>
                                        <div class="msg-wrapper">
                                            <div class="autor-msg__nombre  video-p-name offline"> Johny Wise</div>
                                            <div class="autor-msg__contenido  video-p-sub"> Suscipit eos atque voluptates labore</div>
                                        </div>
                                    </div>
                                    <div class="mensaje  animacion" style="--delay: .3s">
                                        <div class="author-img__envoltura video-author video-p">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                            <path d="M20 6L9 17l-5-5" />
                                            </svg>
                                            <img class="author-img" src="https://images.unsplash.com/photo-1496345875659-11f7dd282d1d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fG1lbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
                                        </div>
                                        <div class="msg-wrapper">
                                            <div class="msg__name video-p-name offline"> Budi Hakim</div>
                                            <div class="msg__content video-p-sub">Dicta quidem sunt adipisci</div>
                                        </div>
                                    </div>
                                    <div class="mensaje  animacion" style="--delay: .4s">
                                        <div class="author-img__envoltura video-author video-p">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                            <path d="M20 6L9 17l-5-5" />
                                            </svg>
                                            <img class="author-img" src="https://images.pexels.com/photos/1870163/pexels-photo-1870163.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                                        </div>
                                        <div class="msg-wrapper">
                                            <div class="msg__name video-p-name"> Thomas Hope</div>
                                            <div class="msg__content video-p-sub"> recusandae doloremque aperiam alias molestias</div>
                                        </div>
                                    </div>
                                    <div class="mensaje  animacion" style="--delay: .5s">
                                        <div class="author-img__envoltura video-author video-p">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                            <path d="M20 6L9 17l-5-5" />
                                            </svg>
                                            <img class="author-img" src="https://images.pexels.com/photos/1680172/pexels-photo-1680172.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                                        </div>
                                        <div class="msg-wrapper">
                                            <div class="msg__name video-p-name"> Gerard Will</div>
                                            <div class="msg__content video-p-sub">Dicta quidem sunt adipisci</div>
                                        </div>
                                    </div>
                                    <div class="mensaje  animacion" style="--delay: .6s">
                                        <div class="author-img__envoltura video-author video-p">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                            <path d="M20 6L9 17l-5-5" />
                                            </svg>
                                            <img class="author-img" src="https://images.pexels.com/photos/2889942/pexels-photo-2889942.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                                        </div>
                                        <div class="msg-wrapper">
                                            <div class="msg__name video-p-name offline">Johny Wise</div>
                                            <div class="msg__content video-p-sub"> recusandae doloremque aperiam alias molestias</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-footer animacion" style="--delay: .1s">
                                <input type="text" placeholder="añade un comentario...">
                                </div>
                            </div>
        
                            <!--seccion videos relacionados-->
                            <div class="chat-vid__container">
                                <div class="chat-vid__title animacion" style="--delay: .3s">Videos relacionados</div>
                                <div class="chat-vid anim" style="--delay: .4s">
                                    <div class="chat-vid__wrapper">
                                        <img class="chat-vid__img" src="https://cdn.nohat.cc/thumb/f/720/3b55eddcfffa4e87897d.jpg" />
                                        <div class="chat-vid__content">
                                            <div class="chat-vid__name">lazaña con atún</div>
                                            <div class="chat-vid__by">Jordan Wise</div>
                                            <div class="chat-vid__info">125.908 views <span class="seperate"></span>2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-vid animacion" style="--delay: .5s">
                                    <div class="chat-vid__wrapper">
                                        <img class="chat-vid__img" src="https://cdn.nohat.cc/thumb/f/720/3b55eddcfffa4e87897d.jpg" />
                                        <div class="chat-vid__content">
                                            <div class="chat-vid__name">Lazaña pro</div>
                                            <div class="chat-vid__by">Jordan Wise</div>
                                            <div class="chat-vid__info">125.908 views <span class="seperate"></span>2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-vid__button animacion" style="--delay: .6s">Ver todos los videos relacionados (32)</div>
                            </div>
                        </div>
                </div>
                </main> <!--fin main-->
                
               
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/login.js')}}"></script>
    <script src="{{asset('js/app.js')}}"> </script>
    <script src="{{asset ('js/precargado.js')}}"></script>
    <script src="{{asset ('js/video_plataforma.js')}}"></script>
    
</body>
</html>