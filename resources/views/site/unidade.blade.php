@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
	
	<div id="conteudo" class="">
        <div class="row text-center caixa">
            <div class="">  
                <h5 class="card-title"><span class=""> FAETEC - Unidade Volta Redonda </span></h5>
                <p>A Unidade da FAETEC ETE - Amaury Cesar Vieira localiza-se na Rua 1015, s/n, Volta Grande II, Volta Redonda/RJ, é
                composta de 4 prédios. contém um quadro de Funcionários sendo de Diretores, secretaria geral, Pedagogos, Auxiliares
                e Professores. Possui um estacionamento que tem capacidade para 15 carros, onde os funcionários podem guardar
                seus carros durante seu horário de trabalho.</p>   
                
                <img src="img/foto1.jpg" class="foto"> 
            
            </div>    
        </div>

        <h5 class="card-title center"><span class=""> Conheça estrutura da ETE - Amaury César Vieira </span></h5>                       

        <div class="row">         
            <div class="text-center caixa">
                <div class="">
                    <h5 class="card-title"><span class=""> SECRETÁRIA </span></h5>
                    <p>
                        É o setor da escola responsável pelos serviços de secretaria que realiza todas as funções destinadas a manter os
                        registros, os arquivos de documentação dos alunos e dos funcionários, além de comunicados e expedições para apoiar o
                        desenvolvimento do processo escolar, dando valor legal a toda documentação expedida com aval do secretário
                        responsável e da direção escolar.
                    </p> 
                    <img src="img/faetec2.jpg" class="foto">
                    
                </div>                       
            </div>            
        </div>   
        <div class="row">   
            <div class="text-center caixa ">
                <div class="">
                    <h5 class="card-title"><span class=""> INFORMÁTICA </span></h5>
                    <p>
                        Contém 6 laboratórios e Informática, sendo eles: Redes, montagem de manutenção e 4 com 20 computadores,
                        com capacidade para 40 alunos, sendo 2 em cada mesa.
                    </p>  
                    <img src="img/labinfo.jpg" alt="Informática" class="rounded mx-auto d-block foto"> 
                    
                </div>                      
            </div>                 
        </div>
        <div class="row">
            <div class="text-center caixa">
                <div class="">  
                    <h5 class="card-title"><span class="text-center"> BIBLIOTECA </span></h5>
                     <p>Possui uma biblioteca com grande acervo de livros para auxiliar os alunos em seus estudos</p>
                    <img src="img/Biblioteca.jpg" alt="Biblioteca" class="rounded mx-auto d-block foto"> 
                                   
                </div>
            </div>                         
        </div>
        <div class="row">     
            <div class="text-center caixa">
                <div class="">  
                    <h5 class="card-title"><span class="card-title center-align"> AUDITÓRIO </span></h5>
                    <p>Auditório com capacidade para mais de 50 pessoas.</p>
                    <img src="img/auditorio.jpg" alt="Auditório" class="rounded mx-auto d-block foto"> 
                       
                </div>     
            </div>                     
        </div>  
        <div class="row">                
            <div class="text-center caixa">
                <div class="">  
                    <h5 class="card-title"><span class=""> MULTIMIDIA </span></h5>
                    <p>Sala multimidia para videos aulas.</p>
                    <img src="img/Saladevideo.jpg" alt="Sala de video" class="rounded mx-auto d-block foto">
                      
                </div>       
            </div>
        </div>    
        <div class="row">     
            <div class="text-center caixa">
                <div class="">  
                    <h5 class="card-title"><span class=""> ESPAÇO DAS ARTES </span></h5>
                    <p>No prédio 3 fica localizada a sala de artes, onde o mesmo também é usado para os cursos FIC.</p>
                    <img src="img/artes.jpg" alt="Espaço de artes" class="rounded mx-auto d-block foto">
                         
                </div>                        
            </div>                 
        </div>
        <div class="row">     
            <div class="text-center caixa">
                <div class=""> 
                    <h5 class="card-title"><span class=""> ENSINO MÉDIO </span></h5>
                    <p>O Prédio 4 é do Ensino Médio, onde são realizados os 
                          cursos técnicos de Administração.</p>
                    <img src="img/faetec5.jpg" alt="Ensino médio" class="rounded mx-auto d-block foto" alt="...">
                    
                   
                </div>
            </div>                       
        </div>
	</div><!--Fim conteudo-->
@endsection   
