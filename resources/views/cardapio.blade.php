@extends('layouts.app')

@section('style')
    <style>
        :root {
            --cor-escuro-1: #2f2f2f;
            --cor-escuro-2: #6b6b6b;
            --cor-escuro-3: #a0a0a0;
            --cor-laranja: #ff5f00;
        }

        body {
            margin: 0;
            padding: 0;
            position: relative;
            z-index: 1;
        }

        .title {
            background-color: var(--cor-escuro-1);
            border-radius: 15px;
            padding: 10px;
        }
        
        .corpo {
            position: fixed; /* fixo na tela, não interfere no fluxo do conteúdo */
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background-image: url("{{ asset('storage/fundo-pesq.jpg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            filter: blur(5px);
            z-index: -1;
        }

        .menu-title {
            background-color: var(--cor-laranja);
            border-radius: 15px;
            cursor: pointer;
        }

        .menu-item-list {
            background-color: var(--cor-escuro-2);
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            padding: 10px;
        }

        .menu-item {
            background-color: var(--cor-escuro-2);
            cursor: pointer;
        }

        .text-laranja {
            color: var(--cor-laranja);
        }
    </style>
@endsection

@section('main')
    <div class="corpo"></div>
    <div class="container my-3">
        <div class="fs-1 text-white text-center title mb-3 d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <svg height="34px" viewBox="0 -960 960 960" width="34px" fill="#ffffff"><path d="M560-564v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-600q-38 0-73 9.5T560-564Zm0 220v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-380q-38 0-73 9t-67 27Zm0-110v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-490q-38 0-73 9.5T560-454ZM260-320q47 0 91.5 10.5T440-278v-394q-41-24-87-36t-93-12q-36 0-71.5 7T120-692v396q35-12 69.5-18t70.5-6Zm260 42q44-21 88.5-31.5T700-320q36 0 70.5 6t69.5 18v-396q-33-14-68.5-21t-71.5-7q-47 0-93 12t-87 36v394Zm-40 118q-48-38-104-59t-116-21q-42 0-82.5 11T100-198q-21 11-40.5-1T40-234v-482q0-11 5.5-21T62-752q46-24 96-36t102-12q58 0 113.5 15T480-740q51-30 106.5-45T700-800q52 0 102 12t96 36q11 5 16.5 15t5.5 21v482q0 23-19.5 35t-40.5 1q-37-20-77.5-31T700-240q-60 0-116 21t-104 59ZM280-494Z"/></svg>
            </div>
            <div>
                Cardápio <span class="text-laranja">Shalom</span>
            </div>
        </div>

        {{-- PORCOES --}}
        <div class="row menu-title text-center fs-2 py-3" data-bs-toggle="collapse" data-bs-target="#collapsePorcoes">
            <div class="d-flex justify-content-between">
                <div>
                    <svg  height="34px" viewBox="0 -960 960 960" width="34px" fill="#ffffff"><path d="M40-440v-80h81q14-127 103-216t216-103v-41h80v41q127 14 216 103t103 216h81v80H40Zm163-80h554q-14-103-92.5-171.5T480-760q-106 0-184.5 68.5T203-520Zm372 80H320v240h222q21 0 40.5-7t35.5-21l166-137q-8-8-18-12t-21-6q-17-3-33 1t-30 15l-108 87H400v-80h146l44-36q5-3 7.5-8t2.5-11q0-10-7.5-17.5T575-440Zm-335 0h-80v280h80v-280Zm0 360h-80q-33 0-56.5-23.5T80-160v-280q0-33 23.5-56.5T160-520h415q85 0 164 29t127 98l27 41-223 186q-27 23-60 34.5T542-120H309q-11 18-29 29t-40 11Zm240-440Z"/></svg>
                </div>
                <div>
                    <span class="text-white">PORÇÕES</span>
                </div>
                <div></div>
            </div>
        </div>
        <div class="collapse menu-item-list" id="collapsePorcoes">
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 1
                </div>
                <div>
                    R$ 10,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 2
                </div>
                <div>
                    R$ 20,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 3
                </div>
                <div>
                    R$ 30,00
                </div>
            </div>
        </div>

        <div class="my-5"></div>

        {{-- REFEICAO --}}
        <div class="row menu-title text-center fs-2 py-3" data-bs-toggle="collapse" data-bs-target="#collapseRefeicao">
            <div class="d-flex justify-content-between">
                <div>
                    <svg height="34px" viewBox="0 -960 960 960" width="34px" fill="#e3e3e3"><path d="M480-28 346-160H160v-186L28-480l132-134v-186h186l134-132 134 132h186v186l132 134-132 134v186H614L480-28Zm0-112 80-80v-148q-26-15-43-50.5T500-500q0-58 26-99t64-41q37 0 63.5 41t26.5 99q0 47-17 82.5T620-368v128h100v-140l100-100-100-100v-140H580L480-820 380-720H240v140L140-480l100 100v140h100v-160q-26-6-43-27.5T280-477v-163h40v151h30v-151h40v151h30v-151h40v163q0 28-17 49.5T400-400v180l80 80Zm0-340Z"/></svg>
                </div>
                <div>
                    <span class="text-white">REFEIÇÕES</span>
                </div>
                <div></div>
            </div>
        </div>
        <div class="collapse menu-item-list" id="collapseRefeicao">
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 1
                </div>
                <div>
                    R$ 10,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 2
                </div>
                <div>
                    R$ 20,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 3
                </div>
                <div>
                    R$ 30,00
                </div>
            </div>
        </div>

        <div class="my-5"></div>

        {{-- CERVEJAS --}}
        <div class="row menu-title text-center fs-2 py-3" data-bs-toggle="collapse" data-bs-target="#collapseCerveja">
            <div class="d-flex justify-content-between">
                <div>
                    <svg height="34px" viewBox="0 -960 960 960" width="34px" fill="#ffffff"><path d="M320-200h280v-400h-80q-28 0-46 14t-43 41q-20 22-46.5 45.5T320-465v265Zm-80 80v-346q-52-14-86-56t-34-98q0-53 30.5-94t78.5-57q23-48 68.5-78T400-879q35 0 65.5 12t55.5 32q10-2 19-3.5t20-1.5q66 0 113 47t47 113q0 22-5.5 42T698-600h62q33 0 56.5 23.5T840-520v240q0 33-23.5 56.5T760-200h-80v80H240Zm-40-500q0 33 23.5 56.5T280-540q32 0 54.5-21t46.5-47q25-27 56.5-49.5T520-680h120q0-33-23.5-56.5T560-760q-25 0-42 6.5l-17 6.5-31-26q-11-9-28.5-17.5T400-799q-32 0-58.5 17T301-736l-14 30-32 11q-25 8-40 28.5T200-620Zm480 340h80v-240h-80v240Zm-360 80h280-280Z"/></svg>
                </div>
                <div>
                    <span class="text-white">CERVEJAS</span>
                </div>
                <div></div>
            </div>
        </div>
        <div class="collapse menu-item-list" id="collapseCerveja">
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 1
                </div>
                <div>
                    R$ 10,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 2
                </div>
                <div>
                    R$ 20,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 3
                </div>
                <div>
                    R$ 30,00
                </div>
            </div>
        </div>

        <div class="my-5"></div>

        {{-- BEBIDAS --}}
        <div class="row menu-title text-center fs-2 py-3" data-bs-toggle="collapse" data-bs-target="#collapseBebidas">
            <div class="d-flex justify-content-between">
                <div>
                    <svg height="34px" viewBox="0 -960 960 960" width="34px" fill="#ffffff"><path d="M279-80q-31 0-53.5-20.5T200-151l-80-729h720l-80 729q-3 30-25.5 50.5T681-80H279Zm-43-480 44 400h400l44-400H236Zm-10-80h508l16-160H210l16 160Zm254 360q-14 0-24-10t-10-24q0-15 8.5-34.5T480-393q17 25 25.5 44.5T514-314q0 14-10 24t-24 10Zm0 80q48 0 81-33t33-81q0-41-26.5-89T480-520q-61 69-87.5 117T366-314q0 48 33 81t81 33Zm-244 40h488-488Z"/></svg>
                </div>
                <div>
                    <span class="text-white">BEBIDAS / SUCOS</span>
                </div>
                <div></div>
            </div>
        </div>
        <div class="collapse menu-item-list" id="collapseBebidas">
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 1
                </div>
                <div>
                    R$ 10,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 2
                </div>
                <div>
                    R$ 20,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 3
                </div>
                <div>
                    R$ 30,00
                </div>
            </div>
        </div>

        <div class="my-5"></div>

        {{-- CAIPIRINHAS --}}
        <div class="row menu-title text-center fs-2 py-3" data-bs-toggle="collapse" data-bs-target="#collapseCaipirinhas">
            <div class="d-flex justify-content-between">
                <div>
                    <svg height="34px" viewBox="0 -960 960 960" width="34px" fill="#ffffff"><path d="M240-200v-520L120-880h600v120h80q33 0 56.5 23.5T880-680v200q0 33-23.5 56.5T800-400h-80v200H240Zm80-80h320v-520H280l40 52v468Zm400-200h80v-200h-80v200ZM480-320h120v-440H480v440ZM120-80v-80h720v80H120Zm340-460Z"/></svg>
                </div>
                <div>
                    <span class="text-white">CAIPIRINHAS</span>
                </div>
                <div></div>
            </div>
        </div>
        <div class="collapse menu-item-list" id="collapseCaipirinhas">
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 1
                </div>
                <div>
                    R$ 10,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 2
                </div>
                <div>
                    R$ 20,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 3
                </div>
                <div>
                    R$ 30,00
                </div>
            </div>
        </div>

        <div class="my-5"></div>

        {{-- DRINKS --}}
        <div class="row menu-title text-center fs-2 py-3" data-bs-toggle="collapse" data-bs-target="#collapseDrinks">
            <div class="d-flex justify-content-between">
                <div>
                    <svg height="34px" viewBox="0 -960 960 960" width="34px" fill="#ffffff"><path d="M240-120v-80h200v-200L120-760v-80h720v80L520-400v200h200v80H240Zm58-560h364l72-80H226l72 80Zm182 204 111-124H369l111 124Zm0 0Z"/></svg>
                </div>
                <div>
                    <span class="text-white">DRINKS</span>
                </div>
                <div></div>
            </div>
        </div>
        <div class="collapse menu-item-list" id="collapseDrinks">
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 1
                </div>
                <div>
                    R$ 10,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 2
                </div>
                <div>
                    R$ 20,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 3
                </div>
                <div>
                    R$ 30,00
                </div>
            </div>
        </div>

        <div class="my-5"></div>

        {{-- QUENTES --}}
        <div class="row menu-title text-center fs-2 py-3" data-bs-toggle="collapse" data-bs-target="#collapseQuentes">
            <div class="d-flex justify-content-between">
                <div>
                    <svg height="34px" viewBox="0 -960 960 960" width="34px" fill="#FFFFFF"><path d="M240-400q0 52 21 98.5t60 81.5q-1-5-1-9v-9q0-32 12-60t35-51l113-111 113 111q23 23 35 51t12 60v9q0 4-1 9 39-35 60-81.5t21-98.5q0-50-18.5-94.5T648-574q-20 13-42 19.5t-45 6.5q-62 0-107.5-41T401-690q-39 33-69 68.5t-50.5 72Q261-513 250.5-475T240-400Zm240 52-57 56q-11 11-17 25t-6 29q0 32 23.5 55t56.5 23q33 0 56.5-23t23.5-55q0-16-6-29.5T537-292l-57-56Zm0-492v132q0 34 23.5 57t57.5 23q18 0 33.5-7.5T622-658l18-22q74 42 117 117t43 163q0 134-93 227T480-80q-134 0-227-93t-93-227q0-129 86.5-245T480-840Z"/></svg>
                </div>
                <div>
                    <span class="text-white">BEBIDAS QUENTES</span>
                </div>
                <div></div>
            </div>
        </div>
        <div class="collapse menu-item-list" id="collapseQuentes">
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 1
                </div>
                <div>
                    R$ 10,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 2
                </div>
                <div>
                    R$ 20,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 3
                </div>
                <div>
                    R$ 30,00
                </div>
            </div>
        </div>

        <div class="my-5"></div>

        {{-- WHISKY --}}
        <div class="row menu-title text-center fs-2 py-3" data-bs-toggle="collapse" data-bs-target="#collapseQuentes">
            <div class="d-flex justify-content-between">
                <div>
                    <svg height="34px" viewBox="0 -960 960 960" width="34px" fill="#FFFFFF"><path d="M279-80q-31 0-53.5-20T200-151l-80-729h720l-80 729q-3 31-25.5 51T681-80H279Zm-8-160 9 80h400l9-80H271Zm-8-80h435l52-480H210l53 480Zm8 160h418-418Z"/></svg>
                </div>
                <div>
                    <span class="text-white">BORBONS</span>
                </div>
                <div></div>
            </div>
        </div>
        <div class="collapse menu-item-list" id="collapseQuentes">
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 1
                </div>
                <div>
                    R$ 10,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 2
                </div>
                <div>
                    R$ 20,00
                </div>
            </div>
            <div class="menu-item d-flex justify-content-between fs-2 py-3 text-white">
                <div>
                    Item 3
                </div>
                <div>
                    R$ 30,00
                </div>
            </div>
        </div>

        <div class="my-5"></div>

    </div>
@endsection
