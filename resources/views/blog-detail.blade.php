@extends('layouts.main')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mt-8">
                    <div class="blog-detail ">
                        <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                        <p class="mt-3">25 July , 2019</p>
                        <h3 class="mb-5">
                            Laravel conditional validation in a simple way</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis, alias in tenetur ut fugiat
                            vitae
                            sequi
                            quo ipsam possimus optio hic quia ipsum dolores voluptas reiciendis quidem id, beatae voluptate
                            ex
                            necessitatibus labore similique maxime eius. Recusandae dolores sit vitae rerum nobis quibusdam
                            nam
                            facilis,
                            magni debitis temporibus dicta, error aut repellat. Mollitia fugiat deleniti facilis molestias
                            aperiam
                            enim
                            veniam itaque odio consectetur maiores quo culpa iste facere debitis earum voluptatem, dicta
                            est. Culpa
                            fuga
                            obcaecati nam error, deserunt doloribus minus labore, repellat placeat sit optio nesciunt cum
                            at?
                            Repudiandae esse commodi dignissimos velit totam, impedit porro tempore quidem veritatis aliquam
                            necessitatibus architecto alias in, consectetur dicta, explicabo sit molestiae et laudantium.
                            Mollitia
                            hic
                            natus dolore ex eum qui quos repellat eaque, porro, laborum a iure illum unde quaerat. Eligendi
                            aspernatur
                            soluta quos necessitatibus voluptatum quibusdam, obcaecati sint minima molestiae eum nobis
                            inventore
                            quisquam fugit magni sunt quaerat reprehenderit tempore saepe accusantium cupiditate a facilis
                            voluptatibus
                            eveniet quia! Dolorum amet, esse repellat, minus iusto voluptatum sed magnam ea recusandae nemo
                            obcaecati
                            nobis explicabo molestiae, voluptatibus veritatis! Perspiciatis incidunt enim fugit. Consequatur
                            harum
                            corrupti iste autem sint iusto animi quibusdam necessitatibus ea perferendis nesciunt similique,
                            eos
                            cupiditate delectus eaque in maxime, quaerat laboriosam placeat impedit voluptatem! Quas animi
                            odit
                            distinctio nihil amet quibusdam vel dignissimos quae veniam, debitis non a dolorem excepturi
                            iste quo
                            aut
                            sunt voluptate consequuntur perferendis delectus fuga sit voluptatem eos. Libero non qui
                            pariatur quasi
                            quia
                            cumque cum vel expedita odio amet ipsum natus facere ducimus minima beatae dolorem, officiis
                            provident
                            soluta nihil quam fugiat. Ratione voluptas provident quasi officiis minima pariatur quo maiores
                            expedita
                            temporibus, doloremque veritatis aliquid harum quae non nihil quam? Aut qui dolor odio quis
                            numquam
                            libero
                            ab cumque. Illo quae laudantium dolorem omnis, magnam neque commodi esse deserunt, nulla
                            consequuntur
                            ullam.
                            In est omnis suscipit consequatur sint numquam, aut esse eius perspiciatis cupiditate sequi cum
                            ipsa
                            nihil
                            dolorum amet quod quis ratione. Dignissimos cupiditate mollitia omnis vero. Sunt molestiae modi
                            ullam
                            voluptates quos minus accusamus possimus atque omnis amet laudantium corrupti, quia perferendis
                            facere
                            quas
                            dolores praesentium dolore quidem vel eos doloribus neque! Porro quos error officiis, omnis non
                            velit
                            veniam, minus eum, a quo hic modi tempore sed quod maiores assumenda fugit autem minima maxime
                            quas!
                            Accusantium nam eveniet atque illo vel asperiores similique repudiandae non ut, veritatis ad
                            eaque nisi
                            ducimus labore commodi impedit. Odit sit sunt consequatur accusantium tempora eos perferendis
                            ullam
                            atque
                            vitae maiores, veniam fugiat commodi expedita nostrum eum modi architecto rem natus esse.
                            Repellendus
                            corrupti atque dolorum! Culpa ad perferendis temporibus dolorem! Voluptate veritatis quas eius
                            ab
                            deserunt,
                            perspiciatis dolore iste nobis tempore neque officia dolor eum ut officiis maiores minima
                            quibusdam sunt
                            qui
                            nostrum dolorum? Laboriosam, vero nostrum possimus tenetur velit repudiandae inventore
                            cupiditate ipsa
                            provident rem sapiente atque eos perferendis at ea nesciunt exercitationem expedita et soluta
                            fugit
                            earum
                            iusto voluptatum facere placeat? Molestias quam dolor laborum commodi similique sapiente hic
                            perspiciatis
                            quae ullam tempore dignissimos dolorum, dolore soluta nostrum, amet perferendis vitae enim!</p>
                    </div>

                </div>
                <div class="col-md-4 mt-8">
                    <div class="right-content">
                        <h3>Most Popular Posts</h3>

                        <div class="cardl">
                            <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                            <a href="{{('/blog-detail')}}">Laravel conditional validation in a simple way</a>
                        </div>
                        <div class="cardl">
                            <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                            <a href="{{('/blog-detail')}}">Positivity is the key</a>
                        </div>
                        <div class="cardl">
                            <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                            <a href="{{('/blog-detail')}}">Git Cheat Sheet for newbie and beginners</a>
                        </div>
                        <div class="cardl">
                            <img src="{{ asset('front-assets/img/blog4.jpg') }}" alt="">
                            <a href="{{('/blog-detail')}}">How to Use Facebook As A Powerful Election Tool</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
