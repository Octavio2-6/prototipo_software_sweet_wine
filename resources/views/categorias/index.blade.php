@extends('welcome')

@section('categorias')

    <header>

        <nav class="bg-pink-950 fixed w-full z-20 top-0 border-b border-default">

            <div class="max-wight-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">

                    <img src="#logoImagem" class="h-7" alt="imagem-logo" />

                    <span class="self-center text-xl text-white text-heading font-semibold whitespace-nowrap">
                    
                        Sweet Wine
                
                    </span>
            
                </a>

                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 
                    w-10 h-10 justify-center text-sm text-body rounded-base md:hidden 
                    hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 
                    focus:ring-neutral-tertiary" aria-controls="navbar-default" aria-expanded="false"
                >

                    <span class="sr-only"></span>

                    <svg class="w-6 h-6" aria-hidden="true"  width="24" height="24" fill="none" 
                    viewBox="0 0 24 24">
                        
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" 
                            d="M5 7h14M5 12h14M5 17h14" />

                    </svg>
        
                </button>

                <div class="hidden w-full md:block md:w-auto" id="navbar-default">

                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base 
                        md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 text-white"
                    >

                        <li>

                            <a href="#inicio" class="block py-2 px-3 text-white md:p-0" aria-current="page">

                                Inicio

                            </a>

                        </li>
                    
                        <li>

                            <a href="#sobreNos" class="block py-2 px-3 text-white md:p-0" aria-current="page">

                                Saiba+

                            </a>

                        </li>

                        <li>

                            <a href="#login" class="block py-2 px-3 text-white md:p-0" aria-current="page">

                                Login

                            </a>
                        
                        </li>
            
                    </ul>

                </div>

            </div>

        </nav>

    </header>

    <main class="pt-24 px-4 max-wight-screen-xl mx-auto">

        <section class="text-center mb-16 mt-8">

            
            <h2 class="text-4xl font-bold text-white mb-6">Bem vindo ao Sweet Wine</h2>

            <p class="text-lg text-gray-300 mb-8 max-w-3xl mx-auto">
            
                O Sweet Wine é um web app criado para os amantes e degustadores de vinhos, que precisam de 
                uma alternativa digital para conseguir controlar seus estoques, avaliar os produtos e 
                compartilhar a sua experiência degustando a bebida com outros usuários. Não perca tempo e
                crie já a sua conta ou faça login para iniciar!
            
            </p>

            <div class="flex justify-center gap-4">

                <button type="button" class="text-white bg-pink-800 hover:bg-pink-900 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    
                    Criar minha conta
                
                </button>

                <button type="button" class="text-pink-300 border border-pink-800 hover:bg-pink-900 hover:text-white focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    
                    Explorar
                
                </button>

            </div>

        </section>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 pb-12">

            <!-- Card 1 -->
            <div class="block max-w-sm p-6 bg-pink-950 border border-pink-900 rounded-lg shadow hover:bg-pink-900">
                
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Controle seu Estoque</h5>
                
                <p class="font-normal text-gray-300">
                    
                    Gerencie sua adega digitalmente, saiba exatamente quais rótulos você possui e nunca mais perca o momento ideal para abrir aquela garrafa especial.
                
                </p>

            </div>

            <!-- Card 2 -->
            <div class="block max-w-sm p-6 bg-pink-950 border border-pink-900 rounded-lg shadow hover:bg-pink-900">
                
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Avalie os Produtos</h5>
                
                <p class="font-normal text-gray-300">
                    
                    Registre suas notas de degustação, aromas e sabores percebidos. Crie seu próprio diário de vinhos e lembre-se dos seus favoritos.
                
                </p>

            </div>

            <!-- Card 3 -->
            <div class="block max-w-sm p-6 bg-pink-950 border border-pink-900 rounded-lg shadow hover:bg-pink-900">
                
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Compartilhe Experiências</h5>
                
                <p class="font-normal text-gray-300">
                    
                    Conecte-se com outros enófilos, troque recomendações e descubra novos rótulos através das experiências da comunidade.
                
                </p>

            </div>

        </section>

    </main>

@endsection