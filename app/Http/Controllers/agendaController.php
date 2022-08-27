<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class agendaController extends Controller
{
    public function index()
    {
        return view('agenda.index');
    }

    public function create()
    {
        return view('agenda.create');
    }

    public function show($agenda)
    {
        return view('agenda.show', ['agenda' => $agenda]);
    }
}
class ClassAgenda
{
    private $identificadorCita;
    private $nombreAlumno;
    private $idProfesor;
    private $idDia;
    private $hora;
    private $asunto;

    public function __construct()
    {
        $this->identificadorCita = 0;
        $this->nombreAlumno = "";
        $this->idProfesor = 0;
        $this->idDia = 0;
        $this->hora = 0;
        $this->asunto = "";
    }

    public function __get($property)
    {
        if (property_exists($this, $property))
        {
            return $this->$property;
        }
    }
    public function __set($property, $value)
    {
        if (property_exists($this, $property))
        {
            $this->$property = $value;
        }
        return $this;
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreAlumno' => 'required',
            'idProfesor' => 'required|integer',
            'idDia' => 'required|integer',
            'hora' => 'required|integer',
            'asunto' => 'required' ]);
            //se continua con las validaciones

            $agenda = new ClassAgenda();
            $agenda->identificadorCita = 1;
            // Este número debe venir de un dato de base de datos (autonumerico o identidad)
            $agenda->nombreAlumno = $request->get('nombreAlumno');
            $agenda->idProfesor = $request->get('idProfesor');
            $agenda->idDia = $request->get('idDia');
            $agenda->hora = $request->get('hora');
            $agenda->asunto = $request->get('asunto');
            // salvamos información en base de datos o repositorio
            return view('agenda.show', ['agenda' => $agenda]);
            return view('agenda.index', compact('agenda'));
        }

    }
