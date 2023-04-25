<?php

class Character
{
    // Constants definition
    // --

    /**
     *  Novice Level
     * 
     * @var int
     */
    const NOVICE = 1;

    /**
     *  Medium Level
     * 
     * @var int
     */
    const MEDIUM = 2;

    /**
     *  Expert Level
     * 
     * @var int
     */
    const EXPERT = 3;

    // Properties definition
    // --

    /**
     * The name of the character
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * Health point
     *
     * @var int
     * @default 100
     */
    private int $healthPoint = 100;
    
    /**
     * Character experience
     *
     * @var int
     * @default 0
     */
    private int $experience = self::NOVICE;

    // Methods definition
    // --

    public function __construct(string $name, int $experience = self::NOVICE)
    {
        $this->name = $name;
        $this->experience = $experience;
    }

    /**
     * The character greets his opponent
     *
     * @param Character $opponent
     * @return string
     */
    public function greet(Character $opponent): string
    {
        return "{$this->name} salue {$opponent->getName()}";
    }

    /**
     * The character makes an attack against his opponent
     * $coef parameters will be override by the SuperAttack method
     *
     * @param Character $opponent
     * @param integer $coef
     * @return self
     */
    public function attack(Character $opponent, int $coef=1): self
    {
        switch ($this->experience) {
            case self::NOVICE:
                $opponent->setHealthPoint($opponent->getHealthPoint() - (10 * $coef));
                break;
            case self::MEDIUM:
                $opponent->setHealthPoint($opponent->getHealthPoint() - (20 * $coef));
                break;
            case self::EXPERT:
                $opponent->setHealthPoint($opponent->getHealthPoint() - (30 * $coef));
                break;
        }
        return $this;
    }

    /**
     * The character makes an Super Attack against his opponent
     * A Super Attack is the same of a double attack
     *
     * @param Character $opponent
     * @return self
     */
    public function superAttack(Character $opponent): self
    {
        $this->attack($opponent, 2);
        return $this;
    }
    
    /**
     * The character makes an Secret Attack against his opponent
     * A Secret Attack doesn't affect his opponent if he has more than 50 health points
     * A Secret Attack removes all remaining health points if it takes effect
     *
     * @param Character $opponent
     * @return self
     */
    public function secretAttack(Character $opponent): self
    {
        if($opponent->getHealthPoint() < 50)
        {
            $opponent->setHealthPoint(0);
        }
        return $this;
    }

    /**
     * Heals the character by giving him 10 health points
     *
     * @return self
     */
    public function heal(): self
    {
        $this->healthPoint += 10;
        return $this;
    }

    /**
     * Increase character level
     *
     * @return self
     */
    public function levelUp(): self
    {
        switch($this->experience)
        {
            case self::NOVICE:
                $this->experience = self::MEDIUM;
            case self::MEDIUM:
                $this->experience = self::EXPERT;
        }
        return $this;
    }

    /**
     * Get the name of the character
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the name of the character
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the health point of the character
     *
     * @return integer
     */
    public function getHealthPoint(): int
    {
        return $this->healthPoint;
    }

    // Set the health point of the character
    public function setHealthPoint(string $healthPoint): self
    {
        $this->healthPoint = $healthPoint;

        return $this;
    }

    /**
     * Get the experience of the character
     *
     * @return integer
     */
    public function getExperience(): int
    {
        return $this->experience;
    }

    /**
     * Set the experience of the character
     *
     * @param string $experience
     * @return self
     */
    public function setExperience(string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }
}
