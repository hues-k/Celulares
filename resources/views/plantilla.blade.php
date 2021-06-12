<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Comparador</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mdb.min.css">
</head>
<body class="unique-color">

@yield('content')
    
<script>
  const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
  document.getElementById('Marca').addEventListener('change',(e)=>{
    fetch('/',{//la ruta
      method:'POST',
      body: JSON.stringify({texto : e.target.value}),
      headers:{
        'Content-Type':'application/json',
        "X-CSRF-Token":csrfToken
      }

    }).then(response =>{
      return response.json()
    }).then(data=>{
      var opciones = "<option value=''>Elegir</option>";
      for(let i in data.lista){
 
        opciones+= '<option value="'+data.lista[i].id+'">'+data.lista[i].id+'</option>';
      }
      document.getElementById("Modelo").innerHTML = opciones;
    }).catch(error=>console.error(error));
  })
</script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>