<?php

namespace App\Http\Controllers;

use App\Inscripcion;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;

class Validapago extends Controller
{

public function recepcion(Request $request){
        	
	
        $rpta =['nerror' => 1,
             'mensaje' => "No se ha procesado su pago"
            ];
    
        $method = $request->method();  //obtener metodo de envío        		
	
        $token_val = '$2y$10$Utd1FXqY2qaSUz0KGBFxdeyxHumUJSex79ERhgqXWo.PGy995un4S';  //token para validar la recepción fijo
        
        if ($request->isMethod('post')) {  //si es metodo post
            if ($request->has('tokens')) { // si viene el campo tokens
                $tokens = $request->tokens; //recibe el parametro
                if($token_val == $tokens) 
				{ //compara los tokens
 
                    //otros datos de recepcion
                    $importe   = $request->importe;
                    $id_origen = $request->id_origen;
                    $numorden  = $request->numorden;
                    
                    
                   //ejecutar los procesos
					$validapago = Inscripcion::find($id_origen);
										
					
						if($validapago)
						{
							$array = explode(",", $validapago);
																					
							foreach($array as $buscarInscripcion){								
								$inscripcion = Inscripcion::find($id_origen);								
								$inscripcion->estado = 'inscrito';
								$inscripcion->save();								
							}
							
							try{
								$correo = Inscripcion::where('id', $inscripcion->id)->first();
								
								Mail::send('mail', ['datos' => $correo], function($mensaje) use ($correo) 
								{
									$mensaje->subject('Inscripción a la copa Centenario'.$correo->equipo);
									$mensaje->from('webmaster@upeu.edu.pe', 'UPeU | Viviendo el centenario');
									$mensaje->to($correo->correo);
									$mensaje->replyto('webmaster@upeu.edu.pe');
								});
								
								$rpta =['nerror' => 0,
										'mensaje' => "Se ha procesado correctamente con el Pago"
                   					];
							}catch(\Exception $e){ 
								$rpta =['nerror' => 1,
										'mensaje' => "Error try chash pago"
                   					];
								//return redirect()->route('home'); 
							}
						}
                                      
                }else{
                    $rpta =['nerror' => 1,
                    'mensaje' => "No se ha procesado su pago"
                   ];
                }
            }
        }   
 
        return  json_encode($rpta); 
    }
	
}

?>
