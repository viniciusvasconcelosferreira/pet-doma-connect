@extends('frontend.layouts.app')

@section('styles')
    <style>
        .bd-content-collection-2 {
            counter-reset: list;
            list-style: none;
            padding-left: 20px;
        }

        .bd-content-collection-2 li {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 26px;
            color: #667085;
        }

        .bd-content-collection-2 li:before {
            content: counter(list, upper-alpha) ") ";
            counter-increment: list;
        }

        .bd-content-collection-3 {
            list-style: inside;
            padding-left: 20px;
        }

        .bd-content-collection-3 li {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 26px;
            color: #667085;
        }
    </style>
@endsection

@section('content')
    <!-- Header Section Start -->
    @include('frontend.layouts.partials.header.header-alt')
    <!-- Header Section End -->

    <!-- Page Title Section Start -->
    @include('frontend.layouts.partials.page-title.page-title', ['title' => 'Privacy Policy', 'breadcrumb' => 'Privacy Policy'])
    <!-- Page Title Section End -->

    <div id="blog-details" class="blog-details section">
        <div class="blog-details-area">
            <div class="container">
                <div class="row">
                    <div class="blog-details-top">
                        <div class="mb-0">
                            <h3 class="bd-content-title">Política Privacidade</h3>
                            <p class="bd-content-text">A sua privacidade é importante para nós. É política
                                do Pet Doma respeitar a sua privacidade em relação a qualquer informação sua que
                                possamos coletar no site <a href="#">Pet Doma</a>, e outros sites que possuímos e
                                operamos.</p>
                        </div>
                        <div class="mb-0"><p class="bd-content-text">Solicitamos informações pessoais apenas quando
                                realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e
                                legais, com o seu conhecimento e consentimento. Também informamos por que estamos
                                coletando e como será usado.</p>
                        </div>
                        <div class="mb-0"><p class="bd-content-text">Apenas retemos as informações coletadas pelo tempo
                                necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos
                                dentro de meios comercialmente aceitáveis para evitar perdas e roubos, bem como acesso,
                                divulgação, cópia, uso ou modificação não autorizados.</p>
                        </div>
                        <div class="mb-0"><p class="bd-content-text">Não compartilhamos informações de identificação
                                pessoal publicamente ou com terceiros, exceto quando exigido por lei.</p>
                        </div>
                        <div class="mb-0"><p class="bd-content-text">O nosso site pode ter links para sites externos que
                                não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e
                                práticas desses sites e não podemos aceitar responsabilidade por suas respectivas
                                políticas de privacidade.</p>
                        </div>
                        <div class="mb-0"><p class="bd-content-text">Você é livre para recusar a nossa solicitação de
                                informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços
                                desejados.</p>
                        </div>
                        <div class="mb-0"><p class="bd-content-text">O uso continuado de nosso site será considerado
                                como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se
                                você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais,
                                entre em contato conosco.</p>
                        </div>
                        <div class="mb-0">
                            <ol class="bd-content-collection-3">
                                <li>O serviço Google AdSense que usamos para veicular publicidade usa um cookie
                                    DoubleClick para veicular anúncios mais relevantes em toda a Web e limitar o número
                                    de vezes que um determinado anúncio é exibido para você.
                                </li>
                                <li>Para mais informações sobre o Google AdSense, consulte as FAQs oficiais sobre
                                    privacidade do Google AdSense.
                                </li>
                                <li>Utilizamos anúncios para compensar os custos de funcionamento deste site e fornecer
                                    financiamento para futuros desenvolvimentos. Os cookies de publicidade
                                    comportamental usados por este site foram projetados para garantir que você forneça
                                    os anúncios mais relevantes sempre que possível, rastreando anonimamente seus
                                    interesses e apresentando coisas semelhantes que possam ser do seu interesse.
                                </li>
                                <li>Vários parceiros anunciam em nosso nome e os cookies de rastreamento de afiliados
                                    simplesmente nos permitem ver se nossos clientes acessaram o site através de um dos
                                    sites de nossos parceiros, para que possamos creditá-los adequadamente e, quando
                                    aplicável, permitir que nossos parceiros afiliados ofereçam qualquer promoção que
                                    pode fornecê-lo para fazer uma compra.
                                </li>
                            </ol>
                        </div>
                        <div class="mb-0">
                            <h3 class="bd-content-title">Compromisso do Usuário</h3>
                            <p class="bd-content-text">O usuário se compromete a fazer uso adequado dos conteúdos e da
                                informação que o Pet Doma oferece no site e com caráter enunciativo, mas não
                                limitativo:</p>
                        </div>
                        <div class="mb-0">
                            <ol class="bd-content-collection-2">
                                <li>Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem
                                    pública;
                                </li>
                                <li>Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, bbebbet ou
                                    azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os
                                    direitos humanos;
                                </li>
                                <li>Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do Pet Doma,
                                    de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos
                                    ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar
                                    danos anteriormente mencionados.
                                </li>
                            </ol>
                        </div>
                        <div class="mb-0">
                            <h3 class="bd-content-title">Mais informações</h3>
                            <p class="bd-content-text">Esperemos que esteja esclarecido e, como mencionado
                                anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é
                                mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa
                                em nosso site.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section Start -->
    @include('frontend.layouts.partials.footer.footer-alt')
    <!-- Footer Section End -->
@endsection