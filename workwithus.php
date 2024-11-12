<!DOCTYPE html>
<html lang="it">

<head>
     <title>Lavora con noi - 3EM Group</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
     <link rel="apple-touch-icon" sizes="180x180" href="favicon_package/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="favicon_package/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="favicon_package/favicon-16x16.png">
     <link rel="manifest" href="favicon_package/site.webmanifest">
     <link rel="mask-icon" href="favicon_package/safari-pinned-tab.svg" color="#5085ff">
     <meta name="msapplication-TileColor" content="#2b5797">
     <meta name="theme-color" content="#ffffff">
     <script src="https://smtpjs.com/v3/smtp.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     <link rel="stylesheet" href="css/workwithus.css" />
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <script src="js/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/default.css">
</head>

<body>
     <!-- PRE LOADER 
     <div class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
               <img class="image1" src="images/preloader_logo.png">
          </div>
     </div>
      MENU -->
     <div class="navbar custom-navbar navbar-fixed-top" style="height: 10vh; background-color: white !important; display: flex; align-items: center;" role="navigation" id="navbar-container">
                    <a class="navbar-brand" href="#">
                      <img src="assets\img\blu.svg" alt="Logo" height="40" class="d-inline-block align-text-top" id="navbarLogo">
                    </a>
                    <ul class="nav navbar-nav"> 
                    <li id="drop-flag-button" style="display: none;">
                              <a style="display: none;"class="flag dropdown-toggle smoothScroll" id="flag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              </a>
                         </li>
                         <li class="getBack">
                           <a href="http://www.3em.it" class="nav-link active" style="color: black" aria-current="page" >Home</a>
                         </li>
                    </ul>
          </div>
     </div>
     <div id="workWithUs-Desktop">
          <div class="jumbotron" style="margin-right:5vh;margin-left:5vh;">
               <div class="fixed-div"></div>
          </div>
          <!--  <div id="snackbar" onclick="" data-toggle="modal" class="t_gotoopenpos" data-target="#myModal"></div>-->
          <div class="overlap-div" style="border-radius: 1rem">
               <div class="container-fluid mt-3">
                    <div class="row">
                         <!-- TEXT ZONE-->
                         <div class="col-md-12">
                              
                              <h1 class="display-4 pt-1 t_workwithus" style="text-align: center; font-weight: bold;">Work With US</h1>
                         </div>
                    </div>
                    <div class="row"></div>
                    <div class="col-md-6 v-middle">
                         <p class="lead t_workwithus_1" style="text-align: center;font-size: 24px;">
                              3EM si propone come System Integrator & Global Process Solution per le industrie abbinando alla qualità ed all' innovazione, spirito giovanile e attività di ricerca.
                         </p>
                         <p class="t_workwithus_2" style="text-align: center;">
                              3EM è costantemente alla ricerca di persone dinamiche e fortemente motivate da coinvolgere su progetti sfidanti e di respiro internazionale, potenziandone le attitudini attraverso una continua attività di formazione in aula e on the job.
                         </p>
                         <div class="row mt-5 flex-column">
                              <div class="col-md-4"></div>
                              <div class="col-md-4">
                                   <!-- <button type="button" class="mt-10 btn-primary button button-block t_send"
                                        onclick="prepareEmail()">Invia</button> -->
                                        <button type="submit" class="btn-outline mx-auto col-8 col-md-5 btnForm"  onclick="prepareEmail()">Invia</button>
                                        </br>
                              </div>
                              <div class="col-md-4"></div>
                         </div>
                         <div class="row">
                              <div class="col-md-3"></div>
                              <div class="col-md-6"> <button type="button" 
                                        class="mt-10 btn-outline mx-auto col-8 col-md-5 btnForm t_gotoopenpos" data-toggle="modal"
                                        data-target="#myModal">Posizioni Aperte</button></div>
                              <div class="col-md-3"></div>
                         </div>
                    </div>
                    <div class="col-md-6 v-middle">
                         <!-- FORM ZONE-->
                         <form class="form-horizontal" id="frmSendMail">
                              <div class="form-group">
                                   <label for="txtEmail" class="col-sm-2 control-label t_email">Email: </label>
                                   <div class="col-sm-10">
                                        <input type="email" class="form-control" id="txtEmail" placeholder="Email">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label for="txtNome" class="col-sm-2 control-label t_name">Nome: </label>
                                   <div class="col-sm-5" style="padding-right:3px;">
                                        <input type="text" class="form-control" id="txtNome" placeholder="First Name">
                                   </div>
                                   <div class="col-sm-5" style="padding-left:0px;">
                                        <input type="text" class="form-control" id="txtCognome" placeholder="Last Name">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label for="txtOggetto" class="col-sm-2 control-label t_subject">Oggetto: </label>
                                   <div class="col-sm-10">
                                        <input name="txtOggetto" id="slcOggetto" class="form-control">
                                   </input>
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label for="txtCorpo" class="col-sm-2 control-label t_body">Corpo: </label>
                                   <div class="col-sm-10">
                                        <textarea class="form-control" id="txtCorpo" rows="6"></textarea>
                                   </div>
                              </div>
                              <div class="form-group" style="display: flex; align-items: center; width: 100%">
                                   <label for="btn-Upload" class="col-sm-2 control-label t_attachment">Allegato:
                                   </label>
                                   <div class="file-upload mt-2">
                                        <input class="file-upload__input" style="display:none;" type="file"
                                             name="myFile[]" id="myFile"
                                             accept=".doc, .docx, .pages, .odt, .rtf, .pdf, .docm, .dot, .dotx, .htm, .html/*">
                                        <button class="file-upload__button btn-outline mx-auto col-8 col-md-5 btnForm ml-3 t_CV"
                                             type="button">Allega CV</button>
                                        <span style="margin-left: .5rem;" class="file-upload__label" id="lblFile"></span>
                                   </div>
                                   </br>
                                   <label class="error ml-10 t_required" id="fileError">Campo obbligatorio</label>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
     <!-- Modal Offers -->
     <!-- Modal -->
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-xl" style="height:100vh !important;" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                   aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title t_openposition" id="myModalLabel">Posizioni Aperte</h4>
                    </div>
                    <div class="modal-body mc-xl">
                         <div class="row container-fluid fullH">
                              <div class="col-md-5 fullH mrb" id="miniOffersContainer">

                              </div>

                              <div class="col-md-7 fullH" id="bodyOffersContainer">
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </div>
     <div id="workWithUs-Mobile">
          <div class="container" style="border-radius: 10px">
               <div class="row">
                    <h1 class="t_workwithus m-title" style="text-align: center;">Work With US</h1>
                    <p class="lead t_workwithus_1" style="text-align: center;font-size: 24px; padding:5px;">
                         3EM si propone come System Integrator & Global Process Solution per le industrie abbinando alla qualità ed all' innovazione, spirito giovanile e attività di ricerca.

                    </p>
                    <p class="t_workwithus_2" style="text-align: center; padding:5px;">
                         3EM è costantemente alla ricerca di persone dinamiche e fortemente motivate da coinvolgere su progetti sfidanti e di respiro internazionale, potenziandone le attitudini attraverso una continua attività di formazione in aula e on the job.
                    </p>
               </div>
               <div class="row">
                    <form class="form-horizontal" id="m-frmSendMail">
                         <div class="form-group">
                              <label for="m_txtEmail" class="col-sm-2 control-label t_email">Email: </label>
                              <div class="col-sm-10">
                                   <input type="email" class="form-control" id="m_txtEmail" placeholder="Email">
                              </div>
                         </div>
                         <div class="form-group">
                              <label for="m_txtNome" class="col-sm-2 control-label t_name">Nome: </label>
                              <div class="col-sm-10">
                                   <input type="text" class="form-control" id="m_txtNome" placeholder="Nome">
                              </div>
                         </div>
                         <div class="form-group">
                              <label for="m_txtCognome" class="col-sm-2 control-label t_surname">Cognome: </label>
                              <div class="col-sm-10">
                                   <input type="text" class="form-control" id="m_txtCognome" placeholder="Cognome">
                              </div>
                         </div>
                         <div class="form-group">
                              <label for="m_txtOggetto" class="col-sm-2 control-label t_subject">Oggetto: </label>
                              <div class="col-sm-10">
                                   <select name="m_txtOggetto" id="m_txtOggetto" class="form-control"></select>
                                   <!--<input type="text" class="form-control" id="m_txtOggetto" placeholder="Oggetto">-->
                              </div>
                         </div>
                         <div class="form-group">
                              <label for="m_txtCorpo" class="col-sm-2 control-label t_body">Corpo: </label>
                              <div class="col-sm-10">
                                   <textarea class="form-control" id="m_txtCorpo" rows="6"></textarea>
                              </div>
                         </div>
                         <div class="form-group" style="display: flex; align-items: center">
                              <label for="btn-Upload" class="col-sm-2 control-label t_attachment">test: </label>
                              <div class="m_file-upload ms-3 mt-2">
                                   <input class="m_file-upload__input" style="display:none;" type="file" name="myFile[]"
                                        id="m_File"
                                        accept=".doc, .docx, .pages, .odt, .rtf, .pdf, .docm, .dot, .dotx, .htm, .html/*">
                                   <p class="m_file-upload__label ml-3" id="m_LabelUpload"></p>
                                   <button class="m_file-upload__button, btn-outline mx-auto col-8 col-md-5 btnForm ml-3 t_CV" id="m_Upload_button"
                                        type="button">Allega CV</button>
                              </div>
                              </br>
                              <label class="error ml-10 t_required" id="m_fileError">Campo obbligatorio</label>
                         </div>
                         <div class="row mt-5">
                              <div class="col-md-4"></div>
                              <div class="col-md-4">
                                   <button type="button" class="mt-2 btn-outline mx-auto col-8 col-md-5 btnForm t_send"
                                   style="width: 50%;"
                                        onclick="prepareEmailMobile()" />Invia</button>
                              </div>
                              <div class="col-md-4">
                                   <button type="button" class="mt-2 btn-outline mx-auto col-8 col-md-5 btnForm t_gotoopenpos"
                                   style="width: 50%;"
                                        data-toggle="modal" data-target="#myMobModal">Posizioni Aperte</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>

     </div>
     <div class="modal fade" id="myMobModal" tabindex="-1" role="dialog" aria-labelledby="lblModal">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                   aria-hidden="true" onclick="goBack()">&times;</span></button>
                         <h4 class="modal-title t_openposition" id="lblModal">Posizioni Aperte</h4>
                    </div>
                    <div class="modal-body">
                         <div class="row container-fluid" id="titoli">

                         </div>
                         <div class="row container-fluid" id="corpi" style="display:none;">

                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- SCRIPTS -->
     <script src="js/workwithus.js"></script>
     <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
     <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script>document.onLoad += Initialize();</script>
</body>


</html>