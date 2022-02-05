<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materia;
use App\Models\CarreraMateria;

class MateriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            'sigla'=> 'INF110',
            'nombre'=> 'Introducción a la Informática',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF119',
            'nombre'=> 'Estructuras Discretas',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'FIS100',
            'nombre'=> 'Física 1',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT110',
            'nombre'=> 'Cálculo 1',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'LIN100',
            'nombre'=> 'Inglés Técnico I',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'FIS102',
            'nombre'=> 'Física II',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF120',
            'nombre'=> 'Programación I',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'LIN101',
            'nombre'=> 'Inglés Técnico II',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT102',
            'nombre'=> 'Cálculo II',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT103',
            'nombre'=> 'Álgebra Lineal',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'ADM100',
            'nombre'=> 'Administración',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'FIS200',
            'nombre'=> 'Física III',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF210',
            'nombre'=> 'Programación II',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF211',
            'nombre'=> 'Arquitectura de Computadoras',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT207',
            'nombre'=> 'Ecuaciones Diferenciales',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'RDS210',
            'nombre'=> 'Análisis de Circuitos',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELT241',
            'nombre'=> 'Teoría de Campos',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ADM200',
            'nombre'=> 'Contabilidad',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF220',
            'nombre'=> 'Estructura de Datos I',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF221',
            'nombre'=> 'Programación Ensamblador',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT202',
            'nombre'=> 'Probabilidades y Estadísticas I',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT205',
            'nombre'=> 'Métodos Numéricos',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'RDS220',
            'nombre'=> 'Análisis de Circuitos Electrónicos',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ADM330',
            'nombre'=> 'Organización y Métodos',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ECO300',
            'nombre'=> 'Economía para la Gestión',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'INF310',
            'nombre'=> 'Estructura de Datos II',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF312',
            'nombre'=> 'Bases de Datos I',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT302',
            'nombre'=> 'Probabilidades y Estadísticas II',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF318',
            'nombre'=> 'Programación Lógica y Funcional',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'INF319',
            'nombre'=> 'Lenguajes Formales',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ADM320',
            'nombre'=> 'Finanzas para la Empresa',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'INF322',
            'nombre'=> 'Bases de Datos II',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF323',
            'nombre'=> 'Sistemas Operativos I',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF342',
            'nombre'=> 'Sistemas de Información I ',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'MAT329',
            'nombre'=> 'Investigación Operativa I',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF329',
            'nombre'=> 'Compiladores',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELT362',
            'nombre'=> 'Sistemas Lógicos y Digitales II',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'RDS320',
            'nombre'=> 'Interpretación de Sistemas y Señales',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'INF412',
            'nombre'=> 'Sistemas de Información II',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF413',
            'nombre'=> 'Sistemas Operativos II',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF432',
            'nombre'=> 'Sistemas para el Soporte a la Toma de Decisiones',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'INF433',
            'nombre'=> 'Redes I',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT419',
            'nombre'=> 'Investigación Operativa II',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF418',
            'nombre'=> 'Inteligencia Artificial',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELT374',
            'nombre'=> 'Sistemas de Comunicación I',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'RDS410',
            'nombre'=> 'Aplicaciones con Microprocesadores',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ECO449',
            'nombre'=> 'Preparación y Evaluación de Proyectos',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF422',
            'nombre'=> 'Ingeniería de Software I ',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF423',
            'nombre'=> 'Redes II',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF442',
            'nombre'=> 'Sistemas de Información Geográfica',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF462',
            'nombre'=> 'Auditoría Informática',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELT384',
            'nombre'=> 'Sistemas de Comunicación II',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'RDS421',
            'nombre'=> 'Taller de Análisis y Diseño de Redes',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'RDS429',
            'nombre'=> 'Legislación en Redes y Comunicaciones',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'INF428',
            'nombre'=> 'Sistemas Expertos',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'INF511',
            'nombre'=> 'Taller de Grado I',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF512',
            'nombre'=> 'Ingeniería de Software II',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF513',
            'nombre'=> 'Tecnología Web',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF552',
            'nombre'=> 'Arquitectura del Software',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'RDS511',
            'nombre'=> 'Gestión y Administración de Redes',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'RDS512',
            'nombre'=> 'Redes Inalámbricas y Comunicaciones Móviles',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'RDS519',
            'nombre'=> 'Seguridad en Redes y Transmisión de Datos',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC001',
            'nombre'=> 'Administración de Recursos Humanos',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC002',
            'nombre'=> 'Costos y Presupuestos',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC003',
            'nombre'=> 'Producción y Marketing',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC004',
            'nombre'=> 'Reingeniería',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC005',
            'nombre'=> 'Ingeniería de la Calidad',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC006',
            'nombre'=> 'Benchmarking',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC007',
            'nombre'=> 'Introducción a la Macroeconomía',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC008',
            'nombre'=> 'Legislación en Ciencias de la Computación',
            'inscritos'=> 0,
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC201',
            'nombre'=> 'Diseño de Circuitos Integrados',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC202',
            'nombre'=> 'Instrumentación',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC203',
            'nombre'=> 'Sistemas de Comunicación Scada',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC204',
            'nombre'=> 'Televisión Digital ',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC205',
            'nombre'=> 'Domótica',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC206',
            'nombre'=> 'Líneas de Transmisión y Antenas',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC207',
            'nombre'=> 'Técnicas de Presentación para Ingeniería ',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC208',
            'nombre'=> 'Redes Ad Hoc ',
            'inscritos'=> 0,
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC101',
            'nombre'=> 'Modelación y Simulación de Sistemas',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC102',
            'nombre'=> 'Programación Gráfica',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC103',
            'nombre'=> 'Tópicos Avanzados de Programación ',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC104',
            'nombre'=> 'Programación de Aplicaciones de Tiempo Real',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC105',
            'nombre'=> 'Sistemas Distribuidos',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC106',
            'nombre'=> 'Interacción Hombre-Computador',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC107',
            'nombre'=> 'Criptografía y Seguridad',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC108',
            'nombre'=> 'Control y Automatización',
            'inscritos'=> 0,
        ])->carreras()->attach([2]);

    }
}
