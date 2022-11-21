<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueil | DREPS Nord</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        
        <link href="fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="@yield('ref')vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="css/modal.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body style="background:rgb(251,251,251)">
    
    <div class="container-fluid">
<!--           Header-->
        <div class="row rowHeader">
            <div class="col-lg-4">
                <img src="img/armoirie.png" alt="ImgBF" width="100"/>
            </div>

            <div class="col-lg-8">
                <div class="row" style="height:80px;">
                    <div style="position:relative;top:30px;text-align:center;font-size:3.9em;color:green;">DREPS-Nord</div>
                </div>
               
            </div>
        </div>
        <div class="row marquee-rtl" style="background-color:rgb(110,132,137);">
                    <div style="">
                A Retrouver sur le tableau:
                   {{$annonces[0]['titre']}} /
                   {{$annonces[1]['titre']}} /
                   {{$annonces[2]['titre']}} /
                   {{$annonces[3]['titre']}} /
                   {{$annonces[4]['titre']}} /
                   {{$annonces[5]['titre']}} /
                   
                    
                </div>
         </div>

<!--           slide-->

        <div class="row rowSlide">
            <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12" style="">
                <!--  slide start here -->
                    <!-- Slideshow container -->
                    <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                @if($actus[0]["chemin"]!="")

                    <div class="mySlides fade">
                       
                        <img src="{{$actus[0]['chemin'] }}" style=";">
                        <div class="text txtTitre" style=""> {{$actus[0]["titre"]}}<br/><hr/> {{$actus[0]["datePublication"]}}</div>
                    </div>
                @else
                    <div class="mySlides fade">
                       
                        <img src="img/img1.jpg" style="width:100%;height:730px;">
                        <div class="text txtTitre">L'enseingement:Une passion avant tout!</div>
                    </div>
                @endif

                @if($actus[1]["chemin"]!="")

                    <div class="mySlides fade">
                       
                        <img src="{{$actus[1]['chemin'] }}" >
                        <div class="text txtTitre"> {{$actus[1]["titre"]}} </div>
                    </div>
                    @else
                    <div class="mySlides fade">
                        
                        <img src="img/img2.jpg" >
                        <div class="text txtTitre">L'enseingement:Une passion avant tout!</div>
                    </div>
                    @endif

                @if($actus[2]["chemin"]!="")

                    <div class="mySlides fade">
                       
                        <img src="{{$actus[2]['chemin'] }}" >
                        <div class="text txtTitre"> {{$actus[2]["titre"]}} </div>
                    </div>
                @else
                    <div class="mySlides fade">
                        
                        <img src="img/img3.webp" >
                        <div class="text txtTitre">L'enseingement:Une passion avant tout!</div>
                    </div>
                @endif

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
        </div> 
