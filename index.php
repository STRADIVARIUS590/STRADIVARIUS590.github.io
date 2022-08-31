<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3"></script>
    <style>

        @font-face {
            font-family: 'KulminoituvaRegular';
            src: url('Pokemon Solid.ttf');
        }

        html, body {margin: 0; height: 100%; overflow: hidden}


        #reloj{
            padding-top: 0;
            text-align: center;
            font-family: 'KulminoituvaRegular';
            font-size: 10px;
        
        }

        canvas{
               /* border: 1px solid black;   */
            }
            
        .nivel1{
                /* margin-left:20%;  */
                height:  400px;
                /* border: 1px solid red;   */
              
            /*         width: 600px;*/
        }
        .nivel2{
            /* //    width:1000px; */
            
            /* padding-left: 0  %; */
            width:810px;
            /* height:810px; */

            /* border: 1px solid black; */
        }
        .nivel3{
            /* border: 1px solid red; */
            width: 4000px;
            height: 4000px;
            padding-left: 380px;
        }
 
        #imagen{
            display: none;
        }
        .containerl1{
             padding-left: 35%;
 /*           border: 1px solid red; */
        }
        .containerl2{
             padding-left: 29%; 
            /* border: 1px solid red; */
        }
        .containerl3{
            /* border: 1px solid }green; */
            /* padding-left: 200px; */
        }
    
    </style>
