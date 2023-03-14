Route::post('/todo/update', [TodoController::class, 'update']);

Route::post('/todo/delete', [TodoController::class, 'delete']);