<!-- slide ends here -->
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 panMenu">
               <h4 style="text-align:center;"> Menu</h4>
                <hr/>
                <span><a href="{{url('/')}}">Accueil</a></span><hr/><br>
                <span><a href="#ancreRowActualite">Actualités</a></span><hr/><br>
                <span><a href="#ancreRowTableauAnnonce">Tableau Information</a></span><hr/><br>
                <span><a href="#ancreRowStatistitque">Statistiques</a></span><hr/><br>
                <span><a href="#ancreRowOrganigramme">Organigramme</a></span><hr/><br>
                <span><a href="{{url('connexion')}}">Connexion</a></span><hr/><br>
            </div>
            
        </div>

        

        <!--           Actualié-->
        <div class="row rowActualite" id="ancreRowActualite">
            <div class="col-lg-8  col-md-10 col-sm-12 col-xs-12 panActualite">
          
            <h1 style="color:green;text-align:center;font-family:bold;">Actualités à la DREPS</h1><hr/>
                
                <div class="row">
                @for($i=0; $i<6; $i++)
                    @if($actus[$i]["id"]>=0 && $actus[$i]["id"]!=null )
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 carteActualite" id="{{$actus[$i]['id']}}">
                            <span>{{$actus[$i]['datePublication']}} <i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                            <br/> <br/>  
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <img src="{{$actus[$i]['chemin']}} " alt=""/>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <hr/><span style="font-weight:bold;font-size:1.2em;" id="{{$actus[$i]['id']}}">{{$actus[$i]['titre']}}</span></a>
                                    </div>
                        </div>
                    @endif
                @endfor

        </div>






                <br/<br/>
                
                
              
            </div>
           
           
        </div>
        <h1 style="text-align:center;color:green;text-decoration:underline;font-family:bold;">LA DREPS NORD C'EST:</h1><br><br/>
            <div class="row rowStatistitque" id="ancreRowStatistitque" style="margin-bottom:10%;">
               
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 carteStatistique"><div class="nbre"><span>45</span><br/><h2>Province</h2></div></div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 carteStatistique"><div class="nbre"><span>45</span><br/><h2>Ecole</h2></div></div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 carteStatistique"><div class="nbre"><span>65%</span><br/> <h2>Garcons scolarisés</h2></div></div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 carteStatistique"><div class="nbre"><span>85%</span><br/><h2>Filles Scolarisées</h2></div></div>
                
            </div>
            <h2 style="text-align:center;color:green;">TABLEAU (ANNONCES-COMMUNIQU2-NOTE DE SERVICE-Etc)</h2>
            <div class="row" id="ancreRowTableauAnnonce" style="margin-bottom:50px;background-color:white;" >
           
                    <div class="col-lg-12 col-md-11 col-sm-12 col-xs-12 pantableauAnnonce">
                        <div class="row">
                            <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12 carteFichier">
                                    {{$annonces[0]['titre']}}
                                <br/>
                                <span>
                                    <i class="fa fa-arrow-down"></i><a href="" download=" {{$annonces[8]['chemin']}}">Telecharger(PDF)</a>
                                </span>
                             </div>
                            <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12 carteFichier">
                                    {{$annonces[1]['titre']}}
                                <br/>
                                <span>
                                    <i class="fa fa-arrow-down"></i><a href="" download="{{$annonces[1]['chemin']}}">Telecharger(PDF)</a>
                                </span>
                            </div>
                            <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12 carteFichier">
                                    {{$annonces[2]['titre']}}
                                <br/>
                                <span>
                                    <i class="fa fa-arrow-down"></i><a href="" download="{{$annonces[2]['chemin']}}">Telecharger(PDF)</a>
                                </span>
                            </div>
                           
                           
                        </div>
                        <div class="row">
                        <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12 carteFichier">
                                     {{$annonces[3]['titre']}}
                                <br/>
                                <span>
                                    <i class="fa fa-arrow-down"></i><a href="" download="{{$annonces[3]['chemin']}}">Telecharger(PDF)</a>
                                </span>
                            </div>
                            <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12 carteFichier">
                                    {{$annonces[4]['titre']}}
                                <br/>
                                <span>
                                    <i class="fa fa-arrow-down"></i><a href="" download="{{$annonces[4]['chemin']}}">Telecharger(PDF)</a>
                                </span>
                            </div>
                            <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12 carteFichier">
                                    {{$annonces[5]['titre']}}
                                <br/>
                                <span>
                                    <i class="fa fa-arrow-down"></i><a href="" download="{{$annonces[5]['chemin']}}">Telecharger(PDF)</a>
                                </span>
                            </div>

                        </div>

                        <div class="row">
                            
                            <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12 carteFichier">
                                    {{$annonces[6]['titre']}}
                                <br/>
                                <span>
                                    <i class="fa fa-arrow-down"></i><a href="" download="{{$annonces[6]['chemin']}}">Telecharger(PDF)</a>
                                </span>
                            </div>
                            <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12 carteFichier">
                                    {{$annonces[7]['titre']}}
                                <br/>
                                <span>
                                    <i class="fa fa-arrow-down"></i><a href="" download="{{$annonces[7]['chemin']}}">Telecharger(PDF)</a>
                                </span>
                            </div>
                            <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12 carteFichier">
                                    {{$annonces[8]['titre']}}
                                <br/>
                                <span>
                                    <i class="fa fa-arrow-down"></i><a href="" download="{{$annonces[8]['chemin']}}">Telecharger(PDF)</a>
                                </span>
                            </div>
                           
                            
                           
                        </div>
                        


                    </div>
            </div>
       
           
         <h1 style="text-align:center;color:orange;">ORGANIGRAMME</h1><br/>
        <div class="row rowOrganigramme"id="ancreRowOrganigramme" style="">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 offset-lg-2 offset-md-2">
                        <img src="img/Organigramme.png" alt="" style="width:100%"/>
                    </div>
        </div>


        <div class="modal1 hidden panImagePleine" hidden>
        
        </div>

        <div class="overlay hidden">

        </div>


    <div class="row rowGalery">
             <h1 style="color:orange;text-align:center;font-family:bold;text-decoration:underline;">MEDIATHEQUE</h1><hr/>
       
        
        <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 carteImg">
                    <img src="{{$fotos[0]['chemin']}}" alt="img_{{$fotos[0]['titre']}}" id="{{$fotos[0]['id']}}"/>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titreImg">{{$fotos[0]['titre']}}</div>
                </div>

            
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 carteImg">
                    <img src="{{$fotos[1]['chemin']}}" alt="img_{{$fotos[1]['titre']}}" id="{{$fotos[1]['id']}}"/>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titreImg">{{$fotos[1]['titre']}}</div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 carteImg">
                    <img src="{{$fotos[2]['chemin']}}" alt="img_{{$fotos[2]['titre']}}" id="{{$fotos[2]['id']}}"/>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titreImg">{{$fotos[2]['titre']}}</div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 carteImg">
                    <img src="{{$fotos[3]['chemin']}}" alt="img_{{$fotos[3]['titre']}}" id="{{$fotos[3]['id']}}"/>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titreImg">{{$fotos[3]['titre']}}</div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 carteImg">
                    <img src="{{$fotos[4]['chemin']}}" alt="img_{{$fotos[4]['titre']}}" id="{{$fotos[4]['id']}}"/>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titreImg">{{$fotos[4]['titre']}}</div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 carteImg">
                    <img src="{{$fotos[5]['chemin']}}" alt="img_{{$fotos[5]['titre']}}" id="{{$fotos[5]['id']}}"/>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titreImg">{{$fotos[5]['titre']}}</div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 carteImg">
                    <img src="{{$fotos[6]['chemin']}}" alt="img_{{$fotos[6]['titre']}}" id="{{$fotos[6]['id']}}"/>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titreImg">{{$fotos[6]['titre']}}</div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 carteImg">
                    <img src="{{$fotos[5]['chemin']}}" alt="img_{{$fotos[7]['titre']}}" id="{{$fotos[7]['id']}}"/>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titreImg">{{$fotos[5]['titre']}}</div>
                </div>

            </div>
        </div>
         <!--           Footer-->
        
         
        </div>
        


        <div class="row rowFooter">
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h5>Nous suivre sur:</h5>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Facebook</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Twitter</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Linkedin</div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                 @Copyright:2022
           </div>
        </div>



        
        <div class="panShowActualite" hidden></div>

       
        


        
        

    <style>
        .tableauAnnonce
        {
            background-color:green;
            border-radius:5px;
            margin-bottom:50px;
            margin-left:5%;
            padding:5px;
            box-shadow:15px 15px 15px rgb(228,228,223);

        }

        .rowFooter 
        {
            margin-top:35px;
        }
        .tableauAnnonce .col-lg-5 
        {
            background-color:white;
            margin:25px;
            padding:5px;
        } 


        .tableauAnnonce i 
        {
            background-color:white;
            color:lightblue;
            margin:5px;
           font-size:8em;
           
        }
        
        .carteStatistique h2
        {
           position:relative;
           bottom:25%;
           cursor:pointer;
           
        }

        .nbre 
        {
            width:300px;
            height:150px;
            text-align:center;
            font-size:6em;
            background-color:white;
            border:solid 5px green;
            box-shadow:10px 10px 10px rgb(228,228,223);
            color:green;
            cursor:pointer;
        }
                
        .carteStatistique .nbre:hover
        {
            background-color:green;
            color:white;
           border:solid 5px white;
           
        }


         
          
