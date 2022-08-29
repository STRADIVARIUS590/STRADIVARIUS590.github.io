<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'KulminoituvaRegular';
            src: url('Pokemon Solid.ttf');
        }

        canvas{
             /* border: 1px solid black;  */
        }

        .nivel1{
            margin-left:10%;
            width:810px;
            height: 810px;
        }
        .nivel2{
            /* //    width:1000px; */
            
            /* padding-left: 0  %; */
            width:810px;
            height:810px;

            /* border: 1px solid black; */
        }
 
        #imagen{
            display: none;
        }
        .containerl1{
            padding-left: 25%;
            /* border: 1px solid red; */
        }
        .containerl2{
            /* padding-left: }1%; */
            /* border: 1px solid red; */
        }
    
    </style>
</head>
<body>
    <button onclick="newGame()">New Game</button>
 
    <div id='contenedor' class = container>
        <center>
            <canvas id="canvas"  width="810" height="810">
                Hola, tu navegador no funciona
            </canvas>
            
            <!-- <input type="radio" id="move"> -->
            <!-- }  <img src="descarga.jpg" alt="" id="imagen"> -->
        </center>
    </div>
        

    <script>
            let level2 = {
        'tipoContenedor' : 'containerl2',
        'clase':'level2',
        'walls':[
        {from:4, to:55,heigth:0,type:'vert',clase:'limit'},// paredes 
        {from:1, to:80,heigth:4,type:'hor',clase:'limit'},
        {from:1, to:80,heigth:55,type:'hor',clase:'limit'},
        {from:4, to:55,heigth:80,type:'vert',clase:'limit'},
        
      
        {from:25, to:40,heigth:5, type:'vert',clase:''},// verticales 
        // {from:50, to:55,heigth:5, type:'vert',clase:''},// verticales 
        {from:10, to:20,heigth:5,type:'vert',clase:''},// verticales 
       
        {from:4, to:10,heigth:10,type:'vert',clase:''},// verticales 
        {from:40, to:50,heigth:10, type:'vert',clase:''},// verticales 
        {from:30, to:35,heigth:10, type:'vert',clase:''},// verticales 
       
        {from:25, to:30,heigth:15,type:'vert',clase:''},// verticales 
        {from:35, to:55,heigth:15, type:'vert',clase:''},// verticales 
        {from:10, to:20,heigth:15,type:'vert',clase:''},// verticales         
       
        {from:50, to:55,heigth:20, type:'vert',clase:''},// verticales +++
        {from:15, to:25,heigth:20,type:'vert',clase:''},// verticales 
        {from:30, to:40,heigth:20,type:'vert',clase:''},// verticales 
       
        {from:4, to:20,heigth:25,type:'vert',clase:''},// verticales 
        {from:35, to:40,heigth:25, type:'vert',clase:''},// verticales 
       
        {from:10, to:15,heigth:30,type:'vert',clase:''},// verticales 
        {from:20, to:25,heigth:30,type:'vert',clase:''},// verticales 
        {from:30, to:45,heigth:30, type:'vert',clase:''},// verticales 
       
        {from:45, to:55,heigth:35, type:'vert',clase:''},// verticales
        {from:25, to:30,heigth:35, type:'vert',clase:''},// verticales 
       
        {from:40, to:45,heigth:40, type:'vert',clase:''},// verticales
        {from:15, to:30,heigth:40,type:'vert',clase:''},// verticales 
       
        {from:25, to:40,heigth:45, type:'vert',clase:''},// verticales 
        {from:45, to:50,heigth:45, type:'vert',clase:''},// verticales
        {from:4, to:15,heigth:45,type:'vert',clase:''},// verticales 
        
        {from:35, to:50,heigth:50, type:'vert',clase:''},// verticales
        {from:15, to:25,heigth:50,type:'vert',clase:''},// verticales 
            
        {from:4, to:15,heigth:55,type:'vert',clase:''},// verticales 
        {from:40, to:45,heigth:55, type:'vert',clase:''},// verticales
        {from:30, to:35,heigth:55, type:'vert',clase:''},// verticales 
        
        {from:20, to:30,heigth:60,type:'vert',clase:''},// verticales 
        {from:45, to:55,heigth:60, type:'vert',clase:''},// verticales
        {from:35, to:40,heigth:60, type:'vert',clase:''},// verticales
        
        {from:30, to:35,heigth:65, type:'vert',clase:''},// verticales 
        {from:10, to:15,heigth:65,type:'vert',clase:''},// verticales 
        
        {from:15, to:20,heigth:70,type:'vert',clase:''},// verticales 
        {from:30, to:35,heigth:70, type:'vert',clase:''},// verticales 
        {from:45, to:50,heigth:70, type:'vert',clase:''},// verticales
        
        {from:45, to:55,heigth:75, type:'vert',clase:''},// verticales
        {from:20, to:40,heigth:75, type:'vert',clase:''},// verticales 
        
    

        {from:15, to:25,heigth:10,type:'hor',clase:''},// horizontales 
        {from:30, to:40,heigth:10,type:'hor',clase:''},// horizontales 
        {from:50, to:55,heigth:10,type:'hor',clase:''},// horizontales 
        {from:60, to:80,heigth:10,type:'hor',clase:''},// horizontales
        
        {from:5, to:10,heigth:15,type:'hor',clase:''},// horizontales
        {from:25, to:30,heigth:15,type:'hor',clase:''},// horizontales
        {from:35, to:40,heigth:15,type:'hor',clase:''},// horizontales
        {from:55, to:65,heigth:15,type:'hor',clase:''},// horizontales
        {from:70, to:75,heigth:15,type:'hor',clase:''},// horizontales
        
        //  {from:45, to:50,heigth:15,type:'hor',clase:''},// horizontales
        {from:1, to:5,heigth:20,type:'hor',clase:''},// horizontales
        {from:30, to:70,heigth:20,type:'hor',clase:''},// horizontales
        {from:10, to:15,heigth:20,type:'hor',clase:''},// horizontales
        {from:75, to:85,heigth:20,type:'hor',clase:''},// horizontales
        
        {from:5, to:30,heigth:25,type:'hor',clase:''},// horizontales
        {from:50, to:55,heigth:25,type:'hor',clase:''},// horizontales
        {from:65, to:75,heigth:25,type:'hor',clase:''},// horizontales
       
        {from:60, to:70,heigth:30,type:'hor',clase:''},// horizontales
        {from:45, to:55,heigth:30,type:'hor',clase:''},// horizontales
        {from:20, to:40,heigth:30,type:'hor',clase:''},// horizontales

        {from:10, to:15,heigth:35,type:'hor',clase:''},// horizontales
        {from:35, to:45,heigth:35,type:'hor',clase:''},// horizontales
        {from:50, to:60,heigth:35,type:'hor',clase:''},// horizontales
        
        {from:60, to:75,heigth:40,type:'hor',clase:''},// horizontales
        {from:25, to:40,heigth:40,type:'hor',clase:''},// horizontales
        {from:5, to:10,heigth:40,type:'hor',clase:''},// horizontales
        
        {from:1, to:5,heigth:45,type:'hor',clase:''},// horizontales
        {from:15, to:25,heigth:45,type:'hor',clase:''},// horizontales
        {from:40, to:45,heigth:45,type:'hor',clase:''},// horizontales
        {from:55, to:65,heigth:45,type:'hor',clase:''},// horizontales
        {from:70, to:80,heigth:45,type:'hor',clase:''},// horizontales
        
        {from:65, to:70,heigth:50,type:'hor',clase:''},// horizontales
        {from:50, to:60,heigth:50,type:'hor',clase:''},// horizontales
        {from:25, to:40,heigth:50,type:'hor',clase:''},// horizontales
        {from:5, to:10,heigth:50,type:'hor',clase:''},// horizontales

    ]
    }
    


    let level1 = {
        'tipoContenedor' : 'containerl1',
        'clase':'level1',
        'walls':[
        {from:4, to:55,heigth:0,type:'vert',clase:'limit'},// paredes 
        {from:1, to:50,heigth:4,type:'hor',clase:'limit'},
        {from:1, to:50,heigth:55,type:'hor',clase:'limit'},
        {from:4, to:55,heigth:50,type:'vert',clase:'limit'},
        
        {from:10, to:30,heigth:5,type:'vert'},// lineas verticales 
        {from:10, to:20,heigth:10,type:'vert'},{from:15, to:40,heigth:20,type:'vert'},{from:10, to:30,heigth:25,type:'vert'}, 
        {from:15, to:25,heigth:35,type:'vert'},{from:30, to:35,heigth:40,type:'vert'},{from:30, to:35,heigth:30,type:'vert'}, 
        {from:5, to:15,heigth:45,type:'vert'},{from:30, to:45,heigth:15,type:'vert'},{from:45, to:55,heigth:20,type:'vert'}, 
        {from:35, to:50,heigth:35,type:'vert'},{from:40, to:50,heigth:25,type:'vert'},{from:40, to:50,heigth:40,type:'vert'}, 
        {from:30, to:50,heigth:10,type:'vert'},{from:50, to:55,heigth:45,type:'vert'},
        
        {from:5, to:40,heigth:10,type:'hor'},// lineas horizontales
        {from:30, to:45,heigth:15,type:'hor'},{from:15, to:20,heigth:15,type:'hor'},
        {from:10, to:15,heigth:20,type:'hor'},{from:25, to:30,heigth:20,type:'hor'},
        {from:40, to:50,heigth:20,type:'hor'},{from:5, to:20,heigth:25,type:'hor'},
        {from:30, to:45,heigth:25,type:'hor'},{from:30, to:45,heigth:30,type:'hor'},
        {from:10, to:15,heigth:30,type:'hor'},{from:1, to:5,heigth:45,type:'hor'},
        {from:1, to:5,heigth:35,type:'hor'},{from:40, to:50,heigth:35,type:'hor'},
        {from:25, to:35,heigth:35,type:'hor'},{from:20, to:30,heigth:40,type:'hor'},
        {from:35, to:45,heigth:40,type:'hor'},{from:15, to:20,heigth:45,type:'hor'},
        {from:30, to:35,heigth:45,type:'hor'},{from:45, to:50,heigth:45,type:'hor'},
        {from:5, to:10,heigth:40,type:'hor'},{from:25, to:30,heigth:50,type:'hor'},
        {from:5, to:15,heigth:50,type:'hor'}
    ]
    }
        var canvas = null;
        var ctx = null;
        var press = false;
        let direccion = 'rigth';

 
        var player1 = null;
        var player2 = null;
        let speed = 5;

        let score = 0;

        let shark  =new Image();
        let coin  =new Image();
        let wall  = new Image();

        var audio1 = new Audio();
        var audio2 = new Audio();

        let pause = false;

        let pared2  = null;
        let pared  = null;
        let paredes = [];
         let currentLevel = level1;

 
        function run(){
            canvas = document.getElementById('canvas');
            ctx = canvas.getContext('2d');
            player1 = new Cuadro(5,5, 40,40, 'white');
            player2 = new Cuadro(26, 51, 40,40, 'green')
 
            //paredes

            walls(currentLevel);
                            

            console.log('setup');
            shark.src = 'pikachu.gif';
            ///shark.src = 'ball.png';
            coin.src = 'piedra2.png';
            audio1.src = 'opening.mp3';
            audio2.src = 'mario-coin.mp3';
            paint();
        }


        function createWalls(x, y, type = null, point_size){
            //   coords.forEach(element => {
                    paredes.push(new Cuadro(x,y,point_size,point_size,'green', type));
                //    paredes.push(new Cuadro(coords.x,coords.y,8,8,'rgb(98, 171, 142, 1)'));
                    //  paredes.push(new Cuadro(coords.x,coords.y,6,6,'rgb(176, 252, 125, 1)'));
                
                //}); 
                // console.log(paredes);
        }

