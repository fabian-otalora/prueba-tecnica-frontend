<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Bebidas y Cócteles</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> --}}
    </head>
<body class="text-bg-dark">
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <div class="row">
                <div class="col-md-11">
                    <h2>Bebidas y Cócteles</h2>      
                </div>
                <div class="col-md-1">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
          
        </header>
    </div>
    <div class="container py-4">
        <h3>Listado de bebidas y cócteles en base de datos</h3>
        <a class="btn btn-primary" href="{{ url('/home') }}" role="button">Atras <i class="bi bi-caret-left-fill"></i></a>
        <br/>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script>

        fetch('/public/listDB')
            .then(res=>res.json())
            .then(data=>{
                console.log('data',data);

                displayProducts(data);
            })

        async function displayProducts(products) {
            let html = '';
            await products.forEach((product, index, array) => {
                html += '<tr>';
                html += `
                        <td>${product.id}</td>
                        <td>${product.name}</td>
                        <td>${product.category}</td>
                        <td><button type="button" class="btn btn-danger" onclick="deleteDB('${product.id}')">Eliminar</button>`;
                html += '</tr>';
            })
            document.querySelector('tbody').innerHTML = await html;
            // 
            $(document).ready(function () {
                $('#example').DataTable();
            });
        }

        function deleteDB(drink) {
            console.log(drink);

            var payload = {
                id: drink
            };

            const options = {
                method: 'POST',
                headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(payload),
            };

            fetch("/public/delete", options)
            .then(function(res){ return res.json() })
            .then(function(data){ 
                alert( JSON.stringify( data.message ) ) 
                location.reload();
            })
            
        }
        
    </script>
</body>
</html>