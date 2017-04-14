<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <style>
    
        header{
            padding: 2em;
            text-align: center;
        }
        
    </style>
    
</head>

<body>
   
   <header>
       <h1>
           
           <?= "Hello, " . htmlspecialchars($_GET['name'];) ?>
           
       </h1>
   </header>
    
</body>
</html>