</head>
<body>
    <!-- <button onclick="newGame()">New Game</button> -->
 

    <div id=reloj><p>{{mins}}:<span>{{time}}</span></p></div>
    <div id='contenedor' class = container>
        
            <canvas id="canvas"  width="8000" height="8000">
            <!-- <canvas id="canvas"  width="1210" height="620"> -->
                Hola, tu navegador no funciona
            </canvas>
            
            <!-- <input type="radio" id="move"> -->
            <!-- }  <img src="descarga.jpg" alt="" id="imagen"> -->
    
    </div>
        

    <script>

    const {createApp} = Vue

    const app = createApp({
        data(){
            return {
                time : 0,
                mins : 0, 
                pause: false
            }
        },
        methods:{
            tick(){
                if(!pause){
                    this.time++;
                    //    let int = setInterval(this.tick   , 1000);
                    if(this.time == 60){
                        this.time = 0
                        this.mins++
                    }
                }
            }
        }
    }).mount('#reloj')
  
    setInterval(app.tick, 1000);
    let terminado = false;



    let level1 = {
        'tipoContenedor' : 'containerl1',
        'clase':'nivel1',
        'walls':[
/*         {from:0  , to:60,heigth:0,type:'vert',clase:'limit'},// paredes 
        {from:0, to:130,heigth:0,type:'hor',clase:'limit'},
        {from:0, to:130,heigth:60,type:'hor',clase:'limit'},
        {from:0, to:60,heigth:120,type:'vert',clase:'limit'},

                fence(4,55,0,'vert', 'limit');
        fence(1, 50,4, 'hor', 'limit')
        fence(1, 50, 55, 'hor', 'limit');
        fence(4, 55,50, 'vert', 'limit');


 */

        {from:1, to:55, heigth:0, type:'vert',clase:'limit'},
        {from:1, to:50, heigth:0, type:'hor',clase:'limit'},
        {from:1, to:50, heigth:55, type:'hor',clase:'limit'},
        {from:1, to:55, heigth:50, type:'vert',clase:'limit'},

        
        {from:5, to:30,heigth:5,type:'vert'},// lineas verticales 
        {from:10, to:20,heigth:10,type:'vert'},
        {from:15, to:40,heigth:20,type:'vert'},{from:10, to:30,heigth:25,type:'vert'}, 
        {from:15, to:25,heigth:35,type:'vert'},{from:30, to:35,heigth:40,type:'vert'},{from:30, to:35,heigth:30,type:'vert'}, 
        {from:5, to:15,heigth:45,type:'vert'},{from:30, to:45,heigth:15,type:'vert'},{from:45, to:55,heigth:20,type:'vert'}, 
        {from:35, to:50,heigth:35,type:'vert'},{from:40, to:50,heigth:25,type:'vert'},{from:40, to:50,heigth:40,type:'vert'}, 
        {from:30, to:50,heigth:10,type:'vert'},
        {from:50, to:55,heigth:45,type:'vert'},
        {from:5, to:10,heigth:32,type:'vert'},
        
        {from:5, to:40,heigth:10,type:'hor'},// lineas horizontales
        {from:15, to:40,heigth:5,type:'hor'},// lineas horizontales
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



    
         let level2 = {
        'tipoContenedor' : 'containerl2',
        'clase':'nivel2',
        'walls':[
        {from:1, to:55,heigth:0,type:'vert',clase:'limit'},// paredes 
        {from:1, to:80,heigth:0,type:'hor',clase:'limit'},
        {from:1, to:80,heigth:55,type:'hor',clase:'limit'},
        {from:1, to:55,heigth:80,type:'vert',clase:'limit'},
        
      
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
        
        //
        {from:60, to:80,heigth:4,type:'hor',clase:''},// horizontales
        {from:10, to:30,heigth:4,type:'hor',clase:''},// horizontales
        {from:35, to:50,heigth:4,type:'hor',clase:''},// horizontales
        //
        {from:5, to:10,heigth:15,type:'hor',clase:''},// horizontales
        {from:25, to:30,heigth:15,type:'hor',clase:''},// horizontales
        {from:35, to:40,heigth:15,type:'hor',clase:''},// horizontales
        {from:55, to:65,heigth:15,type:'hor',clase:''},// horizontales
        {from:70, to:75,heigth:15,type:'hor',clase:''},// horizontales
        
        //  {from:45, to:50,heigth:15,type:'hor',clase:''},// horizontales
        {from:1, to:5,heigth:20,type:'hor',clase:''},// horizontales
        {from:30, to:70,heigth:20,type:'hor',clase:''},// horizontales
        {from:10, to:15,heigth:20,type:'hor',clase:''},// horizontales
        {from:75, to:80,heigth:20,type:'hor',clase:''},// horizontales
        
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

    let level3 = {
        'tipoContenedor' : 'containerl3',
        'clase':'nivel3',


        'walls':[
            {from:1, to:120 ,heigth:0,type:'hor',clase:'limit'},// paredes 
            {from:1, to:120,heigth:0,type:'vert',clase:'limit'},
            {from:1, to:120,heigth:120,type:'vert',clase:'limit'},
            {from:1, to:120,heigth:120,type:'hor',clase:'limit'},
          
            // {from:1, to:2,heigth:5,type:'vert',clase:''},// verticales 
            {from:1, to:3,heigth:3,type:'vert',clase:''},// verticales 
          //  {from:1, to:3,heigth:6,type:'vert',clase:''},// verticales 
            //{from:1, to:3,heigth:9,type:'vert',clase:''},// verticales 
            {from:1, to:3,heigth:15,type:'vert',clase:''},// verticales 
         
            {from:1, to:3,heigth:33,type:'vert',clase:''},// verticales 
            
            
        
            {from:1, to:9,heigth:54,type:'vert',clase:''},// verticales 
       
            {from:1, to:3,heigth:72,type:'vert',clase:''},// verticales 
            {from:1, to:3,heigth:78,type:'vert',clase:''},// verticales 
           // {from:1, to:3,heigth:78,type:'vert',clase:''},// verticales 
            //{from:1, to:3,heigth:81,type:'vert',clase:''},// verticales 
            //{from:1, to:3,heigth:84,type:'vert',clase:''},// verticales 
            {from:1, to:3,heigth:87,type:'vert',clase:''},// verticales 
            {from:1, to:6,heigth:90,type:'vert',clase:''},// verticales 
            {from:3, to:9,heigth:6,type:'vert',clase:''},// verticales 
            {from:3, to:6,heigth:12,type:'vert',clase:''},// verticales 
            {from:3, to:6,heigth:18,type:'vert',clase:''},// verticales 
            {from:3, to:6,heigth:24,type:'vert',clase:''},// verticales 
            {from:3, to:6,heigth:27,type:'vert',clase:''},// verticales 
            {from:3, to:6,heigth:36,type:'vert',clase:''},// verticales 
            {from:3, to:15,heigth:45,type:'vert',clase:''},// verticales 
            {from:3, to:9,heigth:51,type:'vert',clase:''},// verticales 
            
            {from:3, to:9,heigth:60,type:'vert',clase:''},// verticales 
            {from:3, to:12,heigth:66,type:'vert',clase:''},// verticales 
            {from:3, to:6,heigth:69,type:'vert',clase:''},// verticales 
            {from:3, to:6,heigth:75,type:'vert',clase:''},// verticales 
            {from:3, to:9,heigth:84,type:'vert',clase:''},// verticales 
            {from:3, to:6,heigth:99,type:'vert',clase:''},// verticales 
            {from:3, to:6,heigth:105,type:'vert',clase:''},// verticales 
            {from:3, to:9,heigth:111,type:'vert',clase:''},// verticales 
            {from:3, to:6,heigth:117,type:'vert',clase:''},// verticales 
            
            {from:6, to:9,heigth:15,type:'vert',clase:''},// verticales 
            {from:6, to:9,heigth:21,type:'vert',clase:''},// verticales 
            {from:6, to:15,heigth:30,type:'vert',clase:''},// verticales 
            {from:6, to:9,heigth:33,type:'vert',clase:''},// verticales 
            {from:6, to:15,heigth:39,type:'vert',clase:''},// verticales 
            // {from:9, to:15,heigth:49,type:'vert',clase:''},// verticales 
            {from:6, to:12,heigth:57,type:'vert',clase:''},// verticales 
            
            {from:6, to:9,heigth:78,type:'vert',clase:''},// verticales 
            {from:6, to:9,heigth:93,type:'vert',clase:''},// verticales 
            {from:6, to:9,heigth:102,type:'vert',clase:''},// verticales 
            {from:6, to:12,heigth:115,type:'vert',clase:''},// verticales  
            
            {from:9, to:12,heigth:3,type:'vert',clase:''},// verticales 
            {from:9, to:12,heigth:9,type:'vert',clase:''},// verticales 
            {from:9, to:12,heigth:12,type:'vert',clase:''},// verticales 
            {from:9, to:15,heigth:18,type:'vert',clase:''},// verticales 
            {from:9, to:12,heigth:27,type:'vert',clase:''},// verticales 
            {from:9, to:12,heigth:36,type:'vert',clase:''},// verticales 
            {from:9, to:18,heigth:42,type:'vert',clase:''},// verticales 
            {from:9, to:12,heigth:48,type:'vert',clase:''},// verticales 
           {from:9, to:24,heigth:75,type:'vert',clase:''},// verticales ++
            
            {from:9, to:12,heigth:87,type:'vert',clase:''},// verticales 
            {from:9, to:12,heigth:96,type:'vert',clase:''},// verticales 
            {from:9, to:18,heigth:99,type:'vert',clase:''},// verticales 
            {from:9, to:12,heigth:108,type:'vert',clase:''},// verticales 
            
            {from:12, to:15,heigth:6,type:'vert',clase:''},// verticales 
            {from:12, to:15,heigth:15,type:'vert',clase:''},// verticales 
            {from:12, to:18,heigth:24,type:'vert',clase:''},// verticales 
            {from:12, to:15,heigth:54,type:'vert',clase:''},// verticales 
            {from:9, to:15,heigth:63,type:'vert',clase:''},// verticales 
            {from:12, to:15,heigth:84,type:'vert',clase:''},// verticales 
            {from:12, to:18,heigth:90,type:'vert',clase:''},// verticales 
            {from:12, to:15,heigth:93,type:'vert',clase:''},// verticales 
            {from:12, to:15,heigth:102,type:'vert',clase:''},// verticales 
            {from:12, to:15,heigth:105,type:'vert',clase:''},// verticales 
            {from:12, to:15,heigth:111,type:'vert',clase:''},// verticales 
            {from:12, to:18,heigth:117,type:'vert',clase:''},// verticales 
          
            {from:15, to:18,heigth:12,type:'vert',clase:''},// verticales 
            {from:15, to:18,heigth:21,type:'vert',clase:''},// verticales 
            {from:15, to:36,heigth:33,type:'vert',clase:''},// verticales 
            {from:15, to:33,heigth:36,type:'vert',clase:''},// verticales 
            {from:15, to:30,heigth:48,type:'vert',clase:''},// verticales 
            {from:15, to:18,heigth:57,type:'vert',clase:''},// verticales 
            {from:15, to:18,heigth:66,type:'vert',clase:''},// verticales 
            {from:12, to:15,heigth:69,type:'vert',clase:''},// verticales 
            {from:15, to:30,heigth:72,type:'vert',clase:''},// verticales 
            {from:15, to:30,heigth:78,type:'vert',clase:''},// verticales 
            {from:15, to:18,heigth:87,type:'vert',clase:''},// verticales 
            {from:15, to:18,heigth:108,type:'vert',clase:''},// verticales 
            {from:15, to:21,heigth:111,type:'vert',clase:''},// verticales 
            {from:15, to:24,heigth:114,type:'vert',clase:''},// verticales 
            {from:15, to:27,heigth:51,type:'vert',clase:''},// verticales 
           
            {from:18, to:21,heigth:6,type:'vert',clase:''},// verticales 
            {from:18, to:30,heigth:27,type:'vert',clase:''},// verticales 
             {from:18, to:21,heigth:54,type:'vert',clase:''},// verticales 
           {from:18, to:27,heigth:84,type:'vert',clase:''},// verticales 
            {from:18, to:27,heigth:96,type:'vert',clase:''},// verticales 
            {from:18, to:21,heigth:93,type:'vert',clase:''},// verticales 
            {from:18, to:27,heigth:39,type:'vert',clase:''},// verticales 
          /*  {from:18, to:21,heigth:105,type:'vert',clase:''},// verticales 
              */
            {from:21, to:27,heigth:9,type:'vert',clase:''},// verticales 
            {from:21, to:24,heigth:42,type:'vert',clase:''},// verticales 
            {from:21, to:24,heigth:66,type:'vert',clase:''},// verticales 
            {from:21, to:24,heigth:102,type:'vert',clase:''},// verticales 
            {from:21, to:27,heigth:108,type:'vert',clase:''},// verticales 
            {from:21, to:24,heigth:117,type:'vert',clase:''},// verticales 
            
            {from:24, to:30,heigth:21,type:'vert',clase:''},// verticales 
             {from:24, to:40,heigth:45,type:'vert',clase:''},// verticales 
             {from:24, to:27,heigth:69,type:'vert',clase:''},// verticales 
             {from:24, to:30,heigth:81,type:'vert',clase:''},// verticales 
             {from:24, to:30,heigth:87,type:'vert',clase:''},// verticales 
            
             {from:27, to:30,heigth:3,type:'vert',clase:''},// verticales 
             {from:27, to:42,heigth:18,type:'vert',clase:''},// verticales 
             {from:27, to:36,heigth:12,type:'vert',clase:''},// verticales 
             {from:27, to:42,heigth:6,type:'vert',clase:''},// verticales 
    
             {from:30, to:33,heigth:24,type:'vert',clase:''},// verticales 
             {from:30, to:33,heigth:30,type:'vert',clase:''},// verticales 
            
             {from:33, to:39,heigth:27,type:'vert',clase:''},// verticales 
             
             
             
             {from:36, to:42,heigth:24,type:'vert',clase:''},// verticales 
             {from:36, to:39,heigth:9,type:'vert',clase:''},// verticales 
             //    {from:36, to:39,heigth:3,type:'vert',clase:''},// verticales 
             {from:36, to:39,heigth:3,type:'vert',clase:''},// verticales 
             {from:36, to:45,heigth:15,type:'vert',clase:''},// verticales 
             
             {from:39, to:42,heigth:12,type:'vert',clase:''},// verticales 
             {from:42, to:45,heigth:27,type:'vert',clase:''},// verticales 
            
            
             {from:39, to:42,heigth:30,type:'vert',clase:''},// verticales 
             {from:18, to:21,heigth:105,type:'vert',clase:''},// verticales 
             
             {from:24, to:30,heigth:99,type:'vert',clase:''},// verticales 
             
             
          {from:27, to:33,heigth:66,type:'vert',clase:''},// verticales 
          {from:27, to:30,heigth:90,type:'vert',clase:''},// verticales 
          {from:27, to:30,heigth:90,type:'vert',clase:''},// verticales 
         
          {from:30, to:33,heigth:84,type:'vert',clase:''},// verticales 
          {from:30, to:33,heigth:102,type:'vert',clase:''},// verticales 
          {from:30, to:33,heigth:108,type:'vert',clase:''},// verticales 
          {from:27, to:30,heigth:105,type:'vert',clase:''},// verticales 
          
          {from:24, to:30,heigth:111,type:'vert',clase:''},// verticales 
          {from:36, to:39,heigth:30,type:'vert',clase:''},// verticales 
          {from:36, to:42,heigth:36,type:'vert',clase:''},// verticales 
          {from:33, to:36,heigth:39,type:'vert',clase:''},// verticales 
          {from:30, to:33,heigth:42,type:'vert',clase:''},// verticales 
          {from:30, to:36,heigth:51,type:'vert',clase:''},// verticales 
          {from:33, to:36,heigth:60,type:'vert',clase:''},// verticales 
          {from:30, to:39,heigth:63,type:'vert',clase:''},// verticales 
        {from:36, to:42,heigth:66,type:'vert',clase:''},// verticales 
        
        {from:30, to:36,heigth:69,type:'vert',clase:''},// verticales 
        {from:33, to:36,heigth:72,type:'vert',clase:''},// verticales 
        {from:30, to:33,heigth:75,type:'vert',clase:''},// verticales 
        {from:33, to:36,heigth:81,type:'vert',clase:''},// verticales 
        {from:33, to:36,heigth:87,type:'vert',clase:''},// verticales 
        {from:33, to:45,heigth:102,type:'vert',clase:''},// verticales 
        {from:33, to:39,heigth:105,type:'vert',clase:''},// verticales 
        {from:33, to:48,heigth:57,type:'vert',clase:''},// verticales 
        
        {from:39, to:48,heigth:33,type:'vert',clase:''},// verticales 
        {from:39, to:54,heigth:39,type:'vert',clase:''},// verticales 
        {from:39, to:42,heigth:42,type:'vert',clase:''},// verticales 
        {from:39, to:42,heigth:60,type:'vert',clase:''},// verticales 
        {from:39, to:51,heigth:72,type:'vert',clase:''},// verticales 
        {from:42, to:45,heigth:63,type:'vert',clase:''},// verticales 
        {from:36, to:39,heigth:75,type:'vert',clase:''},// verticales 
        {from:36, to:39,heigth:84,type:'vert',clase:''},// verticales 
        {from:36, to:39,heigth:90,type:'vert',clase:''},// verticales 
        {from:36, to:45,heigth:93,type:'vert',clase:''},// verticales 
        {from:36, to:45,heigth: 99,type:'vert',clase:''},// verticales 
        {from:36, to:42,heigth: 111,type:'vert',clase:''},// verticales 
        {from:39, to:45,heigth: 114,type:'vert',clase:''},// verticales 
        {from:33, to:48,heigth: 117,type:'vert',clase:''},// verticales 
        
        {from:39, to:42,heigth: 84,type:'vert',clase:''},// verticales 
        {from:39, to:45,heigth: 87,type:'vert',clase:''},// verticales 
        {from:39, to:45,heigth: 78,type:'vert',clase:''},// verticales 
        {from:42, to:48,heigth: 75,type:'vert',clase:''},// verticales 
        {from:42, to:54,heigth: 81,type:'vert',clase:''},// verticales 
        {from:42, to:48,heigth: 90,type:'vert',clase:''},// verticales 
        {from:39, to:48,heigth: 96,type:'vert',clase:''},// verticales 
        {from:42, to:45,heigth: 108,type:'vert',clase:''},// verticales 
        {from:45, to:54,heigth: 105,type:'vert',clase:''},// verticales 
        {from:45, to:51,heigth: 112,type:'vert',clase:''},// verticales 
        
        {from:45, to:48,heigth: 112,type:'vert',clase:''},// verticales 
        {from:45, to:48,heigth: 66,type:'vert',clase:''},// verticales 
        {from:42, to:48,heigth: 51,type:'vert',clase:''},// verticales 
        {from:42, to:51,heigth: 21,type:'vert',clase:''},// verticales 
        {from:45, to:54,heigth: 12,type:'vert',clase:''},// verticales 
        
        {from:45, to:51,heigth: 3,type:'vert',clase:''},// verticales 
        {from:45, to:51,heigth: 6,type:'vert',clase:''},// verticales 
        
        {from:42, to:45,heigth: 9,type:'vert',clase:''},// verticales 
        {from:45, to:48,heigth: 18,type:'vert',clase:''},// verticales 
         {from:48, to:63,heigth: 24,type:'vert',clase:''},// verticales 
        {from:48, to:57,heigth: 15,type:'vert',clase:''},// verticales 
         {from:51, to:57,heigth: 18,type:'vert',clase:''},// verticales 
       
         {from:48, to:57,heigth: 27,type:'vert',clase:''},// verticales 
         {from:45, to:48,heigth: 30,type:'vert',clase:''},// verticales 
         {from:48, to:51,heigth: 36,type:'vert',clase:''},// verticales 
         {from:48, to:69,heigth: 42,type:'vert',clase:''},// verticales 
         {from:54, to:57,heigth: 30,type:'vert',clase:''},// verticales 
         {from:51, to:54,heigth: 33,type:'vert',clase:''},// verticales 
         {from:45, to:48,heigth: 45,type:'vert',clase:''},// verticales 
         
         {from:48, to:52,heigth: 45,type:'vert',clase:''},// verticales 
         {from:48, to:52,heigth: 54,type:'vert',clase:''},// verticales 
         {from:48, to:52,heigth: 60,type:'vert',clase:''},// verticales 
         {from:48, to:52,heigth: 69,type:'vert',clase:''},// verticales 
         {from:48, to:52,heigth: 84,type:'vert',clase:''},// verticales 
         {from:48, to:52,heigth: 93,type:'vert',clase:''},// verticales 
         
         {from:51, to:54,heigth: 51,type:'vert',clase:''},// verticales 
         {from:51, to:54,heigth: 48,type:'vert',clase:''},// verticales 
         {from:51, to:54,heigth: 57,type:'vert',clase:''},// verticales 
        
         {from:51, to:63,heigth: 63,type:'vert',clase:''},// verticales 
         {from:54, to:60,heigth: 60,type:'vert',clase:''},// verticales 
        
         {from:54, to:57,heigth: 75,type:'vert',clase:''},// verticales 
        {from:51, to:57,heigth: 87,type:'vert',clase:''},// verticales 
         {from:51, to:57,heigth: 93,type:'vert',clase:''},// verticales 
         {from:51, to:60,heigth: 96,type:'vert',clase:''},// verticales 
         {from:51, to:60,heigth: 108,type:'vert',clase:''},// verticales 
         {from:54, to:57,heigth: 112,type:'vert',clase:''},// verticales 
         {from:54, to:57,heigth: 118,type:'vert',clase:''},// verticales 
         {from:54  , to:60,heigth: 90,type:'vert',clase:''},// verticales 
        
         {from:54, to:57,heigth: 3,type:'vert',clase:''},// verticales 
         {from:55, to:63,heigth: 6,type:'vert',clase:''},// verticales 
         {from:63, to:66,heigth: 3,type:'vert',clase:''},// verticales 
         {from:60, to:63,heigth: 9,type:'vert',clase:''},// verticales 
         {from:57, to:75,heigth: 12,type:'vert',clase:''},// verticales 
         
         {from:66, to:72,heigth: 18,type:'vert',clase:''},// verticales 
         {from:66, to:75,heigth: 6,type:'vert',clase:''},// verticales 
         {from:63, to:66,heigth: 15,type:'vert',clase:''},// verticales 
         {from:63, to:66,heigth: 21,type:'vert',clase:''},// verticales 
         {from:60, to:63,heigth: 18,type:'vert',clase:''},// verticales 
         {from:57, to:60,heigth: 21,type:'vert',clase:''},// verticales 
         {from:57, to:60,heigth: 27,type:'vert',clase:''},// verticales 
         {from:57, to:60,heigth: 33,type:'vert',clase:''},// verticales 
              {from:60, to:66,heigth: 30,type:'vert',clase:''},// verticales 
              {from:54, to:63,heigth: 36,type:'vert',clase:''},// verticales 
              {from:60, to:66,heigth: 39,type:'vert',clase:''},// verticales 
              {from:54, to:60,heigth: 45,type:'vert',clase:''},// verticales 
              {from:57  , to:63,heigth: 48,type:'vert',clase:''},// verticales 
              {from:57  , to:60,heigth: 51,type:'vert',clase:''},// verticales 
              {from:57  , to:63,heigth: 72,type:'vert',clase:''},// verticales 
              {from:57  , to:60,heigth: 78,type:'vert',clase:''},// verticales 
              {from:57  , to:60,heigth: 81,type:'vert',clase:''},// verticales 
            
        {from:57  , to:63,heigth: 105,type:'vert',clase:''},// verticales 
        {from:51  , to:54,heigth: 115,type:'vert',clase:''},// verticales 
        {from:54  , to:57,heigth: 54,type:'vert',clase:''},// verticales 
        {from:60  , to:63,heigth: 54,type:'vert',clase:''},// verticales 
        {from:60  , to:63,heigth: 57,type:'vert',clase:''},// verticales 
        {from:60  , to:73,heigth: 75,type:'vert',clase:''},// verticales 
        {from:60  , to:66,heigth: 69,type:'vert',clase:''},// verticales 
        {from:63  , to:69,heigth: 78,type:'vert',clase:''},// verticales 
        {from:60  , to:69,heigth: 84,type:'vert',clase:''},// verticales 
        {from:63  , to:66,heigth: 60,type:'vert',clase:''},// verticales 
      
        {from:63  , to:69,heigth: 66,type:'vert',clase:''},// verticales 
        {from:66  , to:72,heigth: 72,type:'vert',clase:''},// verticales 
        {from:66  , to:72,heigth: 63,type:'vert',clase:''},// verticales 
        {from:66  , to:72,heigth: 81,type:'vert',clase:''},// verticales 
        {from:66  , to:72,heigth: 45,type:'vert',clase:''},// verticales 
        {from:66  , to:72,heigth: 51,type:'vert',clase:''},// verticales 
        {from:66  , to:69,heigth: 54,type:'vert',clase:''},// verticales 
        {from:66  , to:69,heigth: 33,type:'vert',clase:''},// verticales 
        {from:66  , to:69,heigth: 27,type:'vert',clase:''},// verticales 
        {from:66  , to:69,heigth: 24,type:'vert',clase:''},// verticales 
       
        {from:63  , to:66,heigth: 87,type:'vert',clase:''},// verticales 
        {from:63  , to:72,heigth: 93,type:'vert',clase:''},// verticales 
        {from:66  , to:84,heigth: 90,type:'vert',clase:''},// verticales 
        {from:66  , to:69,heigth: 96,type:'vert',clase:''},// verticales 
       
        {from:60 , to:66,heigth: 99,type:'vert',clase:''},// verticales 
        {from:60 , to:69,heigth: 112,type:'vert',clase:''},// verticales 
        {from:63 , to:69,heigth: 102,type:'vert',clase:''},// verticales 
        {from:63 , to:75,heigth: 117,type:'vert',clase:''},// verticales 
        {from:60 , to:63,heigth: 115,type:'vert',clase:''},// verticales 
        
        {from:69 , to:72,heigth: 114,type:'vert',clase:''},// verticales 
        {from:69 , to:72,heigth: 57,type:'vert',clase:''},// verticales 
        {from:69 , to:72,heigth: 3,type:'vert',clase:''},// verticales 
       
        
        {from:69, to:72,heigth: 30,type:'vert',clase:''},// verticales 
        {from:69, to:76,heigth: 21,type:'vert',clase:''},// verticales 
        {from:69, to:76,heigth: 48,type:'vert',clase:''},// verticales 
        {from:69, to:73,heigth: 39,type:'vert',clase:''},// verticales 
        {from:69, to:73,heigth: 36,type:'vert',clase:''},// verticales 
        {from:69, to:73,heigth: 108,type:'vert',clase:''},// verticales 
       
        {from:75, to:90,heigth: 9,type:'vert',clase:''},// verticales 
        {from:78, to:81,heigth: 18,type:'vert',clase:''},// verticales 
        {from:78, to:81,heigth: 3,type:'vert',clase:''},// verticales 
        {from:81, to:84,heigth: 6,type:'vert',clase:''},// verticales 
        {from:81, to:84,heigth: 12,type:'vert',clase:''},// verticales 
        {from:81, to:84,heigth: 21,type:'vert',clase:''},// verticales 
        {from:81, to:84,heigth: 27,type:'vert',clase:''},// verticales 
        {from:84, to:87,heigth: 24,type:'vert',clase:''},// verticales 
        {from:84, to:87,heigth: 3,type:'vert',clase:''},// verticales 
        
        {from:73, to:79,heigth: 24,type:'vert',clase:''},// verticales 
        {from:73, to:76,heigth: 27,type:'vert',clase:''},// verticales 
        {from:73, to:76,heigth: 33,type:'vert',clase:''},// verticales 
        {from:73, to:76,heigth: 54,type:'vert',clase:''},// verticales 
        {from:73, to:76,heigth: 57,type:'vert',clase:''},// verticales 
        {from:73, to:76,heigth: 72,type:'vert',clase:''},// verticales 
        {from:76, to:79,heigth: 33,type:'vert',clase:''},// verticales 
        {from:76, to:82,heigth: 39,type:'vert',clase:''},// verticales 
        {from:76, to:90,heigth: 42,type:'vert',clase:''},// verticales 
        {from:78, to:84,heigth: 45,type:'vert',clase:''},// verticales 
        {from:78, to:84,heigth: 36,type:'vert',clase:''},// verticales 
        {from:78, to:81,heigth: 30,type:'vert',clase:''},// verticales 
        {from:78, to:96,heigth: 51,type:'vert',clase:''},// verticales 
        {from:78, to:81,heigth: 57,type:'vert',clase:''},// verticales 
        {from:78, to:81,heigth: 57,type:'vert',clase:''},// verticales 
        {from:75, to:78,heigth: 60,type:'vert',clase:''},// verticales 
        {from:75, to:78,heigth: 75,type:'vert',clase:''},// verticales 
        {from:72, to:81,heigth: 78,type:'vert',clase:''},// verticales 
        {from:72, to:84,heigth: 81,type:'vert',clase:''},// verticales 
        {from:75, to:78,heigth: 87,type:'vert',clase:''},// verticales 
        {from:72, to:75,heigth: 85,type:'vert',clase:''},// verticales 
        {from:72, to:78,heigth: 96,type:'vert',clase:''},// verticales 
        {from:75, to:90,heigth: 99,type:'vert',clase:''},// verticales 
        {from:75, to:78,heigth: 102,type:'vert',clase:''},// verticales 
        {from:75, to:81,heigth: 108,type:'vert',clase:''},// verticales 
        {from:72, to:75,heigth: 105,type:'vert',clase:''},// verticales 
        {from:72, to:81,heigth: 111,type:'vert',clase:''},// verticales 
        {from:75, to:78,heigth: 114,type:'vert',clase:''},// verticales 
        
        {from:75, to:84,heigth: 54,type:'vert',clase:''},// verticales 
        {from:79, to:82,heigth: 69,type:'vert',clase:''},// verticales 
        {from:79, to:85,heigth: 84,type:'vert',clase:''},// verticales 
        {from:79, to:91,heigth: 93,type:'vert',clase:''},// verticales 
        {from:82, to:94,heigth: 96,type:'vert',clase:''},// verticales 
        {from:82, to:87,heigth: 102,type:'vert',clase:''},// verticales 
        {from:82, to:93,heigth: 111,type:'vert',clase:''},// verticales 
        {from:85, to:93,heigth: 105,type:'vert',clase:''},// verticales 
        {from:82, to:85,heigth: 114,type:'vert',clase:''},// verticales 
        {from:82, to:90,heigth: 75,type:'vert',clase:''},// verticales 
        {from:84, to:87,heigth: 79,type:'vert',clase:''},// verticales 
        {from:84, to:87,heigth: 72,type:'vert',clase:''},// verticales 
        {from:81, to:87,heigth: 66,type:'vert',clase:''},// verticales 
        {from:81, to:87,heigth: 63,type:'vert',clase:''},// verticales 
       
        {from:86, to:93,heigth: 6,type:'vert',clase:''},// verticales 
        {from:90, to:96,heigth: 15,type:'vert',clase:''},// verticales 
        {from:87, to:96,heigth: 27,type:'vert',clase:''},// verticales 
        {from:90, to:93,heigth: 3,type:'vert',clase:''},// verticales 
        {from:85, to:105,heigth: 30,type:'vert',clase:''},// verticales 
        {from:85, to:90,heigth: 39,type:'vert',clase:''},// verticales 
        {from:88, to:93,heigth: 33,type:'vert',clase:''},// verticales 
        {from:90, to:93,heigth: 36,type:'vert',clase:''},// verticales 
        {from:88, to:93,heigth: 48,type:'vert',clase:''},// verticales 
        {from:88, to:93,heigth: 60,type:'vert',clase:''},// verticales 
        {from:88, to:93,heigth: 69,type:'vert',clase:''},// verticales 
        {from:88, to:90,heigth: 84,type:'vert',clase:''},// verticales 
        {from:84, to:93,heigth: 87,type:'vert',clase:''},// verticales 
        {from:90, to:93,heigth: 90,type:'vert',clase:''},// verticales 
        {from:90, to:99,heigth: 57,type:'vert',clase:''},// verticales 
        {from:93, to:102,heigth: 63,type:'vert',clase:''},// verticales 
        {from:93, to:96,heigth: 39,type:'vert',clase:''},// verticales 
        {from:93, to:96,heigth: 45,type:'vert',clase:''},// verticales 
        {from:93, to:96,heigth:21,type:'vert',clase:''},// verticales 
        {from:93, to:96,heigth:69,type:'vert',clase:''},// verticales 
        {from:93, to:96,heigth:75,type:'vert',clase:''},// verticales 
        {from:90, to:93,heigth:78,type:'vert',clase:''},// verticales 
         {from:93, to:96,heigth:99,type:'vert',clase:''},// verticales 
        {from:90, to:96,heigth:108,type:'vert',clase:''},// verticales 
        {from:87, to:96,heigth:115,type:'vert',clase:''},// verticales 
            {from:90, to:93,heigth:66,type:'vert',clase:''},// verticales 
        
        {from:102, to:114,heigth:3,type:'vert',clase:''},// verticales 
        {from:96, to:102,heigth:6,type:'vert',clase:''},// verticales 
        {from:96, to:99,heigth:9,type:'vert',clase:''},// verticales 
        {from:111, to:117,heigth:6,type:'vert',clase:''},// verticales 
        {from:108, to:117,heigth:12,type:'vert',clase:''},// verticales 
        {from:93, to:102,heigth:12,type:'vert',clase:''},// verticales 
        
        {from:96, to:99,heigth:18,type:'vert',clase:''},// verticales 
        {from:102, to:105,heigth:15,type:'vert',clase:''},// verticales 
        {from:102, to:108,heigth:18,type:'vert',clase:''},// verticales 
        {from:105, to:111,heigth:21,type:'vert',clase:''},// verticales 
        {from:108, to:114,heigth:15,type:'vert',clase:''},// verticales 
        {from:99, to:102,heigth:21,type:'vert',clase:''},// verticales 
        {from:96, to:105,heigth:24,type:'vert',clase:''},// verticales 
        {from:105, to:111,heigth:27,type:'vert',clase:''},// verticales 
        {from: 99, to:117,heigth:33,type:'vert',clase:''},// verticales 
        {from: 102, to:111,heigth:36,type:'vert',clase:''},// verticales 
        {from: 105, to:108,heigth:39,type:'vert',clase:''},// verticales 
        {from: 114, to:121,heigth:39,type:'vert',clase:''},// verticales 
        {from: 117, to:121,heigth:42,type:'vert',clase:''},// verticales 
        {from: 108, to:114,heigth:42,type:'vert',clase:''},// verticales 
        {from: 96, to:99,heigth:42,type:'vert',clase:''},// verticales 
        {from: 96, to:99,heigth:48,type:'vert',clase:''},// verticales 
        {from: 111, to:117,heigth:45,type:'vert',clase:''},// verticales 
        {from: 102, to:117,heigth:48,type:'vert',clase:''},// verticales 
        {from: 111, to:117,heigth:51,type:'vert',clase:''},// verticales 
    {from: 99, to:105,heigth:51,type:'vert',clase:''},// verticales 
        {from: 96, to:102,heigth:54,type:'vert',clase:''},// verticales 
        
        {from: 105, to:108,heigth:54,type:'vert',clase:''},// verticales 
        {from: 102, to:105,heigth:57,type:'vert',clase:''},// verticales 
        {from: 107, to:111,heigth:57,type:'vert',clase:''},// verticales 
        {from: 99, to:111,heigth:60,type:'vert',clase:''},// verticales 
        {from: 108, to:114,heigth:63,type:'vert',clase:''},// verticales 
        {from: 108, to:111,heigth:66,type:'vert',clase:''},// verticales 
        {from: 102, to:105,heigth:66,type:'vert',clase:''},// verticales 
        {from: 99, to:102,heigth:69,type:'vert',clase:''},// verticales 
        {from: 105, to:108,heigth:69,type:'vert',clase:''},// verticales 
        {from: 114, to:121,heigth:69,type:'vert',clase:''},// verticales 




        {from:114, to:117,heigth:9,type:'vert',clase:''},// verticales 
        {from:114, to:117,heigth:18,type:'vert',clase:''},// verticales 
        {from:114, to:117,heigth:27,type:'vert',clase:''},// verticales 
    
        {from:117, to:121,heigth:21,type:'vert',clase:''},// verticales 
        {from:117, to:121,heigth:30,type:'vert',clase:''},// verticales 
        {from:117, to:121,heigth:75,type:'vert',clase:''},// verticales 
        {from:105, to:118,heigth:72,type:'vert',clase:''},// verticales 
        {from:96, to:99,heigth:72,type:'vert',clase:''},// verticales 
        {from:96, to:102,heigth:78,type:'vert',clase:''},// verticales 
        {from:99, to:105,heigth:75,type:'vert',clase:''},// verticales 
        {from:108, to:111,heigth:75,type:'vert',clase:''},// verticales 
        {from:108, to:117,heigth:78,type:'vert',clase:''},// verticales 
        {from:108, to:117,heigth:84,type:'vert',clase:''},// verticales 
        
        {from:105, to:108,heigth:81,type:'vert',clase:''},// verticales 
           {from:93 , to:102,heigth:81,type:'vert',clase:''},// verticales 
        {from:96 , to:105,heigth:84,type:'vert',clase:''},// verticales 
        {from:96 , to:99,heigth:87,type:'vert',clase:''},// verticales 
        
        {from:102 , to:105,heigth:87,type:'vert',clase:''},// verticales 
        {from:102 , to:105,heigth:93,type:'vert',clase:''},// verticales 
        {from:93 , to:96,heigth:93,type:'vert',clase:''},// verticales 
        {from:93 , to:96,heigth:90,type:'vert',clase:''},// verticales 
        {from:99 , to:102,heigth:90,type:'vert',clase:''},// verticales 
        {from:105 , to:108,heigth:90,type:'vert',clase:''},// verticales 
        {from:117 , to:121,heigth:90,type:'vert',clase:''},// verticales 
        {from:114 , to:117,heigth:87,type:'vert',clase:''},// verticales 
        {from:114 , to:117,heigth:93,type:'vert',clase:''},// verticales 
        {from:108 , to:111,heigth:93,type:'vert',clase:''},// verticales 
        // {from:99 , to:102,heigth:93,type:'vert',clase:''},// verticales 
          {from:96 , to:102,heigth:96,type:'vert',clase:''},// verticales 
        {from:99 , to:105,heigth:99,type:'vert',clase:''},// verticales 
        {from:108 , to:117,heigth:99,type:'vert',clase:''},// verticales 
        {from:102 , to:114,heigth:102,type:'vert',clase:''},// verticales 
        {from:99 , to:111,heigth:108,type:'vert',clase:''},// verticales 
        {from:99 , to:102,heigth:105,type:'vert',clase:''},// verticales 
        {from:117 , to:121,heigth:102,type:'vert',clase:''},// verticales 
        
        // {from:114 , to:117,heigth:102,type:'vert',clase:''},// verticales 
        {from:114 , to:117,heigth:105,type:'vert',clase:''},// verticales 
        {from:114 , to:117,heigth:105,type:'vert',clase:''},// verticales 
        {from:105 , to:108,heigth:105,type:'vert',clase:''},// verticales 
        
        {from:96 , to:102,heigth:111,type:'vert',clase:''},// verticales 
        {from:111 , to:117,heigth:111,type:'vert',clase:''},// verticales 
        {from:117 , to:121,heigth:108,type:'vert',clase:''},// verticales 
        {from:99 , to:105,heigth:115,type:'vert',clase:''},// verticales 
        {from:99 , to:108,heigth:117,type:'vert',clase:''},// verticales 
        {from:108 , to:111,heigth:115,type:'vert',clase:''},// verticales 
        {from:114 , to:117,heigth:115,type:'vert',clase:''},// verticales 
        {from:111 , to:114,heigth:117,type:'vert',clase:''},// verticales 


        // {from:102 , to:115,heigth:98,type:'vert',clase:''},// verticales 
        // {from:115 , to:117,heigth:91,type:'vert',clase:''},// verticales 
        // {from:81, to:17,heigth: 3,type:'vert',clase:''},// verticales 

        
        // {from:78, to:96,heigth: 51,type:'vert',clase:''},// verticales 
       
        // {from:60 , to:63,heigth: 115,type:'vert',clase:''},// verticales

       
        // {from:48, to:63,heigth: 15,type:'vert',clase:''},// verticales 












        
        //{from:3, to:45,heigth: 3,type:'vert',clase:''},// verticales 

        // {from:33, to:39,heigth:106,type:'vert',clase:''},// verticales 
        //   {from:27, to:313,heigth:63,type:'vert',clase:''},// verticales 
            //  {from:25, to:229,heigth:99,type:'vert',clase:''},// verticales 
             
             
             //  {from:24, to:30,heigth:5,type:'vert',clase:''},// verticales 
          //  {from:21, to:27,heigth:87,type:'vert',clase:''},// verticales 

           // {from:16, to:15,heigth:66,type:'vert',clase:''},// verticales 
            // {from:12, to:15,heigth:118,type:'vert',clase:''},// verticales 
            // {from:9, to:1,heigth:99,type:'vert',clase:''},// verticales 


            
            

            
            
            
            // {from:1, to:3,heigth:93,type:'vert',clase:''},// verticales 
            // {from:1, to:3,heigth:96,type:'vert',clase:''},// verticales 
            // {from:1, to:3,heigth:99,type:'vert',clase:''},// verticales 
            // {from:1, to:3,heigth:102,type:'vert',clase:''},// verticales 
          //  {from:1, to:3,heigth:105,type:'vert',clase:''},// verticales 
            //{from:1, to:3,heigth:108,type:'vert',clase:''},// verticales 
           // {from:1, to:3,heigth:111,type:'vert',clase:''},// verticales 
            {from:1, to:3,heigth:114,type:'vert',clase:''},// verticales 
          //  {from:1, to:3,heigth:117,type:'vert',clase:''},// verticales 
            {from:1, to:3,heigth:120,type:'vert',clase:''},// verticales 
            
            {from:1, to:3,heigth:6,type:'hor',clase:''},// horizontales 
            // {from:1, to:3,heigth:7,type:'hor',clase:''},// horizontales 
            {from:3, to:6,heigth:3,type:'hor',clase:''},// horizontales
            {from:9, to:12,heigth:3,type:'hor',clase:''},// horizontales
            {from:18, to:24,heigth:3,type:'hor',clase:''},// horizontales
            {from:27, to:33,heigth:3,type:'hor',clase:''},// horizontales
            {from:36, to:45,heigth:3,type:'hor',clase:''},// horizontales
            {from:48, to:51,heigth:3,type:'hor',clase:''},// horizontales
            {from:57, to:66,heigth:3,type:'hor',clase:''},// horizontales
            {from:78, to:81,heigth:3,type:'hor',clase:''},// horizontales
            {from:93, to:102,heigth:3,type:'hor',clase:''},// horizontales
            {from:105, to:108,heigth:3,type:'hor',clase:''},// horizontales
            {from:111, to:115,heigth:3,type:'hor',clase:''},// horizontales
         
            {from:6, to:9,heigth:6,type:'hor',clase:''},// horizontales
            {from:12, to:18,heigth:6,type:'hor',clase:''},// horizontales
            {from:24, to:30,heigth:6,type:'hor',clase:''},// horizontales ++++
            {from:33, to:36,heigth:6,type:'hor',clase:''},// horizontales ++++
            {from:40, to:49,heigth:6,type:'hor',clase:''},// horizontales ++++
            {from:55, to:58,heigth:6,type:'hor',clase:''},// horizontales ++++
            {from:61, to:64,heigth:6,type:'hor',clase:''},// horizontales ++++
            {from:69, to:81,heigth:6,type:'hor',clase:''},// horizontales ++++
            {from:84, to:90,heigth:6,type:'hor',clase:''},// horizontales ++++


             {from:93, to:99,heigth:6,type:'hor',clase:''},// horizontales ++++
            
             {from:102, to:105,heigth:6,type:'hor',clase:''},// horizontales ++++
             {from:108, to:112,heigth:6,type:'hor',clase:''},// horizontales ++++
             {from:115, to:118,heigth:6,type:'hor',clase:''},// horizontales ++++
             
             {from:3, to:9,heigth:9,type:'hor',clase:''},// horizontales ++++
             {from:12, to:15,heigth:9,type:'hor',clase:''},// horizontales ++++
             {from:18, to:27,heigth:9,type:'hor',clase:''},// horizontales ++++
             {from:33, to:36,heigth:9,type:'hor',clase:''},// horizontales ++++
             {from:48, to:51,heigth:9,type:'hor',clase:''},// horizontales ++++
             {from:66, to:75,heigth:9,type:'hor',clase:''},// horizontales ++++
             {from:87, to:93,heigth:9,type:'hor',clase:''},// horizontales ++++
             {from:99, to:112,heigth:9,type:'hor',clase:''},// horizontales ++++
             {from:118, to:120,heigth:9,type:'hor',clase:''},// horizontales ++++
             
             {from:9, to:12,heigth:12,type:'hor',clase:''},// horizontales ++++
             {from:15, to:18,heigth:12,type:'hor',clase:''},// horizontales ++++
             {from:21, to:27,heigth:12,type:'hor',clase:''},// horizontales ++++
             {from:30, to:33,heigth:12,type:'hor',clase:''},// horizontales ++++
             
             {from:48, to:54,heigth:12,type:'hor',clase:''},// horizontales ++++
             {from:57, to:63,heigth:12,type:'hor',clase:''},// horizontales ++++
             {from:67, to:72,heigth:12,type:'hor',clase:''},// horizontales ++++
             {from:75, to:87,heigth:12,type:'hor',clase:''},// horizontales ++++
            
             {from:90, to:96,heigth:12,type:'hor',clase:''},// horizontales ++++
             {from:102, to:105,heigth:12,type:'hor',clase:''},// horizontales ++++
             {from:1, to:3,heigth:18,type:'hor',clase:''},// horizontales ++++
             {from:9, to:21,heigth:18,type:'hor',clase:''},// horizontales ++++
             {from:24, to:30,heigth:18,type:'hor',clase:''},// horizontales ++++
             {from:39, to:45,heigth:18,type:'hor',clase:''},// horizontales ++++
            
            
             {from:112, to:118,heigth:12,type:'hor',clase:''},// horizontales ++++
             {from:1, to:15,heigth:15,type:'hor',clase:''},// horizontales ++++
             {from:27, to:33,heigth:15,type:'hor',clase:''},// horizontales ++++
             {from:36, to:39,heigth:15,type:'hor',clase:''},// horizontales ++++
             {from:45, to:48,heigth:15,type:'hor',clase:''},// horizontales ++++
             {from:55, to:60,heigth:15,type:'hor',clase:''},// horizontales ++++
             {from:63, to:66,heigth:15,type:'hor',clase:''},// horizontales ++++
             {from:78, to:84,heigth:15,type:'hor',clase:''},// horizontales ++++
             {from:87, to:90,heigth:15,type:'hor',clase:''},// horizontales ++++
             {from:96, to:99,heigth:15,type:'hor',clase:''},// horizontales ++++
             {from:105, to:111,heigth:15,type:'hor',clase:''},// horizontales ++++
             
             {from:93, to:105,heigth:18,type:'hor',clase:''},// horizontales ++++
             {from:58, to:72,heigth:18,type:'hor',clase:''},// horizontales ++++
             {from:51, to:54,heigth:18,type:'hor',clase:''},// horizontales ++++
             {from:81, to:87,heigth:18,type:'hor',clase:''},// horizontales ++++
             {from:3, to:24,heigth:21,type:'hor',clase:''},//  horizontales ++++
             {from:30, to:33,heigth:21,type:'hor',clase:''},// horizontales ++++
             {from:42, to:48,heigth:21,type:'hor',clase:''},// horizontales ++++
             {from:54, to:66,heigth:21,type:'hor',clase:''},// horizontales ++++
             {from:69, to:72,heigth:21,type:'hor',clase:''},// horizontales ++++
             {from:78, to:82,heigth:21,type:'hor',clase:''},// horizontales ++++
             {from:87, to:93,heigth:21,type:'hor',clase:''},// horizontales ++++
             {from:99, to:102,heigth:21,type:'hor',clase:''},// horizontales ++++
             {from:108, to:111,heigth:21,type:'hor',clase:''},// horizontales ++++
             {from:115, to:117,heigth:21,type:'hor',clase:''},// horizontales ++++
             
             {from:1, to:6,heigth:24,type:'hor',clase:''},// horizontales ++++
             {from:9, to:21,heigth:24,type:'hor',clase:''},// horizontales ++++
             {from:24, to:30,heigth:24,type:'hor',clase:''},// horizontales ++++
             {from:54, to:69,heigth:24,type:'hor',clase:''},// horizontales ++++
             {from:81, to:84,heigth:24,type:'hor',clase:''},// horizontales ++++
             {from:87, to:96,heigth:24,type:'hor',clase:''},// horizontales ++++
            {from:99, to:108,heigth:24,type:'hor',clase:''},// horizontales ++++
            {from:111, to:115,heigth:24,type:'hor',clase:''},// horizontales ++++

            {from:6, to:9,heigth:27,type:'hor',clase:''},// horizontales ++++
            {from:12, to:18,heigth:27,type:'hor',clase:''},// horizontales ++++
            {from:21, to:27,heigth:27,type:'hor',clase:''},// horizontales ++++
            {from:30, to:33,heigth:27,type:'hor',clase:''},// horizontales ++++
            {from:39, to:45,heigth:27,type:'hor',clase:''},// horizontales ++++
            
            {from:51, to:63,heigth:27,type:'hor',clase:''},// horizontales ++++
            {from:66, to:69,heigth:27,type:'hor',clase:''},// horizontales ++++
            {from:72, to:75,heigth:27,type:'hor',clase:''},// horizontales ++++
            {from:90, to:93,heigth:27,type:'hor',clase:''},// horizontales ++++
            {from:102, to:105,heigth:27,type:'hor',clase:''},// horizontales ++++
            {from:112, to:120,heigth:27,type:'hor',clase:''},// horizontales ++++


            
            {from:3, to:6,heigth:30,type:'hor',clase:''},// horizontales ++++
            {from:9, to:12,heigth:30,type:'hor',clase:''},// horizontales ++++
            {from:15, to:18,heigth:30,type:'hor',clase:''},// horizontales ++++
            {from:27, to:30,heigth:30,type:'hor',clase:''},// horizontales ++++
            {from:36, to:42,heigth:30,type:'hor',clase:''},// horizontales ++++
            {from:48, to:63,heigth:30,type:'hor',clase:''},// horizontales ++++
            {from:69, to:72,heigth:30,type:'hor',clase:''},// horizontales ++++
            {from:75, to:78,heigth:30,type:'hor',clase:''},// horizontales ++++
            {from:81, to:88,heigth:30,type:'hor',clase:''},// horizontales ++++
            {from:90, to:102,heigth:30,type:'hor',clase:''},// horizontales ++++
            {from:105, to:120,heigth:30,type:'hor',clase:''},// horizontales ++++
            
            {from:1, to:3,heigth:33,type:'hor',clase:''},// horizontales ++++
            {from:6, to:9,heigth:33,type:'hor',clase:''},// horizontales ++++
            {from:12, to:15,heigth:33,type:'hor',clase:''},// horizontales ++++
            {from:18, to:24,heigth:33,type:'hor',clase:''},// horizontales ++++
          
            {from:27, to:30,heigth:33,type:'hor',clase:''},// horizontales ++++
            {from:33, to:36,heigth:33,type:'hor',clase:''},// horizontales ++++
            {from:45, to:48,heigth:33,type:'hor',clase:''},// horizontales ++++
            {from:54, to:60,heigth:33,type:'hor',clase:''},// horizontales ++++
            {from:63, to:66,heigth:33,type:'hor',clase:''},// horizontales ++++
            {from:72, to:75,heigth:33,type:'hor',clase:''},// horizontales ++++
            
            {from:72, to:75,heigth:33,type:'hor',clase:''},// horizontales ++++
            {from:78, to:82,heigth:33,type:'hor',clase:''},// horizontales ++++
            {from:87, to:102,heigth:33,type:'hor',clase:''},// horizontales ++++
            {from:112, to:118,heigth:33,type:'hor',clase:''},// horizontales ++++
            
            {from:9, to:12,heigth:36,type:'hor',clase:''},// horizontales ++++
            {from:21, to:24,heigth:36,type:'hor',clase:''},// horizontales ++++
            {from:30, to:33,heigth:36,type:'hor',clase:''},// horizontales ++++
            {from:36, to:45,heigth:36,type:'hor',clase:''},// horizontales ++++
            {from:48, to:55,heigth:36,type:'hor',clase:''},// horizontales ++++
            {from:75, to:78,heigth:36,type:'hor',clase:''},// horizontales ++++
            {from:82, to:87,heigth:36,type:'hor',clase:''},// horizontales ++++
            {from:90, to:99,heigth:36,type:'hor',clase:''},// horizontales ++++
            {from:105, to:118,heigth:36,type:'hor',clase:''},// horizontales ++++
            
            {from:66, to:69,heigth:36,type:'hor',clase:''},// horizontales ++++
            {from:9, to:12,heigth:39,type:'hor',clase:''},// horizontales ++++
            {from:18, to:21,heigth:39,type:'hor',clase:''},// horizontales ++++
            {from:24, to:27,heigth:39,type:'hor',clase:''},// horizontales ++++
            {from:3, to:6,heigth:39,type:'hor',clase:''},// horizontales ++++
            {from:18, to:21,heigth:39,type:'hor',clase:''},// horizontales ++++
            {from:46, to:57,heigth:39,type:'hor',clase:''},// horizontales ++++
            {from:60, to:63,heigth:39,type:'hor',clase:''},// horizontales ++++
            {from:69, to:85,heigth:39,type:'hor',clase:''},// horizontales ++++
            {from:88, to:91,heigth:39,type:'hor',clase:''},// horizontales ++++
            {from:105, to:18,heigth:39,type:'hor',clase:''},// horizontales ++++

            {from:39, to:42,heigth:39,type:'hor',clase:''},// horizontales ++++
            {from:1, to:3,heigth:42,type:'hor',clase:''},// horizontales ++++
            {from:6, to:9,heigth:42,type:'hor',clase:''},// horizontales ++++
            {from:15, to:18,heigth:42,type:'hor',clase:''},// horizontales ++++
            {from:21, to:24,heigth:42,type:'hor',clase:''},// horizontales ++++
            {from:27, to:30,heigth:42,type:'hor',clase:''},// horizontales ++++
            {from:33, to:36,heigth:42,type:'hor',clase:''},// horizontales ++++
            {from:42, to:55,heigth:42,type:'hor',clase:''},// horizontales ++++
            {from:63, to:69,heigth:42,type:'hor',clase:''},// horizontales ++++
            {from:102, to:112,heigth:42,type:'hor',clase:''},// horizontales ++++
            {from:105, to:109,heigth:39,type:'hor',clase:''},// horizontales ++++
           
            {from:6, to:9,heigth:45,type:'hor',clase:''},// horizontales ++++
            {from:12, to:15,heigth:45,type:'hor',clase:''},// horizontales ++++
            {from:24, to:27,heigth:45,type:'hor',clase:''},// horizontales ++++
            {from:37, to:45,heigth:45,type:'hor',clase:''},// horizontales ++++
            {from:49, to:52,heigth:45,type:'hor',clase:''},// horizontales ++++
            {from:54, to:63,heigth:45,type:'hor',clase:''},// horizontales ++++
            
            {from:66, to:72,heigth:45,type:'hor',clase:''},// horizontales ++++
            {from:81, to:87,heigth:45,type:'hor',clase:''},// horizontales ++++
             
            {from:84, to:112,heigth:48,type:'hor',clase:''},// horizontales ++++
            {from:9, to:12,heigth:48,type:'hor',clase:''},// horizontales ++++
            {from:15, to:18,heigth:48,type:'hor',clase:''},// horizontales ++++
            {from:30, to:36,heigth:48,type:'hor',clase:''},// horizontales ++++
            {from:45, to:48,heigth:48,type:'hor',clase:''},// horizontales ++++
            {from:51, to:54,heigth:48,type:'hor',clase:''},// horizontales ++++
          
           {from:60, to:66,heigth:48,type:'hor',clase:''},// horizontales ++++
           {from:76, to:82,heigth:48,type:'hor',clase:''},// horizontales ++++
           {from:115, to:117,heigth:48,type:'hor',clase:''},// horizontales ++++
           {from:112, to:115,heigth:45,type:'hor',clase:''},// horizontales ++++
            
            {from:112, to:117,heigth:51,type:'hor',clase:''},// horizontales ++++
            {from:3, to:9,heigth:51,type:'hor',clase:''},// horizontales ++++
            {from:18, to:21,heigth:51,type:'hor',clase:''},// horizontales ++++
            {from:27, to:33,heigth:51,type:'hor',clase:''},// horizontales ++++
            {from:48, to:51,heigth:51,type:'hor',clase:''},// horizontales ++++
            {from:54, to:60,heigth:51,type:'hor',clase:''},// horizontales ++++
            {from:63, to:78,heigth:51,type:'hor',clase:''},// horizontales ++++
            {from:66, to:85,heigth:54,type:'hor',clase:''},// horizontales ++++
            {from:99, to:109,heigth:54,type:'hor',clase:''},// horizontales ++++
            {from:118, to:120,heigth:54,type:'hor',clase:''},// horizontales ++++
            {from:112, to:118,heigth:57,type:'hor',clase:''},// horizontales ++++
            
            {from:96, to:102,heigth:51,type:'hor',clase:''},// horizontales ++++
            {from:87, to:93,heigth:51,type:'hor',clase:''},// horizontales ++++
            {from:87, to:93,heigth:51,type:'hor',clase:''},// horizontales ++++
            
            {from:3, to:12,heigth:54,type:'hor',clase:''},// horizontales ++++
            {from:21, to:24,heigth:54,type:'hor',clase:''},// horizontales ++++
            {from:33, to:39,heigth:54,type:'hor',clase:''},// horizontales ++++
             {from:42, to:48,heigth:54,type:'hor',clase:''},// horizontales ++++
             
             {from:52, to:55,heigth:54,type:'hor',clase:''},// horizontales ++++
             
             {from:9, to:15,heigth:57,type:'hor',clase:''},// horizontales ++++
             {from:18, to:21,heigth:57,type:'hor',clase:''},// horizontales ++++
             {from:24, to:33,heigth:57,type:'hor',clase:''},// horizontales ++++
             {from:36, to:39,heigth:57,type:'hor',clase:''},// horizontales ++++
             {from:51, to:60,heigth:57,type:'hor',clase:''},// horizontales ++++
             {from:63, to:72,heigth:57,type:'hor',clase:''},// horizontales ++++
             {from:75, to:78,heigth:57,type:'hor',clase:''},// horizontales ++++
             {from:81, to:87,heigth:57,type:'hor',clase:''},// horizontales ++++
             {from:96, to:106,heigth:57,type:'hor',clase:''},// horizontales ++++
           
             {from:78, to:81,heigth:60,type:'hor',clase:''},// horizontales ++++
            {from:85, to:96,heigth:60,type:'hor',clase:''},// horizontales ++++
            {from:100, to:106,heigth:60,type:'hor',clase:''},// horizontales ++++
            {from:109, to:118,heigth:60,type:'hor',clase:''},// horizontales ++++
            {from:1, to:6,heigth:60,type:'hor',clase:''},// horizontales ++++
            {from:12, to:21,heigth:60,type:'hor',clase:''},// horizontales ++++
            {from:39, to:42,heigth:60,type:'hor',clase:''},// horizontales ++++
            {from:33, to:36,heigth:63,type:'hor',clase:''},// horizontales ++++
            {from:22, to:30,heigth:63,type:'hor',clase:''},// horizontales ++++
            {from:46, to:55,heigth:63,type:'hor',clase:''},// horizontales ++++
           
            {from:6, to:9,heigth:63,type:'hor',clase:''},// horizontales ++++
            {from:3, to:9,heigth:66,type:'hor',clase:''},// horizontales ++++
            {from:15, to:21,heigth:66,type:'hor',clase:''},// horizontales ++++
            {from:24, to:27,heigth:66,type:'hor',clase:''},// horizontales ++++
            {from:31, to:39,heigth:66,type:'hor',clase:''},// horizontales ++++
            {from:46, to:52,heigth:66,type:'hor',clase:''},// horizontales ++++
            {from:55, to:61,heigth:66,type:'hor',clase:''},// horizontales ++++
            
            {from:55, to:58,heigth:60,type:'hor',clase:''},// horizontales ++++
            {from:58, to:67,heigth:63,type:'hor',clase:''},// horizontales ++++
            {from:67, to:70,heigth:60,type:'hor',clase:''},// horizontales ++++
            
            {from:73, to:76,heigth:63,type:'hor',clase:''},// horizontales ++++
            {from:79, to:85,heigth:63,type:'hor',clase:''},// horizontales ++++
            {from:91, to:100,heigth:63,type:'hor',clase:''},// horizontales ++++
            {from:106, to:109,heigth:63,type:'hor',clase:''},// horizontales ++++
            {from:118, to:120,heigth:63,type:'hor',clase:''},// horizontales ++++
            
            {from:115, to:118,heigth:66,type:'hor',clase:''},// horizontales ++++
            {from:103, to:112,heigth:66,type:'hor',clase:''},// horizontales ++++
            {from:88, to:91,heigth:66,type:'hor',clase:''},// horizontales ++++
            {from:70, to:73,heigth:66,type:'hor',clase:''},// horizontales ++++
            
            {from:9, to:16,heigth:69,type:'hor',clase:''},// horizontales ++++
            {from:21, to:24,heigth:69,type:'hor',clase:''},// horizontales ++++
            {from:28, to:31,heigth:69,type:'hor',clase:''},// horizontales ++++
            {from:34, to:37,heigth:69,type:'hor',clase:''},// horizontales ++++
            {from:52, to:55,heigth:69,type:'hor',clase:''},// horizontales ++++
            {from:57, to:63,heigth:69,type:'hor',clase:''},// horizontales ++++
            {from:66, to:69,heigth:69,type:'hor',clase:''},// horizontales ++++
            {from:79, to:82,heigth:69,type:'hor',clase:''},// horizontales ++++
            {from:85, to:88,heigth:69,type:'hor',clase:''},// horizontales ++++
            {from:96, to:109,heigth:69,type:'hor',clase:''},// horizontales ++++
            {from:112, to:115,heigth:69,type:'hor',clase:''},// horizontales ++++
           
            {from:1, to:3,heigth:72,type:'hor',clase:''},// horizontales ++++
            {from:15, to:18,heigth:72,type:'hor',clase:''},// horizontales ++++
            {from:6, to:12,heigth:72,type:'hor',clase:''},// horizontales ++++
            {from:24, to:27,heigth:72,type:'hor',clase:''},// horizontales ++++
            {from:30, to:33,heigth:72,type:'hor',clase:''},// horizontales ++++
            {from:36, to:46,heigth:72,type:'hor',clase:''},// horizontales ++++
            {from:54, to:57,heigth:72,type:'hor',clase:''},// horizontales ++++
            {from:60, to:73,heigth:72,type:'hor',clase:''},// horizontales ++++
            {from:76, to:79,heigth:72,type:'hor',clase:''},// horizontales ++++
            {from:85, to:91,heigth:72,type:'hor',clase:''},// horizontales ++++
            {from:94, to:106,heigth:72,type:'hor',clase:''},// horizontales ++++
            {from:109, to:112,heigth:72,type:'hor',clase:''},// horizontales ++++
            // {from:109, to:112,heigth:73,type:'hor',clase:''},// horizontales ++++
            
            {from:3, to:6,heigth:75,type:'hor',clase:''},// horizontales ++++
            {from:12, to:21,heigth:75,type:'hor',clase:''},// horizontales ++++
            {from:82, to:85,heigth:75,type:'hor',clase:''},// horizontales ++++
            {from:33, to:55,heigth:75,type:'hor',clase:''},// horizontales ++++
            {from:64, to:76,heigth:75,type:'hor',clase:''},// horizontales ++++
            {from:27, to:30,heigth:75,type:'hor',clase:''},// horizontales ++++
            {from:90, to:94,heigth:75,type:'hor',clase:''},// horizontales ++++
            
            {from:99, to:102,heigth:75,type:'hor',clase:''},// horizontales ++++
            {from:105, to:108,heigth:75,type:'hor',clase:''},// horizontales ++++
            
            {from:115, to:118,heigth:75,type:'hor',clase:''},// horizontales ++++
            
            {from:115, to:118,heigth:78,type:'hor',clase:''},// horizontales ++++
            {from:102, to:105,heigth:78,type:'hor',clase:''},// horizontales ++++
            {from:93, to:96,heigth:78,type:'hor',clase:''},// horizontales ++++
            {from:85, to:88,heigth:78,type:'hor',clase:''},// horizontales ++++
            {from:73, to:76,heigth:78,type:'hor',clase:''},// horizontales ++++
            {from:57, to:69,heigth:78,type:'hor',clase:''},// horizontales ++++
            {from:45, to:52,heigth:78,type:'hor',clase:''},// horizontales ++++
            {from:27, to:33,heigth:78,type:'hor',clase:''},// horizontales ++++
            {from:18, to:25,heigth:78,type:'hor',clase:''},// horizontales ++++
            {from:3, to:15,heigth:78,type:'hor',clase:''},// horizontales ++++
            
            {from:3, to:6,heigth:81,type:'hor',clase:''},// horizontales ++++
            {from:1, to:3,heigth:84,type:'hor',clase:''},// horizontales ++++
            {from:3, to:6,heigth:86,type:'hor',clase:''},// horizontales ++++
            {from:12, to:18,heigth:81,type:'hor',clase:''},// horizontales ++++
            {from:12, to:21,heigth:84,type:'hor',clase:''},// horizontales ++++
            {from:21, to:28,heigth:81,type:'hor',clase:''},// horizontales ++++
            {from:31, to:34,heigth:81,type:'hor',clase:''},// horizontales ++++
            {from:49, to:52,heigth:81,type:'hor',clase:''},// horizontales ++++
            {from:57, to:63,heigth:81,type:'hor',clase:''},// horizontales ++++
            {from:70, to:79,heigth:81,type:'hor',clase:''},// horizontales ++++
            {from:88, to:90,heigth:81,type:'hor',clase:''},// horizontales ++++
            {from:96, to:99,heigth:81,type:'hor',clase:''},// horizontales ++++
            {from:102, to:108,heigth:81,type:'hor',clase:''},// horizontales ++++
            
            {from:28, to:39,heigth:84,type:'hor',clase:''},// horizontales ++++
            {from:33, to:39,heigth:87,type:'hor',clase:''},// horizontales ++++
            {from:9, to:27,heigth:87,type:'hor',clase:''},// horizontales ++++
            {from:42, to:48,heigth:87,type:'hor',clase:''},// horizontales ++++
            {from:52, to:64,heigth:87,type:'hor',clase:''},// horizontales ++++
            {from:55, to:60,heigth:84,type:'hor',clase:''},// horizontales ++++
            {from:45, to:48,heigth:84,type:'hor',clase:''},// horizontales ++++
            {from:66, to:72,heigth:84,type:'hor',clase:''},// horizontales ++++
            {from:79, to:81,heigth:84,type:'hor',clase:''},// horizontales ++++
            {from:85, to:88,heigth:84,type:'hor',clase:''},// horizontales ++++
            {from:105, to:112,heigth:84,type:'hor',clase:''},// horizontales ++++
            {from:112, to:118,heigth:81,type:'hor',clase:''},// horizontales ++++
            {from:115, to:118,heigth:87,type:'hor',clase:''},// horizontales ++++
            {from:118, to:120,heigth:84,type:'hor',clase:''},// horizontales ++++
            {from:109, to:112,heigth:87,type:'hor',clase:''},// horizontales ++++
            {from:88, to:94,heigth:87,type:'hor',clase:''},// horizontales ++++
            {from:79, to:84,heigth:87,type:'hor',clase:''},// horizontales ++++
            {from:70, to:73,heigth:87,type:'hor',clase:''},// horizontales ++++
        
            {from:9, to:15,heigth:90,type:'hor',clase:''},// horizontales ++++
            {from:18, to:28,heigth:90,type:'hor',clase:''},// horizontales ++++
            {from:37, to:49,heigth:93,type:'hor',clase:''},// horizontales ++++
            {from:42, to:45,heigth:90,type:'hor',clase:''},// horizontales ++++
            {from:3, to:12,heigth:93,type:'hor',clase:''},// horizontales ++++
            {from:18,to:24,heigth:93,type:'hor',clase:''},// horizontales ++++
            {from:24,to:27,heigth:96,type:'hor',clase:''},// horizontales ++++
            {from:15,to:21,heigth:96,type:'hor',clase:''},// horizontales ++++
            {from:1,to:3,heigth:96,type:'hor',clase:''},// horizontales ++++
            {from:6,to:9,heigth:96,type:'hor',clase:''},// horizontales ++++
            {from:30,to:39,heigth:96,type:'hor',clase:''},// horizontales ++++
            {from:49,to:52,heigth:96,type:'hor',clase:''},// horizontales ++++
            {from:58,to:66,heigth:96,type:'hor',clase:''},// horizontales ++++
            {from:51,to:54,heigth:93,type:'hor',clase:''},// horizontales ++++
            {from:54,to:57,heigth:90,type:'hor',clase:''},// horizontales ++++
            {from:60,to:67,heigth:90,type:'hor',clase:''},// horizontales ++++
            {from:67,to:70,heigth:93,type:'hor',clase:''},// horizontales ++++
            {from:73,to:76,heigth:93,type:'hor',clase:''},// horizontales ++++
            {from:73,to:82,heigth:90,type:'hor',clase:''},// horizontales ++++
            {from:82,to:88,heigth:93,type:'hor',clase:''},// horizontales ++++
            {from:91,to:97,heigth:93,type:'hor',clase:''},// horizontales ++++
            {from:103,to:106,heigth:93,type:'hor',clase:''},// horizontales ++++
            {from:118,to:120,heigth:93,type:'hor',clase:''},// horizontales ++++
            {from:115,to:118,heigth:90,type:'hor',clase:''},// horizontales ++++
            {from:100,to:106,heigth:90,type:'hor',clase:''},// horizontales ++++
            {from:96,to:118,heigth:96,type:'hor',clase:''},// horizontales ++++
            {from:85,to:90,heigth:96,type:'hor',clase:''},// horizontales ++++
            {from:70,to:79,heigth:96,type:'hor',clase:''},// horizontales ++++
            {from:3,to:6,heigth:99,type:'hor',clase:''},// horizontales ++++
            {from:12,to:15,heigth:99,type:'hor',clase:''},// horizontales ++++
            {from:27,to:30,heigth:99,type:'hor',clase:''},// horizontales ++++
            {from:15,to:27 ,heigth:102,type:'hor',clase:''},// horizontales ++++
            {from:6,to:13,heigth:102,type:'hor',clase:''},// horizontales ++++
            {from:3,to:15,heigth:105,type:'hor',clase:''},// horizontales ++++
            {from:3,to:9,heigth:108,type:'hor',clase:''},// horizontales ++++
            {from:6,to:12,heigth:111,type:'hor',clase:''},// horizontales ++++
            {from:9,to:16,heigth:117,type:'hor',clase:''},// horizontales ++++
            
            {from:1,to:6,heigth:117,type:'hor',clase:''},// horizontales ++++
            {from:21,to:24,heigth:117,type:'hor',clase:''},// horizontales ++++
            {from:21,to:24,heigth:108,type:'hor',clase:''},// horizontales ++++
            {from:15,to:33,heigth:114,type:'hor',clase:''},// horizontales ++++
            {from:18,to:31,heigth:111,type:'hor',clase:''},// horizontales ++++
            {from:30,to:33,heigth:108,type:'hor',clase:''},// horizontales ++++
            
            {from:33,to:49,heigth:99,type:'hor',clase:''},// horizontales ++++
            {from:36,to:49,heigth:102,type:'hor',clase:''},// horizontales ++++
            {from:39,to:46,heigth:105,type:'hor',clase:''},// horizontales ++++
            {from:46,to:49,heigth:108,type:'hor',clase:''},// horizontales ++++
            {from:33,to:39,heigth:111,type:'hor',clase:''},// horizontales ++++
            {from:36,to:42,heigth:114,type:'hor',clase:''},// horizontales ++++
            
            {from:43,to:46,heigth:111,type:'hor',clase:''},// horizontales ++++
            
            {from:51,to:54,heigth:102,type:'hor',clase:''},// horizontales ++++
            {from:51,to:54,heigth:108,type:'hor',clase:''},// horizontales ++++
            {from:54,to:69,heigth:114,type:'hor',clase:''},// horizontales ++++
            {from:52,to:61,heigth:111,type:'hor',clase:''},// horizontales ++++
            {from:55,to:57,heigth:105,type:'hor',clase:''},// horizontales ++++
            {from:55,to:57,heigth:99,type:'hor',clase:''},// horizontales ++++
           
            {from:48,to:66,heigth:117,type:'hor',clase:''},// horizontales ++++
            {from:33,to:36,heigth:117,type:'hor',clase:''},// horizontales ++++
            {from:63,to:69,heigth:99,type:'hor',clase:''},// horizontales ++++
            {from:66,to:69,heigth:111,type:'hor',clase:''},// horizontales ++++
            {from:60,to:69,heigth:105,type:'hor',clase:''},// horizontales ++++
            {from:57,to:60,heigth:102,type:'hor',clase:''},// horizontales ++++
            {from:69,to:72,heigth:108,type:'hor',clase:''},// horizontales ++++
            {from:64,to:67,heigth:108,type:'hor',clase:''},// horizontales ++++
            
            {from:70,to:76,heigth:102,type:'hor',clase:''},// horizontales ++++
            {from:40,to:43,heigth:108,type:'hor',clase:''},// horizontales ++++
         
            {from:73,to:79,heigth:114,type:'hor',clase:''},// horizontales ++++
            {from:76,to:79,heigth:108,type:'hor',clase:''},// horizontales ++++
          
            {from:76,to:85,heigth:104,type:'hor',clase:''},// horizontales ++++
            {from:79,to:82,heigth:101,type:'hor',clase:''},// horizontales ++++
            {from:81,to:90,heigth:108,type:'hor',clase:''},// horizontales ++++
            {from:79,to:81,heigth:111,type:'hor',clase:''},// horizontales ++++
            {from:79,to:81,heigth:117,type:'hor',clase:''},// horizontales ++++
            {from:82,to:96,heigth:114,type:'hor',clase:''},// horizontales ++++

            {from:89,to:96,heigth:111,type:'hor',clase:''},// horizontales ++++
            {from:90,to:96,heigth:99,type:'hor',clase:''},// horizontales ++++
            {from:87,to:90,heigth:101,type:'hor',clase:''},// horizontales ++++
            
            {from:90,to:99,heigth:104,type:'hor',clase:''},// horizontales ++++
            {from:93,to:99,heigth:108,type:'hor',clase:''},// horizontales ++++
            {from:96,to:102,heigth:117,type:'hor',clase:''},// horizontales ++++
            {from:102,to:112,heigth:114,type:'hor',clase:''},// horizontales ++++
            
            {from:106,to:108,heigth:111,type:'hor',clase:''},// horizontales ++++
            {from:103,to:106,heigth:105,type:'hor',clase:''},// horizontales ++++
            {from:99,to:108,heigth:99,type:'hor',clase:''},// horizontales ++++
            {from:108,to:115,heigth:105,type:'hor',clase:''},// horizontales ++++
            {from:108,to:111,heigth:107,type:'hor',clase:''},// horizontales ++++
            {from:111,to:115,heigth:110,type:'hor',clase:''},// horizontales ++++
            {from:118,to:120,heigth:111,type:'hor',clase:''},// horizontales ++++
            
            {from:115,to:118,heigth:114,type:'hor',clase:''},// horizontales ++++
            {from:115,to:118,heigth:108,type:'hor',clase:''},// horizontales ++++
            {from:115,to:118,heigth:117,type:'hor',clase:''},// horizontales ++++
      
      
            
      
    
        

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
                                                                    let currentLevel = level3;

       /// let lab = new Image();lab.src = '1.jpg'
        function run(){
            canvas = document.getElementById('canvas');
            ctx = canvas.getContext('2d');
            player1 = new Cuadro(11,11, 5,5, 'red');
            //player1 = new Cuadro(1140,1160, 5,5, 'red');
            player2 = new Cuadro(1160,1160, 40,40, 'green')
 
       //  ctx.drawImage(lab, -35,-30, 1282, 1264  );
            //paredes


            walls(currentLevel);
                            

            console.log('setup');
            shark.src = 'pikachu.gif';
            ///shark.src = 'ball.png';
            coin.src = 'piedra2k.png';
            audio1.src = 'opening.mp3';
            audio2.src = 'mario-coin.mp3';
            paint();
        }


        function createWalls(x, y, type = null, point_size){
            //   coords.forEach(element => {
                   /// paredes.push(new Cuadro(x,y,point_size,point_size,'white', type));
                    paredes.push(new Cuadro(x,y,point_size,point_size,'rgb(111,171,142,1)', type));
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
 
            ctx.fillStyle = 'rgb(36, 77, 117)';
            ctx.fillRect(0,0,1200,1200);//<<<=== borré esto para sobreponer la img del laberinto 
            ctx.fillStyle = player1.c;


          //  ctx.fillRect(player1.x,  player1.y, 11,11);

            ctx.drawImage(shark, player1.x, player1.y, 11,11);
            ctx.fillStyle = player2.c;
           
           
           
           ctx.drawImage(coin, player2.x, player2.y, 40,40);
         //  ctx.fillRect(player2.x, player2.y, 40,40);

            paredes.forEach(pared => {
                pared.pintar(ctx);
            });
 
            if(pause){
                ctx.font = '50px KulminoituvaRegular';
                ctx.fillStyle = 'yellow';
            //  ctx.strokeText('P a u s e', 135, 300);
                ctx.fillText('P a u s e', 480,550); 
                ctx.fillStyle = 'rgba(0,0,0,0.5)';
                //drawStroked("37°", 50, 150);
                ctx.fillStyle = 'rgba(246,45,20,0.5)';
                ctx.fillRect(0,0,1200,1200);
                audio1.pause();
                app.pause = true;
            }else{
                if(press)
                update()
                // if(document.getElementById('move').value  == 'off')
               // press = false;
                audio1.play();
            }

  
            if(!terminado &&  player1.se_tocan(player2)){
                console.log('toca'); 
                shark.src = 'raichu.gif';
                coin.src = ''; 
                audio2.play();  
                terminado = true;
             //   endGame();
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
        this.x = x;
        this.y = y;
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

 
 

    function fence(from, to, height, type, clase, point_size = 6){
        for(let i = from; i < to; i++){
            if(type == 'vert')
                createWalls(height*10, i*10, clase,point_size);
            else if(type == 'hor')
                createWalls(i*10,height*10,clase,point_size);
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
       currentLevel = level1;
       newGame();
        run();
       
    }
    
    

 

        
    
 

</script>
</body>
</html>