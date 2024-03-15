<?php

namespace App\Http\Controllers;

use App\Models\Inscrito;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;

class InscritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $inscritos = Inscrito::where('estado_inscripcion', 1)->get();
        return view('inscritos.index', ['inscritos' => $inscritos]);
    }

    public function show($id)
    {
        $inscrito = Inscrito::findOrFail($id);

        return view('inscritos.detail', compact('inscrito'));
    }

    public function desinscribir(Request $request, Inscrito $preinscrito)
    {
        // Invierte el valor del campo 'estado_inscripcion'
        $preinscrito->update([
            'estado_inscripcion' => 0,
        ]);
        $inscritos = Inscrito::where('estado_inscripcion', 1)->get();
        return view('inscritos.index')->with('success', '¡Usuario desinscrito correctamente!')->with('inscritos', $inscritos);
    }


    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $response)
    // {

    //     return $response;
    //     $image = $response->file('file');
    //     $imageName = time().'.'.$image->extension();
    //     $image->move(public_path('uploads/soportes'), $imageName);
    //     return response()->json(['success'=>$imageName]);
    // }


    public function store(Request $request)
    {
        try {
            // Validar los datos de la solicitud
            $request->validate([
                // Aquí puedes definir las reglas de validación para cada campo si es necesario
            ]);

            // Crear una nueva instancia del modelo Inscrito
            $inscrito = new Inscrito();

            // Asignar los valores recibidos de la solicitud a los campos del modelo
            $inscrito->tipo_identificacion = $request->tipo_identificacion;
            $inscrito->numero_identificacion = $request->numero_identificacion;
            $inscrito->nombre_completo = $request->nombre_completo;
            $inscrito->fecha_nacimiento = $request->fecha_nacimiento;
            $inscrito->edad = $request->edad;
            $inscrito->genero = $request->genero;
            $inscrito->correo_electronico = $request->correo_electronico;
            $inscrito->numero_celular = $request->numero_celular;
            $inscrito->contacto_emergencia = $request->contacto_emergencia;
            $inscrito->telefono_contacto_emergencia = $request->numero_contacto_emergencia;
            $inscrito->eps = $request->eps;
            $inscrito->tipo_cicla = $request->tipo_cicla;
            $inscrito->usuario_instagram = $request->usuario_instagram;
            $inscrito->perfil_strava = $request->perfil_strava;
            $inscrito->distancia_recorrida = $request->distancia_recorrida;
            $inscrito->soporte_pago = $request->soporte_pago;
            $inscrito->medio_pago = $request->medio_pago;

            // Verificar si el campo talla_hombre o talla_mujer tiene un valor y asignarlo
            if ($request->genero == 'Masculino') {
                $inscrito->talla_hombre = $request->talla_hombre;
            } elseif ($request->genero == 'Femenino') {
                $inscrito->talla_mujer = $request->talla_mujer;
            }

            // Manejar la exoneración
            $inscrito->exoneracion = $request->has('check_exho');

            // Guardar el modelo en la base de datos
            $inscrito->save();

            // Manejar la imagen de soporte si se proporciona
            if ($request->hasFile('soporte_pago')) {
                $image = $request->file('soporte_pago');
                $destino = 'uploads/soportes/';
                $imageName = time() . '.' . $image->extension();
                $image->move($destino, $imageName);
                // Actualizar el campo soporte_pago con el nombre de la imagen guardada
                $inscrito->soporte_pago = $imageName;
                $inscrito->save();
            }
            $count = Inscrito::count();

            // Retornar una respuesta indicando que los datos se han guardado correctamente
            return view('imbatible')->with('success', 'Registro completo. Estarás recibiendo un correo electrónico.')->with(['count' => $count]);
        } catch (QueryException $e) {
            // Capturar la excepción de violación de clave única
            if ($e->errorInfo[1] == 1062) {
                // Redirigir al usuario a la ruta / en caso de excepción
                return Redirect::to('/');
            } else {
                // Si la excepción no es por una clave duplicada, puedes manejarla de otra manera o simplemente dejar que Laravel la maneje por defecto
                throw $e;
            }
        }
    }

    public function countAndShowInscritos()
    {
        // Obtener el conteo de registros de la tabla "inscritos"
        $count = Inscrito::count();

        // Pasar el conteo de registros a la vista
        return view('imbatible', ['count' => $count]);
    }


    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscrito $inscrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscrito $inscrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscrito $inscrito)
    {
        //
    }
}