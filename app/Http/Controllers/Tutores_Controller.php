<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tutor;
use App\Datos_Personales;
use App\Datos_Padres;
use App\Pareja_Tutor;

use App\Traits\Datos_Personales_Traits;
use App\Traits\Tutores_Traits;
use App\Traits\Datos_Padres_Traits;
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
    use Datos_Padres_Traits;
    use Pareja_Tutor_Traits;

    public function index()
    {
        $tutores = Tutor::join('datos_personales AS dp', 'dp.id_dp', '=', 'tutores.id_t')
            ->select(
                'dp.nombre',
                'dp.apellido',
                'dp.id_dp AS documento',
                'dp.tipo_documento',
                'tutores.relacion_parentesco',
                'tutores.telefono_laboral',
                'dp.telefono_fijo',
                'dp.telefono_movil'
            )
            ->get();
        return view('paginas.tutores.index', [
            'tutores' => $tutores
        ]);
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
            'datos_padres' => new Datos_Padres,
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
        $datos_personales = $this->datos_personales_save($request, new Datos_Personales);
        $tutores = $this->tutores_save($request, new Tutor);

        $datos_personales->save();
        $tutores->save();
        // si es un padre o una madre se guarda los datos_padres
        if ($tutores->tipo_tutor == 'P' || $tutores->tipo_tutor == 'M') {
            $datos_padres = $this->datos_padres_save($request, new Datos_Padres);
            $datos_padres->save();
        }
        // si tiene una pareja se guarda los datos de pareja_tutor
        if ($tutores->tiene_pareja) {
            $pareja_tutor = $this->pareja_tutor_save($request, new Pareja_Tutor);
            $pareja_tutor->save();
        }

        return Tutores_Controller::index();
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

        if ($datos_tutores->tipo_tutor == 'P' || $datos_tutores->tipo_tutor == 'M') {
            $datos_padres = Datos_Padres::find($id);
        }
        else{
            $datos_padres = new Datos_Padres;
        }

        if ($datos_tutores->tiene_pareja) {
            $datos_pareja = Pareja_Tutor::find($id);
        }
        else{
            $datos_pareja = new Pareja_Tutor;
        }
        
        $tutores = [
            'datos_tutores' => $datos_tutores,
            'datos_personales' => Datos_Personales::find($id),
            'datos_padres' => $datos_padres,
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
        $datos_personales = $this->datos_personales_save($request, Datos_Personales::find($id));
        $tutores = $this->tutores_save($request, Tutor::find($id));

        // si es un padre o una madre se guarda los datos_padres
        if ($tutores->tipo_tutor == 'P' || $tutores->tipo_tutor == 'M') {
            $datos_padres = $this->datos_padres_save($request, Datos_Padres::find($id));
            $datos_padres->save();
        }
        // si tiene una pareja se guarda los datos de pareja_tutor
        if ($tutores->tiene_pareja) {
            $pareja_tutor = $this->pareja_tutor_save($request, Pareja_Tutor::find($id));
            $pareja_tutor->save();
        }

        $datos_personales->save();
        $tutores->save();
        $pareja_tutor->save();
        $datos_padres->save();

        return Tutores_Controller::index();
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
        if ($tutores->tipo_tutor == 'P' || $tutores->tipo_tutor == 'M') {
            $datos_padres = Datos_Padres::find($id);
            $datos_padres->delete();
        }

        $tutores->delete();
        $datos_personales->delete();
        
        return Tutores_Controller::index();
    }
}
