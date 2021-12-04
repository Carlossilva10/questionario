<?php

if(isset($_POST['submit1'])&& isset($_POST['submit2'])&& isset($_POST['submit3'])&& isset($_POST['submit4'])&&
isset($_POST['submit5'])&& isset($_POST['submit6'])&& isset($_POST['submit7'])&& isset($_POST['submit8'])&&
isset($_POST['submit9'])&& isset($_POST['submit10'])&& isset($_POST['submit11'])&& isset($_POST['submit12'])&&
isset($_POST['submit13'])&& isset($_POST['submit14'])&& isset($_POST['submit15'])&& isset($_POST['submit16'])&&
isset($_POST['submit17'])&& isset($_POST['submit18'])&& isset($_POST['submit19'])&& isset($_POST['submit20'])&&
isset($_POST['submit21']))
{

 

include_once('config.php');	

$totalscore = $_POST['totalscore'];
$scoreinfo = $_POST['scoreinfo'];

$question_one = $_POST['question-1'];
$question_two = $_POST['question-2'];
$question_three = $_POST['question-3'];
$question_four = $_POST['question-4'];
$question_five = $_POST['question-5'];
$question_six = $_POST['question-6'];
$question_seven = $_POST['question-7'];
$question_eigth = $_POST['question-8'];
$question_nine = $_POST['question-9'];
$question_ten = $_POST['question-10'];
$question_eleven = $_POST['question-11'];
$question_twelve = $_POST['question-12'];
$question_thirteen = $_POST['question-13'];
$question_fourteen = $_POST['question-14'];
$question_fifteen = $_POST['question-15'];
$question_sixteen = $_POST['question-16'];
$question_seventeen = $_POST['question-17'];
$question_eighteen = $_POST['question-18'];
$question_nineteen = $_POST['question-19'];
$question_twenty = $_POST['question-20'];
$question_twenty_one = $_POST['question-21'];




 
$result = mysqli_query($conexao, "INSERT INTO questionario(question-1,question-2,question-3,
question-4,question-5,question-6,question-7,question-8,question-9,question-10,question-11,
question-12,question-13,question-14,question-15,question-16,question-17,question-18,
question-19,question-20,question-21)
VALUES ('$question_one','$question_two' ,'$question_three','$question_four' ,'$question_five' ,'$question_six','$question_seven' ,
'$question_eigth' ,'$question_nine' ,'$question_ten' ,'$question_eleven','$question_twelve' ,
'$question_thirteen','$question_fourteen','$question_fifteen','$question_sixteen','$question_seventeen' ,
'$question_eighteen','$question_nineteen' ,'$question_twenty','$question_twenty_one'");


}


?>


<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website Template with Sticky Sidebar</title>
    <meta name="description" content="Free responsive website HTML theme with sticky sidebar for both desktop and mobile. ">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styleQ.css">
    <script src="js/script.js">


var answers = {};

var question_one = document.getElementById('question-1');
var question_two = document.getElementById('question-2');
var question_three = document.getElementById('question-3');
var question_four = document.getElementById('question-4');
var question_five = document.getElementById('question-5');
var question_six = document.getElementById('question-6');
var question_seven = document.getElementById('question-7');
var question_eight = document.getElementById('question-8');
var question_nine = document.getElementById('question-9');
var question_ten = document.getElementById('question-10');
var question_eleven = document.getElementById('question-11');
var question_twelve = document.getElementById('question-12');
var question_thirteen = document.getElementById('question-13');
var question_fourteen = document.getElementById('question-14');
var question_fifteen = document.getElementById('question-15');
var question_sixteen = document.getElementById('question-16');
var question_seventeen = document.getElementById('question-17');
var question_eighteen = document.getElementById('question-18');
var question_nineteen = document.getElementById('question-19');
var question_twenty = document.getElementById('question-20');
var question_twenty_one = document.getElementById('question-21');


function storeAnswer(question_number, event){
    if(event.target.type === 'radio'){
        console.log(event.target.value);
        answers['question'+question_number] = parseInt(event.target.value);
        console.log(answers);
    }
}

question_one.addEventListener('click', function(event){
    storeAnswer(1, event)
})
question_two.addEventListener('click', function(event){
    storeAnswer(2, event)
})
question_three.addEventListener('click', function(event){
    storeAnswer(3, event)
})
question_four.addEventListener('click', function(event){
    storeAnswer(4, event)
})
question_five.addEventListener('click', function(event){
    storeAnswer(5, event)
})
question_six.addEventListener('click', function(event){
    storeAnswer(6, event)
})
question_seven.addEventListener('click', function(event){
    storeAnswer(7, event)
})
question_eight.addEventListener('click', function(event){
    storeAnswer(8, event)
})
question_nine.addEventListener('click', function(event){
    storeAnswer(9, event)
})
question_ten.addEventListener('click', function(event){
    storeAnswer(10, event)
})
question_eleven.addEventListener('click', function(event){
    storeAnswer(11, event)
})
question_twelve.addEventListener('click', function(event){
    storeAnswer(12, event)
})
question_thirteen.addEventListener('click', function(event){
    storeAnswer(13, event)
})
question_fourteen.addEventListener('click', function(event){
    storeAnswer(14, event)
})
question_fifteen.addEventListener('click', function(event){
    storeAnswer(15, event)
})
question_sixteen.addEventListener('click', function(event){
    storeAnswer(16, event)
})
question_seventeen.addEventListener('click', function(event){
    storeAnswer(17, event)
})
question_eighteen.addEventListener('click', function(event){
    storeAnswer(18, event)
})
question_nineteen.addEventListener('click', function(event){
    storeAnswer(19, event)
})
question_twenty.addEventListener('click', function(event){
    storeAnswer(20, event)
})
question_twenty_one.addEventListener('click', function(event){
    storeAnswer(21, event)
})


function totalScore(){
    var total_score = 
    answers.question1+
    answers.question2+
    answers.question3+
    answers.question4+ 
    answers.question5+
    answers.question6+
    answers.question7+
    answers.question8+
    answers.question9+ 
    answers.question10+
    answers.question11+
    answers.question12+
    answers.question13+
    answers.question14+ 
    answers.question15+
    answers.question16+
    answers.question17+
    answers.question18+
    answers.question19+ 
    answers.question20+
    answers.question21;
    return total_score;
}

function getInfoBasedOnScore(){
    if(totalScore() <= 28){
        var score_info = "Aparentemente você esta com sintomas de Ansiedade. Ansiedade é um termo geral para vários distúrbios que causam nervosismo, medo, apreensão e preocupação. A ansiedade é uma reação que todo indivíduo experimenta diante de algumas situações do dia a dia, como falar em público, expectativa para datas importantes, entrevistas de emprego, vésperas de provas, exames de saúde entre outras. Acesse no menu as opções de atividades, alimentação, frases motivacionais eimagens divertidas para auxiliar e aliviar a ansiedade."
    } else if(totalScore() > 28 && totalScore() <= 56){
        var score_info = "Aparentemente você esta com sintomas de Stress. O stress é uma resposta fisiológica e comportamental normal a algo que aconteceu ou está para acontecer que nos faz sentir ameaçados ou um conjunto das perturbações orgânicas e psíquicas provocadas por vários estímulos ou agentes agressores, como o frio, uma doença infecciosa, ma emoção, um choque cirúrgico, condições de vida muito activa e trepidante que de alguma forma, perturba o nosso equilíbrio. Acesse no menu as opções de atividades, alimentação, frases motivacionais eimagens divertidas para auxiliar e aliviar o stress."
    } else if (totalScore() > 56){
        var score_info = "Aparentemente você esta com sintomas de Depressão. Depressão é uma doença psiquiátrica crônica, recorrente que produz alteração do humor,sentimentos constantes de tristeza profunda, apatia, perda de interesse em atividades antes prazerosas caracterizada por tristeza profunda, forte sentimento de desesperança. Acesse no menu as opções de atividades, alimentação, frases motivacionais, imagens divertidas para auxiliar, livros e sites para procurar profissionais que te ajudara para uma vida mais saudável."
    }

    return score_info;
}

var submit1 = document.getElementById('submit1');
var submit2 = document.getElementById('submit2');
var submit3 = document.getElementById('submit3');
var submit4 = document.getElementById('submit4');
var submit5 = document.getElementById('submit5');
var submit6 = document.getElementById('submit6');
var submit7 = document.getElementById('submit7');
var submit8 = document.getElementById('submit8');
var submit9 = document.getElementById('submit9');
var submit10 = document.getElementById('submit10');
var submit11 = document.getElementById('submit11');
var submit12 = document.getElementById('submit12');
var submit13 = document.getElementById('submit13');
var submit14 = document.getElementById('submit14');
var submit15 = document.getElementById('submit15');
var submit16 = document.getElementById('submit16');
var submit17 = document.getElementById('submit17');
var submit18 = document.getElementById('submit18');
var submit19 = document.getElementById('submit19');
var submit20 = document.getElementById('submit20');
var submit21 = document.getElementById('submit21');

function nextQuestion(question_number){
    var current_question_number = question_number - 1;
    var question_number = question_number.toString();
    var current_question_number = current_question_number.toString();

    var el = document.getElementById('question-'+question_number);
    var el2 = document.getElementById('question-'+current_question_number);

    el.style.display = "block";
    el2.style.display = "none";
}

submit1.addEventListener('click', function(){
    nextQuestion(2);
    growProgressBar('4,80%');
})
submit2.addEventListener('click', function(){
    nextQuestion(3);
    growProgressBar('9,56%');
})
submit3.addEventListener('click', function(){
    nextQuestion(4);
    growProgressBar('14,32%');
})
submit4.addEventListener('click', function(){
    nextQuestion(5);
    growProgressBar('19,08%');
})
submit5.addEventListener('click', function(){
    nextQuestion(6);
    growProgressBar('23,84%');
})
submit6.addEventListener('click', function(){
    nextQuestion(7);
    growProgressBar('33,36%');
})
submit7.addEventListener('click', function(){
    nextQuestion(8);
    growProgressBar('38,12%');
})
submit8.addEventListener('click', function(){
    nextQuestion(9);
    growProgressBar('42,88%');
})
submit9.addEventListener('click', function(){
    nextQuestion(10);
    growProgressBar('47,64%');
})
submit10.addEventListener('click', function(){
    nextQuestion(11);
    growProgressBar('52,40%');
})
submit11.addEventListener('click', function(){
    nextQuestion(12);
    growProgressBar('57,16%');
})
submit12.addEventListener('click', function(){
    nextQuestion(13);
    growProgressBar('61,92%');
})
submit13.addEventListener('click', function(){
    nextQuestion(14);
    growProgressBar('66,68%');
})
submit14.addEventListener('click', function(){
    nextQuestion(15);
    growProgressBar('71,44%');
})
submit15.addEventListener('click', function(){
    nextQuestion(16);
    growProgressBar('76,20%');
})
submit16.addEventListener('click', function(){
    nextQuestion(17);
    growProgressBar('80,96%');
})
submit17.addEventListener('click', function(){
    nextQuestion(18);
    growProgressBar('85,72%');
})
submit18.addEventListener('click', function(){
    nextQuestion(19);
    growProgressBar('90,48%');
})
submit19.addEventListener('click', function(){
    nextQuestion(20);
    growProgressBar('95,24%');
})
submit20.addEventListener('click', function(){
    nextQuestion(21);
    growProgressBar('100%');
})
submit21.addEventListener('click', function(){
    nextQuestion(22);
})
submit21.addEventListener('click', function(){
    document.getElementById("printtotalscore").innerHTML = totalScore();
    document.getElementById("printscoreinfo").innerHTML = getInfoBasedOnScore();
})

function growProgressBar(percentage_width){
    var bar = document.getElementById("progress_bar");
    bar.style.width = percentage_width;
}



	</script>

<!-- Importante para habilitar os recursos de Responsividade em conjunto com o CSS -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
  		        
  		<link rel="stylesheet" href="css/bootstrap.css">


<style>

body{color:black}

body{
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            
            text-align: center;
        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }

</style>


</head>
<body>

<br><br><br>

       
	

<header>
	

	<div id="header Left">
		<img src="Imagens\bomhumor.png"  width="210" height="150" align= "left"> <br/> <br/>
		<h1><a href= "login.html">
			<div height="100" style="background-color: blue;line-height: 50px;text-align: right;">
				<p style="color: white">Login</p>
			</div>
			</a> </h1
</div


		<div id="headerRight">
			<nav>  
				<ul>
					<li><a href="http://localhost/TCC/Homem.html">Homem</a></li>
					<li><a href="http://localhost/TCC/Mulher.html">Mulher</a></li> 
					<li><a href="http://localhost/TCC/Adolecente.html">Adolecente</a></li>
					<li><a href="http://localhost/TCC/cadastro.php">Cadastro</a></li>
					<li><a href="http://localhost/TCC/Depoimentos.html">Depoimentos</a></li>
					<li><a href="http://localhost/TCC/Especialista.html">Especialista</a></li>
                	<li><a href="http://localhost/TCC/Perguntas.html">Perguntas Frequentes</a></li>
                	<li><a href="http://localhost/TCC/Atividades.html">Atividades</a></li>
					<li><a href="http://localhost/TCC/Livros.html">Livros</a></li>
					<li><a href="http://localhost/TCC/Frases.html">Frases Motivadoras</a></li>
					<li><a href="http://localhost/TCC/Imagens.html">Imagens divertidas</a></li>
					<li><a href="http://localhost/TCC/Alimentos.html">Alimentos</a></li>
					<li><a href="http://localhost/TCC/Atendimento.html">Atendimento</a></li>
					<li><a href="http://localhost/TCC/Links.html">Links Úteis</a></li>
					<li><a href="http://localhost/TCC/login.html">Questionário DASS-21</a></li>
					
					
				</ul>
	</div>

</header>



<div id="wrapall">
	
<div align= "left">	
		<div class="d-flex">
		<a href="sair.php" class="btn btn-danger me-5"><h3>Sair</h3></a>
        </div>
	<div>	
    </nav>
    <br>
    <?php
        echo "<h3>Bem vindo </h3>";
    ?>

	<br>

	<div id="sidebar">
		
		<div id="stickThis">
			
			<div id="sidebarContent">
				
				<aside>

					<div>
					<img src="Imagens\cadastro.jfif"  width="280" height="200" align="left">
					<nav>  
						<ul>
							<li><a href="http://localhost/TCC/cadastro.php">Faça aqui seu Cadastro</a></li>
						</ul>
					</nav					
					</div>

					<div>
					<img src="Imagens\Medico1.jfif"  width="280" height="200" align="left">
					<nav>  
						<ul>
							<li><a href="http://localhost/TCC/Especialista.html">Procure um especialista</a></li>
						</ul>
					</nav					
					</div>

					<div>
					<img src="Imagens\Depoimento2.jfif"  width="280" height="200" align="left">
					<nav>  
						<ul>
							<li><a href="http://localhost/TCC/Depoimentos.html">Depoimentos</a></li>
						</ul>
					</nav					
					</div>

					<div>
					<img src="Imagens\Livro1.jfif"  width="280" height="200" align="left">
					<nav>  
						<ul>
							<li><a href="http://localhost/TCC/Livros.html">Encontre um livro</a></li>
						</ul>
					</nav					
					</div>

					

					<div>
					<a href="http://localhost/TCC/Atendimento.html"><img src="Imagens\informação188.jpg"  width="280" height="90" align="left"></a>
										
					</div>
					
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

				
					<p><a class="back2Top" href="#">⮝&nbsp;Back to&nbsp;top&nbsp;⮝</a></p>
				
					
				</aside>
			</div>
		</div>
		<div id="stick-here"></div>
	</div>

	<div id="main">
		<section id="page">
			<main>

				<article>
					<center><h2>QUESTIONÁRIO DASS-21</h2></center>

					<strong>
					
						
						<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Trata-se de um questionário com 21 perguntas, que medem a intensidade de 
							comportamentos e sensações experimentados nos últimos sete dias. Cada pergunta é classificada em uma escala Likert 
							de quatro pontos de frequência ou gravidade das experiências dos participantes durante a última semana com a 
							intenção de enfatizar os estados emocionais sobre os traços.</p>
						
					</strong>
				</article>

				
				<article>

					<h2>VOCÊ ACHA QUE ESTÁ ESTRESSADO?</h2>
					<h4>Por favor, leia cada afirmação e clique na opção que indica o quanto a afirmação
						aplicado a você na semana passada.<br> 
						Não há respostas certas ou erradas. Não gaste muito tempo
						em qualquer declaração.<br><br>
						A escolha de classificação é a seguinte:<br>
						- Não se aplica a mim de forma alguma<br>
						- Aplicado a mim até certo ponto, ou por algum tempo<br>
						- Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
						- Aplicado a mim muito, ou na maioria das vezes</h4>
				
				</article>	

				<div class="container">	
					<div class="row">
						<div class="two-thirds column">
					<form action="cadastro.php" method="POST">
						<h2>Questionário Dass-21</h2>
				
						<div id="progress_bar"></div>
							
				
								<div id="question-1">
								  <h2>Questão 1</h2>
									<h3>Achei difícil desacelerar</h3>
									<input id="question-1-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
									<input id="question-1-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
									<input id="question-1-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
									<input id="question-1-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
									<div id="submit1" class="button">Enviar Resposta</div>
							<div class="clearfix"></div>
								</div>
				
							   <div id="question-2">
								   <h2>Questão 2</h2>
								   <h3>Eu estava ciente da secura da minha boca</h3>
									<input id="question-2-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
									<input id="question-2-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
									<input id="question-2-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
									<input id="question-2-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
									<div id="submit2" class="button">Enviar Resposta</div>
						   <div class="clearfix"></div>
							   </div>
							  
							   <div id="question-3">
								<h2>Questão 3</h2>
								<h3>Eu não conseguia sentir nenhum sentimento positivo</h3>
								 <input id="question-3-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								 <input id="question-3-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								 <input id="question-3-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								 <input id="question-3-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								 <div id="submit3" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
				
							<div id="question-4">
								<h2>Questão 4</h2>
								<h3>Tive dificuldade para respirar (por exemplo, respiração excessivamente rápida, falta de ar na ausência de esforço físico)</h3>
								 <input id="question-4-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								 <input id="question-4-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								 <input id="question-4-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								 <input id="question-4-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								 <div id="submit4" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
				
							<div id="question-5">
								<h2>Questão 5</h2>
								<h3>Achei difícil desenvolver a iniciativa de fazer as coisas</h3>
								 <input id="question-5-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								 <input id="question-5-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								 <input id="question-5-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								 <input id="question-5-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								 <div id="submit5" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>

						<div id="question-6">
							<h2>Questão 6</h2>
							<h3>Eu tendia a reagir de forma exagerada às situações</h3>
							<input id="question-6-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
							<input id="question-6-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
							<input id="question-6-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
							<input id="question-6-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
							<div id="submit6" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>

							
								<div id="question-7">
									<h2>Questão 7</h2>
									<h3>Senti tremores (por exemplo, nas mãos)</h3>
									<input id="question-7-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
									<input id="question-7-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
									<input id="question-7-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
									<input id="question-7-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
									<div id="submit7" class="button">Enviar Resposta</div>
								<div class="clearfix"></div>
									</div>
	
							<div id="question-8">
								<h2>Questão 8</h2>
								<h3>Eu senti que estava usando muita energia nervosa</h3>
								<input id="question-8-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-8-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-8-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-8-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit8" class="button">Enviar Resposta</div>
							<div class="clearfix"></div>
								</div>
	
							<div id="question-9">
								<h2>Questão 9</h2>
								<h3>Eu estava preocupado com situações em que poderia entrar em pânico e fazer papel de bobo</h3>
								<input id="question-9-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-9-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-9-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-9-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit9" class="button">Enviar Resposta</div>
							<div class="clearfix"></div>
								</div>
	
							<div id="question-10">
								<h2>Questão 10</h2>
									 <input id="question-10-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
									 <input id="question-10-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
									 <input id="question-10-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
									 <input id="question-10-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
									 <div id="submit10" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
	
							<div id="question-11">
								<h2>Questão 11</h2>
								<h3>Eu comecei a ficar agitado</h3>
								<input id="question-11-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-11-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-11-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-11-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit11" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
	
							<div id="question-12">
								<h2>Questão 12</h2>
								<h3>Eu achei difícil relaxar</h3>
								<input id="question-12-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-12-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-12-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-12-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit12" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
	
							<div id="question-13">
								<h2>Questão 13</h2>
								<h3>Eu me senti desanimado e triste</h3>
								<input id="question-13-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-13-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-13-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-13-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit13" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
	
							<div id="question-14">
								<h2>Questão 14</h2>
								<h3>Eu era intolerante com qualquer coisa que me impedisse de continuar o que estava fazendo</h3>
								<input id="question-14-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-14-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-14-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-14-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit14" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
	
							<div id="question-15">
								<h2>Questão 15</h2>
								<h3>Eu senti que estava perto do pânico</h3>
								<input id="question-15-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-15-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-15-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-15-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit15" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
	
							<div id="question-16">
								<h2>Questão 16</h2>
								<h3>Não conseguia ficar entusiasmado com nada</h3>
								<input id="question-16-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-16-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-16-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-16-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit16" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
	
							<div id="question-17">
								<h2>Questão 17</h2>
								<h3>Eu senti que não valia muito como pessoa</h3>
								<input id="question-17-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-17-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-17-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-17-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit17" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
	
							<div id="question-18">
								<h2>Questão 18</h2>
								<h3>eu senti que estava bastante sensível</h3>
								<input id="question-18-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-18-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-18-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-18-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit18" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
	
							<div id="question-19">
								<h2>Questão 19</h2>
								<h3>Eu estava ciente da ação do meu coração na ausência de esforço físico (por exemplo, sensação de aumento da frequência cardíaca, coração falhando)</h3>
								<input id="question-19-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-19-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-19-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-19-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit19" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
	
							<div id="question-20">
								<h2>Questão 20</h2>
								<h3>Eu me senti assustado sem um bom motivo</h3>
								<input id="question-20-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-20-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-20-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-20-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit20" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>
	
							<div id="question-21">
								<h2>Questão 21</h2>
								<h3>Eu senti que a vida não tinha sentido</h3>
								<input id="question-21-answer-a" type="radio" name="favelang" value=1> Não se aplica a mim de forma alguma<br>
								<input id="question-21-answer-b" type="radio" name="favelang" value=2> Aplicado a mim até certo ponto, ou por algum tempo<br>
								<input id="question-21-answer-c" type="radio" name="favelang" value=3> Aplicado a mim em um grau considerável, ou uma boa parte do tempo<br>
								<input id="question-21-answer-d" type="radio" name="favelang" value=4> Aplicado a mim muito, ou na maioria das vezes<br>
								<div id="submit21" class="button">Enviar Resposta</div>
						<div class="clearfix"></div>
							</div>	
							


						 <div id="question-22"> 
						   <h2>Obrigado por preencher o questionário!</h2>
						   <h3>Sua pontuação é: </h3>
						   <h1 id=printtotalscore></h1>
						   <p id=printscoreinfo></p>
						   <h3>Para refazer o questionário atualize a pagina.</h3>
				
						 </div>
				
				
								  
					</form>
				
						</div>
					  </div>
				  </div>
				
				  <script src="js/scriptsQ.js"></script>



				

			</main>		


	
			<footer>
				<p>&copy; Carlos Silva 2021 - Todos os direitos reservados. 
			</footer>
		</section>
	</div>
</div>

</body>
</html>