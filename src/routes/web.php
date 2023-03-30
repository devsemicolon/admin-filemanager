<?php

Route::get('/admin-filemanager', 'devsemicolon\adminfilemanager\AdminFileManagerController@index');
Route::post('/admin-filemanager/upload', 'devsemicolon\adminfilemanager\AdminFileManagerController@upload');
Route::post('/admin-filemanager/folder', 'devsemicolon\adminfilemanager\AdminFileManagerController@folder');
Route::post('/admin-filemanager/delete', 'devsemicolon\adminfilemanager\AdminFileManagerController@delete');
Route::get('/admin-filemanager/pagination', 'devsemicolon\adminfilemanager\AdminFileManagerController@pagination');
