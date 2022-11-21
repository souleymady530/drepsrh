

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueil | DREPS Nord</title>

        <!-- Fonts -->
      

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
 <canvas class="organigramme" style="">
                    Désolé!!! Votre nagivateur ne prend pas en charger l'affichage de l'organigramme.
                 </canvas>
</body>
</html>


<script type="text/javascript">
            const canvas=document.querySelector(".organigramme");
            const width=canvas.width=window.innerWidth;
            const height=canvas.height=window.innerHeight;
            var diffWidthRect=0;
            var diffWidthBar=0;
            var diffWidth=0,diffHeight=0;
            canContext=canvas.getContext('2d');
            //tete
            canContext.fillStyle="green";
            canContext.fillRect(550-diffWidth,0-diffHeight,200,50);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("Direction Regionale",560-diffWidth,30-diffHeight);
           
            canContext.fillStyle="green";
            canContext.fillRect(595-diffWidth ,50-diffHeight,5,500);

            canContext.fillStyle="green";
            canContext.fillRect(520-diffWidth,250-diffHeight,170,50);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("Services Internes",525-diffWidth,275-diffHeight);
            
            //droite et à gauche de la branche
            canContext.fillStyle="green";
            canContext.fillRect(420-diffWidth,310-diffHeight,150,50);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("Sécrétariat",425-diffWidth,335-diffHeight);
            canContext.fillStyle="green";
            canContext.fillRect(570-diffWidth,330-diffHeight,205,5);
            canContext.fillStyle="green";
            canContext.fillRect(625-diffWidth,310-diffHeight,150,50);  
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("SGRFM",655-diffWidth,335-diffHeight);
            canContext.fillStyle="green";
            canContext.fillRect(420-diffWidth,380-diffHeight,150,50);

            canContext.fillStyle="green";
            canContext.fillRect(570-diffWidth,400-diffHeight,205,5);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("Les Régies",425-diffWidth,410);
            canContext.fillStyle="green";
            canContext.fillRect(625-diffWidth,380-diffHeight,150,50);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("SGRH",655-diffWidth,410-diffHeight);
            canContext.fillStyle="green";
            canContext.fillRect(420-diffWidth,450-diffHeight,150,50);
            canContext.fillStyle="green";
            canContext.fillRect(570-diffWidth,470-diffHeight,205,5);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("SEP",455-diffWidth,475-diffHeight);
            canContext.fillStyle="green";
            canContext.fillRect(625-diffWidth,450-diffHeight,150,50);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("SAD",655-diffWidth,475-diffHeight);
            //*************************************************** */
            //extreme droite
            canContext.fillStyle="green";
            canContext.fillRect(705-diffWidth ,50-diffHeight,5,200);
            canContext.fillStyle="green";
            canContext.fillRect(710-diffWidth,125-diffHeight,20,5);
            canContext.fillStyle="green";
            canContext.fillRect(730-diffWidth,100-diffHeight,200,50);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("Services Externes",735-diffWidth,120);
            canContext.fillStyle="green";
            canContext.fillRect(710-diffWidth,245-diffHeight,20,5);
            canContext.fillStyle="green";
            canContext.fillRect(730-diffWidth,230-diffHeight,200,50);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("Services Externes",735-diffWidth,260);
            //1er niveau
            canContext.fillStyle="green";
            canContext.fillRect(155-diffWidth,550-diffHeight,1200-diffWidthBar,5);



            //1er service
            canContext.fillStyle="green";
            canContext.fillRect(155-diffWidth,555-diffHeight,5,55);
            canContext.fillRect(55-diffWidth,605-diffHeight,200,55);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("SECS",125-diffWidth,635-diffHeight);
            //2eme service
            canContext.fillStyle="green";
            canContext.fillRect(355-diffWidth,555-diffHeight,5,110);
            canContext.fillRect(255-diffWidth,665-diffHeight,200,55);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("SEFP",330-diffWidth,700-diffHeight);
            //3eme service
            canContext.fillStyle="green";
            canContext.fillRect(555-diffWidth,555-diffHeight,5,55);
            canContext.fillRect(455-diffWidth,605-diffHeight,200,55);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("SSs",525-diffWidth,635-diffHeight);
            //4eme service
            canContext.fillStyle="green";
            canContext.fillRect(755-diffWidth,555-diffHeight,5,110);
            canContext.fillRect(655-diffWidth,665-diffHeight,200,55);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("SEIPFG",725-diffWidth,700-diffHeight);
            //5eme service
            canContext.fillStyle="green";
            canContext.fillRect(955-diffWidth,555-diffHeight,5,55);
            canContext.fillRect(855-diffWidth,605-diffHeight,200,55);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("SEMPC",915-diffWidth,635-diffHeight);
            //6eme service
            canContext.fillStyle="green";
            canContext.fillRect(1150-diffWidth,555-diffHeight,5,110);
            canContext.fillRect(1055-diffWidth,665-diffHeight,200,55);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("SASCL",1115-diffWidth,700-diffHeight);
            //7eme service
            canContext.fillStyle="green";
            canContext.fillRect(1350-diffWidth,555-diffHeight,5,55);
            canContext.fillRect(1255-diffWidth,605-diffHeight,200,55);
            canContext.font="20px arial";
            canContext.fillStyle="white";
            canContext.fillText("SCTIC",1320-diffWidth,635-diffHeight);

</script>