<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Hello Bangladesh Welcome to Dhaka</h1>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">@id</th>
                        <th scope="col">name</th>
                        <th scope="col">user</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $video)
                        <tr>
                            
                            <td>{{$loop->index}}</td>
                            <td>{{$video->name}}</td>
                            <td>{{$video->user_id}}</td>
                            <td>
                                <a href=""class="btn btn-sm btn-info">edit</a> |
                                <a href=""class="btn btn-sm btn-danger">delete</a>
                            </td>
                          </tr>
                        @endforeach
                    
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>