<?php 

$args_slide = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'category_name' => 'maispedidad',
);
$loop_slide = new WP_Query($args_slide);
$musicas = $loop_slide->posts;

$musica_one = $musicas[0];
$musica_one_id = $musica_one->ID;

$args_slide_promo = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'category_name' => 'promocao',
);
$loop_slide_promo = new WP_Query($args_slide_promo);
$promo = $loop_slide_promo->posts;
?>

<?php get_header(); ?>
    <section id="slide-top">
        <div  id="owl-top" class="owl-carousel owl-theme">
            <div class="item slide" style="height: 350px;background: linear-gradient(to top, rgba(127, 0, 255, 0.5), rgba(225, 0, 255, 0.1)), url(https://mironmahmud.com/ushno/assets/img/banner-1.jpg) center center / cover no-repeat">
                <h1>Rádio Cultura FM 97,3</h1>
                <p>A melhor Sintonia</p>
                <a href="https://www.youtube.com/channel/UCFjM2LD47oyd1H7MHWWDmog" target="new"> 
                    <button>Live no youtube</button>
                </a>
            </div>
            <div class="item slide" style="height: 350px;background:  linear-gradient(to top, rgba(127, 0, 255, 0.5), rgba(225, 0, 255, 0.1)), url('https://mironmahmud.com/ushno/assets/img/banner-3.jpg') center center / cover no-repeat;">
                <h1>Na Cultura só toca sucesso!</h1>
                <p>Se liga nas mais pedidas da semana</p>
                <a href="#mais-pedidas">
                    <button>As Melhores</button>
                </a>
            </div>
            <div class="item slide" style="height: 350px;background:  linear-gradient(to top, rgba(127, 0, 255, 0.5), rgba(225, 0, 255, 0.1)), url('https://images.pexels.com/photos/4057766/pexels-photo-4057766.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') center center / cover no-repeat;">
                <h1>ACOMPANHE AS NOTÍCIAS DE NOSSA REGIÃO</h1>
                <p>Cultura Noticia</p>
                <a href="https://culturanoticias.com.br/" target="new">
                    <button>Acesse o Portal</button>
                </a>
            </div>
        </div>
    </section>
    
    <section id="programacao">
       <div class="container">
            <h1 class="titulo-prog"><i class="far fa-clock mr-1"></i>Acompanhe a nossa programação</h1>
            <div class="hr">
                <div></div>
            </div>
            <ul id="semana" style="overflow-x:auto;" class="mt-1 mb-1">
                <li day="segunda" class="segunda btn-anuncio" >Segunda</li>
                <li day="terca" class="terca btn-anuncio" >Terça</li>
                <li day="quarta" class="quarta btn-anuncio" >Quarta</li>
                <li day="quinta" class="quinta btn-anuncio" >Quinta</li>
                <li day="sexta" class="sexta btn-anuncio" >Sexta</li>
                <li day="sabado" class="sabado btn-anuncio" >Sabado</li>
                <li day="domingo" class="domingo btn-anuncio" >Domingo</li>
            </ul>

            <div class="programacao-dia d-none"  id="segunda" style="overflow-x:auto;">
                <div class="owl-carousel owl-programacao owl-theme">
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                </div>
            </div>

            <div class="programacao-dia d-none"  id="terca" style="overflow-x:auto;">
                <div class="owl-carousel owl-programacao owl-theme">
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                </div>
            </div>

            <div class="programacao-dia d-none"  id="quarta" style="overflow-x:auto;">
                <div class="owl-carousel owl-programacao owl-theme">
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                </div>
            </div>
            
            <div class="programacao-dia d-none"  id="quinta" style="overflow-x:auto;">
                <div class="owl-carousel owl-programacao owl-theme">
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                </div>
            </div>

            <div class="programacao-dia d-none"  id="sexta" style="overflow-x:auto;">
                <div class="owl-carousel owl-programacao owl-theme">
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>

                </div>
            </div>

            <div class="programacao-dia d-none"  id="sabado" style="overflow-x:auto;">
                <div class="owl-carousel owl-programacao owl-theme">
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                </div>
            </div>

            <div class="programacao-dia d-none"  id="domingo" style="overflow-x:auto;">
                <div class="owl-programacao owl-carousel owl-theme">
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                    <div class="cards-programacao item">
                        <div class="imagem">
                            <div class="overlay"></div>
                            <img src="https://source.unsplash.com/random" alt="">
                            <div class="texto">
                                <p>08:00 - 10:00</p>
                                <p>Nome Programa</p>
                            </div>
                            <div class="mini-fotos">
                            <img src="https://source.unsplash.com/250x250/?person" alt="">
                            </div>
                        </div>
                        <p>Nome Locutor</p>
                    </div>
                </div>
            </div>
       </div>
    </section>

    <section id="social" class="mt-2">
        <div class="container">
            <h1 class="titulo-prog"><i class="fas fa-bullhorn mr-2"></i>Acompanhe nossas redes sociais</h1>
            <div class="hr">
                <div></div>
            </div>
            
            <div class="box-rede-social">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/97.3culturafm" target="new">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/culturafm97.3/" target="new">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://api.whatsapp.com/send/?phone=%2B5567999991375&text&app_absent=0" target="new">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCFjM2LD47oyd1H7MHWWDmog" target="new">
                        <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://play.google.com/store/apps/details?id=com.SistemaPlugdeComunica__oLTDA.radioculturams" target="new">
                            <i class="fab fa-android"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://apps.apple.com/us/app/rdio-cultura-chapadao-do-sul/id1562857636#?platform=iphone" target="new">
                            <i class="fab fa-apple"></i>
                        </a>
                    </li>
                </ul>
            </div>
          
        </div>
    </section>

    <section id="promocao" class="mt-2">
        <div class="container">
            <h1 class="titulo-prog"><i class="far fa-star mr-1"></i>Acompanhe a nossas promoções</h1>
            <div class="hr">
                <div></div>
            </div>
            <div class="box-promocoes mt-1">
                <div id="owl-promo" class="owl-carousel owl-theme">
                    <?php  for( $i = 0; $i < count( $promo ); $i++ ): ?>
                    <div class="card-promocao item">
                        <a  href="<?php echo get_permalink( $promo[$i]->ID ); ?>" >
                            <img src="<?php echo get_the_post_thumbnail_url( $promo[$i]->ID );?>" alt="promoção">
                        </a>
                        <p><?php echo get_the_title($promo[$i]->ID ); ?></p>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="mais-pedidas" class="mt-2">
        <div class="container">
            <h1 class="titulo-prog"><i class="fas fa-headphones mr-1"></i></i>As mais Pedidas</h1>
            <div class="hr">
                <div></div>
            </div>

            <div class="box-mais-pedidas">
                <div class="box-card-principal">
                    <a href="<?php echo get_permalink( $musica_one_id ); ?>">
                        <div class="card-principal">
                            <img src="<?php echo get_the_post_thumbnail_url( $musica_one_id );?>" alt="">
                            <div class="overlay-card">
                                <p><?php echo get_the_title( $musica_one_id ); ?></p>
                            </div>
                        </div>
                    </a>
                    
                </div>

                <div class="box-card-secundario">
                    <?php for( $i = 1 ; $i < count( $musicas ); $i++ )  :?>
                        <a href="<?php echo get_permalink( $musicas[$i]->ID ); ?>">
                            <div class="card-secundario">
                                <img src="<?php echo get_the_post_thumbnail_url( $musicas[$i]->ID );?>" alt="">
                                <div class="overlay-card-secundario">
                                    <p><?php echo get_the_title($musicas[$i]->ID ); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endfor; ?>
                </div>

            </div>
          
        </div>
    </section>

    <section id="equipe" class="mt-2">
        <div class="container">
            <h1 class="titulo-prog"><i class="fas fa-users mr-1"></i>Conheça nossa equipe!</h1>
            <div class="hr">
                <div></div>
            </div>

            <div class="box-equipe mt-2">
                <div id="owl-equipe" class="owl-carousel owl-theme">
                    <div class="card-quipe item">
                        <img src="https://images.pexels.com/photos/7242958/pexels-photo-7242958.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        <p>Nome Locutor</p>
                    </div>

                    <div class="card-quipe item">
                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                        <p>Nome Locutor</p>
                    </div>

                    <div class="card-quipe item">
                        <img src="https://images.pexels.com/photos/3671083/pexels-photo-3671083.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                        <p>Nome Locutor</p>
                    </div>

                    <div class="card-quipe item">
                        <img src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                        <p>Nome Locutor</p>
                    </div>

                    <div class="card-quipe item">
                        <img src="https://images.pexels.com/photos/1239288/pexels-photo-1239288.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        <p>Nome Locutor</p>
                    </div>

                    <div class="card-quipe item">
                        <img src="https://images.pexels.com/photos/775358/pexels-photo-775358.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        <p>Nome Locutor</p>
                    </div>
                </div>
            </div>
          
        </div>
    </section>

    <section id="sobre">
        <div class="container">
            <div class="box-sobre">
                <div class="logo">
                    <img src="http://plugexemplo.esy.es/wp-content/uploads/2021/08/LOGO-PNG.png" alt="logo">
                </div>
                <div class="texto-sobre">
                    <h1>Sobre nos</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugiat totam delectus in velit enim expedita aliquam impedit reprehenderit necessitatibus delectus velit illo corrupti dolor cum. accusamus sint autem hic nisi natus libero veniam soluta eaque dolorem laboriosam obcaecati dolorum unde Rerum recusandae minus facilis!</p>
                    <br>
                    <p>Apart from loud and filtered sound quality we have massive coverage of local and global loyal listenership by the highest responded programs round the week.</p>
                    <p>desde 1995</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contato">
        <div class="container">
            <div class="box-contato">
                <div class="canais-de-atendimento">
                    <p>Contato</p>
                    <h1>Canais de</h1>
                    <h1>Atendimento</h1>
                    <div class="endereco">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <div class="box-endereco">
                            <p>Endereço</p>
                            <p class="contato-p">Rua: tal tal tal</p>
                        </div>
                    </div>
                    <div class="endereco">
                        <i class="fas fa-mobile-alt mr-2"></i>
                        <div class="box-endereco">
                            <p>Telefone | WhatsApp</p>
                            <p class="contato-p">+55(99) 9 3333-3333</p>
                            <p class="contato-p">+55(99) 9 9999-9999</p>
                        </div>
                    </div>
                    <div class="endereco">
                        <i class="far fa-envelope mr-2"></i>
                        <div class="box-endereco">
                            <p>E-mail</p>
                            <p class="contato-p">contato@dominio.com.br</p>
                        </div>
                    </div>
                    
                </div>
                <div class="formulario">
                    <p>Contato</p>
                    <h1>Fale Conosco</h1>
                    <p>Envie uma mensagem quem em breve lhe atendemos</p>
                    <form action="">
                        <label for="">Nome:</label>
                        <input type="text">
                        <label for="">Email</label>
                        <input type="text">
                        <label for="">Mensagem</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <div class="ajust-btn">
                            <button type="submit">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="volume-player">
        <div class="box-volume">
            <div class="box-progress">
                <div id="menos-e-mais" class="volume">

                </div>
            </div>
        </div>
        <div class="box-muted">
            <i class="fas fa-volume-up"></i>
        </div>
    </section>
<?php get_footer(); ?>
