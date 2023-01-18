<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;
class ExampleController extends Controller{
/*** Display a listing of the resource.
** @return \Illuminate\Http\Response
*/
public function home() {
return view('home');
}
public function products() {
return view('products');
}
public function productDetail() {
return view('product-detail');
}
}