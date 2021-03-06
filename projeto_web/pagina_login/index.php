<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="login">
   <div class="container">
       <div class="col-lg-6 col-lg-offset-3">
           
            <h1 class="horizontal">Bem Vindo!</h1>
            
            <div class="inner-form">
                
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">LOGIN</a></li>
                    <li><a href="../pagina_cadastro/cadastro_v.2.html" data-toggle="tab">CADASTRE-SE</a></li>
                </ul>
        
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="tab1">
                        <div class="panel-group">
                         
                        <form role="form" method="POST" action="php/login.php">
            			<div class="row">
        			        
        			    	<div class="col-lg-12">
        			    	    <label>Email</label>
        			    	    <div class="form-group">
        							<input type="email" name="email" id="email" class="form-control" placeholder="">
        			    		</div>
        			    	</div>
        			    	
        			    	<div class="col-lg-12">
        			    	    <label>Senha</label>
        			    	    <div class="form-group">
        			    			<input type="password" name="senha" id="senha" class="form-control" placeholder="">
        			    		</div>
        			    	</div>
        			    	
        					<div class="col-lg-12">
        					    <button class="btn btn-info btn-lg btn-block" type="submit"><font style="vertical-align: inherit;" onclick="validar();"><font style="vertical-align: inherit;">ENTRAR</font></font></button>
        					</div>
        					
        					<div class="col-lg-12">
            					<div class="forgot">
            				    	<p>Esqueceu senha ?</p>
            					</div>
        					</div>
        						
            			    </div>
                        </div>
                    </form>
                    <p class="text-center text-danger">
                        <?php
                        session_start();
                            if(isset($_SESSION['loginErro'])){
                                echo ($_SESSION['loginErro']);
                                unset ($_SESSION['loginErro']);
                            }
                        ?>
                    </p>
                    </div>
                </div>
			</div>  <!-- inner-form -->
			
		</div>   
	</div>   
</div>    
</body>
</body>
</html>