<?php

use App\Http\Controllers\BookStoreController;
use Illuminate\Support\Facades\Route;

Route::get("/", [BookStoreController::class, "Home"]);
Route::get("/create", [BookStoreController::class, "Create"]) -> name("create");
Route::post("/create", [BookStoreController::class, "SaveCreate"]) -> name("save-create");
Route::get("/show/{id}", [BookStoreController::class, "Show"]) -> name("show");
Route::get("/edit/{id}", [BookStoreController::class, "Edit"]) -> name("edit");
Route::put("/update/{id}", [BookStoreController::class, "Update"]) -> name("update");
Route::get("/remove/{id}", [BookStoreController::class, "Remove"]) -> name("remove");