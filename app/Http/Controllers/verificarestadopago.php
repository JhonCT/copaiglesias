<?php

namespace App\Http\Controllers;

use App\Inscripcion;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;

class verificarestadopago extends Controller
{

public function verificarestado(Request $request){
        	
	$inscripcion = Inscripcion::find($request->id_origen);
	
	if($inscripcion->estado = 'inscrito')
	{
		return $status='inscrito';
	}elseif($inscripcion->estado = 'no inscrito'){
		return $status = 'no inscrito';
	}
       
}
}

?>
