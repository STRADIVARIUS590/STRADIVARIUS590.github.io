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
 
        #imagen{
            display: none;
        }
    
    </style>
</head>
<body>
    <center>
        <canvas id="canvas" width="510" height="560">
            Hola, tu navegador no funciona
        </canvas>

        <!-- <input type="radio" id="move"> -->
        <!-- }  <img src="descarga.jpg" alt="" id="imagen"> -->
    </center>
    <button onclick="levelUp()">GDFG</button>
        

    <script>
        var canvas = null;
        var ctx = null;
        var color = 'red';
        var fig = 'arc';
        var press = false;
        let direccion = 'rigth';

        var superX = 0;
        var superY = 0; 
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
        function run(){
            canvas = document.getElementById('canvas');
            ctx = canvas.getContext('2d');
            player1 = new Cuadro(5, 5, 40,40, 'red');
            player2 = new Cuadro(26, 51, 40,40, 'green')
     
            canvas.addEventListener('click', e=>{
                console.log(e.offsetX, e.offsetY);
            })

//paredes


// walls();
                   
 
          /*   createWalls([
            {x:1,y:2},{x:1,y:3},{x:1,y:4},
            {x:1,y:5},{x:1,y:6},{x:1,y:7},
            {x:1,y:8},{x:1,y:9},{x:1,y:10},
            {x:1,y:11},{x:1,y:12},{x:1,y:13},
            {x:1,y:14},{x:1,y:15},{x:1,y:16},
        ]);
       */


            shark.src = 'pikachu.gif';
            ///shark.src = 'ball.png';
            coin.src = 'piedra2.png';


        //    audio1.src = 'opening.mp3';
            audio2.src = 'mario-coin.mp3';
            paint();
        }


