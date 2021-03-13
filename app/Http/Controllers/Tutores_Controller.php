<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tutor;
use App\Datos_Personales;
use App\Pareja_Tutor;

use App\Traits\Datos_Personales_Traits;
use App\Traits\Tutores_Traits;
use App\Traits\Pareja_Tutor_Traits;

class Tutores_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    use Datos_Personales_Traits;
    use Tutores_Traits;
    use Pareja_Tutor_Traits;

    public function index()
    {
        return view('paginas.tutores.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tutores = [
            'datos_tutores' => new Tutor,
            'datos_personales' => new Datos_Personales,
            'datos_pareja' => new Pareja_Tutor
        ];
        return view('paginas.tutores.create', [
            'tutores' => $tutores
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validacion_request_datos_personales($request->documento);
        $this->validacion_request_tutores();

        $datos_personales = $this->datos_personales_save($request, new Datos_Personales);
        $tutores = $this->tutores_save($request, new Tutor);
        try {
            $datos_personales->save();
            $tutores->save();
            // si tiene una pareja se guarda los datos de pareja_tutor
            if ($tutores->tiene_pareja) {
                $this->validacion_request_pareja_tutor();
                $pareja_tutor = $this->pareja_tutor_save($request, new Pareja_Tutor);
                $pareja_tutor->save();
            }
        } catch (\Exception $e) {
            return back()
                ->with( 'status',['message' => 'error:'.$e->getMessage(), 'tipo' => 'error'])
                ->withInput();
        }

        return redirect()
            ->route('tutores.index')
            ->with( 'status',['message' =>'exito: se guardo', 'tipo' => 'exito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('paginas.tutores.show', [
            'datos_personales' => Datos_Personales::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos_tutores = Tutor::find($id);

        if ($datos_tutores->tiene_pareja) {
            $datos_pareja = Pareja_Tutor::find($id);
        }
        else{
            $datos_pareja = new Pareja_Tutor;
        }
        
        $tutores = [
            'datos_tutores' => $datos_tutores,
            'datos_personales' => Datos_Personales::find($id),
            'datos_pareja' => $datos_pareja
        ];
        return view('paginas.tutores.edit', [
            'tutores' => $tutores
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validacion_request_datos_personales($id);
        $this->validacion_request_tutores();

        $datos_personales = $this->datos_personales_save($request, Datos_Personales::find($id));
        $tutores = $this->tutores_save($request, Tutor::find($id));
        try {
            $datos_personales->save();
            $tutores->save();
            // si tiene una pareja se guarda los datos de pareja_tutor
            // si quito la pareja que tenia se elimina de la BD
            if ($tutores->tiene_pareja) {
                $this->validacion_request_pareja_tutor();
                $pareja_tutor = $this->pareja_tutor_save($request, Pareja_Tutor::find($id));
                $pareja_tutor->save();
            }
            else{
                $this->pareja_tutor_delete(Pareja_Tutor::find($id));
            }
        } catch (\Exception $e) {
            return back()
                ->with( 'status',['message' => 'error:'.$e->getMessage(), 'tipo' => 'error'])
                ->withInput();
        }

        return redirect()
            ->route('tutores.index')
            ->with( 'status',['message' =>'exito: se actualizo', 'tipo' => 'exito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos_personales = Datos_Personales::find($id);
        $tutores = Tutor::find($id);

        if ($tutores->tiene_pareja) {
            $pareja_tutor = Pareja_Tutor::find($id);
            $pareja_tutor->delete();
        }

        try {
            $tutores->delete();
            $datos_personales->delete();
        } catch (\Exception $e) {
            return back()
                ->with( 'status',['message' => 'error:'.$e->getMessage(), 'tipo' => 'error'])
                ->withInput();
        }
        
        return redirect()->route('tutores.index')
            ->with( 'status',['message' =>'exito: se elimino', 'tipo' => 'exito']);
    }
}
