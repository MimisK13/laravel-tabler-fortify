
// URL prefix
Route::prefix('users')->group(function () {

    // Name prefix
    Route::name('users.')->group(function () {

        // Middleware
        Route::middleware(['auth', 'web', 'verified'])->group(function () {
            Route::get('profile/', function () {
                return view('auth.profile');
            })->name('profile');

            Route::get('settings/', function () {
                return view('auth.settings');
            })->name('settings');
        });
    });
});