function createWalls(coords, type = null){
      //   coords.forEach(element => {
             paredes.push(new Cuadro(coords.x,coords.y,8,8,'green', type));
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
            ctx.fillRect(0,45,550,550);
         //   ctx.fillStyle = player1.c;


         //  ctx.fillRect(player1.x,  player1.y, 40,40);

             ctx.drawImage(shark, player1.x, player1.y, 40,40);
           // ctx.fillStyle = player2.c;
            ctx.drawImage(coin, player2.x, player2.y, 40,40);



            paredes.forEach(pared => {
                pared.pintar(ctx);
            });
/*             pared.pintar(ctx);

            pared2.pintar(ctx); */
/*             ctx.font = '10px serif';
            ctx.fillText(`SCORE: ${score}`, 10,10);
 */
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

           // update();
          /*   ctx.fillStyle = 'green';
            ctx.fillRect(player2.x,  player2.y, 40,40);
 */
/* 
            player1.x+=10;

            if(player1.x>500)
            player1.x = 0; */
           
      /*       player2.x+=15;

            if(player2.x>500)
            player2.x = 0;
*/
             if(player1.se_tocan(player2)){
                console.log('toca'); 
                shark.src = 'raichu.gif';
                coin.src = '';   
                endGame();
            }
    function drawStroked(text, x, y) {
        ctx.font = '50px KulminoituvaRegular'
    ctx.strokeStyle = 'black';
    ctx.lineWidth = 8;
    ctx.strokeText(text, x, y);
    ctx.fillStyle = 'white';
    ctx.fillText(text, x, y);
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

    /* 

     let desde = 4, hasta = 55, altura = 0,  type = 'hort';
            for(let i = desde; i<hasta; i++){
                if(type == 'vert')
                    createWalls({x:0, y:i + altura}, 'limit');// vert left
                    //createWalls({x:0, y:i}, 'limit');// vert left
                else     
                    createWalls({x:i, y:altura + 4});
            }
    
    
    
    
    */


    function walls(){
           // let desde = 4, hasta = 55, altura = 0,  type = 'hort';
            for(let i =  4; i<55; i++){
            //    if(type == 'vert')
              //      createWalls({x:0, y:i + altura}, 'limit');// vert left
                    createWalls({x:0, y:i}, 'limit');// vert left
                //else     
                  //  createWalls({x:i, y:altura + 4});
            }

 

            for(let i = 1  ; i<50; i++){// hor up
                createWalls({x:i, y:4}, 'limit');
            }

            for(let i = 1  ; i<50; i++){// hor down
                //createWalls({x:i, y:55});
                createWalls({x:i, y:55}, 'limit');
            } 


            for(let i = 4 ; i<56; i++){// vert rit
                createWalls({x:50, y:i}, 'limit');
            } 

          // lineas verticales 


            
          
            for(let i = 5  ; i<25; i++){
                createWalls({x:5, y:i+5});
            } 

            for(let i = 5  ; i<15; i++){
                createWalls({x:10, y:i+5});
            } 

            for(let i = 5  ; i<30; i++){
                createWalls({x:20, y:i+10});
            } 


            for(let i = 5  ; i<25; i++){
                createWalls({x:25, y:i+5});
            } 
            for(let i = 5  ; i<15; i++){
                createWalls({x:35, y:i+10});
            } 


            for(let i = 5  ; i<10; i++){
                createWalls({x:40, y:i+25});
            } 

            for(let i = 5  ; i<10; i++){
                createWalls({x:30, y:i+25});
            } 
            
            
            for(let i = 5  ; i<15; i++){
                createWalls({x:45, y:i});
            } 
            
            for(let i = 5  ; i<25; i++){
                createWalls({x:10, y:i+25});
            } 
             


            for(let i = 5  ; i<20; i++){
                createWalls({x:15, y:i+25});
            }  
 

            for(let i = 5  ; i<15; i++){
                createWalls({x:20, y:i+40});
            }  
 

            for(let i = 5  ; i<20; i++){
                createWalls({x:35, y:i+30});
            }  
 

            for(let i = 5  ; i<15; i++){
                createWalls({x:25, y:i+35});
            }  
    
            for(let i = 5  ; i<15; i++){
                createWalls({x:40, y:i+35});
            }  

            for(let i = 5  ; i<10; i++){
                createWalls({x:45, y:i+45});
            }  


            for(let i = 5  ; i<10; i++){
                createWalls({x:35, y:i+45});
            }  
    
 




            // horizontal 

            for(let i = 0  ; i<=35; i++){
                createWalls({x:i+5, y:10});
            }

            for(let i = 0  ; i<16; i++){
                createWalls({x:i+30, y:15});
            }
   
            for(let i = 0  ; i<5; i++){
                createWalls({x:i+15, y:15});
            }
            for(let i = 0  ; i<=5; i++){
                createWalls({x:i+10, y:20});
            }
   
             for(let i = 0 ; i<=15; i++){
                createWalls({x:i+5, y:25});
            }
            for(let i = 1  ; i<15; i++){
                createWalls({x:i+29, y:25});
            } 
            for(let i = 1  ; i<5; i++){
                createWalls({x:i+25, y:20});
            }
            for(let i = 1  ; i<10; i++){
                createWalls({x:i+40, y:20});
            }

            for(let i = 1  ; i<15; i++){
                createWalls({x:i+30, y:30});
            }

      
            for(let i = 1  ; i<5; i++){
                createWalls({x:i+10, y:30});
            }


            for(let i = 1  ; i<5; i++){
                createWalls({x:i, y:35});
            }
            for(let i = 1  ; i<10; i++){
                createWalls({x:i+25, y:35});
            }
            for(let i = 1  ; i<10; i++){
                createWalls({x:i+40, y:35});
            }


            for(let i = 1  ; i<5; i++){
                createWalls({x:i, y:45});
            }
            for(let i = 1  ; i<5; i++){
                createWalls({x:i+5, y:40});
            }

            for(let i = 1  ; i<10; i++){
                createWalls({x:i+20, y:40});
            }

            for(let i = 1  ; i<10; i++){
                createWalls({x:i+35, y:40});
            }


            
            for(let i = 1  ; i<5; i++){
                createWalls({x:i+15, y:45});
            }
            for(let i = 1  ; i<5; i++){
                createWalls({x:i+30, y:45});
            }
            for(let i = 1  ; i<5; i++){
                createWalls({x:i+45, y:45});
            }


            for(let i = 1  ; i<10; i++){
                createWalls({x:i+5, y:50});
            }
            for(let i = 1  ; i<5; i++){
                createWalls({x:i+25, y:50});
            }


       
            
            
 
 
    }




    function levelUp(){
        paredes.forEach((e=>{
            if(e.type != 'limit'){
                e.x = -100;
                e.y = -100; 
        //        e = null;
            }
        }));
    //    walls();
    }



    function endGame(){
        audio2.play();
        setTimeout(run, 450);
        
    }




</script>
</body>
</html>