/* while(true){
    audio1.play();
} */

       

        function paint(){

            window.requestAnimationFrame(paint);
          //  player1.pintar(ctx);

          //  player2.pintar(ctx);
 
            ctx.fillStyle = 'white';
            ctx.fillRect(0,45,800,800);
            ctx.fillStyle = player1.c;


            ctx.fillRect(player1.x,  player1.y, 40,40);

             ctx.drawImage(shark, player1.x, player1.y, 40,40);
           // ctx.fillStyle = player2.c;
            ctx.drawImage(coin, player2.x, player2.y, 40,40);

            paredes.forEach(pared => {
                pared.pintar(ctx);
            });
 
            if(pause){
                ctx.font = '50px KulminoituvaRegular';
                ctx.fillStyle = 'yellow';
            //  ctx.strokeText('P a u s e', 135, 300);
                ctx.fillText('P a u s e', 135,300); 
                ctx.fillStyle = 'rgba(0,0,0,0.5)';
                //drawStroked("37°", 50, 150);
                ctx.fillStyle = 'rgba(246,45,20,0.5)';
                ctx.fillRect(1,40,505,510);
                audio1.pause();
            }else{
                if(press)
                update()
                // if(document.getElementById('move').value  == 'off')
                press = false;
                audio1.play();
            }

 
            if(player1.se_tocan(player2)){
                console.log('toca'); 
                shark.src = 'raichu.gif';
                coin.src = '';   
                endGame();
            }
        }
        
 function update(){
 
   // audio1.play();
    if(direccion == 'up'){
            //arriba
                // pla}yer1-=20;
         
            
               player1.y -= speed;
               if(player1.y < 0){
                //    player1.y = 500
                }
    
            } 
            if(direccion == 'down'){
                //abajo
            
                //  superY+=20;

                player1.y+= speed;
                if(player1.y > 500){
              //      player1.y = 0
                }
            } 
            if(direccion == 'left'){
                //izq
             
              
                player1.x-= speed;
                if(player1.x < 0){
               //     player1.x = 500
                }
                // superX-=20;
            } 
            if(direccion ==  'rigth'){
                //der
                // superX+=20;+
                
             //   shark.style.transform = "rotate(45deg)";
                player1.x+= speed;
                if(player1.x > 500){
            //        player1.x = 0
                }
            
             
            } 
/* 
            if(player1.se_tocan(player2)){  
                player2.x = getRandomInt(0, 500)
                player2.y = getRandomInt(0, 500)
                audio1.play();
                 speed += 1;
                 score+=1;
          
            } */

            paredes.forEach(pared => {
                
                if(player1.se_tocan(pared)){
                
                    if(direccion == 'up'){
                        player1.y +=speed;
                    }

                    if(direccion == 'down'){
                        player1.y -=speed;
                    } 


                    if(direccion == 'rigth'){
                        player1.x -=speed;
                    }   
                
                    if(direccion == 'left'){
                        player1.x +=speed;
                    }  
            }
        });


            // console.log(speed);
 
 }
            


            
        

        window.requestAnimationFrame = (function () {
        return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function (callback) {
            window.setTimeout(callback, 17);
        };
    }());


    document.addEventListener('keydown',(e)=>{
        //console.log(e.keyCode);//w = 87, 
            
        
        if(e.keyCode==87 || e.keyCode == 38){
                press = true;
                //arriba
                //player1.y-=20;
                
                direccion = 'up'
            } 
            if(e.keyCode==40 || e.keyCode == 83){
                press = true;
                //abajo
                direccion = 'down'
                //  superY+=20;
                //player1.y+=20;
            } 
            if(e.keyCode==37 || e.keyCode == 65){
                press = true;
                //izq
              
                direccion = 'left'
                shark.src =  'pikachu.gif';
                
                // superX-=20;
            } 
            if(e.keyCode==39 || e.keyCode == 68){
                //der
                press = true;
               // superX+=20;
               shark.src = 'pikachu copy.gif';
            //   console.log(shark.src);
             
                direccion = 'rigth'
            //    shark.style.rotate(40)}+;
            } 
        
         //   console.log('asdadsa', pause ) ;


            if (e.keyCode == 32 ){
            pause =  (pause) ? false: true;
        } 
   
        }); 


    window.addEventListener('load',run);

    function Cuadro(x, y, w, h , c, type){
        this.x = x*10;
        this.y = y*10;
        this.w = w;
        this.h = h;
        this.c = c;
        this.type = type

 
        this.pintar = function(ctx){
            ctx.fillStyle = this.c;
            ctx.fillRect(this.x,this.y,this.w,this.h);
            ctx.strokeRect(this.x,this.y,this.w,this.h);
            // ctx.fillRec}{}t(superX, superY, 40,40);
        }

    this.se_tocan = function (target) { 
        if(this.x < target.x + target.w &&

        this.x + this.w > target.x && 

        this.y < target.y + target.h && 

        this.y + this.h > target.y)
        {
        return true;	 
        }  
        };
    }

 
 

    function fence(from, to, height, type, clase, point_size = 8){
        for(let i = from; i < to; i++){
            if(type == 'vert')
                createWalls(height, i, clase,point_size);
            else if(type == 'hor')
                createWalls(i,height,clase,point_size);
        }
    }


    function loadLevel(level){
        level.forEach((element)=>{
            fence(
                element.from,
                element.to,
                element.heigth,
                element.type,
                element.clase
            );
        })
    }
    function walls(nivel){
        canvas.classList = [];

        canvas.classList.add(nivel.clase);
        loadLevel(nivel.walls);
        let contenedor = document.getElementById('contenedor');
        contenedor.classList = [];
        contenedor.classList.add(nivel.tipoContenedor)
    }




    function newGame(){
        paredes = []
    //    canvas.classList.add('nivel2');
       // loadLevel(level1)
        // console.log(canvas.classList);
        // paredes.filter(e=> e.type !=limit)
/*         paredes.forEach((e=>{
            if(e.type != 'limit'){
                e.x = -100;
                e.y = -100; 
                e = null;  
            }
        })); */
      //  run();
        console.log(paredes.length);
    }


/*     function createWalls(arrayLevel){
        arrayLevel.forEach((element)=>{
            fence(element.from,
            element.to,
            element.height, 
            element.type,
            element.clase)
        })
    } */



    function endGame(){
        // audio2.play();// asi no se reproducia el audio XD
        let time = setTimeout(()=>{
            audio2.play();
        }, 0);
        // clearInterval(time);
       //levelUp();
       currentLevel = level2;
       newGame();
        run();
       
    }
    
    

 

        
    
 

</script>
</body>
</html>