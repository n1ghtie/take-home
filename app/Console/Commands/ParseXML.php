<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\UserDetails;
use App\VehicleDetails;

class ParseXML extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:xml {filename=sample.xml}';
    protected $xmlFile;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parses XML file stored in storage/app/filename.xml, please provide a filename, if left empty will use sample.xml';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Parse valid XML file.
     *
     * @return Object
     */
    private function getXMLfile($filename)
    {
        return simplexml_load_file(storage_path('app/' . $filename));
    }

    private function isTrueOrFalse($value)
    {
        // needs rework...
        return $value == '0' || $value == 0 || strtoupper($value) == 'FALSE' || $value == '' ? false : true;
    }

    private function parseXMLfile()
    {
        $vehicles = $this->xmlFile->children();

        for($i = 0; $i < count($vehicles); $i++)
        {
            $vehicle = $vehicles[$i];

            $userDetails = UserDetails::firstOrCreate([
                'full_name' => $vehicle->owner_name,
                'company' => $vehicle->owner_company,
                'profession' => $vehicle->owner_profession
            ]);

            $vehicleDetails = new VehicleDetails([
                'licence_plate' => $vehicle->licence_plate,
                'userdetails_id' => $userDetails->id,
                'make' => $vehicle->attributes()->manufacturer,
                'model' => $vehicle->attributes()->model,
                'color' => $vehicle->color,
                'engine_cc' => $vehicle->engine_cc,
                'no_wheels' => $vehicle->no_wheels,
                'no_doors' => $vehicle->no_doors,
                'no_seats' => $vehicle->no_seats,
                'weight_category' => $vehicle->weight_category,
                'has_gps' => $this->isTrueOrFalse($vehicle->has_gps),
                'has_sunroof' => $this->isTrueOrFalse($vehicle->has_sunroof),
                'is_hgv' => $this->isTrueOrFalse($vehicle->is_hgv),
                'has_trailer' => $this->isTrueOrFalse($vehicle->has_trailer),
                'has_boot' => $this->isTrueOrFalse($vehicle->has_boot),
                'fuel_type' => $vehicle->fuel_type,
                'transmission' => $vehicle->transmission,
                'type' => $vehicle->type,
            ]);

            $userDetails->vehicle()->save($vehicleDetails);
        }
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $filename = $this->argument('filename');
        $this->xmlFile = $this->getXMLfile($filename);
        $this->parseXMLfile();

        echo 'file parsed.' . PHP_EOL;
    }
}
