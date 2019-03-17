<?php

namespace App\Http\Controllers;

use App\Inscripcion;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;


class InscripcionController extends Controller
{

    public function registrarse(Request $request)
    {
        $disci = [];
        $cantidades = $request['cantidad'];
        $cantidad = 0;
        for ($i = 0; $i < count($cantidades); $i++) {
            if ($cantidades[$i] != "0") {
                array_push($disci, $cantidades[$i]);
                $cantidad += $cantidades[$i];
            }
        }

        $disciplinas = $request['disciplina'];

        $arrayres = array_merge($disciplinas, $disci);

        //Obteniendo el archivo
        $file = $request->file('file');
        $nombre = $file->getClientOriginalName();
        $prefijoArchivo = explode(".", $nombre, 2)[0];
        $extensionArchivo = explode(".", $nombre, 2)[1];
        $nombreArchivo = $prefijoArchivo . $request['dni'] . "." . $extensionArchivo;

        //Guardar Archivo
        //Ver config/filesystems.php para configuración
        //de la dirección donde se guarda el documento
        \Storage::disk('local')->put($nombreArchivo, \File::get($file));

        $inscripcion = new Inscripcion($request->all());

        $inscripcion->archivo = $nombreArchivo;

        //Conviertiendo el array de disciplinas a a string
        $inscripcion->disciplina = implode(", ", $arrayres);

        //Conviertiendo costo

        $costo = explode(" ", $request['costo'], 2)[1];

        $inscripcion->costo = $costo;
        $inscripcion->cantidad = $cantidad;
        $inscripcion->iglesia = "hoa";
        $inscripcion->estado = "sasd";
        $inscripcion->save();

        $lastInscripcion = $inscripcion->find($inscripcion->id);

        return view('pago')->with('pago', $lastInscripcion);
    }

    public function eliminarInscripcion($id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->delete();
        return redirect('reporte');
    }

    public function inscripciones(Request $request)
    {                   
        if ($request->user == "reporte" && $request->pass == "reporte") {
            $inscripciones = Inscripcion::all();
            return view('reporte')->with('inscripciones', $inscripciones);    
        }else {
            return redirect('https://www.upeu.edu.pe');
        }
        
    }

    //PRUEBA DE SERVICIOS
    public function prueba()
    {
        $opts = [
            "http" => [
                "headers" => "Authorization: qgrooepiodbongkp0vt8aopj2e24"
            ]
        ];

        $context = stream_context_create($opts);

        $json = json_decode(file_get_contents("https://api-lamb.upeu.edu.pe/cw/datos-egresados?dni=46038794", true, $context));

        return $json;
    }
    //FIN PRUEBA DE SERVICIOS

    public function downloadFile($file)
    {
        $pathtoFile = 'https://juntos.upeu.edu.pe/copa/storage/app/' . $file;
        return response()->download($pathtoFile);
    }
    //Subir el archivo excel de formato de jugadores a copa/public/recursos/
    //Cambiar el archivo ECO-1927.pdf por el archivo excel del formato de jugadores
    public function descargarFormato()
    {
        $pathtoFile = 'https://juntos.upeu.edu.pe/copa/public/recursos/formato-inscrpciones.xlsx';
        return response()->download($pathtoFile);
    }

    //Subir el archivo pdf de reglamento a copa/public/recursos/
    //Cambiar el archivo ECO-1927.pdf por el archivo pdf del reglamento
    public function descargarReglamento()
    {
        $pathtoFile = 'https://juntos.upeu.edu.pe/copa/public/recursos/Reglamento.pdf';
        return response()->download($pathtoFile);
    }

    public function login(Request $request)
    {
        return view('login');
    }
}

