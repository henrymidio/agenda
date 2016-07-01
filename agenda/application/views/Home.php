<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contatos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
      <script type="text/javascript" src="http://cardappweb.com/agenda/assets/js/ajax.js"></script>

  </head>

  <style>
	body {
		background-color: #F1F1F1;
	}
	thead {
                background: white;
        }
        .btn-margin {
                margin: 10px;
        }
	
  </style>
  
  <body>
  
   <header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
		
				<ul class="nav navbar-nav">
					<li><button type="button" class="btn btn-success btn-margin" data-toggle='modal' data-target='#modal-contato'><span class="glyphicon glyphicon-plus"></span> Novo Contato</button></li>
					<li><button type="button" class="btn btn-info btn-margin" data-toggle='modal' data-target='#modal-compromisso'><span class="glyphicon glyphicon-plus"></span> Novo Compromisso</button></li>
				</ul>
			</div>
		</nav>
    </header>
  
	<div class="container">
	<div class="container">
	  
	  <ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">Agenda</a></li>
		<li><a data-toggle="tab" href="#menu1">Compromissos (<?php echo $num_compromissos; ?>)</a></li>
	  </ul>

	  <div class="tab-content">
		<div id="home" class="tab-pane fade in active">
		
		  <table class="table table-bordered">
                   <thead>
                     <tr class="th">
                         
                         <th>#</th>
                         <th>Nome</th>
	                 <th>Endereço</th>
                         <th>Telefone</th>
                         <th>Email</th>
                                               
                     </tr>
                   </thead>
             <?php foreach($contatos as $contato): ?>
                   <tbody>
                       <tr>     
                         <td><?php echo $contato->id; ?></td>
                         <td><?php echo $contato->nome; ?></td>
                         <td><?php echo $contato->endereco; ?></td>
                         <td><?php echo $contato->telefone; ?></td>
                         <td><?php echo $contato->email; ?></td>
                       </tr>
                    </tbody>
	      <?php endforeach; ?>		  
			</table>	  
		</div>
		<div id="menu1" class="tab-pane fade">
		  <table class="table table-bordered">
                   <thead>
                     <tr class="th">
                                      
                         <th>Descrição</th>
                         <th>Data</th>
                                               
                     </tr>
                  </thead>
		  <?php foreach($compromissos as $compromisso): 
                        $data = strtotime($compromisso->data);
                        $data = date('d/m/Y - H:i', $data);
                  ?>
                   <tbody>
                       <tr>     
                         <td><?php echo $compromisso->compromisso; ?></td>
                         <td><?php echo $data; ?></td>
                         
                       </tr>
                    </tbody>
	      <?php endforeach; ?>		  
			</table>
		</div>
	  </div>
	  </div>
	</div>
	
	<?php include('includes/adicionar_contato.php'); ?>
        <?php include('includes/adicionar_compromisso.php'); ?>



  </body>
</html>