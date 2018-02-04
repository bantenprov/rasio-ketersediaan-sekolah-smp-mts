<?php

Route::group(['prefix' => 'rk-sekolah-smp-mts', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\RKSekolahSMPMTS\Http\Controllers\RKSekolahSMPMTSController@index',
        'create'     => 'Bantenprov\RKSekolahSMPMTS\Http\Controllers\RKSekolahSMPMTSController@create',
        'store'     => 'Bantenprov\RKSekolahSMPMTS\Http\Controllers\RKSekolahSMPMTSController@store',
        'show'      => 'Bantenprov\RKSekolahSMPMTS\Http\Controllers\RKSekolahSMPMTSController@show',
        'update'    => 'Bantenprov\RKSekolahSMPMTS\Http\Controllers\RKSekolahSMPMTSController@update',
        'destroy'   => 'Bantenprov\RKSekolahSMPMTS\Http\Controllers\RKSekolahSMPMTSController@destroy',
    ];

    Route::get('/',$controllers->index)->name('rk-sekolah-smp-mts.index');
    Route::get('/create',$controllers->create)->name('rk-sekolah-smp-mts.create');
    Route::post('/store',$controllers->store)->name('rk-sekolah-smp-mts.store');
    Route::get('/{id}',$controllers->show)->name('rk-sekolah-smp-mts.show');
    Route::put('/{id}/update',$controllers->update)->name('rk-sekolah-smp-mts.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('rk-sekolah-smp-mts.destroy');

});

