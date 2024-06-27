<?php
use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
Route::get('/', function () {
    // return view('welcome');
    return "Hello world ......";
});

Route::get('/', function () {
    // return view('welcome');
    return "Hello world 2......";
});

// Route::get('/etudians', function (Request $request) {
//     // dump($request);
//     $name=$request->input("name","ALI") ;
//     $age=$request->age ?? "aucune âge";
//     return "Etudiants $name âgé de  $age ans";
// });
//     //return view('welcome');


Route::get('/etudians/{id}/{name}', function (int $id,string $name) {

        return "Etudiants  N° $id .......... $name";
    })->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);


Route::get('/users',function(){

    // DB::table('users')->insert(

    //     ["firstname"=>'TÉOURI',
    //     "lastname"=>'Sabirou',
    //     'email'=>'sabirou.teouri@ifnti.com',
    //     'password'=>"ifnti123",
    //     'status'=>'Admin',
    //     'contact'=>'90901814'
    //     ]
    // );

      $users=  DB::table('users')->get()->first();
      $users=  DB::table('users')->first();
      dump($users);

    return "Listes of  users :";
});

Route::get('/entreprises',function(){

    // $entreprises=[

    //     ["name"=>"golfe unity",
    //     "country"=>"togo",
    //     "city"=>"kara",
    //     "address"=>"bp xxx",
    //     "Neighborhood"=>"tomdé",
    //     "user_id"=>"1",
    //     ],
    //     ["name"=>"golfe unity",
    //     "country"=>"togo",
    //     "city"=>"kara",
    //     "address"=>"bp xxx",
    //     "Neighborhood"=>"tomdé",
    //     "user_id"=>"1",
    //     ],
    //     ["name"=>"golfe unity",
    //     "country"=>"togo",
    //     "city"=>"sokode",
    //     "address"=>"bp xxx",
    //     "Neighborhood"=>"tomdé",
    //     "user_id"=>"1",
    //     ],
    //     ["name"=>"golfe unity",
    //     "country"=>"togo",
    //     "city"=>"atakpamé",
    //     "address"=>"bp xxx",
    //     "Neighborhood"=>"tomdé",
    //     "user_id"=>"1",
    //     ],
    //     ["name"=>"golfe unity",
    //     "country"=>"togo",
    //     "city"=>"maritime",
    //     "address"=>"bp xxx",
    //     "Neighborhood"=>"tomdé",
    //     "user_id"=>"1",
    //     ],
    //     ["name"=>"golfe unity",
    //     "country"=>"togo",
    //     "city"=>"kara",
    //     "address"=>"bp xxx",
    //     "Neighborhood"=>"tomdé",
    //     "user_id"=>"1",
    //      ],
    //      ["name"=>"golfe unity",
    //      "country"=>"togo",
    //      "city"=>"kara",
    //      "address"=>"bp xxx",
    //      "Neighborhood"=>"tomdé",
    //      "user_id"=>"1",
    //      ],
    //      ["name"=>"golfe unity",
    //      "country"=>"togo",
    //      "city"=>"kara",
    //      "address"=>"bp xxx",
    //      "Neighborhood"=>"tomdé",
    //      "user_id"=>"1",
    //      ],
    //      ["name"=>"golfe unity",
    //      "country"=>"togo",
    //      "city"=>"kara",
    //      "address"=>"bp xxx",
    //      "Neighborhood"=>"tomdé",
    //      "user_id"=>"1",
    //      ],
    //      ["name"=>"golfe unity",
    //      "country"=>"togo",
    //      "city"=>"kara",
    //      "address"=>"bp xxx",
    //      "Neighborhood"=>"tomdé",
    //      "user_id"=>"1",
    //      ],
    // ];

    // foreach($entreprises as $entre){
    // $entreprise=new Entreprise();
    // $entreprise->name=$entre["name"];
    // $entreprise->country=$entre["country"];
    // $entreprise->city=$entre["city"];
    // $entreprise->address=$entre["address"];
    // $entreprise->Neighborhood=$entre["Neighborhood"];
    // $entreprise->user_id=$entre["user_id"];


    // $entreprise->save();
    // }
    // dump(Entreprise::all());

//    $une_entreprise =Entreprise::find(3);

//    $une_entreprise =Entreprise::whereBetween("id" ,[1,3])->get();
    $une_entreprise=Entreprise::find(1);
    dump($une_entreprise->user);
    $user=User::find(1);
    dump($user->entreprises);
    dump(Entreprise::where("user_id",$user->id)->get());
    // $une_entreprise->Neighborhood="Kouloundé";
    // $une_entreprise->save();
    // dump($une_entreprise );

    // $une_entreprise->delete();



    return "La Liste des entrprises";

});
