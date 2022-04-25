[Laravel Installation]

composer create-project --prefer-dist laravel/laravel my-interview

[Laravel Auth]

Php artisan migrate

composer require laravel/ui

php artisan ui vue –auth

Php artisan migrate

[Load CSS]

Npm install

Npm run watch

[Make Migration]

Php artisan make:migration create_hotels_rooms --create = rooms

[Make Seeder]

Php artisan make:seeder HotelSeeder

Write in database seeder class $this->call(HotelSeeder::class);

Php artisan db:seed

[Make Controller]

Php artisan make:controller ShowRoomsController –invokable

Route::get(‘/rooms’, ‘ShowRoomsController’);

In rooms controller write out return response(‘checked’);

Use\illuminate\support\facades\db;

public function \_\_invoke(Request $request)

{

$rooms = DB::table('rooms')->get();

if($request->query('id') !== null) {

$rooms = $rooms->where('room_type_id', $request->query('id'));

}

//return response()->json($rooms);

Return view(“rooms.index”, [‘rooms’=>$rooms]);

}

[Make Resource Controller]

Php artisan make:controller BookingController --resource –model= Booking

Route::resource(‘bookings’, ‘BookingConroller’);

public function create()

{

$users = DB::table('users')->get()->pluck('id','name');

$rooms = DB::table('rooms')->get()->pluck('id','name');

return view(bookings.create)

-> with('users', $users)

-> with('rooms', $rooms);

}
