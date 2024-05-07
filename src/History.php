<?php
namespace avorreiter\weather;


class History
{
    private array $verlauf = [];

    public function getVerlauf(): array
    {
        return $this->verlauf;
    }

    /**
     * @param Day $tag
     * @return void
     * lässt dich einen Tag zum Verlauf hinzufügen
     */
    public function addToVerlauf(Day $tag): void
    {
        array_push($this->verlauf,$tag);
    }

    public function __construct(Day $tag)
    {
        array_push($this->verlauf,$tag);

    }
    public function getDay($date):string{
        foreach($this->verlauf as $item){
            if($item->getTag() === $date){
                return $item->getWeather();
            }
        }
        return "";
    }

}