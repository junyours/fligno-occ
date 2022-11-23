<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fligno</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body class="antialiased">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Brand</th>
      <th scope="col">Created</th>
      <th>Action
      Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($brands as $brand)
    <tr>
      <th scope="row">{{$brand->id}}</th>
      <td>{{$brand->name}}</td>
      <td>{{$brand->created_at}}</td>
      <td><a href="{{url('brand-edit/'.$brand->id)}}" class="btn btn-md btn-info"> Edit</a>
      <a href="{{url('delete-brand/'.$brand->id)}}" class="btn btn-md btn-danger"> Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

    </body>
</html>