.titreImg 
{
    color:white;
    background-color:rgb(79,101,109);
    font-size:1.4em;
    height:80px;
    border-bottom:solid 3px orange;
}
.rowGalery img 
{
    width:100%;
    height:250px;
    border-top-left-radius:5px;
    border-top-right-radius:5px;
    cursor:pointer;
    border:solid 2px white;
}
.carteActualite
{
    border:solid 1px green;
    padding:5px;
    width:340px;
    height:450px;;
    margin:10px;
    overflow:hidden;
}
.carteActualite:hover
{
    box-shadow:5px 5px 5px rgb(224,224,230);
   
}

.carteActualite span:hover
{
   
    cursor:pointer;
}

.carteActualite img
{
    width:100%;
    height:200px;;
   
}
.rowActualite
{
    
    margin-bottom:150px;
    
}


.rowFooter
{
   
    background-color:green;
   
    color:white;
}

.panMenu
{
    
    background-color:green;
    color:white;
    font-family:bold;
    height:730px;;
    font-size:1.5em;
}

.panMenu a:hover 
{
    color:white;
    text-decoration:none;
    
}
.ml-5
{
    background-color:rgb(78,115,223);
   
}
.panForm,.panCol
{
    margin-top:20%;
    height:400px;
   box-shadow:5px 5px 5px rgb(51,51,51);
    
}
.panForm
{
    border:solid 2px rgb(78,115,223);
    color:rgb(78,115,223);
}
.panCol
{
    width:500px;text-align:center; background:linear-gradient(45deg,rgb(78,115,223),rgb(35,73,188));
}
.text
{
    color:white;
    font-weight:bold;
    font-size:5em;
    text-shadow: 5px 5px 5px rgb(52,52,52);
    position:relative;
    top:25%;
    
}
input
{
    border:solid 1px rgb(78,115,223);
    width:100%;
}
label 
{
    color: rgb(78,115,223);
}
form
{
    position:relative;
    top:20%;
}
* {box-sizing:border-box}

