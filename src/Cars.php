<?php


require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function setParkBrake($hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(bool $isBrakeOn)
    {
        $this->setParkBrake($isBrakeOn);
        if ($this->hasParkBrake === false) {
            return $this->forward();
        } else {
            throw new Exception('Your brake is on.');
        }
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
