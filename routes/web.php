<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RaceDataCreateController;
use App\Http\Controllers\RaceNameCreateController;

use App\Http\Controllers\Locale\KiryuController;
use App\Http\Controllers\Locale\TodaController;
use App\Http\Controllers\Locale\EdogawaController;
use App\Http\Controllers\Locale\HeiwajimaController;
use App\Http\Controllers\Locale\TamagawaController;
use App\Http\Controllers\Locale\HamanakoController;
use App\Http\Controllers\Locale\GamagoriController;
use App\Http\Controllers\Locale\TokonameController;
use App\Http\Controllers\Locale\TsuController;
use App\Http\Controllers\Locale\MikuniController;
use App\Http\Controllers\Locale\BiwakoController;
use App\Http\Controllers\Locale\SuminoeController;
use App\Http\Controllers\Locale\AmagasakiController;
use App\Http\Controllers\Locale\NarutoController;
use App\Http\Controllers\Locale\MarugameController;
use App\Http\Controllers\Locale\KojimaController;
use App\Http\Controllers\Locale\MiyajimaController;
use App\Http\Controllers\Locale\TokuyamaController;
use App\Http\Controllers\Locale\SimonosekiController;
use App\Http\Controllers\Locale\WakamatsuController;
use App\Http\Controllers\Locale\AshiyaController;
use App\Http\Controllers\Locale\FukuokaController;
use App\Http\Controllers\Locale\KaratsuController;
use App\Http\Controllers\Locale\OmuraController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//TOP画面表示
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

//レースデータ登録画面表示
Route::get('/racedata_create', [RaceDataCreateController::class, 'index'])->name('racedata_create.index');
//レースデータ登録画面表示
Route::post('/racedata_create', [RaceDataCreateController::class, 'store'])->name('racedata_create.store');

//レースデータ登録画面表示
Route::get('/racename_create', [RaceNameCreateController::class, 'index'])->name('racename_create.index');
//レースデータ登録画面表示
Route::post('/racename_create', [RaceNameCreateController::class, 'store'])->name('racename_create.store');

//桐生
Route::get('/kiryu', [KiryuController::class, 'index'])->name('kiryu.index');
//戸田
Route::get('/toda', [TodaController::class, 'index'])->name('toda.index');
//江戸川
Route::get('/edogawa', [EdogawaController::class, 'index'])->name('edogawa.index');
//平和島
Route::get('/heiwajima', [HeiwajimaController::class, 'index'])->name('heiwajima.index');
//多摩川
Route::get('/tamagawa', [TamagawaController::class, 'index'])->name('tamagawa.index');
//浜名湖
Route::get('/hamanako', [HamanakoController::class, 'index'])->name('hamanako.index');
//蒲郡
Route::get('/Gamagori', [GamagoriController::class, 'index'])->name('gamagori.index');
//常滑
Route::get('/tokoname', [TokonameController::class, 'index'])->name('tokoname.index');
//津
Route::get('/tsu', [TsuController::class, 'index'])->name('tsu.index');
//三国
Route::get('/mikuni', [MikuniController::class, 'index'])->name('mikuni.index');
//びわこ
Route::get('/biwako', [BiwakoController::class, 'index'])->name('biwako.index');
//住之江
Route::get('/suminoe', [SuminoeController::class, 'index'])->name('suminoe.index');
//尼崎
Route::get('/amagasaki', [AmagasakiController::class, 'index'])->name('amagasaki.index');
//鳴門
Route::get('/naruto', [NarutoController::class, 'index'])->name('naruto.index');
//丸亀
Route::get('/marugame', [MarugameController::class, 'index'])->name('marugame.index');
//児島
Route::get('/kojima', [KojimaController::class, 'index'])->name('kojima.index');
//宮島
Route::get('/miyajima', [MiyajimaController::class, 'index'])->name('miyajima.index');
//徳山
Route::get('/tokuyama', [TokuyamaController::class, 'index'])->name('tokuyama.index');
//下関
Route::get('/shimonoseki', [SimonosekiController::class, 'index'])->name('shimonoseki.index');
//若松
Route::get('/wakamatsu', [WakamatsuController::class, 'index'])->name('wakamatsu.index');
//芦屋
Route::get('/ashiya', [AshiyaController::class, 'index'])->name('ashiya.index');
//福岡
Route::get('/fukuoka', [FukuokaController::class, 'index'])->name('fukuoka.index');
//唐津
Route::get('/karatsu', [KaratsuController::class, 'index'])->name('karatsu.index');
//大村
Route::get('/omura', [OmuraController::class, 'index'])->name('omura.index');