/* defiilement de text */ 



.marquee-rtl {
           /* largeur de la fenêtre */
margin: 1em auto 2em;

overflow: hidden;     
background-color:red;                /* masque tout ce qui dépasse */
color:white;
}

.marquee-rtl > :first-child
 {
    display: inline-block;                /* modèle de boîte en ligne */
    padding-right: 2em;                   /* un peu d'espace pour la transition */
    padding-left: 100%;                   /* placement à droite du conteneur */
    white-space: nowrap;                  /* pas de passage à la ligne */
    animation: defilement-rtl 35s infinite linear;
    animation-name: defilement-rtl;     /* référence à la règle @keyframes mise en oeuvre */
    animation-duration: 35s;              /* valeur à ajuster suivant la longueur du message */
    animation-iteration-count: infinite;  /* boucle continue */
    animation-timing-function: linear;    /* pas vraiment utile ici */
}



@keyframes defilement-rtl {
0%
{
transform: translate3d(0,0,0);      /* position initiale à droite */
}
100% {
transform: translate3d(-100%,0,0);  /* position finale à gauche */
}
}


/* ********************************* */

/* Slideshow container */
.slideshow-container
{
    width:100%;;
}
.slideshow-container img 
{
    margin-left:40px;
}


/* Hide the images by default */
.mySlides 
{
    display: none;
    height:600px;

}

/* Next & previous buttons */
.prev, .next 
{
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}

