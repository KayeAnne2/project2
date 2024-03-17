
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>"Add Students Page"</title>
        <style>

        body {
            background: url(img/background9.gif);
            background-size: 100%;
            background-repeat: no-repeat;
            height: 100%;
            width: 100%;       
            }

        .nav{
            text-align: center;
            width: 20%;
            color: cyan;        
        }
            
        a{
            font-size: 15px;
            font-weight: bold;
            text-align: center;
            color: lightpink;
            font-family: Arial, Helvetica, sans-serif;
            padding: 8px;
            text-decoration-color: black;       
        }   

        h1
        {
            text-align:center;   
            background: #000;
            padding-left: 10px;
            color: lightpink;
            border: 5px solid white;   
            width: 30%;
            margin-left: 35%;
            font-size:40px;
            margin-bottom: 10px;  
            opacity: 0.8;  
            
                             
        }
     
        .row .col1  {
            padding:100px;
            float:left;
           
        }

        .row .col2 {
            padding: 100px;
            float:right;
        }
        .row {   
            margin: auto;    
            border: 5px solid white;
            font-size: 15px;     
            width: 60%; 
            background:lightpink;      
            padding: 0px;
            opacity: 0.7;
            box-shadow: 3px 3px 3px white;  
            
                                                
        }
        
        .row form label{

            border: 2px solid white;
            background-color: #000;
            color: white;
            font-size: 15px;
            width: 3px; 
            padding: 2px;
          
        }

        .row form input{
            border: 1px solid white;
            font-weight: bold;
            background: #000;         
            color: white;
            font-size: 13px;
            width: 110%; 
            height: 20px;   
            padding: 3px; 
            color: white;
            margin-bottom: 0px;
        }
        .btn{
                  
            width: 100px;   
            text-align: center;
            justify-content: center;
            margin-left: 340px;
            margin-bottom: 10px;
            font-size: 30px;
                           
        }

        .btn input:hover{
            background-color: grey;
        
        }
         
        </style>
    </head>
    <body>

    <div class="nav">

    <a href= "index.php"> Add Students  </a> 
    <a href= "record.php"> View Records</a>
    <br>

    </div>
        
    <h1>Add Students</h1> 
    <div class="row">

   
        
        <form action= "process.php" method = "POST">   
        <div class="col1">
            
    
            <label> Firstname:</label>  </br> 
            <input type ="text" name= "fn" placeholder= "Enter Firstname Here... "required></p>
        
            <label> Middlename:</label> </br> 
            <input type ="text" name= "mn"  placeholder= "Enter Middlename Here... "required></p>
        
            <label> Lastname:</label> </br> 
            <input type ="text" name= "ln" placeholder= "Enter Lastname Here... "required></p>
            
            <label>Age:</label> </br> 
            <input type ="text" name= "age" placeholder= "Enter Age Here... "required></p>
        
            <label>Sex:</label> </br> 
            <input type ="text" name= "sex" placeholder= "Enter Sex Here... "required></p>
            
            
        
        </div>
        <div class="col2">
            <label> Status:</label> </br> 
            <input type ="text" name= "status"  placeholder= "Enter status Here... "required></p>
        
            <label> Yearlevel:</label> </br> 
            <input type ="text" name= "year_level" placeholder= "Enter Yearlevel Here... "required></p>
        
            <label> Course:</label> </br> 
            <input type ="text" name= "course"  placeholder= "Enter Course Here... "required></p>
        
            <label> School:</label> </br> 
            <input type ="text" name= "school" placeholder= "Enter School Here... "required></p>
            
            <label> Address:</label> </br> 
            <input type ="text" name= "address" placeholder= "Enter Address Here... "required></p>
        </div>

        <div class="btn">
                <input type="submit" value="REGISTER" name="add_students">
        </div>

        
    </div>



        </form> 
    </body>
    </html>