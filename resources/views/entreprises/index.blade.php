@extends('layouts.base')
@section('content')
<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;

}

h1 {
    color: #333;
    text-align: center;
}


table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
}


thead {
    background-color: aquamarine;
    color: blue;
}
th, td {
    padding: 10px;
    text-align: left;
}

.but {
    display: flex;
    justify-content: space-between;
}

.but > * {
    margin-right: 10px;
}
button {
    padding: 8px 16px;
    border: none;
    background-color: #007bff;
    color: white;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color:brown;
}

#ajouteer{margin-left: 50%}
    </style>
<h1 class="bg-red">{{$title}}</h1>
    <a href="{{route('entreprises.create')}}">
    <button id="ajouteer" type='submit'>ajouter</button></a>
    <div>
    <table border="1">

    <thead>
        <th>Nom</th>
        <th>Pays</th>
        <th>Ville</th>
        <th>Adresse</th>
        <th>Quartier</th>
        <th>User</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @forelse ($Listes_entreprise as $une_entreprises)
        <tr>
            <td>{{$une_entreprises->name}}</td>
            <td>{{$une_entreprises->country}}</td>
            <td>{{$une_entreprises->city}}</td>
            <td>{{$une_entreprises->address}}</td>
            <td>{{$une_entreprises->neighborhood}}</td>
            <td>{{$une_entreprises->user->Firstname}}</td>
            <td>
                <div class="but">
                    <a href="{{route('entreprises.edit',$une_entreprises)}}">
                        <button id="edit" type="submit">Edit</button>
                    </a>
                    <form action="{{route('entreprises.destroy',$une_entreprises)}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button id="supprime" type="submit">Supprimer</button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <p>Aucune entreprise</p>
        @endforelse
    </tbody>




    </table>
    </div>

@endsection
