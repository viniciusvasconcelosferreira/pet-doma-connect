@extends('frontend.layouts.app')

@section('content')
    <!-- Header Section Start -->
    @include('frontend.layouts.partials.header.header-alt')
    <!-- Header Section End -->

    <!-- Page Title Section Start -->
    @include('frontend.layouts.partials.page-title.page-title', ['title' => 'Terms & Conditions', 'breadcrumb' => 'Terms & Conditions'])
    <!-- Page Title Section End -->

    <div id="blog-details" class="blog-details section">
        <div class="blog-details-area">
            <div class="container">
                <div class="row">
                    <div class="blog-details-top">
                        <div class="mb-0">
                            <h3 class="bd-content-title">1. Termos</h3>
                            <p class="bd-content-text">Ao acessar ao site <a href="#">Pet Doma</a>, concorda em cumprir
                                estes termos de
                                serviço, todas as leis e
                                regulamentos aplicáveis e concorda que é responsável pelo cumprimento de todas as leis
                                locais aplicáveis. Se você não concordar com algum desses termos, está proibido de usar
                                ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de
                                direitos autorais e marcas comerciais aplicáveis.</p>
                        </div>
                        <div class="mb-0">
                            <h3 class="bd-content-title">2. Uso de Licença</h3>
                            <p class="bd-content-text">É concedida permissão para baixar temporariamente uma cópia dos
                                materiais (informações ou software) no site Pet Doma , apenas para visualização
                                transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma
                                transferência de título e, sob esta licença, você não pode: </p>
                        </div>
                        <div class="mb-0">
                            <ol class="bd-content-collection">
                                <li>modificar ou copiar os materiais;</li>
                                <li>usar os materiais para qualquer finalidade comercial ou para exibição pública
                                    (comercial ou não comercial);
                                </li>
                                <li>tentar descompilar ou fazer engenharia reversa de qualquer software contido no site
                                    Pet Doma;
                                </li>
                                <li>remover quaisquer direitos autorais ou outras notações de propriedade dos materiais;
                                    ou
                                </li>
                                <li>transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer
                                    outro servidor.
                                </li>
                            </ol>
                        </div>
                        <div class="mb-0">
                            <p class="bd-content-text">
                                Esta licença será automaticamente rescindida se você violar alguma dessas restrições e
                                poderá ser rescindida por Pet Doma a qualquer momento. Ao encerrar a visualização desses
                                materiais ou após o término desta licença, você deve apagar todos os materiais baixados
                                em sua posse, seja em formato eletrónico ou impresso.
                            </p>
                        </div>
                        <div class="mb-0">
                            <h3 class="bd-content-title">3. Isenção de responsabilidade</h3>
                            <ol class="bd-content-collection">
                                <li>Os materiais no site da Pet Doma são fornecidos 'como estão'. Pet Doma não oferece
                                    garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras
                                    garantias, incluindo, sem limitação, garantias implícitas ou condições de
                                    comercialização, adequação a um fim específico ou não violação de propriedade
                                    intelectual ou outra violação de direitos.
                                </li>
                                <li>Além disso, o Pet Doma não garante ou faz qualquer representação relativa à
                                    precisão, aos resultados prováveis ou à confiabilidade do uso dos materiais em seu
                                    site ou de outra forma relacionado a esses materiais ou em sites vinculados a este
                                    site.
                                </li>
                            </ol>
                        </div>
                        <div class="mb-0">
                            <h3 class="bd-content-title">4. Limitações</h3>
                            <p class="bd-content-text">Em nenhum caso o Pet Doma ou seus fornecedores serão responsáveis
                                por quaisquer danos
                                (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos
                                negócios) decorrentes do uso ou da incapacidade de usar os materiais em Pet Doma, mesmo
                                que Pet Doma ou um representante autorizado da Pet Doma tenha sido notificado oralmente
                                ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem
                                limitações em garantias implícitas, ou limitações de responsabilidade por danos
                                conseqüentes ou incidentais, essas limitações podem não se aplicar a você.</p>
                        </div>
                        <div class="mb-0">
                            <h3 class="bd-content-title">5. Precisão dos materiais</h3>
                            <p class="bd-content-text">Os materiais exibidos no site da Pet Doma podem incluir erros
                                técnicos, tipográficos ou fotográficos. Pet Doma não garante que qualquer material em
                                seu site seja preciso, completo ou atual. Pet Doma pode fazer alterações nos materiais
                                contidos em seu site a qualquer momento, sem aviso prévio. No entanto, Pet Doma não se
                                compromete a atualizar os materiais.</p>
                        </div>
                        <div class="mb-0">
                            <h3 class="bd-content-title">6. Links</h3>
                            <p class="bd-content-text">O Pet Doma não analisou todos os sites vinculados ao seu site e
                                não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link
                                não implica endosso por Pet Doma do site. O uso de qualquer site vinculado é por conta e
                                risco do usuário.</p>
                        </div>
                        <div class="mb-0">
                            <h3 class="bd-content-title">Modificações</h3>
                            <p class="bd-content-text">O Pet Doma pode revisar estes termos de serviço do site a
                                qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado
                                à versão atual desses termos de serviço.</p>
                        </div>
                        <div class="mb-0">
                            <h3 class="bd-content-title">Lei aplicável</h3>
                            <p class="bd-content-text">Estes termos e condições são regidos e interpretados de acordo
                                com as leis do Pet Doma e você se submete irrevogavelmente à jurisdição exclusiva dos
                                tribunais naquele estado ou localidade.</p>
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