<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Entreprise</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }

        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Create Entreprise

        </h2>
        <form action="{{ route('entreprises.store') }}" method="POST">
        @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter company name" >

            <br>
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" placeholder="Enter country" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" placeholder="Enter city" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter address" required>

            <label for="neighborhood">Neighborhood:</label>
            <input type="text" id="neighborhood" name="neighborhood" placeholder="Enter neighborhood" required>

            <label for="usr">Propietaire</label>

                <select name="user_id" id="usr">
                    <option value="">selectionner</option>
                    @foreach ($users as $un_user)
                        <option value="{{$un_user->id}}">{{ $un_user->Firstname }}</option>
                    @endforeach
                </select>


            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>
