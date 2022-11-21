function dessinerOrganigramme()
{
    /* @media only screen and (min-width: 1600px) bureau*/
    /* @media only screen and (max-width: 1600px) laptop*/
    /* @media only screen and (max-width: 1024px) tab incliné*/
    /* @media only screen and (max-width: 768px) tab*/
    /* @media only screen and (max-width: 480px) tel */
    const canvas=document.querySelector(".organigramme");
    const width=canvas.width=window.innerWidth;
    const height=canvas.height=window.innerHeight;
    var diffWidthRect=0;
    var diffWidthBar=0;
    var diffWidth=0,diffHeight=0;



    if(width>=1600)
    {
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
    }
    else if(width>=1024 && width<=1600)
    {
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
    }
    else if(width>=768 && width<1024)
    {
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
    }
    else if(width>=480 && width<=768)
    {
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
    }
    else
    {
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
    }
}
dessinerOrganigramme();