/* Position the "next button" to the right */
.next 
{
    right: 0;
    margin-right:0px;
    border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover
{
    background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text 
{
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
}

/* Number text (1/3 etc) */
.numbertext
{
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}

/* The dots/bullets/indicators */
.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.active, .dot:hover {
background-color: #717171;
}

/* Fading animation */
.fade {
    animation-name: fade;
    animation-duration: 3.7s;
}

@keyframes fade {
from {opacity: .4}
to {opacity: 1}
}


.container-fluidd
{
    height:1000px;
    width:1520;
    background-color:black;
    opacity:20%;
}
.panImagePleinee
{
    position:relative;
    top:50%;
    width:100%;
    height:800px;
    background-color:black;
    opacity:85%;

}


/* @media only screen and (min-width: 1600px) bureau*/
/* @media only screen and (max-width: 1600px) laptop*/
/* @media only screen and (max-width: 1024px) tab incliné*/
/* @media only screen and (max-width: 768px) tab*/
/* @media only screen and (max-width: 480px) tel */


/* desktop*/
@media only screen and (min-width: 1600px)
{ 
        .fa-arrow-left
    {
        position:absolute;
        top:205%;
        left:10%;
        font-size:3em;
        color:white;
    }

    .fa-arrow-right 
    {
        position:absolute;
        top:205%;
        right:15%;
        font-size:3em;
        color:white;
    }
    .fa-arrow-right:hover, .fa-arrow-left:hover
    {
        cursor:pointer;
        color:lightgreen;
    }

    .btnFermerImgPane
    {
        position:absolute;
        top:60%;
        right:32%;
    }
    #pleineImage 
    {
        position:absolute;
        width:800px;
        left:15%;
        height:700px;
        border:solid 2px orange;
    }


    .rowGalery
    {
        height:750px;
    
        background-color:rgb(110,132,137);
    }


    #ancreRowTableauAnnonce 
                {
                    padding-left:25%;
                    padding-bottom:5%;
                    border-top:solid 1px rgb(192,192,192);
                    border-bottom:solid 1px rgb(192,192,192);
                }
                   
                   
                    .pantableauAnnonce 
                    {
                        padding-top:5%;
                    }

    .fade img 
    {
        
        margin-left:2.5%; 
        width:100%;
        height:730px;
    }

    .txtTitre
    {
        background-color:rgb(67,105,215);
        height:100px;
        opacity:90%;
        width:1530px;
        position:relative;
        left:40px;
        top:-100px;
        text-align:left;
    }

    .panActualite
    {
    position:relative;
    top:80px;
    left:300px;
    height:100%;
        margin-bottom:50px;
        border:solid 1px rgb(192,192,192);
        background-color:white;
        box-shadow:3px 3px 3px rgb(192,192,192);
        border-radius:2px;
    
    }
    .carteFichier
                    {
                       border:solid 1px red;
                        box-shadow:10px 10px 10px rgb(192,192,192);
                        width:100%;
                        height:110px;
                        margin:5px;
                        
                       
                    }
                    
                    .carteFichier span 
                    {
                        font-size:0.9em;
                        position:relative;
                        top:25%;
                        color:rgb(0,112,192);
                        cursor:pointer;
                    }
}   


/* laptop*/
@media  (min-width:768px) and (max-width: 1600px)
{
    .txtTitre
    {
        background-color:rgb(67,105,215);
        height:100px;
        opacity:90%;
        width:800px;
        position:relative;
        left:40px;
        top:-100px;
        text-align:left;
    }

    
    .fade img 
    {
        
        margin-left:2.5%; 
        width:100%;
        height:730px;
    }
    
    
    #pleineImage 
    {
        height:100px;

        width:50px;
        position:absolute;
        left:15%;
        border:solid 2px orange;
    }

   
}

/* tab*/
@media only screen and (min-width: 768px)
{
    .fade img 
    {
      
       width:100%;
       
       margin-left:0%;
      
    }

    .fade   
    {
       
         padding:5px;
         height:300px;
         margin-bottom:30px;
    }

    .txtTitre
    {
        width:100%;
        background-color:green;
        position:relative;
        top:-100px;
        margin-left:-40px;
    }

    .carteStatistique 
    {
        margin-top:25px;
    }

    .carteFichier
    {
        border:solid 1px red;
        box-shadow:10px 10px 10px rgb(192,192,192);
        width:100%;
        height:110px;
        margin-bottom:15px;
        margin-left:15px;  
    }
                    
    .carteFichier span 
    {
        font-size:0.9em;
        position:relative;
        top:25%;
        color:rgb(0,112,192);
        cursor:pointer;
    }
    

    #ancreRowTableauAnnonce 
    {
        border-top:solid 1px rgb(192,192,192);
        border-bottom:solid 1px rgb(192,192,192);  
    }
                   
                   
    .pantableauAnnonce 
    {
        padding-top:5%;
    }

    .rowGalery 
    {
        background-color:rgb(110,132,137);
       
    }

    .fa-arrow-left
    {
        position:absolute;
        top:205%;
        left:0%;
        font-size:3em;
        color:white;
    }

    .fa-arrow-right 
    {
        position:absolute;
        top:205%;
        right:0%;
        font-size:3em;
        color:white;
    }
    .fa-arrow-right:hover, .fa-arrow-left:hover
    {
        cursor:pointer;
        color:lightgreen;
    }

    #pleineImage 
    {
        height:100px;

        width:50px;
        position:absolute;
        left:1%;
        border:solid 2px red;
    }
}









/* tel*/
@media  (max-width: 480px)
{
    .fade img 
    {
      
       width:100%;
       
       margin-left:0%;
       
    }

    .fade   
    {
       
         padding:5px;
         height:300px;
         margin-bottom:30px;
    }

    .txtTitre
    {
        width:100%;
        background-color:green;
        position:relative;
        top:-25px;
    }

    .carteStatistique 
    {
        margin-top:25px;
    }

    .carteFichier
    {
        border:solid 1px red;
        box-shadow:10px 10px 10px rgb(192,192,192);
        width:100%;
        height:110px;
        margin-bottom:15px;  
    }
                    
    .carteFichier span 
    {
        font-size:0.9em;
        position:relative;
        top:25%;
        color:rgb(0,112,192);
        cursor:pointer;
    }
    

    #ancreRowTableauAnnonce 
    {
        border-top:solid 1px rgb(192,192,192);
        border-bottom:solid 1px rgb(192,192,192);  
    }
                   
                   
    .pantableauAnnonce 
    {
        padding-top:5%;
    }
     
}



.rideauBody
{
    background-color:black;
    opacity:20%;
    position:relative;
    top:1500px;;
    height:1800px;
}


#pleineImage
{
    width:700px;
    position:absolute;
    right:20%;
    top:80%;
}




.imageCentrale 
{
    width:100%;
}

</style>
        
       
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/modal1.js"></script>
<script type ="text/javascript">
            var currentImageActive=0;
            let slideIndex = 0;
            showSlides();
            


            $(".carteStatistique").hover(function(event)
            {
            var mouseX=event.clientX,mouseY=event.clientY;

            })




            
function activeActualite(idActu)
{
    $(".panActualite").text("");

            $(".panActualite").attr("hidden",function(){return true;})

            $(".panActualite").append('<h1 style="color:green;text-align:center;font-family:bold;">Actualités à la DREPS</h1><hr/>'); 
                $.ajax({
                url:"{{url('allActualites')}}/",
                type:'GET',
                data:
                {
                    
                },
                success:function(actualites)
                {
                    var taille=actualites.length,i=0;
                    for(i=0;i<taille;i++)
                    {
                        if(actualites[i]["id"]==idActu)
                        {
                            $(".panActualite").append('<div class="row"><div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " style="border-right:solid 1px rgb(192,192,192)"><img src="'+actualites[i]["chemin"]+'" class="imageCentrale"/><hr/>'+actualites[i]["titre"]+'<hr/>'+actualites[i]["resume1"]+' '+actualites[i]["resume2"]+' '+actualites[i]["resume3"]+' '+actualites[i]["resume4"]+
                            '</div><div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 panListeActualites" style="height:700px;overflow:scroll;scrollbar-width: none;"></div>')
                        }
                        
                    }

                    for(i=0;i<taille;i++)
                    {
                       
                        
                        $(".panListeActualites").append('<div class="col-lg-12" style=""><img src="'+ actualites[i]["chemin"]+'" style="width:100%;height:100px;"/><br/><span onclick="activeActualite('+actualites[i]["id"]+')" style="cursor:pointer;">'+actualites[i]["titre"]+'</span></div><hr/>');

                    }
                    

                },
                });
                $(".panActualite").attr("hidden",function(){return false;})
            

}


        //slide
        function showSlides() 
        {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        } 


        //actualités
            $(".carteActualite span").click(function(event)
            {
            var idActu=event.target.id
            activeActualite(idActu);

            })


         
            function faLeftClick(idImg)
            {
            alert(idImg);
            }


            function faRightClick(idImg)
            {
            alert(idImg);
            }


            //this function hidden body .panImagePleine and unhidden the initial body
            function retour()
            {

            $("body .container-fluid").attr("hidden",function(){return false;})
            $("body .panImagePleine").attr("hidden",function(){return true;})
            }

           
        



           


           
       
           
            

            //Organigramme
           // var diffWidth=0,diffHeight=0;
            

    </script>
</body>
</html>
