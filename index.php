<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cronometro</title>
	<link rel="shortcut icon" href="crono.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
H1 { text-align: center }
</style>
	
	
 <div class="container">
        <div class="row">
            <div class="col">
                <div>
                   <div class="btn-group mb-2 d-flex justify-content-center" role="group">
                   <form action="cadastrar.php" method="post" enctype="multipart/form-data">
                   <h1>Técnico 1</h1>
                   <span id="counter"class="d-flex justify-content-center font-weight-bold">00:00:00</span><br>
                   <input type="hidden" value="teste" id="count" name="count">
                   <input type="button" class="btn btn-success mr-2" value="Parar" onclick="para();"> 
                   <input type="button" class="btn btn-danger mr-2" value="Iniciar" onclick="inicia();"> 
                   <input type="button" class="btn btn-info mr-2" value="Zerar" onclick="zera();">
                   <button class="btn btn-secondary">Gravar</button>
                   </form>
                </div>  
                    <h5>Tempos Gravados</h5>
                    <div id="armazenarTempos">
                    </div>
                </div>
            </div>
        </div>
 </div>
	
  <div class="container">
        <div class="row">
            <div class="col">
               <div>
                 <div class="btn-group mb-2 d-flex justify-content-center" role="group">
                   <form action="cadastrar.php" method="post" enctype="multipart/form-data">
                   <h1>Técnico 2</h1>
                   <span id="counter1"class="d-flex justify-content-center font-weight-bold">00:00:00</span><br>
                   <input type="hidden" value="teste" id="count1" name="count1">
                   <input type="button" class="btn btn-success mr-2" value="Parar" onclick="para1();"> 
                   <input type="button" class="btn btn-danger mr-2" value="Iniciar" onclick="inicia1();"> 
                   <input type="button" class="btn btn-info mr-2" value="Zerar" onclick="zera1();">
                   <button class="btn btn-secondary">Gravar</button>
                   </form>
                 </div>  
                    <h5>Tempos Gravados</h5>
                    <div id="armazenarTempos1">
                    </div>
                </div>
            </div>
        </div>
   </div>
	
  <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <div class="btn-group mb-2 d-flex justify-content-center" role="group">
                       <form action="cadastrar.php" method="post" enctype="multipart/form-data">
                       <h1>Técnico 3</h1>
                       <span id="counter2"class="d-flex justify-content-center font-weight-bold">00:00:00</span><br>
                       <input type="hidden" value="teste" id="count2" name="count2">
                       <input type="button" class="btn btn-success mr-2" value="Parar" onclick="para2();"> 
                       <input type="button" class="btn btn-danger mr-2" value="Iniciar" onclick="inicia2();"> 
                       <input type="button" class="btn btn-info mr-2" value="Zerar" onclick="zera2();">
                       <button class="btn btn-secondary">Gravar</button>
                       </form>
                    </div>  
                    <h5>Tempos Gravados</h5>
                    <div id="armazenarTempos2">
                    </div>
                </div>
            </div>
        </div>
   </div>
				
<script src="jquery.min.js"></script>
<script src="js/cron.js"></script>
<script src="js/cron1.js"></script>
<script src="js/cron2.js"></script>

