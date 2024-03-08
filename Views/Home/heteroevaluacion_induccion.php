<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
    <!--<title><?php //echo $data['page_tag']; ?></title>-->
    <title>Heteroevaluacion: Inducción</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= media(); ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= media(); ?>/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo media(); ?>/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?php echo BASE_URL; ?>" class="navbar-brand">
                    <img src="<?php echo media(); ?>/images/img/itech.png" alt="Logo ITECH" class="brand-image img-circle elevation-1" style="opacity: .9">
                    <span class="brand-text font-weight-light">Heteroevaluacion Alumno</span>
                </a>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse"></div>
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <form class="form-inline ml-0 ml-md-3" action="<?php echo BASE_URL; ?>/Home/getFolio" method="POST">
                            <div class="input-group input-group-sm">
                            </div>
                        </form>
                    </li>
                </ul>      
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-12 text-center">
                            <h3 class="m-0 text-secondary"><?= $data['page_title'] ?> </h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container" id="container">
                    <div class="col-md-12">
                        <div class="text-center"><h2><b><?php echo($data['materia']['request'][0]['fullname_course']) ?></b></h2></div>
                        <div class="text-center col-md-12"><h4><strong>Docente: </strong>  <?php echo($data['materia']['request'][0]['teacher_firstname']." ".$data['materia']['request'][0]['teacher_lastname']) ?></h4></div><br>
                        <div><p>Estimado(a) estudiante, tu opinión acerca de la forma como el docente organiza, desarrolla y evalúa el curso es muy importante para nuestra institución educativa. 
                            A continuación se presenta una serie de aspectos relevantes en este sentido, para que valores el desempeño del docente con la mayor objetividad posible,
                            seleccionando cada aspecto la opción que mejor respresente tu opinión.
                        </p></div><br>
                    </div>
                    <div class="card">
                        <h5 class="card-header">CALIDAD DEL DESEMPEÑO DOCENTE EN LAS AREAS</h5>
                        <div class="card-body">
                            <form id="msform">
                                <ul id="progressbar">
                                    <?php
                                        for($i = 0; $i<sizeof($data['preguntas']);$i++ ){
                                            if($i==0){?>
                                                <!--<li class="active" id="personal"><strong><?php echo($data['datos_categorias'][$i]['nombre_categoria']); ?></strong></li>   -->
                                            <?php 
                                            }else{?>
                                               <!-- <li id="personal"><strong><?php echo($data['datos_categorias'][$i]['nombre_categoria']); ?></strong></li>   -->
                                            <?php
                                            }   
                                        }
                                    ?>
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                </div><br>
                                <?php
                                    $sizearray = sizeof($data['preguntas']);
                                    $datos_enviar['id_curso'] = $data['id_materia'];  
                                    $datos_enviar['usuario_alumno'] = $data['usuario'];
                                    $datos_enviar['usuario_profesor'] = $data['datos_materia'][0]['teacher_username'];
                                    $datos_enviar['nombre_profesor'] = $data['datos_materia'][0]['teacher_firstname'];
                                    $datos_enviar['apellido_profesor'] = $data['datos_materia'][0]['teacher_lastname'];
                                    $datos_enviar['nombre_materia'] = $data['datos_materia'][0]['fullname_course'];
                                    $datos_enviar['carrera'] = $data['datos_materia'][0]['category_course'];

                                    
                                    for($i = 0; $i<=$sizearray;$i++ ){?>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <?php
                                                            if($i == $sizearray){?>
                                                                <h2 class="steps">Finalizado</h2>
                                                            <?php
                                                                }else{?>
                                                                <h2 class="steps"><?php echo($i+1); ?> de <?php echo($sizearray);?> Preguntas </h2>
                                                            <?php
                                                            }
                                                        ?>
                                                    </div>
                                                    <div class="col-sm-12 categoria">
                                                        <h2 class="fs-title"><?php if($i+1 == $sizearray){echo "Categoria:";}?><?php echo($data['preguntas'][$i]['nom_cat']);?></h2>
                                                    </div>
                                                    <?php
                                                if($i == $sizearray){?>
                                                <div class="col-md-12" style="text-align: center;">
                                                    <span style="font-size: 5em; color: green;">
                                                        <i class="far fa-check-circle"></i>
                                                    </span>
                                                    <h1><b>Gracias!</b></h1>
                                                    <h3>Haz llegado al final de esta encuesta</h3> 
                                                            
                                                   <button type="button" name="finalizar" class="finalize  btn btn-success" style="font-weight: 900;font-size:25px;" >Enviar y guardar mis respuestas?</button><br><br><br>
                                                </div> <br><br>
                                                <div class="row justify-content-center">
                                                    <div class="col-7 text-center">
                                                    </div>
                                                </div>
                                                <?php       
                                                }else{?>
                                                        <div class="quiz_box activeQuiz col-md-10">
                                                        <header>
                                                            <div class="title">Subcategoría: <?php echo($data['preguntas'][$i]['nom_sub']);?></div>
                                                        
                                                            <div class="time_line">
                                                            </div>
                                                        </header>
                                                        <section>
                                                            <div class="que_text "><span><?php echo($data['preguntas'][$i]['nom_pr']);?></span></div>
                                                            <div class="option_list col-md-5 col-sm-12">
                                                                <div class="option" id = "<?php  echo($data['preguntas'][$i]['id_pr']); ?>+0" onclick="optionSelected(this)" >
                                                                    <span>Siempre</span>
                                                                </div>
                                                                <div class="option" id = "<?php  echo($data['preguntas'][$i]['id_pr']); ?>+1" onclick="optionSelected(this)">
                                                                    <span>Casi Siempre</span>
                                                                </div>
                                                                <div class="option" id = "<?php  echo($data['preguntas'][$i]['id_pr']); ?>+2" onclick="optionSelected(this)">
                                                                    <span>Algunas Veces</span>
                                                                </div>
                                                                <div class="option" id = "<?php  echo($data['preguntas'][$i]['id_pr']); ?>+3" onclick="optionSelected(this)">
                                                                    <span>Nunca</span>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                
                                                    <?php
                                                }
                                                ?>
                                                </div> 
                                                
                                            </div> 
                                            <?php
                                                if($i <= $sizearray-1){?>
                                                    <button type="button" name="next" class="next action-button btn btn-primary"/>Siguiente</button>
                                                <?php       
                                                }
                                            ?>
                                            <?php
                                                if($i >= 1){?>
                                                    <button type="button" name="previous" class="previous action-button-previous btn btn-info"/>Anterior</button>
                                                <?php       
                                                }
                                            ?>
                                        </fieldset>
                                    <?php                                              
                                    }
                                ?>
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
<?php footerAdmin($data); ?>